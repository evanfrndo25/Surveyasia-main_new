<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\UsersSubscriptions;
use App\Models\CategorySubcriptions;
use Illuminate\Support\Facades\Auth;

class SubcriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcriptions = Subscription::get();

        $categorySubscription = CategorySubcriptions::get();

        if (Auth::check()) {
            $userSubscription = UsersSubscriptions::where('user_id', Auth::user()->id)->value('category_id');

            $data = [
                'subcriptions' => $subcriptions,
                'categorySubscription' => $categorySubscription,
                'userSubscription' => $userSubscription,
            ];
        } else {
            $data = [
                'subcriptions' => $subcriptions,
                'categorySubscription' => $categorySubscription,
            ];
        }

        return view('pricing', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscription = CategorySubcriptions::with('subscription')->where('id', $id)->first();
        $categorySubscription = CategorySubcriptions::find($id);
        return view('researcher.payment', compact('id', 'subscription', 'categorySubscription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
