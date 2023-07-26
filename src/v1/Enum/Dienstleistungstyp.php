<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Dienstleistungstyp: string
{
    case DATENBEREITSTELLUNG_TAEGLICH = 'DATENBEREITSTELLUNG_TAEGLICH';
    case DATENBEREITSTELLUNG_WOECHENTLICH = 'DATENBEREITSTELLUNG_WOECHENTLICH';
    case DATENBEREITSTELLUNG_MONATLICH = 'DATENBEREITSTELLUNG_MONATLICH';
    case DATENBEREITSTELLUNG_JAEHRLICH = 'DATENBEREITSTELLUNG_JAEHRLICH';
    case DATENBEREITSTELLUNG_HISTORISCHE_LG = 'DATENBEREITSTELLUNG_HISTORISCHE_LG';
    case DATENBEREITSTELLUNG_STUENDLICH = 'DATENBEREITSTELLUNG_STUENDLICH';
    case DATENBEREITSTELLUNG_VIERTELJAEHRLICH = 'DATENBEREITSTELLUNG_VIERTELJAEHRLICH';
    case DATENBEREITSTELLUNG_HALBJAEHRLICH = 'DATENBEREITSTELLUNG_HALBJAEHRLICH';
    case DATENBEREITSTELLUNG_MONATLICH_ZUSAETZLICH = 'DATENBEREITSTELLUNG_MONATLICH_ZUSAETZLICH';
    case DATENBEREITSTELLUNG_EINMALIG = 'DATENBEREITSTELLUNG_EINMALIG';
    case AUSLESUNG_2X_TAEGLICH_FERNAUSLESUNG = 'AUSLESUNG_2X_TAEGLICH_FERNAUSLESUNG';
    case AUSLESUNG_TAEGLICH_FERNAUSLESUNG = 'AUSLESUNG_TAEGLICH_FERNAUSLESUNG';
    case AUSLESUNG_LGK_MANUELL_MSB = 'AUSLESUNG_LGK_MANUELL_MSB';
    case AUSLESUNG_MONATLICH_SLP_FERNAUSLESUNG = 'AUSLESUNG_MONATLICH_SLP_FERNAUSLESUNG';
    case AUSLESUNG_JAEHRLICH_SLP_FERNAUSLESUNG = 'AUSLESUNG_JAEHRLICH_SLP_FERNAUSLESUNG';
    case AUSLESUNG_MDE_SLP = 'AUSLESUNG_MDE_SLP';
    case ABLESUNG_MONATLICH_SLP = 'ABLESUNG_MONATLICH_SLP';
    case ABLESUNG_VIERTELJAEHRLICH_SLP = 'ABLESUNG_VIERTELJAEHRLICH_SLP';
    case ABLESUNG_HALBJAEHRLICH_SLP = 'ABLESUNG_HALBJAEHRLICH_SLP';
    case ABLESUNG_JAEHRLICH_SLP = 'ABLESUNG_JAEHRLICH_SLP';
    case AUSLESUNG_SLP_FERNAUSLESUNG = 'AUSLESUNG_SLP_FERNAUSLESUNG';
    case ABLESUNG_SLP_ZUSAETZLICH_MSB = 'ABLESUNG_SLP_ZUSAETZLICH_MSB';
    case ABLESUNG_SLP_ZUSAETZLICH_KUNDE = 'ABLESUNG_SLP_ZUSAETZLICH_KUNDE';
    case AUSLESUNG_LGK_FERNAUSLESUNG_ZUSAETZLICH_MSB = 'AUSLESUNG_LGK_FERNAUSLESUNG_ZUSAETZLICH_MSB';
    case AUSLESUNG_MOATLICH_FERNAUSLESUNG = 'AUSLESUNG_MOATLICH_FERNAUSLESUNG';
    case AUSLESUNG_STUENDLICH_FERNAUSLESUNG = 'AUSLESUNG_STUENDLICH_FERNAUSLESUNG';
    case ABLESUNG_MONATLICH_LGK = 'ABLESUNG_MONATLICH_LGK';
    case AUSLESUNG_TEMERATURMENGENUMWERTER = 'AUSLESUNG_TEMERATURMENGENUMWERTER';
    case AUSLESUNG_ZUSTANDSMENGENUMWERTER = 'AUSLESUNG_ZUSTANDSMENGENUMWERTER';
    case AUSLESUNG_SYSTEMMENGENUMWERTER = 'AUSLESUNG_SYSTEMMENGENUMWERTER';
    case AUSLESUNG_VORGANG_SLP = 'AUSLESUNG_VORGANG_SLP';
    case AUSLESUUNG_KOMPAKTMENGENUMWERTER = 'AUSLESUUNG_KOMPAKTMENGENUMWERTER';
    case AUSLESUNG_MDE_LGK = 'AUSLESUNG_MDE_LGK';
    case SPERRUNG_SLP = 'SPERRUNG_SLP';
    case ENTSPERRUNG_SLP = 'ENTSPERRUNG_SLP';
    case SPERRUNG_RLM = 'SPERRUNG_RLM';
    case ENTSPERRUNG_RLM = 'ENTSPERRUNG_RLM';
    case MAHNKOSTEN = 'MAHNKOSTEN';
    case INKASSOKOSTEN = 'INKASSOKOSTEN';
}
