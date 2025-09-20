<?php

namespace App\Services;

class PaymentGateway
{
    public function charge($amount, $cardDetails)
    {
        // Mock payment logic
        return [
            'status' => 'success',
            'transaction_id' => uniqid('txn_')
        ];
    }
}
