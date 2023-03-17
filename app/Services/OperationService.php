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
        $result = $paymentMethod->deposit($account, $amount);

        // TODO other stuff like sending notification or trigger an event.

        return $result;
    }

    public function withdrawal(PaymentMethod $paymentMethod, Account $account, float $amount): bool
    {
        $result = $paymentMethod->withdrawal($account, $amount);

        // TODO other stuff like sending notification or trigger an event.

        return $result;
    }

    public function transfer(
        PaymentMethod $paymentMethod,
        Account $sourceAccount,
        Account $destinationAccount,
        float $amount
    ): bool {
        $result = $paymentMethod->transfer($sourceAccount, $destinationAccount, $amount);

        // TODO other stuff like sending notification or trigger an event.

        return $result;
    }
}
