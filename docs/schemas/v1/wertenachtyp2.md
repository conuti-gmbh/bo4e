## Untitled object in undefined Type

`object` ([Details](wertenachtyp2.md))

# Untitled object in undefined Properties

| Property                                                                    | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                                                   |
| :-------------------------------------------------------------------------- | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                             | `string` | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                                                           |
| [versionStruktur](#versionstruktur)                                         | `string` | Required | cannot be null | [Untitled schema](wertenachtyp2-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/WerteNachTyp2.schema.json#/properties/versionStruktur")                                        |
| [konfigurationsprodukt](#konfigurationsprodukt)                             | `string` | Optional | cannot be null | [Untitled schema](wertenachtyp2-properties-konfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/WerteNachTyp2.schema.json#/properties/konfigurationsprodukt")                            |
| [messprodukt](#messprodukt)                                                 | `string` | Optional | cannot be null | [Untitled schema](wertenachtyp2-properties-messprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/WerteNachTyp2.schema.json#/properties/messprodukt")                                                |
| [zieladresse](#zieladresse)                                                 | `object` | Optional | cannot be null | [Untitled schema](zieladresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zieladresse.schema.json#/properties/zieladresse")                                                                          |
| [aussteller](#aussteller)                                                   | `object` | Optional | cannot be null | [Untitled schema](aussteller.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Aussteller.schema.json#/properties/aussteller")                                                                             |
| [zertifikatsNutzer](#zertifikatsnutzer)                                     | `object` | Optional | cannot be null | [Untitled schema](zertifikatsnutzer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/ZertifikatsNutzer.schema.json#/properties/zertifikatsNutzer")                                                        |
| [aenderungsMoeglichkeitKonfiguration](#aenderungsmoeglichkeitkonfiguration) | `string` | Optional | cannot be null | [Untitled schema](aenderungsmoeglichkeitkonfiguration.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/AenderungsmoeglichkeitKonfiguration.schema.json#/properties/aenderungsMoeglichkeitKonfiguration") |
| [schwellWerte](#schwellwerte)                                               | `array`  | Optional | cannot be null | [Untitled schema](wertenachtyp2-properties-schwellwerte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/WerteNachTyp2.schema.json#/properties/schwellWerte")                                              |

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

*   defined in: [Untitled schema](wertenachtyp2-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/WerteNachTyp2.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## konfigurationsprodukt



`konfigurationsprodukt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](wertenachtyp2-properties-konfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/WerteNachTyp2.schema.json#/properties/konfigurationsprodukt")

### konfigurationsprodukt Type

`string`

## messprodukt



`messprodukt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](wertenachtyp2-properties-messprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/WerteNachTyp2.schema.json#/properties/messprodukt")

### messprodukt Type

`string`

## zieladresse



`zieladresse`

*   is optional

*   Type: `object` ([Details](zieladresse.md))

*   cannot be null

*   defined in: [Untitled schema](zieladresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zieladresse.schema.json#/properties/zieladresse")

### zieladresse Type

`object` ([Details](zieladresse.md))

## aussteller



`aussteller`

*   is optional

*   Type: `object` ([Details](aussteller.md))

*   cannot be null

*   defined in: [Untitled schema](aussteller.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Aussteller.schema.json#/properties/aussteller")

### aussteller Type

`object` ([Details](aussteller.md))

## zertifikatsNutzer



`zertifikatsNutzer`

*   is optional

*   Type: `object` ([Details](zertifikatsnutzer.md))

*   cannot be null

*   defined in: [Untitled schema](zertifikatsnutzer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/ZertifikatsNutzer.schema.json#/properties/zertifikatsNutzer")

### zertifikatsNutzer Type

`object` ([Details](zertifikatsnutzer.md))

## aenderungsMoeglichkeitKonfiguration



`aenderungsMoeglichkeitKonfiguration`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](aenderungsmoeglichkeitkonfiguration.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/AenderungsmoeglichkeitKonfiguration.schema.json#/properties/aenderungsMoeglichkeitKonfiguration")

### aenderungsMoeglichkeitKonfiguration Type

`string`

### aenderungsMoeglichkeitKonfiguration Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                  | Explanation |
| :--------------------- | :---------- |
| `"ERFORDERLICH"`       |             |
| `"NICHT_ERFORDERLICH"` |             |

## schwellWerte



`schwellWerte`

*   is optional

*   Type: `object[]` ([Details](schwellwert.md))

*   cannot be null

*   defined in: [Untitled schema](wertenachtyp2-properties-schwellwerte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/WerteNachTyp2.schema.json#/properties/schwellWerte")

### schwellWerte Type

`object[]` ([Details](schwellwert.md))
