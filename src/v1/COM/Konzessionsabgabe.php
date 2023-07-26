<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\AbgabeArt;

class Konzessionsabgabe
{
    public function __construct(
        readonly ?AbgabeArt $satz,
        readonly ?float $kosten,
        readonly ?string $kategorie
    ) {
    }
}
