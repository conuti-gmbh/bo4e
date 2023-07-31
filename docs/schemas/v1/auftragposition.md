## Untitled object in undefined Type

`object` ([Details](auftragposition.md))

# Untitled object in undefined Properties

| Property                                            | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                      |
| :-------------------------------------------------- | :-------- | :------- | :------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [positionsnummer](#positionsnummer)                 | `integer` | Optional | cannot be null | [Untitled schema](auftragposition-properties-positionsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/positionsnummer")               |
| [positionsnummerAngebot](#positionsnummerangebot)   | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-positionsnummerangebot.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/positionsnummerAngebot") |
| [energieerfassung](#energieerfassung)               | `array`   | Optional | cannot be null | [Untitled schema](energieerfassung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energieerfassung.schema.json#/properties/energieerfassung")                                      |
| [artikelnummer](#artikelnummer)                     | `array`   | Optional | cannot be null | [Untitled schema](bdewartikelnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BDEWArtikelnummer.schema.json#/properties/artikelnummer")                                       |
| [positionsbetrag](#positionsbetrag)                 | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-positionsbetrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/positionsbetrag")               |
| [startdatum](#startdatum)                           | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/startdatum")                         |
| [enddatum](#enddatum)                               | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-enddatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/enddatum")                             |
| [istBestand](#istbestand)                           | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-istbestand.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/istBestand")                         |
| [obiskennzahl](#obiskennzahl)                       | `string`  | Optional | cannot be null | [Untitled schema](auftragposition-properties-obiskennzahl.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/obiskennzahl")                     |
| [anfragegrund](#anfragegrund)                       | `array`   | Optional | cannot be null | [Untitled schema](anfragegrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Anfragegrund.schema.json#/properties/anfragegrund")                                                  |
| [allgemeineInformationen](#allgemeineinformationen) | `object`  | Optional | cannot be null | [Untitled schema](allgemeineinformationen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AllgemeineInformationen.schema.json#/properties/allgemeineInformationen")                  |
| [infoAbweichung](#infoabweichung)                   | `object`  | Optional | cannot be null | [Untitled schema](infoabweichung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/InfoAbweichung.schema.json#/properties/infoAbweichung")                                             |

## positionsnummer



`positionsnummer`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-positionsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/positionsnummer")

### positionsnummer Type

`integer`

## positionsnummerAngebot



`positionsnummerAngebot`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-positionsnummerangebot.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/positionsnummerAngebot")

### positionsnummerAngebot Type

`string`

## energieerfassung



`energieerfassung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](energieerfassung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Energieerfassung.schema.json#/properties/energieerfassung")

### energieerfassung Type

`string[]`

## artikelnummer



`artikelnummer`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](bdewartikelnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BDEWArtikelnummer.schema.json#/properties/artikelnummer")

### artikelnummer Type

`string[]`

## positionsbetrag



`positionsbetrag`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-positionsbetrag.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/positionsbetrag")

### positionsbetrag Type

`string`

## startdatum



`startdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-startdatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/startdatum")

### startdatum Type

`string`

### startdatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## enddatum



`enddatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-enddatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/enddatum")

### enddatum Type

`string`

### enddatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## istBestand



`istBestand`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-istbestand.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/istBestand")

### istBestand Type

`string`

## obiskennzahl



`obiskennzahl`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragposition-properties-obiskennzahl.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AuftragPosition.schema.json#/properties/obiskennzahl")

### obiskennzahl Type

`string`

## anfragegrund



`anfragegrund`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](anfragegrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Anfragegrund.schema.json#/properties/anfragegrund")

### anfragegrund Type

`string[]`

## allgemeineInformationen



`allgemeineInformationen`

*   is optional

*   Type: `object` ([Details](allgemeineinformationen.md))

*   cannot be null

*   defined in: [Untitled schema](allgemeineinformationen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/AllgemeineInformationen.schema.json#/properties/allgemeineInformationen")

### allgemeineInformationen Type

`object` ([Details](allgemeineinformationen.md))

## infoAbweichung



`infoAbweichung`

*   is optional

*   Type: `object` ([Details](infoabweichung.md))

*   cannot be null

*   defined in: [Untitled schema](infoabweichung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/InfoAbweichung.schema.json#/properties/infoAbweichung")

### infoAbweichung Type

`object` ([Details](infoabweichung.md))
