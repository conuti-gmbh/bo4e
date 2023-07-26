## Untitled object in undefined Type

`object` ([Details](berechnungsformel.md))

# Untitled object in undefined Properties

| Property                              | Type      | Required | Nullable       | Defined by                                                                                                                                                |
| :------------------------------------ | :-------- | :------- | :------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                       | `string`  | Required | cannot be null | [Untitled schema](berechnungsformel-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/boTyp")                       |
| [versionStruktur](#versionstruktur)   | `string`  | Required | cannot be null | [Untitled schema](berechnungsformel-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/versionStruktur")   |
| [beginndatum](#beginndatum)           | `string`  | Optional | cannot be null | [Untitled schema](berechnungsformel-properties-beginndatum.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/beginndatum")           |
| [notwendigkeit](#notwendigkeit)       | `array`   | Optional | cannot be null | [Untitled schema](berechnungsformelnotwendigkeit.md "https://conuti.de/bo4e/schemas/v1/enum/BerechnungsformelNotwendigkeit#/properties/notwendigkeit")    |
| [lieferrichtung](#lieferrichtung)     | `array`   | Optional | cannot be null | [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/lieferrichtung")                                 |
| [rechenschrittId](#rechenschrittid)   | `integer` | Optional | cannot be null | [Untitled schema](berechnungsformel-properties-rechenschrittid.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/rechenschrittId")   |
| [rechenschritt](#rechenschritt)       | `object`  | Optional | cannot be null | [Untitled schema](rechenschritt.md "https://conuti.de/bo4e/schemas/v1/com/Rechenschritt#/properties/rechenschritt")                                       |
| [rechenschritte](#rechenschritte)     | `array`   | Optional | cannot be null | [Untitled schema](berechnungsformel-properties-rechenschritte.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/rechenschritte")     |
| [verwendungszweck](#verwendungszweck) | `array`   | Optional | cannot be null | [Untitled schema](berechnungsformel-properties-verwendungszweck.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/verwendungszweck") |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/versionStruktur")

### versionStruktur Type

`string`

## beginndatum



`beginndatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-beginndatum.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/beginndatum")

### beginndatum Type

`string`

## notwendigkeit



`notwendigkeit`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformelnotwendigkeit.md "https://conuti.de/bo4e/schemas/v1/enum/BerechnungsformelNotwendigkeit#/properties/notwendigkeit")

### notwendigkeit Type

`string[]`

## lieferrichtung



`lieferrichtung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/lieferrichtung")

### lieferrichtung Type

`string[]`

## rechenschrittId



`rechenschrittId`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-rechenschrittid.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/rechenschrittId")

### rechenschrittId Type

`integer`

## rechenschritt



`rechenschritt`

*   is optional

*   Type: `object` ([Details](rechenschritt.md))

*   cannot be null

*   defined in: [Untitled schema](rechenschritt.md "https://conuti.de/bo4e/schemas/v1/com/Rechenschritt#/properties/rechenschritt")

### rechenschritt Type

`object` ([Details](rechenschritt.md))

## rechenschritte



`rechenschritte`

*   is optional

*   Type: `object[]` ([Details](rechenschritt.md))

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-rechenschritte.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/rechenschritte")

### rechenschritte Type

`object[]` ([Details](rechenschritt.md))

## verwendungszweck



`verwendungszweck`

*   is optional

*   Type: `object[]` ([Details](verwendungszweck.md))

*   cannot be null

*   defined in: [Untitled schema](berechnungsformel-properties-verwendungszweck.md "https://conuti.de/bo4e/schemas/v1/bo/Berechnungsformel#/properties/verwendungszweck")

### verwendungszweck Type

`object[]` ([Details](verwendungszweck.md))
