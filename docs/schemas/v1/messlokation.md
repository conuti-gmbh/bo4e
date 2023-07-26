## Untitled object in undefined Type

`object` ([Details](messlokation.md))

# Untitled object in undefined Properties

| Property                                                            | Type     | Required | Nullable       | Defined by                                                                                                                                                                    |
| :------------------------------------------------------------------ | :------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                     | `string` | Required | cannot be null | [Untitled schema](messlokation-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/boTyp")                                                     |
| [versionStruktur](#versionstruktur)                                 | `string` | Required | cannot be null | [Untitled schema](messlokation-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/versionStruktur")                                 |
| [messlokationsId](#messlokationsid)                                 | `string` | Optional | cannot be null | [Untitled schema](messlokation-properties-messlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/messlokationsId")                                 |
| [sparte](#sparte)                                                   | `array`  | Optional | cannot be null | [Untitled schema](sparte.md "https://conuti.de/bo4e/schemas/v1/enum/Sparte#/properties/sparte")                                                                               |
| [energierichtung](#energierichtung)                                 | `array`  | Optional | cannot be null | [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/energierichtung")                                                    |
| [netzebenemessung](#netzebenemessung)                               | `array`  | Optional | cannot be null | [Untitled schema](netzebene.md "https://conuti.de/bo4e/schemas/v1/enum/Netzebene#/properties/netzebenemessung")                                                               |
| [messgebietNr](#messgebietnr)                                       | `string` | Optional | cannot be null | [Untitled schema](messlokation-properties-messgebietnr.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/messgebietNr")                                       |
| [grundzustaendigerMSBCodeNr](#grundzustaendigermsbcodenr)           | `string` | Optional | cannot be null | [Untitled schema](messlokation-properties-grundzustaendigermsbcodenr.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/grundzustaendigerMSBCodeNr")           |
| [messadresse](#messadresse)                                         | `object` | Optional | cannot be null | [Untitled schema](adresse.md "https://conuti.de/bo4e/schemas/v1/com/Adresse#/properties/messadresse")                                                                         |
| [bilanzierungsmethode](#bilanzierungsmethode)                       | `array`  | Optional | cannot be null | [Untitled schema](bilanzierungsmethode.md "https://conuti.de/bo4e/schemas/v1/enum/Bilanzierungsmethode#/properties/bilanzierungsmethode")                                     |
| [abrechnungmessstellenbetriebnna](#abrechnungmessstellenbetriebnna) | `bool`   | Optional | cannot be null | [Untitled schema](messlokation-properties-abrechnungmessstellenbetriebnna.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/abrechnungmessstellenbetriebnna") |
| [gasqualitaet](#gasqualitaet)                                       | `array`  | Optional | cannot be null | [Untitled schema](gasqualitaet.md "https://conuti.de/bo4e/schemas/v1/enum/Gasqualitaet#/properties/gasqualitaet")                                                             |
| [verlustfaktor](#verlustfaktor)                                     | `number` | Optional | cannot be null | [Untitled schema](messlokation-properties-verlustfaktor.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/verlustfaktor")                                     |
| [betriebszustand](#betriebszustand)                                 | `array`  | Optional | cannot be null | [Untitled schema](betriebszustand.md "https://conuti.de/bo4e/schemas/v1/enum/Betriebszustand#/properties/betriebszustand")                                                    |
| [ablesekartenempfaenger](#ablesekartenempfaenger)                   | `object` | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/ablesekartenempfaenger")                                           |
| [referenzMarktlokationsId](#referenzmarktlokationsid)               | `string` | Optional | cannot be null | [Untitled schema](messlokation-properties-referenzmarktlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/referenzMarktlokationsId")               |
| [verwendungsumfang](#verwendungsumfang)                             | `array`  | Optional | cannot be null | [Untitled schema](verwendungsumfang.md "https://conuti.de/bo4e/schemas/v1/enum/Verwendungsumfang#/properties/verwendungsumfang")                                              |
| [geraete](#geraete)                                                 | `array`  | Optional | cannot be null | [Untitled schema](messlokation-properties-geraete.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/geraete")                                                 |
| [messdienstleistung](#messdienstleistung)                           | `array`  | Optional | cannot be null | [Untitled schema](messlokation-properties-messdienstleistung.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/messdienstleistung")                           |
| [messlokationszaehler](#messlokationszaehler)                       | `array`  | Optional | cannot be null | [Untitled schema](messlokation-properties-messlokationszaehler.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/messlokationszaehler")                       |
| [zaehlwerke](#zaehlwerke)                                           | `array`  | Optional | cannot be null | [Untitled schema](messlokation-properties-zaehlwerke.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/zaehlwerke")                                           |
| [marktrollen](#marktrollen)                                         | `array`  | Optional | cannot be null | [Untitled schema](messlokation-properties-marktrollen.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/marktrollen")                                         |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/versionStruktur")

### versionStruktur Type

`string`

## messlokationsId



`messlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-messlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/messlokationsId")

### messlokationsId Type

`string`

## sparte



`sparte`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](sparte.md "https://conuti.de/bo4e/schemas/v1/enum/Sparte#/properties/sparte")

### sparte Type

`string[]`

## energierichtung



`energierichtung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/energierichtung")

### energierichtung Type

`string[]`

## netzebenemessung



`netzebenemessung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](netzebene.md "https://conuti.de/bo4e/schemas/v1/enum/Netzebene#/properties/netzebenemessung")

### netzebenemessung Type

`string[]`

## messgebietNr



`messgebietNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-messgebietnr.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/messgebietNr")

### messgebietNr Type

`string`

## grundzustaendigerMSBCodeNr



`grundzustaendigerMSBCodeNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-grundzustaendigermsbcodenr.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/grundzustaendigerMSBCodeNr")

### grundzustaendigerMSBCodeNr Type

`string`

## messadresse



`messadresse`

*   is optional

*   Type: `object` ([Details](adresse.md))

*   cannot be null

*   defined in: [Untitled schema](adresse.md "https://conuti.de/bo4e/schemas/v1/com/Adresse#/properties/messadresse")

### messadresse Type

`object` ([Details](adresse.md))

## bilanzierungsmethode



`bilanzierungsmethode`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](bilanzierungsmethode.md "https://conuti.de/bo4e/schemas/v1/enum/Bilanzierungsmethode#/properties/bilanzierungsmethode")

### bilanzierungsmethode Type

`string[]`

## abrechnungmessstellenbetriebnna



`abrechnungmessstellenbetriebnna`

*   is optional

*   Type: `bool`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-abrechnungmessstellenbetriebnna.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/abrechnungmessstellenbetriebnna")

### abrechnungmessstellenbetriebnna Type

`bool`

## gasqualitaet



`gasqualitaet`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](gasqualitaet.md "https://conuti.de/bo4e/schemas/v1/enum/Gasqualitaet#/properties/gasqualitaet")

### gasqualitaet Type

`string[]`

## verlustfaktor



`verlustfaktor`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-verlustfaktor.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/verlustfaktor")

### verlustfaktor Type

`number`

### verlustfaktor Constraints

**unknown format**: the value of this string must follow the format: `float`

## betriebszustand



`betriebszustand`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](betriebszustand.md "https://conuti.de/bo4e/schemas/v1/enum/Betriebszustand#/properties/betriebszustand")

### betriebszustand Type

`string[]`

## ablesekartenempfaenger



`ablesekartenempfaenger`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/ablesekartenempfaenger")

### ablesekartenempfaenger Type

`object` ([Details](geschaeftspartner.md))

## referenzMarktlokationsId



`referenzMarktlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-referenzmarktlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/referenzMarktlokationsId")

### referenzMarktlokationsId Type

`string`

## verwendungsumfang



`verwendungsumfang`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](verwendungsumfang.md "https://conuti.de/bo4e/schemas/v1/enum/Verwendungsumfang#/properties/verwendungsumfang")

### verwendungsumfang Type

`string[]`

## geraete



`geraete`

*   is optional

*   Type: `object[]` ([Details](geraet.md))

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-geraete.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/geraete")

### geraete Type

`object[]` ([Details](geraet.md))

## messdienstleistung



`messdienstleistung`

*   is optional

*   Type: `object[]` ([Details](dienstleistung.md))

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-messdienstleistung.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/messdienstleistung")

### messdienstleistung Type

`object[]` ([Details](dienstleistung.md))

## messlokationszaehler



`messlokationszaehler`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-messlokationszaehler.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/messlokationszaehler")

### messlokationszaehler Type

`string[]`

## zaehlwerke



`zaehlwerke`

*   is optional

*   Type: `object[]` ([Details](zaehlwerk.md))

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-zaehlwerke.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/zaehlwerke")

### zaehlwerke Type

`object[]` ([Details](zaehlwerk.md))

## marktrollen



`marktrollen`

*   is optional

*   Type: `object[]` ([Details](marktteilnehmer.md))

*   cannot be null

*   defined in: [Untitled schema](messlokation-properties-marktrollen.md "https://conuti.de/bo4e/schemas/v1/bo/Messlokation#/properties/marktrollen")

### marktrollen Type

`object[]` ([Details](marktteilnehmer.md))
