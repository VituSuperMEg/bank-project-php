<?php

namespace Root\BankProject\Services;
use Ramsey\Uuid\Uuid;

function generateUUID() {
    $uuid = Uuid::uuid4();
    return $uuid->toString();
}