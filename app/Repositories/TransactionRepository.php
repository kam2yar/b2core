<?php

namespace App\Repositories;

use App\Entities\Account;

class TransactionRepository
{
    public function getAll(array $sort): array
    {
        // TODO use sort[0] to specify sorting column and sort[1] for direction
        return [];
    }

    public function getBalance(int $accountId): int
    {
        // TODO get sum of transactions for this account from DB
        return 0;
    }

    public function store(int $accountId, float $amount): bool
    {
        // TODO store a new record in transaction table
        return true;
    }

    public function transfer(int $sourceAccount, int $destinationAccount, float $amount): bool
    {
        // TODO transfer amount from source to destination account
        return true;
    }
}
