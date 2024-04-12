<?php

namespace App\DataTransferObjects;

readonly class UserData
{
    public function __construct(
        public string $first_name,
        public string $last_name,
        public string $email,
        public string $password,
        public bool $is_admin = false,
        public ?string $avatar = null,
        public bool $is_marketing = false,
    ) {
    }
}
