<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Vertragsart: string
{
    case ENERGIELIEFERVERTRAG = 'ENERGIELIEFERVERTRAG';
    case NETZNUTZUNGSVERTRAG = 'NETZNUTZUNGSVERTRAG';
    case BILANZIERUNGSVERTRAG = 'BILANZIERUNGSVERTRAG';
    case MESSSTELLENBETRIEBSVERTRAG = 'MESSSTELLENBETRIEBSVERTRAG';
    case BUENDELVERTRAG = 'BUENDELVERTRAG';
}
