<?php

declare(strict_types=1);

namespace Conuti\BO4E\v1\BO;

use Conuti\BO4E\v1\COM\Adresse;
use Conuti\BO4E\v1\COM\Energieherkunft;
use Conuti\BO4E\v1\COM\Katasteradresse;
use Conuti\BO4E\v1\COM\Menge;
use Conuti\BO4E\v1\COM\Messlokationszuordnung;
use Conuti\BO4E\v1\COM\Netznutzungsabrechnungsdaten;
use Conuti\BO4E\v1\COM\Verbrauch;
use Conuti\BO4E\v1\COM\Zaehlwerk;
use Conuti\BO4E\v1\Enum\Bilanzierungsmethode;
use Conuti\BO4E\v1\Enum\BildungTranchengroesse;
use Conuti\BO4E\v1\Enum\Energierichtung;
use Conuti\BO4E\v1\Enum\Fernsteuerbarkeit;
use Conuti\BO4E\v1\Enum\Gasqualitaet;
use Conuti\BO4E\v1\Enum\Gebiettyp;
use Conuti\BO4E\v1\Enum\Marktrolle;
use Conuti\BO4E\v1\Enum\MesstechnischeEinordnung;
use Conuti\BO4E\v1\Enum\Netzebene;
use Conuti\BO4E\v1\Enum\Sparte;
use Conuti\BO4E\v1\Enum\Sperrstatus;
use Conuti\BO4E\v1\Enum\StatusErzeugendeMarktlokation;
use Conuti\BO4E\v1\Enum\Verbrauchsart;
use Conuti\BO4E\v1\Enum\VerguetungEmpfaenger;
use Conuti\BO4E\v1\Enum\Versorgungsart;
use Conuti\BO4E\v1\Enum\Zeitreihentyp;

class Tranche
{
    public function __construct(
        readonly string $boTyp,
        readonly string $versionStruktur,
        readonly ?string $tranchenId,
        readonly ?Sparte $sparte,
        readonly ?Energierichtung $energierichtung,
        readonly ?Bilanzierungsmethode $bilanzierungsmethode,
        readonly ?Verbrauchsart $verbrauchsart,
        readonly ?bool $unterbrechbar,
        readonly ?Netzebene $netzebene,
        readonly ?string $netzbetreiberCodeNr,
        readonly ?Gebiettyp $gebietTyp,
        readonly ?string $netzgebietNr,
        readonly ?string $bilanzierungsgebiet,
        readonly ?string $grundversorgerCodeNr,
        readonly ?Gasqualitaet $gasqualitaet,
        readonly ?Geschaeftspartner $endkunde,
        readonly ?Adresse $lokationsadresse,
        readonly ?Katasteradresse $katasterinformation,
        readonly ?string $regelzone,
        readonly ?string $marktgebiet,
        readonly ?Zeitreihentyp $zeitreihentyp,
        readonly ?MesstechnischeEinordnung $messtechnischeEinordnung,
        readonly ?Sperrstatus $sperrstatus,
        readonly ?string $referenzMarktlokationsId,
        readonly ?Versorgungsart $versorgungsart,
        readonly ?Fernsteuerbarkeit $fernsteuerbarkeit,
        readonly ?VerguetungEmpfaenger $verguetungEmpfaenger,
        readonly ?string $foerderungsLand,
        readonly ?StatusErzeugendeMarktlokation $statusErzeugendeMalo,
        readonly ?string $referenzTranche,
        readonly ?Menge $aufteilungsmenge,
        readonly ?string $bilanzkreis,
        readonly ?BildungTranchengroesse $bildungTranchengroesse,
        /** @var Marktteilnehmer[] */
        readonly array $marktrollen = [],
        /** @var Zaehlwerk[] */
        readonly array $zaehlwerke = [],
        /** @var Marktrolle[] */
        readonly array $zaehlwerkeBeteiligteMarktrolle = [],
        /** @var Verbrauch[] */
        readonly array $verbrauchsmenge = [],
        /** @var Messlokationszuordnung[] */
        readonly array $zugehoerigeMesslokationen = [],
        /** @var Netznutzungsabrechnungsdaten[] */
        readonly array $netznutzungsabrechnungsdaten = [],
        /** @var Energieherkunft[] */
        readonly array $energieherkunft = []
    ) {
    }

    public function getMarktrolle(Marktrolle $rolle): ?Marktteilnehmer
    {
        foreach ($this->marktrollen as $marktrolle) {
            if ($marktrolle->marktrolle === $rolle) {
                return $marktrolle;
            }
        }

        return null;
    }
}
