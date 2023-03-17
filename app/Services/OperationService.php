<?php

namespace App\Services;

use App\Entities\Account;
use App\PaymentMethods\PaymentMethod;
use App\Repositories\AccountRepository;

class OperationService
{
    // Notice: all validations are in controllers (Need to implement if needed)

    protected AccountRepository $accountRepository;

    public function __construct()
    {
        $this->accountRepository = new AccountRepository();
    }

    public function deposit(PaymentMethod $paymentMethod, Account $account, float $amount): bool
    {
        return $paymentMethod->deposit($account, $amount);
    }

    public function withdrawal(PaymentMethod $paymentMethod, Account $account, float $amount): bool
    {
        return $paymentMethod->withdrawal($account, $amount);
    }

    public function transfer(
        PaymentMethod $paymentMethod,
        Account $sourceAccount,
        Account $destinationAccount,
        float $amount
    ): bool {
        return $paymentMethod->transfer($sourceAccount, $destinationAccount, $amount);
    }
}
