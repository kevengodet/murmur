<?php

declare(strict_types=1);

namespace Keven\Murmur;

interface Async
{
    public function send($message, $recipient): void;
}
