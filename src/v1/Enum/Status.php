<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\Enum;

enum Status: string
{
    case KUNDENSELBSTABLESUNG = 'KUNDENSELBSTABLESUNG';
    case LEERSTAND = 'LEERSTAND';
    case REALER_ZAEHLERUEBERLAUF_GEPRUEFT = 'REALER_ZAEHLERUEBERLAUF_GEPRUEFT';
    case PLAUSIBEL_WG_KONTROLLABLESUNG = 'PLAUSIBEL_WG_KONTROLLABLESUNG';
    case PLAUSIBEL_WG_KUNDENHINWEIS = 'PLAUSIBEL_WG_KUNDENHINWEIS';
    case AUSTAUSCH_DES_ERSATZWERTES = 'AUSTAUSCH_DES_ERSATZWERTES';
    case RECHENWERT = 'RECHENWERT';
    case BASIS_MME = 'BASIS_MME';
    case VERGLEICHSMESSUNG_GEEICHT = 'VERGLEICHSMESSUNG_GEEICHT';
    case VERGLEICHSMESSUNG_NICHT_GEEICHT = 'VERGLEICHSMESSUNG_NICHT_GEEICHT';
    case MESSWERTNACHBILDUNG_AUS_GEEICHTEN_WERTEN = 'MESSWERTNACHBILDUNG_AUS_GEEICHTEN_WERTEN';
    case MESSWERTNACHBILDUNG_AUS_NICHT_GEEICHTEN_WERTEN = 'MESSWERTNACHBILDUNG_AUS_NICHT_GEEICHTEN_WERTEN';
    case INTERPOLATION = 'INTERPOLATION';
    case HALTEWERT = 'HALTEWERT';
    case BILANZIERUNG_NETZABSCHNITT = 'BILANZIERUNG_NETZABSCHNITT';
    case HISTORISCHE_MESSWERTE = 'HISTORISCHE_MESSWERTE';
    case STATISTISCHE_METHODE = 'STATISTISCHE_METHODE';
    case AUFTEILUNG = 'AUFTEILUNG';
    case VERWENDUNG_VON_WERTEN_DES_STOERMENGENZAEHLWERKS = 'VERWENDUNG_VON_WERTEN_DES_STOERMENGENZAEHLWERKS';
    case UMGANGS_UND_KORREKTURMENGEN = 'UMGANGS_UND_KORREKTURMENGEN';
    case ANGABEN_MESSLOKATION = 'ANGABEN_MESSLOKATION';
    case KEIN_ZUGANG = 'KEIN_ZUGANG';
    case KOMMUNIKATIONSSTOERUNG = 'KOMMUNIKATIONSSTOERUNG';
    case NETZAUSFALL = 'NETZAUSFALL';
    case SPANNUNGSAUSFALL = 'SPANNUNGSAUSFALL';
    case STATUS_GERAETEWECHSEL = 'STATUS_GERAETEWECHSEL';
    case KALIBRIERUNG = 'KALIBRIERUNG';
    case GERAET_ARBEITET_AUSSERHALB_DER_BETRIEBSBEDINGUNGEN = 'GERAET_ARBEITET_AUSSERHALB_DER_BETRIEBSBEDINGUNGEN';
    case MESSEINRICHTUNG_GESTOERT_DEFEKT = 'MESSEINRICHTUNG_GESTOERT_DEFEKT';
    case UNSICHERHEIT_MESSUNG = 'UNSICHERHEIT_MESSUNG';
    case BERUECKSICHTIGUNG_STOERMENGENZAEHLWERK = 'BERUECKSICHTIGUNG_STOERMENGENZAEHLWERK';
    case MENGENUMWERTUNG_VOLLSTAENDIG = 'MENGENUMWERTUNG_VOLLSTAENDIG';
    case UHRZEIT_GESTELLT_SYNCHRONISATION = 'UHRZEIT_GESTELLT_SYNCHRONISATION';
    case MESSWERT_UNPLAUSIBEL = 'MESSWERT_UNPLAUSIBEL';
    case FALSCHER_WANDLERFAKTOR = 'FALSCHER_WANDLERFAKTOR';
    case FEHLERHAFTE_ABLESUNG = 'FEHLERHAFTE_ABLESUNG';
    case AENDERUNG_DER_BERECHNUNG = 'AENDERUNG_DER_BERECHNUNG';
    case UMBAU_DER_MESSLOKATION = 'UMBAU_DER_MESSLOKATION';
    case DATENBEARBEITUNGSFEHLER = 'DATENBEARBEITUNGSFEHLER';
    case BRENNWERTKORREKTUR = 'BRENNWERTKORREKTUR';
    case Z_ZAHL_KORREKTUR = 'Z_ZAHL_KORREKTUR';
    case STOERUNG_DEFEKT_MESSEINRICHTUNG = 'STOERUNG_DEFEKT_MESSEINRICHTUNG';
    case AENDERUNG_TARIFSCHALTZEITEN = 'AENDERUNG_TARIFSCHALTZEITEN';
    case TARIFSCHALTGERAET_DEFEKT = 'TARIFSCHALTGERAET_DEFEKT';
    case IMPULSWERTIGKEIT_NICHT_AUSREICHEND = 'IMPULSWERTIGKEIT_NICHT_AUSREICHEND';
    case ENERGIEMENGE_IN_UNGEMESSENEM_ZEITINTERVALL = 'ENERGIEMENGE_IN_UNGEMESSENEM_ZEITINTERVALL';
    case ENERGIEMENGE_AUS_DEM_UNGEPAIRTEN_ZEITINTERVALL = 'ENERGIEMENGE_AUS_DEM_UNGEPAIRTEN_ZEITINTERVALL';
    case WARTUNGSARBEITEN_AN_GEEICHTEM_MESSGERAET = 'WARTUNGSARBEITEN_AN_GEEICHTEM_MESSGERAET';
    case GESTOERTE_WERTE = 'GESTOERTE_WERTE';
    case WARTUNGSARBEITEN_AN_EICHRECHTSKONFORMEN_MESSGERAETEN = 'WARTUNGSARBEITEN_AN_EICHRECHTSKONFORMEN_MESSGERAETEN';
    case KONSISTENZ_UND_SYNCHRONPRUEFUNG = 'KONSISTENZ_UND_SYNCHRONPRUEFUNG';
    case GRUND_ANGABEN_MESSLOKATION = 'GRUND_ANGABEN_MESSLOKATION';
    case UMSTELLUNG_GASQUALITAET = 'UMSTELLUNG_GASQUALITAET';
    case ZAEHLERSTAND_1 = 'ZAEHLERSTAND_ZUM_BEGINN_DER_ANGEGEBENEN_ENERGIEMENGE_VORHANDEN_UND_KOMMUNIZIERT';
    case ZAEHLERSTAND_2 = 'ZAEHLERSTAND_ZUM_ENDE_DER_ANGEGEBENEN_ENERGIEMENGE_VORHANDEN_UND_KOMMUNIZIERT';
    case ZAEHLERSTAND_3 = 'ZAEHLERSTAND_ZUM_BEGINN_DER_ANGEGEBENEN_ENERGIEMENGE_NICHT_VORHANDEN_DA_MENGENABGRENZUNG';
    case ZAEHLERSTAND_4 = 'ZAEHLERSTAND_ZUM_ENDE_DER_ANGEGEBENEN_ENERGIEMENGE_NICHT_VORHANDEN_DA_MENGENABGRENZUNG';
    case GESCHEITERT = 'GESCHEITERT';
    case AUSGEBAUT = 'AUSGEBAUT';
}
