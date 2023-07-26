## Untitled object in undefined Type

`object` ([Details](auftrag.md))

# Untitled object in undefined Properties

| Property                                                | Type     | Required | Nullable       | Defined by                                                                                                                                              |
| :------------------------------------------------------ | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [boTyp](#botyp)                                         | `array`  | Required | cannot be null | [Untitled schema](botyp.md "https://conuti.de/bo4e/schemas/v1/enum/BOTyp#/properties/boTyp")                                                            |
| [versionStruktur](#versionstruktur)                     | `string` | Required | cannot be null | [Untitled schema](auftrag-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/versionStruktur")                     |
| [ausfuehrungsdatum](#ausfuehrungsdatum)                 | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-ausfuehrungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/ausfuehrungsdatum")                 |
| [fertigstellungsdatum](#fertigstellungsdatum)           | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-fertigstellungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/fertigstellungsdatum")           |
| [startdatum](#startdatum)                               | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-startdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/startdatum")                               |
| [sparte](#sparte)                                       | `array`  | Optional | cannot be null | [Untitled schema](sparte.md "https://conuti.de/bo4e/schemas/v1/enum/Sparte#/properties/sparte")                                                         |
| [lieferanschrift](#lieferanschrift)                     | `object` | Optional | cannot be null | [Untitled schema](adresse.md "https://conuti.de/bo4e/schemas/v1/com/Adresse#/properties/lieferanschrift")                                               |
| [marktlokationsId](#marktlokationsid)                   | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-marktlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/marktlokationsId")                   |
| [mindestpreis](#mindestpreis)                           | `object` | Optional | cannot be null | [Untitled schema](preis.md "https://conuti.de/bo4e/schemas/v1/com/Preis#/properties/mindestpreis")                                                      |
| [hoechstpreis](#hoechstpreis)                           | `object` | Optional | cannot be null | [Untitled schema](preis.md "https://conuti.de/bo4e/schemas/v1/com/Preis#/properties/hoechstpreis")                                                      |
| [energierichtung](#energierichtung)                     | `array`  | Optional | cannot be null | [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/energierichtung")                              |
| [berechnungspreis](#berechnungspreis)                   | `number` | Optional | cannot be null | [Untitled schema](auftrag-properties-berechnungspreis.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/berechnungspreis")                   |
| [summeGesamt](#summegesamt)                             | `number` | Optional | cannot be null | [Untitled schema](auftrag-properties-summegesamt.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/summeGesamt")                             |
| [verschobenerAbmeldetermin](#verschobenerabmeldetermin) | `string` | Optional | cannot be null | [Untitled schema](auftrag-properties-verschobenerabmeldetermin.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/verschobenerAbmeldetermin") |
| [lieferadresseAltgeraete](#lieferadressealtgeraete)     | `object` | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/lieferadresseAltgeraete")                    |
| [positionsdaten](#positionsdaten)                       | `array`  | Optional | cannot be null | [Untitled schema](auftrag-properties-positionsdaten.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/positionsdaten")                       |
| [bemerkungen](#bemerkungen)                             | `array`  | Optional | cannot be null | [Untitled schema](auftrag-properties-bemerkungen.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/bemerkungen")                             |

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

*   defined in: [Untitled schema](auftrag-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/versionStruktur")

### versionStruktur Type

`string`

## ausfuehrungsdatum



`ausfuehrungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-ausfuehrungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/ausfuehrungsdatum")

### ausfuehrungsdatum Type

`string`

### ausfuehrungsdatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## fertigstellungsdatum



`fertigstellungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-fertigstellungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/fertigstellungsdatum")

### fertigstellungsdatum Type

`string`

### fertigstellungsdatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## startdatum



`startdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-startdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/startdatum")

### startdatum Type

`string`

### startdatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## sparte



`sparte`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](sparte.md "https://conuti.de/bo4e/schemas/v1/enum/Sparte#/properties/sparte")

### sparte Type

`string[]`

## lieferanschrift



`lieferanschrift`

*   is optional

*   Type: `object` ([Details](adresse.md))

*   cannot be null

*   defined in: [Untitled schema](adresse.md "https://conuti.de/bo4e/schemas/v1/com/Adresse#/properties/lieferanschrift")

### lieferanschrift Type

`object` ([Details](adresse.md))

## marktlokationsId



`marktlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-marktlokationsid.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/marktlokationsId")

### marktlokationsId Type

`string`

## mindestpreis



`mindestpreis`

*   is optional

*   Type: `object` ([Details](preis.md))

*   cannot be null

*   defined in: [Untitled schema](preis.md "https://conuti.de/bo4e/schemas/v1/com/Preis#/properties/mindestpreis")

### mindestpreis Type

`object` ([Details](preis.md))

## hoechstpreis



`hoechstpreis`

*   is optional

*   Type: `object` ([Details](preis.md))

*   cannot be null

*   defined in: [Untitled schema](preis.md "https://conuti.de/bo4e/schemas/v1/com/Preis#/properties/hoechstpreis")

### hoechstpreis Type

`object` ([Details](preis.md))

## energierichtung



`energierichtung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/energierichtung")

### energierichtung Type

`string[]`

## berechnungspreis



`berechnungspreis`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-berechnungspreis.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/berechnungspreis")

### berechnungspreis Type

`number`

## summeGesamt



`summeGesamt`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-summegesamt.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/summeGesamt")

### summeGesamt Type

`number`

## verschobenerAbmeldetermin



`verschobenerAbmeldetermin`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-verschobenerabmeldetermin.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/verschobenerAbmeldetermin")

### verschobenerAbmeldetermin Type

`string`

### verschobenerAbmeldetermin Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## lieferadresseAltgeraete



`lieferadresseAltgeraete`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/lieferadresseAltgeraete")

### lieferadresseAltgeraete Type

`object` ([Details](geschaeftspartner.md))

## positionsdaten



`positionsdaten`

*   is optional

*   Type: `object[]` ([Details](auftragposition.md))

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-positionsdaten.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/positionsdaten")

### positionsdaten Type

`object[]` ([Details](auftragposition.md))

## bemerkungen



`bemerkungen`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](auftrag-properties-bemerkungen.md "https://conuti.de/bo4e/schemas/v1/bo/Auftrag#/properties/bemerkungen")

### bemerkungen Type

`string[]`
