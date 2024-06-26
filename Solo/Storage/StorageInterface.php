<?php declare(strict_types=1);

namespace Solo\Storage;

interface StorageInterface
{
    public function set(string $key, string $token): bool;

    public function get(string $key): ?string;

    public function has(string $key): bool;

    public function delete(string $key): bool;
}