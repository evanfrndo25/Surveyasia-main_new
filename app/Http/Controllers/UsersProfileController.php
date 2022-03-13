<?php

namespace App\Http\Controllers;

use App\Models\UsersProfile;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\UsersSubscriptions;
use Illuminate\Support\Facades\Validator;
use App\Rules\IsValidPassword;

class UsersProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_user = new User;
        $new_user->nama_lengkap = $request->get('nama_lengkap');
        $new_user->telp = $request->get('telp');
        $new_user->job = $request->get('job');
        $new_user->email = $request->get('email');

        if ($request->file('avatar')) {
            $file = $request->file('avatar')->store('avatars', 'public');
            $new_user->avatar = $file;
        }

        $new_user->save($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersProfile  $usersProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UsersProfile $usersProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersProfile  $usersProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $avatar = auth()->user()->avatar;
        Storage::disk('public')->delete($avatar);

        User::where('avatar', $avatar)->update(['avatar' => (new User)->defaultAvatar]);
        return back()->with(session()->flash('status', 'Avatar Delete Succesfully'));
    }

    /**
     * Untuk menampilkan halaman pengaturan
     *
     * @return void
     */
    public function editProfile()
    {
        $user = User::with('profile')->where('id', Auth::user()->id)->first();

        return view('user.editprofile', compact('user'));
    }

    /**
     * Untuk menyimpan perubahan pengaturan
     *
     * @param Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request, $id)
    {
        validator::make($request->all(), [
            'nama_lengkap' => 'max:255|required',
            'telp' => 'nullable|digits_between:10,13',
            'job' => 'nullable|max:255',
            'address' => 'nullable|max:255',
            'email' => 'max:255|email:dns|required',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:5000'
        ])->validate();
        $user = User::with('profile')->findOrFail($id);

        $user->nama_lengkap = $request->get('nama_lengkap');
        $user->email = $request->get('email');
        $user->avatar = $request->get('avatar');
        $user->telp = $request->get('telp');
        $user->job = $request->get('job');
        $user->address = $request->get('address');

        if ($user->profile) {
            $user->profile->nama_lengkap = $request->get('nama_lengkap');
            $user->profile->telp = $request->get('telp');
            $user->profile->job = $request->get('job');
            $user->profile->address = $request->get('address');

            $user->profile->save($request->all());
        }

        if ($request->file('avatar')) {
            if ($user->avatar && file_exists(storage_path('app/public') . $user->avatar)) {
                Storage::delete('public/' . $user->avatar);
            }
            $file = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $file;
        }

        $user->save($request->all());


        return redirect()->route('user-profile')->with('success', 'Ubah profil berhasil.');
    }

    /**
     * Ubah password pengguna
     *
     * @param Request $request
     * @return void
     */
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => ['required', 'string', new isValidPassword()],
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('edit-profile')
                ->with('error', 'Ubah password gagal, password harus memiliki minimal 1 huruf kapital, 1 angka, dan 1 simbol!');
        }

        $old_password = $request->get('old_password');
        $new_password = $request->get('password');
        $confirmation_password = $request->get('password_confirmation');

        if (Hash::check($old_password, Auth::user()->password)) {
            if ($new_password == $confirmation_password) {
                $user = User::findOrFail(Auth::user()->id);

                $user->password = Hash::make($new_password);
                $user->save();

                return redirect()->route('user-profile')
                    ->with('success', 'Ubah password berhasil.');
            } else {
                return redirect()
                    ->route('edit-profile')
                    ->with('error', 'Ubah password gagal, password baru dan konfirmasi password tidak sama!');
            }
        } else {
            return redirect()->route('user-profile')
                ->with('error', 'Ubah password gagal.');
        }
    }

    // default avatar
    public function defaultAvatar()
    {
        return '/public/assets/img/noimage.png';
    }
}
