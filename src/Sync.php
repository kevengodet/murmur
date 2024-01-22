<?php

declare(strict_types=1);

namespace Keven\Murmur;

interface Sync
{
    public function write($message, $recipient): string;
}
