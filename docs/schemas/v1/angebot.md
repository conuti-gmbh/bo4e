## Untitled object in undefined Type

`object` ([Details](angebot.md))

# Untitled object in undefined Properties

| Property                                                    | Type     | Required | Nullable       | Defined by                                                                                                                           |
| :---------------------------------------------------------- | :------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                             | `string` | Required | cannot be null | [Untitled schema](angebot-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/boTyp")                      |
| [versionStruktur](#versionstruktur)                         | `string` | Required | cannot be null | [Untitled schema](angebot-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/versionStruktur")  |
| [angebotsnummer](#angebotsnummer)                           | `string` | Optional | cannot be null | [Untitled schema](angebot-properties-angebotsnummer.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/angebotsnummer")    |
| [anfragereferenz](#anfragereferenz)                         | `string` | Optional | cannot be null | [Untitled schema](angebot-properties-anfragereferenz.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/anfragereferenz")  |
| [angebotsdatum](#angebotsdatum)                             | `string` | Optional | cannot be null | [Untitled schema](angebot-properties-angebotsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/angebotsdatum")      |
| [sparte](#sparte)                                           | `array`  | Optional | cannot be null | [Untitled schema](sparte.md "https://conuti.de/bo4e/schemas/v1/enum/Sparte#/properties/sparte")                                      |
| [bindefrist](#bindefrist)                                   | `string` | Optional | cannot be null | [Untitled schema](angebot-properties-bindefrist.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/bindefrist")            |
| [angebotgeber](#angebotgeber)                               | `object` | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/angebotgeber")            |
| [angebotnehmer](#angebotnehmer)                             | `object` | Optional | cannot be null | [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/angebotnehmer")           |
| [unterzeichnerAngebotsnehmer](#unterzeichnerangebotsnehmer) | `object` | Optional | cannot be null | [Untitled schema](ansprechpartner.md "https://conuti.de/bo4e/schemas/v1/bo/Ansprechpartner#/properties/unterzeichnerAngebotsnehmer") |
| [unterzeichnerAngebotsgeber](#unterzeichnerangebotsgeber)   | `object` | Optional | cannot be null | [Untitled schema](ansprechpartner.md "https://conuti.de/bo4e/schemas/v1/bo/Ansprechpartner#/properties/unterzeichnerAngebotsgeber")  |
| [varianten](#varianten)                                     | `array`  | Optional | cannot be null | [Untitled schema](angebot-properties-varianten.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/varianten")              |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebot-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebot-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/versionStruktur")

### versionStruktur Type

`string`

## angebotsnummer



`angebotsnummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebot-properties-angebotsnummer.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/angebotsnummer")

### angebotsnummer Type

`string`

## anfragereferenz



`anfragereferenz`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebot-properties-anfragereferenz.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/anfragereferenz")

### anfragereferenz Type

`string`

## angebotsdatum



`angebotsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebot-properties-angebotsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/angebotsdatum")

### angebotsdatum Type

`string`

### angebotsdatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## sparte



`sparte`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](sparte.md "https://conuti.de/bo4e/schemas/v1/enum/Sparte#/properties/sparte")

### sparte Type

`string[]`

## bindefrist



`bindefrist`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](angebot-properties-bindefrist.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/bindefrist")

### bindefrist Type

`string`

### bindefrist Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## angebotgeber



`angebotgeber`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/angebotgeber")

### angebotgeber Type

`object` ([Details](geschaeftspartner.md))

## angebotnehmer



`angebotnehmer`

*   is optional

*   Type: `object` ([Details](geschaeftspartner.md))

*   cannot be null

*   defined in: [Untitled schema](geschaeftspartner.md "https://conuti.de/bo4e/schemas/v1/bo/Geschaeftspartner#/properties/angebotnehmer")

### angebotnehmer Type

`object` ([Details](geschaeftspartner.md))

## unterzeichnerAngebotsnehmer



`unterzeichnerAngebotsnehmer`

*   is optional

*   Type: `object` ([Details](ansprechpartner.md))

*   cannot be null

*   defined in: [Untitled schema](ansprechpartner.md "https://conuti.de/bo4e/schemas/v1/bo/Ansprechpartner#/properties/unterzeichnerAngebotsnehmer")

### unterzeichnerAngebotsnehmer Type

`object` ([Details](ansprechpartner.md))

## unterzeichnerAngebotsgeber



`unterzeichnerAngebotsgeber`

*   is optional

*   Type: `object` ([Details](ansprechpartner.md))

*   cannot be null

*   defined in: [Untitled schema](ansprechpartner.md "https://conuti.de/bo4e/schemas/v1/bo/Ansprechpartner#/properties/unterzeichnerAngebotsgeber")

### unterzeichnerAngebotsgeber Type

`object` ([Details](ansprechpartner.md))

## varianten



`varianten`

*   is optional

*   Type: `object[]` ([Details](angebotsvariante.md))

*   cannot be null

*   defined in: [Untitled schema](angebot-properties-varianten.md "https://conuti.de/bo4e/schemas/v1/bo/Angebot#/properties/varianten")

### varianten Type

`object[]` ([Details](angebotsvariante.md))
