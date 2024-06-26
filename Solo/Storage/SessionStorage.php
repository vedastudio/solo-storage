<?php

namespace Solo\Storage;

use Solo\Session;

class SessionStorage implements StorageInterface
{
    public function __construct(private readonly Session $session)
    {
    }

    public function set(string $key, string $token): bool
    {
        $this->session->set($key, $token);
        return true;
    }

    public function get(string $key): ?string
    {
        return $this->session->get($key);
    }

    public function has(string $key): bool
    {
        return $this->session->has($key);
    }

    public function delete(string $key): bool
    {
        $this->session->unset($key);
        return true;
    }
}