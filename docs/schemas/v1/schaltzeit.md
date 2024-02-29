## Untitled object in undefined Type

`object` ([Details](schaltzeit.md))

# Untitled object in undefined Properties

| Property                                        | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                       |
| :---------------------------------------------- | :------- | :------- | :------------- | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [code](#code)                                   | `string` | Optional | cannot be null | [Untitled schema](schaltzeit-properties-code.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Leistungskurve.schema.json#/properties/code")                                   |
| [aenderungszeitpunkt](#aenderungszeitpunkt)     | `string` | Optional | cannot be null | [Untitled schema](schaltzeit-properties-aenderungszeitpunkt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Leistungskurve.schema.json#/properties/aenderungszeitpunkt")     |
| [haeufigkeit](#haeufigkeit)                     | `string` | Optional | cannot be null | [Untitled schema](haeufigkeitschaltzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/HaeufigkeitSchaltzeit.schema.json#/properties/haeufigkeit")                         |
| [uebermittelbarkeit](#uebermittelbarkeit)       | `string` | Optional | cannot be null | [Untitled schema](uebermittelbarkeitschaltzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/UebermittelbarkeitSchaltzeit.schema.json#/properties/uebermittelbarkeit")    |
| [schalthandlung](#schalthandlung)               | `string` | Optional | cannot be null | [Untitled schema](schalthandlung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Schalthandlung.schema.json#/properties/schalthandlung")                                    |
| [konfigurationsprodukt](#konfigurationsprodukt) | `string` | Optional | cannot be null | [Untitled schema](schaltzeit-properties-konfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Leistungskurve.schema.json#/properties/konfigurationsprodukt") |

## code



`code`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schaltzeit-properties-code.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Leistungskurve.schema.json#/properties/code")

### code Type

`string`

## aenderungszeitpunkt



`aenderungszeitpunkt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schaltzeit-properties-aenderungszeitpunkt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Leistungskurve.schema.json#/properties/aenderungszeitpunkt")

### aenderungszeitpunkt Type

`string`

### aenderungszeitpunkt Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## haeufigkeit



`haeufigkeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](haeufigkeitschaltzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/HaeufigkeitSchaltzeit.schema.json#/properties/haeufigkeit")

### haeufigkeit Type

`string`

### haeufigkeit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value         | Explanation |
| :------------ | :---------- |
| `"EINMALIG"`  |             |
| `"JAEHRLICH"` |             |

## uebermittelbarkeit



`uebermittelbarkeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](uebermittelbarkeitschaltzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/UebermittelbarkeitSchaltzeit.schema.json#/properties/uebermittelbarkeit")

### uebermittelbarkeit Type

`string`

### uebermittelbarkeit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                  | Explanation |
| :--------------------- | :---------- |
| `"ELEKTRONISCH"`       |             |
| `"NICHT_ELEKTRONISCH"` |             |

## schalthandlung



`schalthandlung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schalthandlung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Schalthandlung.schema.json#/properties/schalthandlung")

### schalthandlung Type

`string`

### schalthandlung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value            | Explanation |
| :--------------- | :---------- |
| `"LEISTUNG_AN"`  |             |
| `"LEISTUNG_AUS"` |             |

## konfigurationsprodukt



`konfigurationsprodukt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schaltzeit-properties-konfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Leistungskurve.schema.json#/properties/konfigurationsprodukt")

### konfigurationsprodukt Type

`string`
