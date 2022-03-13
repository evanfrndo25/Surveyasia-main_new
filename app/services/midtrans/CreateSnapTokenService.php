<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;


class CreateSnapTokenService extends Midtrans
{
    protected $transaction;

    public function __construct($transaction)
    {
        parent::__construct();

        $this->transaction = $transaction;
    }

    public function getSnapToken($id)
    {
        $transaction = Transaction::findorfail($id);

        $midtrans = array(
            'transaction_details' => [
                'order_id' => 'order-' . date("YmdHis-") . $transaction->id,
                'gross_amount' => $transaction->total,
            ],
            'item_details' => [
                [
                    'id' => 1,
                    'price' => $transaction->price,
                    'quantity' => $transaction->quantity,
                    'name' => 'Paket ' . $transaction->title,
                ],
            ],
            'customer_details' => [
                'first_name' => Auth::user()->nama_lengkap,
                'email' => Auth::user()->email,
            ],
            'enabled_payments' => [
                "credit_card", "cimb_clicks",
                "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "permata_va",
                "bca_va", "bni_va", "bri_va", "other_va", "gopay", "indomaret",
                "danamon_online", "akulaku", "shopeepay",
            ],
        );

        $snapToken = Snap::getSnapToken($midtrans);

        return $snapToken;
    }
}
