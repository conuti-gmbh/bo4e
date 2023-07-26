<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Geraet;
use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Enum\Befestigungsart;
use Conuti\BO4E\v1\Enum\BOTyp;
use Conuti\BO4E\v1\Enum\Fernschaltung;
use Conuti\BO4E\v1\Enum\Geraetemerkmal;
use Conuti\BO4E\v1\Enum\Geraetetyp;
use Conuti\BO4E\v1\Enum\Mengenumwertertyp;
use Conuti\BO4E\v1\Enum\Messwerterfassung;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Tarifart;
use Conuti\BO4E\v1\Enum\Volumenerfassung;
use Conuti\BO4E\v1\Enum\Zaehlerauspraegung;
use Conuti\BO4E\v1\Enum\Zaehlertyp;
use Conuti\BO4E\v1\Enum\ZaehlertypSpezifikation;

class Zaehler
{
    public function __construct(
        readonly BOTyp $boTyp,
        readonly ?string $versionStruktur,
        readonly ?string $zaehlernummer,
        readonly ?Sparte $sparte,
        readonly ?Zaehlerauspraegung $zaehlerauspraegung,
        readonly ?Zaehlertyp $zaehlertyp,
        readonly ?Tarifart $tarifart,
        readonly ?float $zaehlerkonstante,
        readonly ?string $eichungBis,
        readonly ?Geschaeftspartner $zaehlerhersteller,
        readonly ?string $gateway,
        readonly ?Fernschaltung $fernschaltung,
        readonly ?Messwerterfassung $messwerterfassung,
        readonly ?ZaehlertypSpezifikation $zaehlertypspezifikation,
        readonly ?Befestigungsart $befestigungsart,
        readonly ?Geraetemerkmal $zaehlergroesse,
        readonly ?Mengenumwertertyp $mengenumwertertyp,
        readonly ?Volumenerfassung $volumenerfassung,
        readonly ?string $serialnummer,
        readonly ?Geraetemerkmal $geraetemerkmal,
        readonly ?string $herstellungsdatum,
        readonly ?string $baujahr,
        readonly ?string $messlokationsId,
        readonly ?string $marktlokationsId,
        /** @var Geraet[] $geraete */
        readonly array $geraete = [],
        /** @var Zaehlwerk[] $zaehlwerke */
        readonly array $zaehlwerke = [],
    ) {
    }

    /**
     * @return Geraet[]
     */
    public function getGeraete(Geraetetyp $geraetetyp): array
    {
        return $this->getMultipleGeraete([$geraetetyp]);
    }

    public function getGeraet(Geraetetyp $geraetetyp): ?Geraet
    {
        $geraete = $this->getMultipleGeraete([$geraetetyp]);

        return $geraete ? $geraete[0] : null;
    }

    /**
     *  Gibt die Liste aller Geräte dieses Zählers zurück, die mindestens einem der übergebenen Gerätetypen entsprechen
     *
     * @param Geraetetyp[] $geraetetypen
     *
     * @return Geraet[]
     */
    public function getMultipleGeraete(array $geraetetypen): array
    {
        return array_filter(
            $this->geraete,
            static function (Geraet $geraet) use ($geraetetypen) {
                return in_array($geraet->geraeteeigenschaften?->geraetetyp, $geraetetypen);
            }
        );
    }

    /**
     * @return Geraet[]
     */
    public function getWandler(): array
    {
        return $this->getMultipleGeraete([
            Geraetetyp::BLOCKSTROMWANDLER,
            Geraetetyp::MESSWANDLERSATZ_IMS_MME,
            Geraetetyp::KOMBIMESSWANDLER,
            Geraetetyp::SPANNUNGSWANDLER,
        ]);
    }

    /**
     * @return Geraet[]
     */
    public function getKommunikationseinrichtungen(): array
    {
        return $this->getMultipleGeraete([
            Geraetetyp::MODEM_GSM,
            Geraetetyp::ETHERNET_KOM,
            Geraetetyp::PLC_COM,
            Geraetetyp::MODEM_FESTNETZ,
            Geraetetyp::DSL_KOM,
            Geraetetyp::LTE_KOM,
        ]);
    }

    /**
     * @return Geraet[]
     */
    public function getSteuereinrichtungen(): array
    {
        return $this->getMultipleGeraete([
            Geraetetyp::RUNDSTEUEREMPFAENGER,
            Geraetetyp::TARIFSCHALTGERAET,
        ]);
    }

    /**
     * @return Geraet[]
     */
    public function getMengenumwerter(): array
    {
        return $this->getMultipleGeraete([
            Geraetetyp::DICHTEMENGENUMWERTER,
            Geraetetyp::TEMPERATURMENGENUMWERTER,
            Geraetetyp::ZUSTANDSMENGENUMWERTER,
            Geraetetyp::MENGENUMWERTER,
        ]);
    }
}
