## Untitled object in undefined Type

`object` ([Details](preisblatt.md))

# Untitled object in undefined Properties

| Property                                  | Type     | Required | Nullable       | Defined by                                                                                                                                      |
| :---------------------------------------- | :------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                           | `string` | Required | cannot be null | [Untitled schema](preisblatt-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/boTyp")                           |
| [versionStruktur](#versionstruktur)       | `string` | Required | cannot be null | [Untitled schema](preisblatt-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/versionStruktur")       |
| [bezeichnung](#bezeichnung)               | `string` | Optional | cannot be null | [Untitled schema](preisblatt-properties-bezeichnung.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/bezeichnung")               |
| [gueltigkeit](#gueltigkeit)               | `object` | Optional | cannot be null | [Untitled schema](zeitraum.md "https://conuti.de/bo4e/schemas/v1/com/Zeitraum#/properties/gueltigkeit")                                         |
| [preisstatus](#preisstatus)               | `array`  | Optional | cannot be null | [Untitled schema](preisstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Preisstatus#/properties/preisstatus")                                  |
| [sparte](#sparte)                         | `array`  | Optional | cannot be null | [Untitled schema](sparte.md "https://conuti.de/bo4e/schemas/v1/enum/Sparte#/properties/sparte")                                                 |
| [bilanzierungsdatum](#bilanzierungsdatum) | `string` | Optional | cannot be null | [Untitled schema](preisblatt-properties-bilanzierungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/bilanzierungsdatum") |
| [regelzone](#regelzone)                   | `string` | Optional | cannot be null | [Untitled schema](preisblatt-properties-regelzone.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/regelzone")                   |
| [preispositionen](#preispositionen)       | `array`  | Optional | cannot be null | [Untitled schema](preisblatt-properties-preispositionen.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/preispositionen")       |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/versionStruktur")

### versionStruktur Type

`string`

## bezeichnung



`bezeichnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-bezeichnung.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/bezeichnung")

### bezeichnung Type

`string`

## gueltigkeit



`gueltigkeit`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://conuti.de/bo4e/schemas/v1/com/Zeitraum#/properties/gueltigkeit")

### gueltigkeit Type

`object` ([Details](zeitraum.md))

## preisstatus



`preisstatus`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](preisstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Preisstatus#/properties/preisstatus")

### preisstatus Type

`string[]`

## sparte



`sparte`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](sparte.md "https://conuti.de/bo4e/schemas/v1/enum/Sparte#/properties/sparte")

### sparte Type

`string[]`

## bilanzierungsdatum



`bilanzierungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-bilanzierungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/bilanzierungsdatum")

### bilanzierungsdatum Type

`string`

## regelzone



`regelzone`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-regelzone.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/regelzone")

### regelzone Type

`string`

## preispositionen



`preispositionen`

*   is optional

*   Type: `object[]` ([Details](preisposition.md))

*   cannot be null

*   defined in: [Untitled schema](preisblatt-properties-preispositionen.md "https://conuti.de/bo4e/schemas/v1/bo/Preisblatt#/properties/preispositionen")

### preispositionen Type

`object[]` ([Details](preisposition.md))
