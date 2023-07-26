## Untitled object in undefined Type

`object` ([Details](marktlokation.md))

# Untitled object in undefined Properties

| Property                                                          | Type      | Required | Nullable       | Defined by                                                                                                                                                                    |
| :---------------------------------------------------------------- | :-------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                   | `array`   | Required | cannot be null | [Untitled schema](botyp.md "https://conuti.de/bo4e/schemas/v1/enum/BOTyp#/properties/boTyp")                                                                                  |
| [versionStruktur](#versionstruktur)                               | `string`  | Required | cannot be null | [Untitled schema](marktlokation-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/versionStruktur")                               |
| [marktlokationsId](#marktlokationsid)                             | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-marktlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/marktlokationsId")                             |
| [sparte](#sparte)                                                 | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-sparte.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/sparte")                                                 |
| [energierichtung](#energierichtung)                               | `array`   | Optional | cannot be null | [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/energierichtung")                                                    |
| [bilanzierungsmethode](#bilanzierungsmethode)                     | `array`   | Optional | cannot be null | [Untitled schema](bilanzierungsmethode.md "https://conuti.de/bo4e/schemas/v1/enum/Bilanzierungsmethode#/properties/bilanzierungsmethode")                                     |
| [verbrauchsart](#verbrauchsart)                                   | `array`   | Optional | cannot be null | [Untitled schema](verbrauchsart.md "https://conuti.de/bo4e/schemas/v1/enum/Verbrauchsart#/properties/verbrauchsart")                                                          |
| [unterbrechbar](#unterbrechbar)                                   | `boolean` | Optional | cannot be null | [Untitled schema](marktlokation-properties-unterbrechbar.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/unterbrechbar")                                   |
| [netzebene](#netzebene)                                           | `array`   | Optional | cannot be null | [Untitled schema](netzebene.md "https://conuti.de/bo4e/schemas/v1/enum/Netzebene#/properties/netzebene")                                                                      |
| [umspannung](#umspannung)                                         | `array`   | Optional | cannot be null | [Untitled schema](netzebene.md "https://conuti.de/bo4e/schemas/v1/enum/Netzebene#/properties/umspannung")                                                                     |
| [netzbetreiberCodeNr](#netzbetreibercodenr)                       | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-netzbetreibercodenr.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/netzbetreiberCodeNr")                       |
| [gebietTyp](#gebiettyp)                                           | `array`   | Optional | cannot be null | [Untitled schema](gebiettyp.md "https://conuti.de/bo4e/schemas/v1/enum/Gebiettyp#/properties/gebietTyp")                                                                      |
| [netzgebietNr](#netzgebietnr)                                     | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-netzgebietnr.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/netzgebietNr")                                     |
| [bilanzierungsgebiet](#bilanzierungsgebiet)                       | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-bilanzierungsgebiet.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/bilanzierungsgebiet")                       |
| [grundversorgerCodeNr](#grundversorgercodenr)                     | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-grundversorgercodenr.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/grundversorgerCodeNr")                     |
| [gasqualitaet](#gasqualitaet)                                     | `array`   | Optional | cannot be null | [Untitled schema](gasqualitaet.md "https://conuti.de/bo4e/schemas/v1/enum/Gasqualitaet#/properties/gasqualitaet")                                                             |
| [endkunde](#endkunde)                                             | `object`  | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/endkunde")                                                         |
| [lokationsadresse](#lokationsadresse)                             | `object`  | Optional | cannot be null | [Untitled schema](adresse.md "https://conuti.de/bo4e/schemas/v1/com/Adresse#/properties/lokationsadresse")                                                                    |
| [katasterinformation](#katasterinformation)                       | `object`  | Optional | cannot be null | [Untitled schema](katasteradresse.md "https://conuti.de/bo4e/schemas/v1/com/Katasteradresse#/properties/katasterinformation")                                                 |
| [regelzone](#regelzone)                                           | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-regelzone.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/regelzone")                                           |
| [marktgebiet](#marktgebiet)                                       | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-marktgebiet.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/marktgebiet")                                       |
| [zeitreihentyp](#zeitreihentyp)                                   | `array`   | Optional | cannot be null | [Untitled schema](zeitreihentyp.md "https://conuti.de/bo4e/schemas/v1/enum/Zeitreihentyp#/properties/zeitreihentyp")                                                          |
| [messtechnischeEinordnung](#messtechnischeeinordnung)             | `array`   | Optional | cannot be null | [Untitled schema](messtechnischeeinordnung.md "https://conuti.de/bo4e/schemas/v1/enum/MesstechnischeEinordnung#/properties/messtechnischeEinordnung")                         |
| [sperrstatus](#sperrstatus)                                       | `array`   | Optional | cannot be null | [Untitled schema](sperrstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Sperrstatus#/properties/sperrstatus")                                                                |
| [referenzMarktlokationsId](#referenzmarktlokationsid)             | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-referenzmarktlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/referenzMarktlokationsId")             |
| [versorgungsart](#versorgungsart)                                 | `array`   | Optional | cannot be null | [Untitled schema](versorgungsart.md "https://conuti.de/bo4e/schemas/v1/enum/Versorgungsart#/properties/versorgungsart")                                                       |
| [eigentuemer](#eigentuemer)                                       | `object`  | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/eigentuemer")                                                      |
| [hausverwalter](#hausverwalter)                                   | `object`  | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/hausverwalter")                                                    |
| [verguetungEmpfaenger](#verguetungempfaenger)                     | `array`   | Optional | cannot be null | [Untitled schema](verguetungempfaenger.md "https://conuti.de/bo4e/schemas/v1/enum/VerguetungEmpfaenger#/properties/verguetungEmpfaenger")                                     |
| [statusErzeugendeMalo](#statuserzeugendemalo)                     | `array`   | Optional | cannot be null | [Untitled schema](statuserzeugendemarktlokation.md "https://conuti.de/bo4e/schemas/v1/enum/StatusErzeugendeMarktlokation#/properties/statusErzeugendeMalo")                   |
| [fernsteuerbarkeit](#fernsteuerbarkeit)                           | `array`   | Optional | cannot be null | [Untitled schema](fernsteuerbarkeit.md "https://conuti.de/bo4e/schemas/v1/enum/Fernsteuerbarkeit#/properties/fernsteuerbarkeit")                                              |
| [foerderungsLand](#foerderungsland)                               | `string`  | Optional | cannot be null | [Untitled schema](marktlokation-properties-foerderungsland.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/foerderungsLand")                               |
| [redispatch](#redispatch)                                         | `boolean` | Optional | cannot be null | [Untitled schema](marktlokation-properties-redispatch.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/redispatch")                                         |
| [marktrollen](#marktrollen)                                       | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-marktrollen.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/marktrollen")                                       |
| [zaehlwerke](#zaehlwerke)                                         | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-zaehlwerke.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/zaehlwerke")                                         |
| [zaehlwerkeBeteiligteMarktrolle](#zaehlwerkebeteiligtemarktrolle) | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-zaehlwerkebeteiligtemarktrolle.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/zaehlwerkeBeteiligteMarktrolle") |
| [verbrauchsmenge](#verbrauchsmenge)                               | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-verbrauchsmenge.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/verbrauchsmenge")                               |
| [zugehoerigeMesslokationen](#zugehoerigemesslokationen)           | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-zugehoerigemesslokationen.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/zugehoerigeMesslokationen")           |
| [netznutzungsabrechnungsdaten](#netznutzungsabrechnungsdaten)     | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-netznutzungsabrechnungsdaten.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/netznutzungsabrechnungsdaten")     |
| [energieherkunft](#energieherkunft)                               | `array`   | Optional | cannot be null | [Untitled schema](marktlokation-properties-energieherkunft.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/energieherkunft")                               |

## boTyp



`boTyp`

*   is required

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](botyp.md "https://conuti.de/bo4e/schemas/v1/enum/BOTyp#/properties/boTyp")

### boTyp Type

`string[]`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/versionStruktur")

### versionStruktur Type

`string`

## marktlokationsId



`marktlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-marktlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/marktlokationsId")

### marktlokationsId Type

`string`

## sparte



`sparte`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-sparte.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/sparte")

### sparte Type

`string`

## energierichtung



`energierichtung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/energierichtung")

### energierichtung Type

`string[]`

## bilanzierungsmethode



`bilanzierungsmethode`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](bilanzierungsmethode.md "https://conuti.de/bo4e/schemas/v1/enum/Bilanzierungsmethode#/properties/bilanzierungsmethode")

### bilanzierungsmethode Type

`string[]`

## verbrauchsart



`verbrauchsart`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](verbrauchsart.md "https://conuti.de/bo4e/schemas/v1/enum/Verbrauchsart#/properties/verbrauchsart")

### verbrauchsart Type

`string[]`

## unterbrechbar



`unterbrechbar`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-unterbrechbar.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/unterbrechbar")

### unterbrechbar Type

`boolean`

## netzebene



`netzebene`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](netzebene.md "https://conuti.de/bo4e/schemas/v1/enum/Netzebene#/properties/netzebene")

### netzebene Type

`string[]`

## umspannung



`umspannung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](netzebene.md "https://conuti.de/bo4e/schemas/v1/enum/Netzebene#/properties/umspannung")

### umspannung Type

`string[]`

## netzbetreiberCodeNr



`netzbetreiberCodeNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-netzbetreibercodenr.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/netzbetreiberCodeNr")

### netzbetreiberCodeNr Type

`string`

## gebietTyp



`gebietTyp`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](gebiettyp.md "https://conuti.de/bo4e/schemas/v1/enum/Gebiettyp#/properties/gebietTyp")

### gebietTyp Type

`string[]`

## netzgebietNr



`netzgebietNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-netzgebietnr.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/netzgebietNr")

### netzgebietNr Type

`string`

## bilanzierungsgebiet



`bilanzierungsgebiet`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-bilanzierungsgebiet.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/bilanzierungsgebiet")

### bilanzierungsgebiet Type

`string`

## grundversorgerCodeNr



`grundversorgerCodeNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-grundversorgercodenr.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/grundversorgerCodeNr")

### grundversorgerCodeNr Type

`string`

## gasqualitaet



`gasqualitaet`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](gasqualitaet.md "https://conuti.de/bo4e/schemas/v1/enum/Gasqualitaet#/properties/gasqualitaet")

### gasqualitaet Type

`string[]`

## endkunde



`endkunde`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/endkunde")

### endkunde Type

`object` ([Details](geschaeftspartner.md))

## lokationsadresse



`lokationsadresse`

*   is optional

*   Type: `object` ([Details](adresse.md))

*   cannot be null

*   defined in: [Untitled schema](adresse.md "https://conuti.de/bo4e/schemas/v1/com/Adresse#/properties/lokationsadresse")

### lokationsadresse Type

`object` ([Details](adresse.md))

## katasterinformation



`katasterinformation`

*   is optional

*   Type: `object` ([Details](katasteradresse.md))

*   cannot be null

*   defined in: [Untitled schema](katasteradresse.md "https://conuti.de/bo4e/schemas/v1/com/Katasteradresse#/properties/katasterinformation")

### katasterinformation Type

`object` ([Details](katasteradresse.md))

## regelzone



`regelzone`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-regelzone.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/regelzone")

### regelzone Type

`string`

## marktgebiet



`marktgebiet`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-marktgebiet.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/marktgebiet")

### marktgebiet Type

`string`

## zeitreihentyp



`zeitreihentyp`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](zeitreihentyp.md "https://conuti.de/bo4e/schemas/v1/enum/Zeitreihentyp#/properties/zeitreihentyp")

### zeitreihentyp Type

`string[]`

## messtechnischeEinordnung



`messtechnischeEinordnung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](messtechnischeeinordnung.md "https://conuti.de/bo4e/schemas/v1/enum/MesstechnischeEinordnung#/properties/messtechnischeEinordnung")

### messtechnischeEinordnung Type

`string[]`

## sperrstatus



`sperrstatus`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](sperrstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Sperrstatus#/properties/sperrstatus")

### sperrstatus Type

`string[]`

## referenzMarktlokationsId



`referenzMarktlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-referenzmarktlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/referenzMarktlokationsId")

### referenzMarktlokationsId Type

`string`

## versorgungsart



`versorgungsart`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](versorgungsart.md "https://conuti.de/bo4e/schemas/v1/enum/Versorgungsart#/properties/versorgungsart")

### versorgungsart Type

`string[]`

## eigentuemer



`eigentuemer`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/eigentuemer")

### eigentuemer Type

`object` ([Details](geschaeftspartner.md))

## hausverwalter



`hausverwalter`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/hausverwalter")

### hausverwalter Type

`object` ([Details](geschaeftspartner.md))

## verguetungEmpfaenger



`verguetungEmpfaenger`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](verguetungempfaenger.md "https://conuti.de/bo4e/schemas/v1/enum/VerguetungEmpfaenger#/properties/verguetungEmpfaenger")

### verguetungEmpfaenger Type

`string[]`

## statusErzeugendeMalo



`statusErzeugendeMalo`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](statuserzeugendemarktlokation.md "https://conuti.de/bo4e/schemas/v1/enum/StatusErzeugendeMarktlokation#/properties/statusErzeugendeMalo")

### statusErzeugendeMalo Type

`string[]`

## fernsteuerbarkeit



`fernsteuerbarkeit`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](fernsteuerbarkeit.md "https://conuti.de/bo4e/schemas/v1/enum/Fernsteuerbarkeit#/properties/fernsteuerbarkeit")

### fernsteuerbarkeit Type

`string[]`

## foerderungsLand



`foerderungsLand`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-foerderungsland.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/foerderungsLand")

### foerderungsLand Type

`string`

## redispatch



`redispatch`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-redispatch.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/redispatch")

### redispatch Type

`boolean`

## marktrollen



`marktrollen`

*   is optional

*   Type: `object[]` ([Details](marktteilnehmer.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-marktrollen.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/marktrollen")

### marktrollen Type

`object[]` ([Details](marktteilnehmer.md))

## zaehlwerke



`zaehlwerke`

*   is optional

*   Type: `object[]` ([Details](zaehlwerk.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-zaehlwerke.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/zaehlwerke")

### zaehlwerke Type

`object[]` ([Details](zaehlwerk.md))

## zaehlwerkeBeteiligteMarktrolle



`zaehlwerkeBeteiligteMarktrolle`

*   is optional

*   Type: `string[][]`

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-zaehlwerkebeteiligtemarktrolle.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/zaehlwerkeBeteiligteMarktrolle")

### zaehlwerkeBeteiligteMarktrolle Type

`string[][]`

## verbrauchsmenge



`verbrauchsmenge`

*   is optional

*   Type: `object[]` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-verbrauchsmenge.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/verbrauchsmenge")

### verbrauchsmenge Type

`object[]` ([Details](menge.md))

## zugehoerigeMesslokationen



`zugehoerigeMesslokationen`

*   is optional

*   Type: `object[]` ([Details](messlokationszuordnung.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-zugehoerigemesslokationen.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/zugehoerigeMesslokationen")

### zugehoerigeMesslokationen Type

`object[]` ([Details](messlokationszuordnung.md))

## netznutzungsabrechnungsdaten



`netznutzungsabrechnungsdaten`

*   is optional

*   Type: `object[]` ([Details](netznutzungsabrechnungsdaten.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-netznutzungsabrechnungsdaten.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/netznutzungsabrechnungsdaten")

### netznutzungsabrechnungsdaten Type

`object[]` ([Details](netznutzungsabrechnungsdaten.md))

## energieherkunft



`energieherkunft`

*   is optional

*   Type: `object[]` ([Details](energieherkunft.md))

*   cannot be null

*   defined in: [Untitled schema](marktlokation-properties-energieherkunft.md "https://conuti.de/bo4e/schemas/v1/bo/Marktlokation#/properties/energieherkunft")

### energieherkunft Type

`object[]` ([Details](energieherkunft.md))
