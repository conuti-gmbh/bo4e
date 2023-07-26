<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\COM;

use Conuti\BO4E\v1\Enum\Status;
use Conuti\BO4E\v1\Enum\StatusArt;

class StatusZusatzInformation
{
    public function __construct(
        readonly ?StatusArt $art,
        readonly ?Status $status
    ) {
    }
}
