<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Transaction;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\UsersSubscriptions;
use App\Models\CategorySubcriptions;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Services\Midtrans\CreateSnapTokenService;
use Carbon\Carbon;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $title = "Transaksi";
    public function index()
    {
        $transactions = Transaction::with('sub')->get();
        $subscriptions = Subscription::get();
        $data = [
            'title' => $this->title,
            'transactions' => $transactions,
            'subscriptions' => $subscriptions
        ];
        // dd($data);
        return view('admin.transaction.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $subscription = CategorySubcriptions::with('subscription')->where('id', $request->category_id)->first();
        $categorySubscription = CategorySubcriptions::find('id');
        $userSubsId = UsersSubscriptions::where('user_id', Auth::user()->id)->value('id');
        $quantity = 1;
        $carbon = Carbon::now();
        $tansaction = Transaction::create([
            'user_subscription_id' => $userSubsId,
            'price' => $subscription->price,
            'title' => $subscription->title,
            'quantity' => $quantity,
            'total' => $subscription->price * $quantity,
            'payment_status' => 1,
            'expired_at' => $carbon->addDays(1),
            'created_at' => now(),
        ]);
        $tansaction->save();

        return redirect()->route('researcher.transaction.showTransaction', [$subscription, $categorySubscription]);
    }

    public function checkoutTransaction($id)
    {
        $transaction = Transaction::findorfail($id);
        $snapToken = $transaction->snap_token;
        if (is_null($snapToken)) {
            $midtrans = new CreateSnapTokenService($transaction);

            $snapToken = $midtrans->getSnapToken($id);
            $transaction->snap_token = $snapToken;
            $transaction->save();
        }

        return view('researcher.transaction.checkoutTransaction', compact('transaction', 'snapToken'));
    }


    public function showTransaction()
    {
        $userSubsId = UsersSubscriptions::where('user_id', Auth::user()->id)->value('id');
        $transaction = Transaction::where('user_subscription_id', $userSubsId)->orderBy('created_at', 'desc')->first();
        // dd($transaction);

        return view('researcher.transaction.showTransaction', compact('transaction', 'userSubsId'));
    }

    public function history()
    {
        $userSubsId = UsersSubscriptions::where('user_id', Auth::user()->id)->value('id');
        $transactions = Transaction::where('user_subscription_id', $userSubsId)->orderBy('created_at', 'desc')->get();
        return view('researcher.transaction.transaction-history', compact('transactions', 'userSubsId'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
