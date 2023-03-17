<?php

namespace App\PaymentMethods;

use App\Entities\Account;
use App\Repositories\AccountRepository;
use App\Repositories\TransactionRepository;

class Paypal implements PaymentMethod
{
    public function deposit(Account $account, float $amount): bool
    {
        // TODO Some specific logic for Paypal
        return (new TransactionRepository())->store($account->getId(), $amount);
    }

    public function withdrawal(Account $account, float $amount): bool
    {
        // TODO Some specific logic for Paypal
        return (new TransactionRepository())->store($account->getId(), $amount);
    }
}
