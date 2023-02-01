<?php

namespace App\Service;

use DateTimeImmutable;

interface ClockInterface
{
    /**
     * @return DateTimeImmutable
     */
    public function now(): DateTimeImmutable;
}