<?php

namespace App\Traits;


use App\Traits\Exceptions\SingletonException;

trait SingletonTrait
{
    private static array $instance = [];

    private function __construct(){}

    private function __clone()
    {
        throw new SingletonException('Method ' . __METHOD__ . ' not available for singelton');
    }

    public function __wakeup(): void
    {
        throw new SingletonException('Method ' . __METHOD__ . ' not available for singelton');
    }

    public function __serialize(): array
    {
        throw new SingletonException('Method ' . __METHOD__ . ' not available for singelton');
    }

    public static function getInstance(): static
    {
        return static::$instance[static::class] ?? (static::$instance[static::class] = new static());
    }
}
