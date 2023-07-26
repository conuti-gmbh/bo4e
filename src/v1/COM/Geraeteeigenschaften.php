<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Geraetemerkmal;
use Conuti\BO4E\v1\Enum\Geraetetyp;

class Geraeteeigenschaften
{
    public function __construct(
        readonly ?Geraetetyp $geraetetyp,
        readonly ?Geraetemerkmal $geraetemerkmal,
        readonly ?float $faktor
    ) {
    }
}
