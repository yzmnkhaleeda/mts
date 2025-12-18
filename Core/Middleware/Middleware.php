<?php

namespace Core\Middleware;

class Middleware
{
    public const MAP = [
        'auth'  => Auth::class,
        'guest' => Guest::class,
        'admin' => Admin::class,
    ];

    public static function resolve(?string $key): void
    {
        if (! $key) return;

        if (! array_key_exists($key, self::MAP)) {
            throw new \Exception("Middleware [{$key}] not found.");
        }

        (new (self::MAP[$key]))->handle();
    }
}
