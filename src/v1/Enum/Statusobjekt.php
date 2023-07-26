<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Statusobjekt: string
{
    case MSBWECHSEL = 'MSBWECHSEL';
    case UMBAUMELO = 'UMBAUMELO';
    case ERSTEINBAUIMS = 'ERSTEINBAUIMS';
    case ERSTEINBAUMME = 'ERSTEINBAUMME';
    case GERAET = 'GERAET';
    case ANGEBOTANFRAGE = 'ANGEBOTANFRAGE';
    case STATUSBESTELLUNG = 'STATUSBESTELLUNG';
    case LIEFERSCHEIN = 'LIEFERSCHEIN';
    case SPERREN = 'SPERREN';
    case ENTSPERREN = 'ENTSPERREN';
}
