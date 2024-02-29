## Untitled object in undefined Type

`object` ([Details](steuerbareressource.md))

# Untitled object in undefined Properties

| Property                                                    | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                                    |
| :---------------------------------------------------------- | :------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                             | `string` | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                                            |
| [versionStruktur](#versionstruktur)                         | `string` | Required | cannot be null | [Untitled schema](steuerbareressource-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/SteuerbareRessource.schema.json#/properties/versionStruktur")             |
| [ressourcenId](#ressourcenid)                               | `string` | Optional | cannot be null | [Untitled schema](steuerbareressource-properties-ressourcenid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/SteuerbareRessource.schema.json#/properties/ressourcenId")                   |
| [sparte](#sparte)                                           | `string` | Optional | cannot be null | [Untitled schema](sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sparte.schema.json#/properties/sparte")                                                                         |
| [lokationszuordnung](#lokationszuordnung)                   | `string` | Optional | cannot be null | [Untitled schema](lokationszuordnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationszuordnung.schema.json#/properties/lokationszuordnung")                                     |
| [konfigurationsprodukt](#konfigurationsprodukt)             | `string` | Optional | cannot be null | [Untitled schema](steuerbareressource-properties-konfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/SteuerbareRessource.schema.json#/properties/konfigurationsprodukt") |
| [steuerkanal](#steuerkanal)                                 | `string` | Optional | cannot be null | [Untitled schema](steuerkanal.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Steuerkanal.schema.json#/properties/steuerkanal")                                                          |
| [produktdatenRelevanteRolle](#produktdatenrelevanterolle)   | `string` | Optional | cannot be null | [Untitled schema](marktrolle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Marktrolle.schema.json#/properties/produktdatenRelevanteRolle")                                             |
| [auftraggebenderMarktpartner](#auftraggebendermarktpartner) | `object` | Optional | cannot be null | [Untitled schema](marktteilnehmer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Marktteilnehmer.schema.json#/properties/auftraggebenderMarktpartner")                                    |
| [zugeordneteDefinition](#zugeordnetedefinition)             | `object` | Optional | cannot be null | [Untitled schema](zugeordnetedefinition.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/ZugeordneteDefinition.schema.json#/properties/zugeordneteDefinition")                             |
| [marktrollen](#marktrollen)                                 | `array`  | Optional | cannot be null | [Untitled schema](steuerbareressource-properties-marktrollen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/SteuerbareRessource.schema.json#/properties/marktrollen")                     |

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

*   defined in: [Untitled schema](steuerbareressource-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/SteuerbareRessource.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## ressourcenId



`ressourcenId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](steuerbareressource-properties-ressourcenid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/SteuerbareRessource.schema.json#/properties/ressourcenId")

### ressourcenId Type

`string`

## sparte



`sparte`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sparte.schema.json#/properties/sparte")

### sparte Type

`string`

### sparte Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value          | Explanation |
| :------------- | :---------- |
| `"STROM"`      |             |
| `"GAS"`        |             |
| `"FERNWAERME"` |             |
| `"NAHWAERME"`  |             |
| `"WASSER"`     |             |
| `"ABWASSER"`   |             |

## lokationszuordnung



`lokationszuordnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](lokationszuordnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationszuordnung.schema.json#/properties/lokationszuordnung")

### lokationszuordnung Type

`string`

### lokationszuordnung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value            | Explanation |
| :--------------- | :---------- |
| `"UNVERAENDERT"` |             |
| `"BEGINNT"`      |             |
| `"ENDET"`        |             |

## konfigurationsprodukt



`konfigurationsprodukt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](steuerbareressource-properties-konfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/SteuerbareRessource.schema.json#/properties/konfigurationsprodukt")

### konfigurationsprodukt Type

`string`

## steuerkanal



`steuerkanal`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](steuerkanal.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Steuerkanal.schema.json#/properties/steuerkanal")

### steuerkanal Type

`string`

### steuerkanal Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value       | Explanation |
| :---------- | :---------- |
| `"AN_AUS"`  |             |
| `"GESTUFT"` |             |

## produktdatenRelevanteRolle



`produktdatenRelevanteRolle`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](marktrolle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Marktrolle.schema.json#/properties/produktdatenRelevanteRolle")

### produktdatenRelevanteRolle Type

`string`

### produktdatenRelevanteRolle Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value               | Explanation |
| :------------------ | :---------- |
| `"NB"`              |             |
| `"LF"`              |             |
| `"MSB"`             |             |
| `"MSBA"`            |             |
| `"GMSB"`            |             |
| `"MDL"`             |             |
| `"DL"`              |             |
| `"BKV"`             |             |
| `"BKO"`             |             |
| `"UENB"`            |             |
| `"KUNDE-SELBST-NN"` |             |
| `"MGV"`             |             |
| `"EIV"`             |             |
| `"RB"`              |             |
| `"KUNDE"`           |             |
| `"INTERESSENT"`     |             |
| `"KN"`              |             |
| `"UBA"`             |             |
| `"BIKO"`            |             |
| `"ESA"`             |             |

## auftraggebenderMarktpartner



`auftraggebenderMarktpartner`

*   is optional

*   Type: `object` ([Details](marktteilnehmer.md))

*   cannot be null

*   defined in: [Untitled schema](marktteilnehmer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Marktteilnehmer.schema.json#/properties/auftraggebenderMarktpartner")

### auftraggebenderMarktpartner Type

`object` ([Details](marktteilnehmer.md))

## zugeordneteDefinition



`zugeordneteDefinition`

*   is optional

*   Type: `object` ([Details](zugeordnetedefinition.md))

*   cannot be null

*   defined in: [Untitled schema](zugeordnetedefinition.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/ZugeordneteDefinition.schema.json#/properties/zugeordneteDefinition")

### zugeordneteDefinition Type

`object` ([Details](zugeordnetedefinition.md))

## marktrollen



`marktrollen`

*   is optional

*   Type: `object[]` ([Details](marktteilnehmer.md))

*   cannot be null

*   defined in: [Untitled schema](steuerbareressource-properties-marktrollen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/SteuerbareRessource.schema.json#/properties/marktrollen")

### marktrollen Type

`object[]` ([Details](marktteilnehmer.md))
