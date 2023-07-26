## Untitled object in undefined Type

`object` ([Details](angebotsteil.md))

# Untitled object in undefined Properties

| Property                                                | Type     | Required | Nullable       | Defined by                                                                                                                                                         |
| :------------------------------------------------------ | :------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [anfrageSubreferenz](#anfragesubreferenz)               | `string` | Optional | cannot be null | [Untitled schema](angebotsteil-properties-anfragesubreferenz.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsteil#/properties/anfrageSubreferenz")               |
| [gesamtmengeangebotsteil](#gesamtmengeangebotsteil)     | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/gesamtmengeangebotsteil")                                                      |
| [gesamtkostenangebotsteil](#gesamtkostenangebotsteil)   | `object` | Optional | cannot be null | [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/gesamtkostenangebotsteil")                                                   |
| [lieferzeitraum](#lieferzeitraum)                       | `object` | Optional | cannot be null | [Untitled schema](zeitraum.md "https://conuti.de/bo4e/schemas/v1/com/Zeitraum#/properties/lieferzeitraum")                                                         |
| [verweisKatalognummer](#verweiskatalognummer)           | `object` | Optional | cannot be null | [Untitled schema](katalogverweis.md "https://conuti.de/bo4e/schemas/v1/com/Katalogverweis#/properties/verweisKatalognummer")                                       |
| [lieferstellenangebotsteil](#lieferstellenangebotsteil) | `array`  | Optional | cannot be null | [Untitled schema](angebotsteil-properties-lieferstellenangebotsteil.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsteil#/properties/lieferstellenangebotsteil") |
| [positionen](#positionen)                               | `array`  | Optional | cannot be null | [Untitled schema](angebotsteil-properties-positionen.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsteil#/properties/positionen")                               |

## anfrageSubreferenz



`anfrageSubreferenz`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebotsteil-properties-anfragesubreferenz.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsteil#/properties/anfrageSubreferenz")

### anfrageSubreferenz Type

`string`

## gesamtmengeangebotsteil



`gesamtmengeangebotsteil`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/gesamtmengeangebotsteil")

### gesamtmengeangebotsteil Type

`object` ([Details](menge.md))

## gesamtkostenangebotsteil



`gesamtkostenangebotsteil`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/gesamtkostenangebotsteil")

### gesamtkostenangebotsteil Type

`object` ([Details](betrag.md))

## lieferzeitraum



`lieferzeitraum`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://conuti.de/bo4e/schemas/v1/com/Zeitraum#/properties/lieferzeitraum")

### lieferzeitraum Type

`object` ([Details](zeitraum.md))

## verweisKatalognummer



`verweisKatalognummer`

*   is optional

*   Type: `object` ([Details](katalogverweis.md))

*   cannot be null

*   defined in: [Untitled schema](katalogverweis.md "https://conuti.de/bo4e/schemas/v1/com/Katalogverweis#/properties/verweisKatalognummer")

### verweisKatalognummer Type

`object` ([Details](katalogverweis.md))

## lieferstellenangebotsteil



`lieferstellenangebotsteil`

*   is optional

*   Type: `object[]` ([Details](marktlokation.md))

*   cannot be null

*   defined in: [Untitled schema](angebotsteil-properties-lieferstellenangebotsteil.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsteil#/properties/lieferstellenangebotsteil")

### lieferstellenangebotsteil Type

`object[]` ([Details](marktlokation.md))

## positionen



`positionen`

*   is optional

*   Type: `object[]` ([Details](angebotsposition.md))

*   cannot be null

*   defined in: [Untitled schema](angebotsteil-properties-positionen.md "https://conuti.de/bo4e/schemas/v1/com/Angebotsteil#/properties/positionen")

### positionen Type

`object[]` ([Details](angebotsposition.md))
