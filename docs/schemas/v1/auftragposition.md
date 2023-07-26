## Untitled object in undefined Type

`object` ([Details](auftragposition.md))

# Untitled object in undefined Properties

| Property                                            | Type      | Required | Nullable       | Defined by                                                                                                                                                         |
| :-------------------------------------------------- | :-------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [positionsnummer](#positionsnummer)                 | `integer` | Optional | cannot be null | [Untitled schema](auftragposition-properties-positionsnummer.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/positionsnummer")               |
| [positionsnummerAngebot](#positionsnummerangebot)   | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-positionsnummerangebot.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/positionsnummerAngebot") |
| [energieerfassung](#energieerfassung)               | `array`   | Optional | cannot be null | [Untitled schema](energieerfassung.md "https://conuti.de/bo4e/schemas/v1/enum/Energieerfassung#/properties/energieerfassung")                                      |
| [artikelnummer](#artikelnummer)                     | `array`   | Optional | cannot be null | [Untitled schema](bdewartikelnummer.md "https://conuti.de/bo4e/schemas/v1/enum/BDEWArtikelnummer#/properties/artikelnummer")                                       |
| [positionsbetrag](#positionsbetrag)                 | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-positionsbetrag.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/positionsbetrag")               |
| [startdatum](#startdatum)                           | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-startdatum.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/startdatum")                         |
| [enddatum](#enddatum)                               | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-enddatum.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/enddatum")                             |
| [istBestand](#istbestand)                           | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-istbestand.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/istBestand")                         |
| [obiskennzahl](#obiskennzahl)                       | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-obiskennzahl.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/obiskennzahl")                     |
| [anfragegrund](#anfragegrund)                       | `array`   | Optional | cannot be null | [Untitled schema](anfragegrund.md "https://conuti.de/bo4e/schemas/v1/enum/Anfragegrund#/properties/anfragegrund")                                                  |
| [allgemeineInformationen](#allgemeineinformationen) | `object`  | Optional | cannot be null | [Untitled schema](allgemeineinformationen.md "https://conuti.de/bo4e/schemas/v1/com/AllgemeineInformationen#/properties/allgemeineInformationen")                  |
| [infoAbweichung](#infoabweichung)                   | `object`  | Optional | cannot be null | [Untitled schema](infoabweichung.md "https://conuti.de/bo4e/schemas/v1/com/InfoAbweichung#/properties/infoAbweichung")                                             |

## positionsnummer



`positionsnummer`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-positionsnummer.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/positionsnummer")

### positionsnummer Type

`integer`

## positionsnummerAngebot



`positionsnummerAngebot`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-positionsnummerangebot.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/positionsnummerAngebot")

### positionsnummerAngebot Type

`string`

## energieerfassung



`energieerfassung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](energieerfassung.md "https://conuti.de/bo4e/schemas/v1/enum/Energieerfassung#/properties/energieerfassung")

### energieerfassung Type

`string[]`

## artikelnummer



`artikelnummer`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](bdewartikelnummer.md "https://conuti.de/bo4e/schemas/v1/enum/BDEWArtikelnummer#/properties/artikelnummer")

### artikelnummer Type

`string[]`

## positionsbetrag



`positionsbetrag`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-positionsbetrag.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/positionsbetrag")

### positionsbetrag Type

`string`

## startdatum



`startdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-startdatum.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/startdatum")

### startdatum Type

`string`

### startdatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## enddatum



`enddatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-enddatum.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/enddatum")

### enddatum Type

`string`

### enddatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## istBestand



`istBestand`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-istbestand.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/istBestand")

### istBestand Type

`string`

## obiskennzahl



`obiskennzahl`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-obiskennzahl.md "https://conuti.de/bo4e/schemas/v1/com/AuftragPosition#/properties/obiskennzahl")

### obiskennzahl Type

`string`

## anfragegrund



`anfragegrund`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](anfragegrund.md "https://conuti.de/bo4e/schemas/v1/enum/Anfragegrund#/properties/anfragegrund")

### anfragegrund Type

`string[]`

## allgemeineInformationen



`allgemeineInformationen`

*   is optional

*   Type: `object` ([Details](allgemeineinformationen.md))

*   cannot be null

*   defined in: [Untitled schema](allgemeineinformationen.md "https://conuti.de/bo4e/schemas/v1/com/AllgemeineInformationen#/properties/allgemeineInformationen")

### allgemeineInformationen Type

`object` ([Details](allgemeineinformationen.md))

## infoAbweichung



`infoAbweichung`

*   is optional

*   Type: `object` ([Details](infoabweichung.md))

*   cannot be null

*   defined in: [Untitled schema](infoabweichung.md "https://conuti.de/bo4e/schemas/v1/com/InfoAbweichung#/properties/infoAbweichung")

### infoAbweichung Type

`object` ([Details](infoabweichung.md))
