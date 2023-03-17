<?php

namespace App\PaymentMethods;

use App\Entities\Account;

interface PaymentMethod
{
    public function deposit(Account $account, float $amount): bool;

    public function withdrawal(Account $account, float $amount): bool;
}
