## Untitled object in undefined Type

`object` ([Details](zaehlzeit.md))

# Untitled object in undefined Properties

| Property                                                  | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                        |
| :-------------------------------------------------------- | :-------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [code](#code)                                             | `string`  | Optional | cannot be null | [Untitled schema](zaehlzeit-properties-code.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/code")                                          |
| [haeufigkeit](#haeufigkeit)                               | `string`  | Optional | cannot be null | [Untitled schema](haeufigkeitzaehlzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/HaeufigkeitZaehlzeit.schema.json#/properties/haeufigkeit")                            |
| [uebermittelbarkeit](#uebermittelbarkeit)                 | `string`  | Optional | cannot be null | [Untitled schema](uebermittelbarkeitzaehlzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/UebermittelbarkeitZaehlzeit.schema.json#/properties/uebermittelbarkeit")       |
| [ermittlungLeistungsmaximum](#ermittlungleistungsmaximum) | `string`  | Optional | cannot be null | [Untitled schema](ermittlungleistungsmaximum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/ErmittlungLeistungsmaximum.schema.json#/properties/ermittlungLeistungsmaximum") |
| [istBestellbar](#istbestellbar)                           | `boolean` | Optional | cannot be null | [Untitled schema](zaehlzeit-properties-istbestellbar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/istBestellbar")                        |
| [typ](#typ)                                               | `string`  | Optional | cannot be null | [Untitled schema](zaehlzeitdefinitiontyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/ZaehlzeitdefinitionTyp.schema.json#/properties/typ")                                         |
| [beschreibungTyp](#beschreibungtyp)                       | `string`  | Optional | cannot be null | [Untitled schema](zaehlzeit-properties-beschreibungtyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/beschreibungTyp")                    |
| [aenderungszeitpunkt](#aenderungszeitpunkt)               | `string`  | Optional | cannot be null | [Untitled schema](zaehlzeit-properties-aenderungszeitpunkt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/aenderungszeitpunkt")            |
| [register](#register)                                     | `string`  | Optional | cannot be null | [Untitled schema](zaehlzeit-properties-register.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/register")                                  |

## code



`code`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlzeit-properties-code.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/code")

### code Type

`string`

## haeufigkeit



`haeufigkeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](haeufigkeitzaehlzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/HaeufigkeitZaehlzeit.schema.json#/properties/haeufigkeit")

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

*   defined in: [Untitled schema](uebermittelbarkeitzaehlzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/UebermittelbarkeitZaehlzeit.schema.json#/properties/uebermittelbarkeit")

### uebermittelbarkeit Type

`string`

### uebermittelbarkeit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                  | Explanation |
| :--------------------- | :---------- |
| `"ELEKTRONISCH"`       |             |
| `"NICHT_ELEKTRONISCH"` |             |

## ermittlungLeistungsmaximum



`ermittlungLeistungsmaximum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](ermittlungleistungsmaximum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/ErmittlungLeistungsmaximum.schema.json#/properties/ermittlungLeistungsmaximum")

### ermittlungLeistungsmaximum Type

`string`

### ermittlungLeistungsmaximum Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                | Explanation |
| :----------------------------------- | :---------- |
| `"VERWENDUNG_HOCHLASTFENSTER"`       |             |
| `"KEINE_VERWENDUNG_HOCHLASTFENSTER"` |             |

## istBestellbar



`istBestellbar`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](zaehlzeit-properties-istbestellbar.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/istBestellbar")

### istBestellbar Type

`boolean`

## typ



`typ`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlzeitdefinitiontyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/ZaehlzeitdefinitionTyp.schema.json#/properties/typ")

### typ Type

`string`

### typ Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                      | Explanation |
| :------------------------- | :---------- |
| `"WAERMEPUMPE"`            |             |
| `"NACHTSPEICHERHEIZUNG"`   |             |
| `"SCHWACHLASTZEITFENSTER"` |             |
| `"SONSTIGE"`               |             |
| `"HOCHLASTZEITFENSTER"`    |             |

## beschreibungTyp



`beschreibungTyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlzeit-properties-beschreibungtyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/beschreibungTyp")

### beschreibungTyp Type

`string`

## aenderungszeitpunkt



`aenderungszeitpunkt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlzeit-properties-aenderungszeitpunkt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/aenderungszeitpunkt")

### aenderungszeitpunkt Type

`string`

### aenderungszeitpunkt Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## register



`register`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlzeit-properties-register.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zaehlzeit.schema.json#/properties/register")

### register Type

`string`
