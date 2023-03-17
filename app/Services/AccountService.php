<?php

namespace App\Services;

use App\Entities\Account;
use App\Repositories\AccountRepository;
use App\Repositories\TransactionRepository;

class AccountService
{
    // Notice: all validations are in controllers (Need to implement if needed)

    public function getAll(): array
    {
        return (new AccountRepository())->getAccounts();
    }

    public function getBalance(Account $account): int
    {
        return (new TransactionRepository())->getBalance($account->getId());
    }

    public function getTransactions(array $sort): array
    {
        return (new TransactionRepository())->getAll($sort);
    }
}
