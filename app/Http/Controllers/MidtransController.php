<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Midtrans\Config;
use Midtrans\Notification;
use App\Models\Transaction;
use App\Models\CategorySubcriptions;

class MidtransController extends Controller
{
    public function notificationHandler()
    {
        // set midtrans configuration
        Config::$isProduction = config('midtrans.isProduction');
        Config::$serverKey = config('midtrans.serverKey');

        // instance notification midtrans
        $notification = new Notification();

        $order = explode('-', $notification->order_id);
        $status = $notification->transaction_status;
        $type   = $notification->payment_type;
        $order_id = $order[2];
        $fraud  = $notification->fraud_status;

        // find Transaction by $order_id
        $transaction = Transaction::with('sub')->findorfail($order_id);
        $userSub = $transaction->sub->where('id', $transaction->user_subscription_id)->first();

        // get time now
        $carbon = Carbon::now();

        // handle notification status
        if ($status == 'capture') {
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $transaction->payment_status = 4;
                    echo "Transaction order_id: " . $notification->order_id . " is challenged by FDS";
                } else {
                    $transaction->payment_status = 2;
                    if ($transaction->title == 'Make Your Own') {
                        $userSub->update([
                            'subscription_id' => 2,
                            'category_id' => 2,
                            'expired_at' => $carbon->addMonth(),
                        ]);
                    } elseif ($transaction->title == 'Contact Us') {
                        $userSub->update([
                            'subscription_id' => 2,
                            'category_id' => 3,
                            'expired_at' => $carbon->addMonth(),
                        ]);
                    } elseif ($transaction->title == 'Basic') {
                        $userSub->update([
                            'subscription_id' => 3,
                            'category_id' => 4,
                            'expired_at' => $carbon->addMonth(),
                        ]);
                    } elseif ($transaction->title == 'Essential Annual') {
                        $userSub->update([
                            'subscription_id' => 3,
                            'category_id' => 5,
                            'expired_at' => $carbon->addMonth(),
                        ]);
                    } elseif ($transaction->title == 'Plus Annual') {
                        $userSub->update([
                            'subscription_id' => 3,
                            'category_id' => 6,
                            'expired_at' => $carbon->addMonth(),
                        ]);
                    } elseif ($transaction->title == 'Essential Annual Yearly') {
                        $userSub->update([
                            'subscription_id' => 3,
                            'category_id' => 7,
                            'expired_at' => $carbon->addYear(),
                        ]);
                    } elseif ($transaction->title == 'Plus Annual Yearly') {
                        $userSub->update([
                            'subscription_id' => 3,
                            'category_id' => 8,
                            'expired_at' => $carbon->addYear(),
                        ]);
                    } elseif ($transaction->title == 'Advantage') {
                        $userSub->update([
                            'subscription_id' => 4,
                            'category_id' => 9,
                            'expired_at' => $carbon->addYear(),
                        ]);
                    } elseif ($transaction->title == 'Enterprise') {
                        $userSub->update([
                            'subscription_id' => 4,
                            'category_id' => 10,
                            'expired_at' => $carbon->addYear(),
                        ]);
                    } elseif ($transaction->title == 'Corporate') {
                        $userSub->update([
                            'subscription_id' => 4,
                            'category_id' => 11,
                            'expired_at' => $carbon->addYear(),
                        ]);
                    }
                    echo "Transaction order_id: " . $notification->order_id . " successfully captured using " . $type;
                }
            }
        } elseif ($status == 'settlement') {
            $transaction->payment_status = 2;
            if ($transaction->title == 'Make Your Own') {
                $userSub->update([
                    'subscription_id' => 2,
                    'category_id' => 2,
                    'expired_at' => $carbon->addMonth(),
                ]);
            } elseif ($transaction->title == 'Contact Us') {
                $userSub->update([
                    'subscription_id' => 2,
                    'category_id' => 3,
                    'expired_at' => $carbon->addMonth(),
                ]);
            } elseif ($transaction->title == 'Basic') {
                $userSub->update([
                    'subscription_id' => 3,
                    'category_id' => 4,
                    'expired_at' => $carbon->addMonth(),
                ]);
            } elseif ($transaction->title == 'Essential Annual') {
                $userSub->update([
                    'subscription_id' => 3,
                    'category_id' => 5,
                    'expired_at' => $carbon->addMonth(),
                ]);
            } elseif ($transaction->title == 'Plus Annual') {
                $userSub->update([
                    'subscription_id' => 3,
                    'category_id' => 6,
                    'expired_at' => $carbon->addMonth(),
                ]);
            } elseif ($transaction->title == 'Essential Annual Yearly') {
                $userSub->update([
                    'subscription_id' => 3,
                    'category_id' => 7,
                    'expired_at' => $carbon->addYear(),
                ]);
            } elseif ($transaction->title == 'Plus Annual Yearly') {
                $userSub->update([
                    'subscription_id' => 3,
                    'category_id' => 8,
                    'expired_at' => $carbon->addYear(),
                ]);
            } elseif ($transaction->title == 'Advantage') {
                $userSub->update([
                    'subscription_id' => 4,
                    'category_id' => 9,
                    'expired_at' => $carbon->addYear(),
                ]);
            } elseif ($transaction->title == 'Enterprise') {
                $userSub->update([
                    'subscription_id' => 4,
                    'category_id' => 10,
                    'expired_at' => $carbon->addYear(),
                ]);
            } elseif ($transaction->title == 'Corporate') {
                $userSub->update([
                    'subscription_id' => 4,
                    'category_id' => 11,
                    'expired_at' => $carbon->addYear(),
                ]);
            }
            echo "Transaction order_id: " . $notification->order_id . " successfully transfered using " . $type;
        } elseif ($status == 'pending') {
            $transaction->payment_status = 1;
            echo "Waiting customer to finish transaction order_id: " . $notification->order_id . " using " . $type;
        } elseif ($status == 'deny') {
            $transaction->payment_status = 6;
            echo "Payment using " . $type . " for transaction order_id: " . $notification->order_id . " is denied.";
        } elseif ($status == 'expire') {
            $transaction->payment_status = 5;
            echo "Payment using " . $type . " for transaction order_id: " . $notification->order_id . " is expired.";
        } elseif ($status == 'cancel') {
            $transaction->payment_status = 3;
            echo "Payment using " . $type . " for transaction order_id: " . $notification->order_id . " is canceled.";
        }

        // save transaction
        $transaction->save();
    }

    public function finishRedirect()
    {
        return view('researcher.pricings.success');
    }

    public function unfinishRedirect()
    {
        return view('researcher.pricings.unfinish');
    }

    public function errorRedirect()
    {
        return view('researcher.pricings.error');
    }
}
