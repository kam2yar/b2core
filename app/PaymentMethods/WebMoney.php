<?php

namespace App\PaymentMethods;

use App\Entities\Account;
use App\Repositories\AccountRepository;
use App\Repositories\TransactionRepository;

class WebMoney implements PaymentMethod
{
    public function deposit(Account $account, float $amount): bool
    {
        // TODO Some specific logic for WebMoney
        return (new TransactionRepository())->store($account->getId(), $amount);
    }

    public function withdrawal(Account $account, float $amount): bool
    {
        // TODO Some specific logic for WebMoney
        return (new TransactionRepository())->store($account->getId(), $amount);
    }

    public function transfer(Account $sourceAccount, Account $destinationAccount, float $amount): bool
    {
        // TODO Some specific logic for WebMoney
        return (new TransactionRepository())->transfer($sourceAccount->getId(), $destinationAccount->getId(), $amount);
    }
}
