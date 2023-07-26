<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Geraetemerkmal: string
{
    case EINTARIF = 'EINTARIF';
    case ZWEITARIF = 'ZWEITARIF';
    case MEHRTARIF = 'MEHRTARIF';
    case GAS_G2P5 = 'GAS_G2P5';
    case GAS_G4 = 'GAS_G4';
    case GAS_G6 = 'GAS_G6';
    case GAS_G10 = 'GAS_G10';
    case GAS_G16 = 'GAS_G16';
    case GAS_G25 = 'GAS_G25';
    case GAS_G40 = 'GAS_G40';
    case GAS_G65 = 'GAS_G65';
    case GAS_G100 = 'GAS_G100';
    case GAS_G160 = 'GAS_G160';
    case GAS_G250 = 'GAS_G250';
    case GAS_G350 = 'GAS_G350';
    case GAS_G400 = 'GAS_G400';
    case GAS_G4000 = 'GAS_G4000';
    case GAS_G650 = 'GAS_G650';
    case GAS_G6500 = 'GAS_G6500';
    case GAS_G1000 = 'GAS_G1000';
    case GAS_G10000 = 'GAS_G10000';
    case GAS_G12500 = 'GAS_G12500';
    case GAS_G1600 = 'GAS_G1600';
    case GAS_G16000 = 'GAS_G16000';
    case GAS_G2500 = 'GAS_G2500';
    case IMPULSGEBER_G4_G100 = 'IMPULSGEBER_G4_G100';
    case IMPULSGEBER_G100 = 'IMPULSGEBER_G100';
    case MODEM_GSM = 'MODEM_GSM';
    case MODEM_GPRS = 'MODEM_GPRS';
    case MODEM_FUNK = 'MODEM_FUNK';
    case MODEM_GSM_O_LG = 'MODEM_GSM_O_LG';
    case MODEM_GSM_M_LG = 'MODEM_GSM_M_LG';
    case MODEM_FESTNETZ = 'MODEM_FESTNETZ';
    case MODEM_GPRS_M_LG = 'MODEM_GPRS_M_LG';
    case PLC_COM = 'PLC_COM';
    case ETHERNET_KOM = 'ETHERNET_KOM';
    case DSL_KOM = 'DSL_KOM';
    case LTE_KOM = 'LTE_KOM';
    case RUNDSTEUEREMPFAENGER = 'RUNDSTEUEREMPFAENGER';
    case TARIFSCHALTGERAET = 'TARIFSCHALTGERAET';
    case ZUSTANDS_MU = 'ZUSTANDS_MU';
    case TEMPERATUR_MU = 'TEMPERATUR_MU';
    case KOMPAKT_MU = 'KOMPAKT_MU';
    case SYSTEM_MU = 'SYSTEM_MU';
    case UNBESTIMMT = 'UNBESTIMMT';
    case WASSER_MWZW = 'WASSER_MWZW';
    case WASSER_WZWW = 'WASSER_WZWW';
    case WASSER_WZ01 = 'WASSER_WZ01';
    case WASSER_WZ02 = 'WASSER_WZ02';
    case WASSER_WZ03 = 'WASSER_WZ03';
    case WASSER_WZ04 = 'WASSER_WZ04';
    case WASSER_WZ05 = 'WASSER_WZ05';
    case WASSER_WZ06 = 'WASSER_WZ06';
    case WASSER_WZ07 = 'WASSER_WZ07';
    case WASSER_WZ08 = 'WASSER_WZ08';
    case WASSER_WZ09 = 'WASSER_WZ09';
    case WASSER_WZ10 = 'WASSER_WZ10';
    case WASSER_VWZ04 = 'WASSER_VWZ04';
    case WASSER_VWZ05 = 'WASSER_VWZ05';
    case WASSER_VWZ06 = 'WASSER_VWZ06';
    case WASSER_VWZ07 = 'WASSER_VWZ07';
    case WASSER_VWZ10 = 'WASSER_VWZ10';
    case DICHTEMENGENUMWERTER = 'DICHTEMENGENUMWERTER';
    case TEMPERATURMENGENUMWERTER = 'TEMPERATURMENGENUMWERTER';
    case ZUSTANDSMENGENUMWERTER = 'ZUSTANDSMENGENUMWERTER';
    case BLOCKSTROMWANDLER = 'BLOCKSTROMWANDLER';
    case MESSWANDLERSATZ_IMS_MME = 'MESSWANDLERSATZ_IMS_MME';
    case KOMBIMESSWANDLER = 'KOMBIMESSWANDLER';
    case SPANNUNGSWANDLER = 'SPANNUNGSWANDLER';
}