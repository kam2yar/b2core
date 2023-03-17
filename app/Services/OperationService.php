<?php

namespace App\Services;

use App\Entities\Account;
use App\PaymentMethods\PaymentMethod;
use App\Repositories\AccountRepository;
use App\Repositories\TransactionRepository;

class OperationService
{
    // Notice: all validations are in controllers (Need to implement if needed)

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
        Account $sourceAccount,
        Account $destinationAccount,
        float $amount
    ): bool {
        $transactionRepository = new TransactionRepository();
        $result = $transactionRepository->transfer($sourceAccount->getId(), $destinationAccount->getId(), $amount);

        // TODO other stuff like sending notification or trigger an event.

        return $result;
    }
}
