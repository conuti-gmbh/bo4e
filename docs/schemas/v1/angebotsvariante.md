## Untitled object in undefined Type

`object` ([Details](angebotsvariante.md))

# Untitled object in undefined Properties

| Property                          | Type     | Required | Nullable       | Defined by                                                                                                                                       |
| :-------------------------------- | :------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------------------- |
| [angebotsstatus](#angebotsstatus) | `array`  | Optional | cannot be null | [Untitled schema](angebotsstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Angebotsstatus#/properties/angebotsstatus")                          |
| [beschreibung](#beschreibung)     | `string` | Optional | cannot be null | [Untitled schema](angebotsvariante-properties-beschreibung.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsvariante#/properties/beschreibung") |
| [erstelldatum](#erstelldatum)     | `string` | Optional | cannot be null | [Untitled schema](angebotsvariante-properties-erstelldatum.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsvariante#/properties/erstelldatum") |
| [bindefrist](#bindefrist)         | `string` | Optional | cannot be null | [Untitled schema](angebotsvariante-properties-bindefrist.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsvariante#/properties/bindefrist")     |
| [gesamtmenge](#gesamtmenge)       | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/gesamtmenge")                                                |
| [gesamtkosten](#gesamtkosten)     | `object` | Optional | cannot be null | [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/gesamtkosten")                                             |
| [teile](#teile)                   | `array`  | Optional | cannot be null | [Untitled schema](angebotsvariante-properties-teile.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsvariante#/properties/teile")               |

## angebotsstatus



`angebotsstatus`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](angebotsstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Angebotsstatus#/properties/angebotsstatus")

### angebotsstatus Type

`string[]`

## beschreibung



`beschreibung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsvariante-properties-beschreibung.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsvariante#/properties/beschreibung")

### beschreibung Type

`string`

## erstelldatum



`erstelldatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsvariante-properties-erstelldatum.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsvariante#/properties/erstelldatum")

### erstelldatum Type

`string`

### erstelldatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## bindefrist



`bindefrist`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsvariante-properties-bindefrist.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsvariante#/properties/bindefrist")

### bindefrist Type

`string`

### bindefrist Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## gesamtmenge



`gesamtmenge`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/gesamtmenge")

### gesamtmenge Type

`object` ([Details](menge.md))

## gesamtkosten



`gesamtkosten`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/gesamtkosten")

### gesamtkosten Type

`object` ([Details](betrag.md))

## teile



`teile`

*   is optional

*   Type: `object[]` ([Details](angebotsteil.md))

*   cannot be null

*   defined in: [Untitled schema](angebotsvariante-properties-teile.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsvariante#/properties/teile")

### teile Type

`object[]` ([Details](angebotsteil.md))
