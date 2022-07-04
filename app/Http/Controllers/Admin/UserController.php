<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Notifications\Custom;
use App\Jobs\SendCustomEmailJob;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\CategorySubcriptions;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendWelcomeMailToUserJob;
use App\Http\Requests\PersonalDataRequest;
use App\Models\UsersProfile;
use Illuminate\Support\Facades\Gate as Gate;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $title = "Pengguna";
    public function index()
    {
        //
        //abort_if(!$user->can('viewAny', User::class), 403, 'Unauthorized');
        $users = User::with('subscription', 'profile')->latest()->get();
        $subscriptions = Subscription::with('users')->get(); //user subscriptions
        $rolesWithPermissions = Role::with('permissions')->get();
        $rolesWithUsers = Role::with('users')->get();
        $usersWithRole = User::with('role')->get();
        //$usersWithPermissions = User::with('permissions')->get();
        $month = Carbon::now()->format('m');
        // dd(now());
        // Jumlah user di bulan ini
        $users_month = count(User::whereRaw('MONTH(created_at) = ' . $month)->get());
        //Jumlah total user
        $totalUser = User::count();

        // dd($jumlahUserBulanIni);

        //test notifiy all users
        // Notification::send(User::all(), new Custom);
        $data = [
            'title' => $this->title,
            'users' => $users,
            'users_total' => $totalUser,
            'users_month' => $users_month,
            'usersubs' => $subscriptions,
        ];

        // dd($data);

        return view('admin.user.index', $data);
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
        //
        if (!Gate::allows('create', $request->user())) {
            abort(403, 'Unauthorized');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = $request->validate([
            'user_id' => [],
            'nama_lengkap' => ['required', 'regex:/^[a-zA-ZÑñ\s]+$/', 'max:25'],
            'nik' => ['required', 'numeric', 'digits:16'],
            'gender' => ['required'],
            'birth_place' => ['required', 'regex:/^[a-zA-ZÑñ\s]+$/', 'max:50'],
            'birth_date' => ['required', 'date', 'before:-17 years'],
            'ktp_province' => ['required', 'string', 'max:50'],
            'ktp_city' => ['required', 'string', 'max:50'],
            'ktp_postal_code' => ['required', 'numeric', 'digits:5'],
            'ktp_address' => ['required', 'max:255'],
        ]);
        User::where('id', $request->get('id_user'))->update(['nama_lengkap' => $request->get('nama_lengkap')]);
        UsersProfile::where('id', $id)->update($profile);
        // $user = User::with('profile')->findOrFail($id);

        // $user->nama_lengkap = $request->get('nama_lengkap');
        // $user->nik = $request->get('nik');
        // $user->gender = $request->get('gender');
        // $user->birth_date = $request->get('birth_date');
        // $user->birth_place = $request->get('birth_place');
        // $user->ktp_province = $request->get('ktp_province');
        // $user->ktp_city = $request->get('ktp_city');
        // $user->ktp_postal_code = $request->get('ktp_postal_code');
        // $user->ktp_address = $request->get('ktp_address');
        // $user->save($request->all());
        return redirect('admin/users/')->with('status', 'Success edit user!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        //$this->authorize('delete', $user);
        // if (!Gate::allows('delete', $user)) {
        //     abort(403, 'Unauthorized');
        // }
        $user->surveys()->delete();
        $user->transactions()->delete();
        $user->surveyHistories()->delete();

        $user->delete();

        return back()->with('status', 'Deleted user success');
    }

    public function notify(User $user)
    {
        # code...
        // SendCustomEmailJob::dispatch($user);
        // $user->notify(new Custom);
        SendWelcomeMailToUserJob::dispatch($user)->onQueue('emails');
        // Mail::to($user)->send(new WelcomeNewUserMail);
        return redirect('/admin/users')->with('success', 'Notification sent');
    }

    public function profile(User $user)
    {
        # code...
        return view('admin.user.profile', [
            'title' => 'Profile',
            'user' => $user
        ]);
    }

    public function dataVerify()
    {
        //
        //abort_if(!$user->can('viewAny', User::class), 403, 'Unauthorized');
        $users = User::with('subscription')->latest()->paginate(10);
        $subscriptions = Subscription::with('users')->get(); //user subscriptions
        $rolesWithPermissions = Role::with('permissions')->get();
        $rolesWithUsers = Role::with('users')->get();
        $usersWithRole = User::with('role')->get();
        //$usersWithPermissions = User::with('permissions')->get();
        $month = Carbon::now()->format('m');
        // dd(now());
        // Jumlah user di bulan ini
        $users_month = count(User::whereRaw('MONTH(created_at) = ' . $month)->get());
        //Jumlah total user
        $totalUser = User::count();

        // dd($jumlahUserBulanIni);

        //test notifiy all users
        // Notification::send(User::all(), new Custom);
        $data = [
            'title' => 'Data Verification',
            'users' => $users,
            'users_total' => $totalUser,
            'users_month' => $users_month,
            'usersubs' => $subscriptions,
        ];

        // dd($data);
        return view('admin.dataVerify.index', $data);
    }
    public function status($id, $status)
    {
        // $user = $request->validate([
        //     'status' => 'required'
        // ]);
        User::where('id', $id)->update(['status' => $status]);
        // jika user diacc
        if ($status == 2) {
            return back()->with('status', 'Acc user success');
        } else {
            return back()->with('status', 'Reject user success');
        }
    }

    public function accUser($id)
    {
        User::where('id', $id)->update(['status' => 2]);
        return back()->with('status', 'Acc user success');
    }
    // public function rejectUser($id)    
    // {
    //     User::where('id', $id)->update([
    //         'status' => 2,
    //         'desc_reject' =>
    //     ]);
    // }
}
