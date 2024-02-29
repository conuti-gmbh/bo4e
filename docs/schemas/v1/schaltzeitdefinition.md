## Untitled object in undefined Type

`object` ([Details](schaltzeitdefinition.md))

# Untitled object in undefined Properties

| Property                            | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                          |
| :---------------------------------- | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [boTyp](#botyp)                     | `string` | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                                  |
| [versionStruktur](#versionstruktur) | `string` | Required | cannot be null | [Untitled schema](schaltzeitdefinition-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/versionStruktur") |
| [beginndatum](#beginndatum)         | `string` | Optional | cannot be null | [Untitled schema](schaltzeitdefinition-properties-beginndatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/beginndatum")         |
| [endedatum](#endedatum)             | `string` | Optional | cannot be null | [Untitled schema](schaltzeitdefinition-properties-endedatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/endedatum")             |
| [version](#version)                 | `string` | Optional | cannot be null | [Untitled schema](schaltzeitdefinition-properties-version.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/version")                 |
| [code](#code)                       | `string` | Optional | cannot be null | [Untitled schema](schaltzeitdefinition-properties-code.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/code")                       |
| [notwendigkeit](#notwendigkeit)     | `string` | Optional | cannot be null | [Untitled schema](definitionennotwendigkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/DefinitionenNotwendigkeit.schema.json#/properties/notwendigkeit")                  |
| [schaltzeiten](#schaltzeiten)       | `array`  | Optional | cannot be null | [Untitled schema](schaltzeitdefinition-properties-schaltzeiten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/schaltzeiten")       |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")

### boTyp Type

`string`

### boTyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                           | Explanation |
| :------------------------------ | :---------- |
| `"ANSPRECHPARTNER"`             |             |
| `"AVIS"`                        |             |
| `"ENERGIEMENGE"`                |             |
| `"GESCHAEFTSOBJEKT"`            |             |
| `"GESCHAEFTSPARTNER"`           |             |
| `"MARKTLOKATION"`               |             |
| `"MARKTTEILNEHMER"`             |             |
| `"MESSLOKATION"`                |             |
| `"ZAEHLER"`                     |             |
| `"KOSTEN"`                      |             |
| `"TARIF"`                       |             |
| `"PREISBLATT"`                  |             |
| `"PREISBLATTNETZNUTZUNG"`       |             |
| `"PREISBLATTMESSUNG"`           |             |
| `"PREISBLATTUMLAGEN"`           |             |
| `"PREISBLATTDIENSTLEISTUNG"`    |             |
| `"PREISBLATTKONZESSIONSABGABE"` |             |
| `"ZEITREIHE"`                   |             |
| `"LASTGANG"`                    |             |
| `"HANDELSUNSTIMMIGKEIT"`        |             |
| `"ANFRAGE"`                     |             |
| `"AUFTRAG"`                     |             |
| `"STATUSMITTEILUNG"`            |             |
| `"BERECHNUNGSFORMEL"`           |             |
| `"RECHNUNG"`                    |             |
| `"BILANZIERUNG"`                |             |
| `"NETZNUTZUNGSVERTRAG"`         |             |
| `"MESSSTELLENBETRIEBSVERTRAG"`  |             |
| `"ENERGIELIEFERVERTRAG"`        |             |
| `"SPERRAUFTRAG"`                |             |
| `"ANGEBOT"`                     |             |
| `"TRANCHE"`                     |             |
| `"KOMMUNIKATIONSDATEN"`         |             |
| `"ZAEHLZEITDEFINITION"`         |             |
| `"SCHALTZEITDEFINITION"`        |             |
| `"LEISTUNGSKURVENDEFINITION"`   |             |
| `"NETZLOKATION"`                |             |
| `"STEUERBARE_RESSOURCE"`        |             |
| `"TECHNISCHE_RESSOURCE"`        |             |
| `"AD_HOC_STEUERKANAL"`          |             |
| `"LOKATIONSBUENDEL"`            |             |
| `"WERTE_NACH_TYP2"`             |             |
| `"REKLAMATION"`                 |             |

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schaltzeitdefinition-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## beginndatum



`beginndatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schaltzeitdefinition-properties-beginndatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/beginndatum")

### beginndatum Type

`string`

### beginndatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## endedatum



`endedatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schaltzeitdefinition-properties-endedatum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/endedatum")

### endedatum Type

`string`

### endedatum Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## version



`version`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schaltzeitdefinition-properties-version.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/version")

### version Type

`string`

### version Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## code



`code`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](schaltzeitdefinition-properties-code.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/code")

### code Type

`string`

## notwendigkeit



`notwendigkeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](definitionennotwendigkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/DefinitionenNotwendigkeit.schema.json#/properties/notwendigkeit")

### notwendigkeit Type

`string`

### notwendigkeit Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                            | Explanation |
| :----------------------------------------------- | :---------- |
| `"ZAEHLZEITDEFINITIONEN_WERDEN_VERWENDET"`       |             |
| `"ZAEHLZEITDEFINITIONEN_WERDEN_NICHT_VERWENDET"` |             |
| `"DEFINITIONEN_WERDEN_VERWENDET"`                |             |
| `"DEFINITIONEN_WERDEN_NICHT_VERWENDET"`          |             |

## schaltzeiten



`schaltzeiten`

*   is optional

*   Type: `object[]` ([Details](schaltzeit.md))

*   cannot be null

*   defined in: [Untitled schema](schaltzeitdefinition-properties-schaltzeiten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Schaltzeitdefinition.schema.json#/properties/schaltzeiten")

### schaltzeiten Type

`object[]` ([Details](schaltzeit.md))
