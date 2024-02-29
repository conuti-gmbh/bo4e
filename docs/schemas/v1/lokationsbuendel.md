## Untitled object in undefined Type

`object` ([Details](lokationsbuendel.md))

# Untitled object in undefined Properties

| Property                                                                            | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                                                                  |
| :---------------------------------------------------------------------------------- | :-------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                                     | `string`  | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                                                                          |
| [versionStruktur](#versionstruktur)                                                 | `string`  | Required | cannot be null | [Untitled schema](lokationsbuendel-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/versionStruktur")                                                 |
| [lokationsbuendelstrukturId](#lokationsbuendelstrukturid)                           | `string`  | Optional | cannot be null | [Untitled schema](lokationsbuendel-properties-lokationsbuendelstrukturid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/lokationsbuendelstrukturId")                           |
| [lokationsbuendelNummer](#lokationsbuendelnummer)                                   | `number`  | Optional | cannot be null | [Untitled schema](lokationsbuendel-properties-lokationsbuendelnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/lokationsbuendelNummer")                                   |
| [standardisierteLokationsbuendelstruktur](#standardisiertelokationsbuendelstruktur) | `boolean` | Optional | cannot be null | [Untitled schema](lokationsbuendel-properties-standardisiertelokationsbuendelstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/standardisierteLokationsbuendelstruktur") |
| [zuordnungObjectcode](#zuordnungobjectcode)                                         | `array`   | Optional | cannot be null | [Untitled schema](lokationsbuendel-properties-zuordnungobjectcode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/zuordnungObjectcode")                                         |

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

*   defined in: [Untitled schema](lokationsbuendel-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## lokationsbuendelstrukturId



`lokationsbuendelstrukturId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](lokationsbuendel-properties-lokationsbuendelstrukturid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/lokationsbuendelstrukturId")

### lokationsbuendelstrukturId Type

`string`

## lokationsbuendelNummer



`lokationsbuendelNummer`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](lokationsbuendel-properties-lokationsbuendelnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/lokationsbuendelNummer")

### lokationsbuendelNummer Type

`number`

## standardisierteLokationsbuendelstruktur



`standardisierteLokationsbuendelstruktur`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](lokationsbuendel-properties-standardisiertelokationsbuendelstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/standardisierteLokationsbuendelstruktur")

### standardisierteLokationsbuendelstruktur Type

`boolean`

## zuordnungObjectcode



`zuordnungObjectcode`

*   is optional

*   Type: `object[]` ([Details](zuordnungobjectcode.md))

*   cannot be null

*   defined in: [Untitled schema](lokationsbuendel-properties-zuordnungobjectcode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Lokationsbuendel.schema.json#/properties/zuordnungObjectcode")

### zuordnungObjectcode Type

`object[]` ([Details](zuordnungobjectcode.md))
