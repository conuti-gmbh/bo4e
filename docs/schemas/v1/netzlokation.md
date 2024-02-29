## Untitled object in undefined Type

`object` ([Details](netzlokation.md))

# Untitled object in undefined Properties

| Property                                                    | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                                |
| :---------------------------------------------------------- | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [boTyp](#botyp)                                             | `string`  | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                                        |
| [versionStruktur](#versionstruktur)                         | `string`  | Required | cannot be null | [Untitled schema](netzlokation-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/versionStruktur")                       |
| [netzlokationsId](#netzlokationsid)                         | `string`  | Optional | cannot be null | [Untitled schema](netzlokation-properties-netzlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/netzlokationsId")                       |
| [sparte](#sparte)                                           | `string`  | Optional | cannot be null | [Untitled schema](sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sparte.schema.json#/properties/sparte")                                                                     |
| [netzanschlussleistung](#netzanschlussleistung)             | `string`  | Optional | cannot be null | [Untitled schema](netzlokation-properties-netzanschlussleistung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/netzanschlussleistung")           |
| [grundzustaendigerMSBCodeNr](#grundzustaendigermsbcodenr)   | `string`  | Optional | cannot be null | [Untitled schema](netzlokation-properties-grundzustaendigermsbcodenr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/grundzustaendigerMSBCodeNr") |
| [steuerkanal](#steuerkanal)                                 | `boolean` | Optional | cannot be null | [Untitled schema](netzlokation-properties-steuerkanal.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/steuerkanal")                               |
| [lokationszuordnung](#lokationszuordnung)                   | `string`  | Optional | cannot be null | [Untitled schema](lokationszuordnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationszuordnung.schema.json#/properties/lokationszuordnung")                                 |
| [produktdatenRelevanteRolle](#produktdatenrelevanterolle)   | `string`  | Optional | cannot be null | [Untitled schema](marktrolle.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Marktrolle.schema.json#/properties/produktdatenRelevanteRolle")                                         |
| [auftraggebenderMarktpartner](#auftraggebendermarktpartner) | `object`  | Optional | cannot be null | [Untitled schema](marktteilnehmer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Marktteilnehmer.schema.json#/properties/auftraggebenderMarktpartner")                                |
| [konfigurationsprodukt](#konfigurationsprodukt)             | `string`  | Optional | cannot be null | [Untitled schema](netzlokation-properties-konfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/konfigurationsprodukt")           |
| [keinKonfigurationsprodukt](#keinkonfigurationsprodukt)     | `boolean` | Optional | cannot be null | [Untitled schema](netzlokation-properties-keinkonfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/keinKonfigurationsprodukt")   |
| [leistungskurvendefinition](#leistungskurvendefinition)     | `string`  | Optional | cannot be null | [Untitled schema](netzlokation-properties-leistungskurvendefinition.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/leistungskurvendefinition")   |
| [marktrollen](#marktrollen)                                 | `array`   | Optional | cannot be null | [Untitled schema](netzlokation-properties-marktrollen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/marktrollen")                               |
| [zaehlwerke](#zaehlwerke)                                   | `array`   | Optional | cannot be null | [Untitled schema](netzlokation-properties-zaehlwerke.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/zaehlwerke")                                 |
| [abrechnungsdaten](#abrechnungsdaten)                       | `array`   | Optional | cannot be null | [Untitled schema](netzlokation-properties-abrechnungsdaten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/abrechnungsdaten")                     |

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

*   defined in: [Untitled schema](netzlokation-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## netzlokationsId



`netzlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-netzlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/netzlokationsId")

### netzlokationsId Type

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

## netzanschlussleistung



`netzanschlussleistung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-netzanschlussleistung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/netzanschlussleistung")

### netzanschlussleistung Type

`string`

## grundzustaendigerMSBCodeNr



`grundzustaendigerMSBCodeNr`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-grundzustaendigermsbcodenr.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/grundzustaendigerMSBCodeNr")

### grundzustaendigerMSBCodeNr Type

`string`

## steuerkanal



`steuerkanal`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-steuerkanal.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/steuerkanal")

### steuerkanal Type

`boolean`

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

## konfigurationsprodukt



`konfigurationsprodukt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-konfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/konfigurationsprodukt")

### konfigurationsprodukt Type

`string`

## keinKonfigurationsprodukt



`keinKonfigurationsprodukt`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-keinkonfigurationsprodukt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/keinKonfigurationsprodukt")

### keinKonfigurationsprodukt Type

`boolean`

## leistungskurvendefinition



`leistungskurvendefinition`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-leistungskurvendefinition.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/leistungskurvendefinition")

### leistungskurvendefinition Type

`string`

## marktrollen



`marktrollen`

*   is optional

*   Type: `object[]` ([Details](marktteilnehmer.md))

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-marktrollen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/marktrollen")

### marktrollen Type

`object[]` ([Details](marktteilnehmer.md))

## zaehlwerke



`zaehlwerke`

*   is optional

*   Type: `object[]` ([Details](zaehlwerk.md))

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-zaehlwerke.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/zaehlwerke")

### zaehlwerke Type

`object[]` ([Details](zaehlwerk.md))

## abrechnungsdaten



`abrechnungsdaten`

*   is optional

*   Type: `object[]` ([Details](netznutzungsabrechnungsdaten.md))

*   cannot be null

*   defined in: [Untitled schema](netzlokation-properties-abrechnungsdaten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Netzlokation.schema.json#/properties/abrechnungsdaten")

### abrechnungsdaten Type

`object[]` ([Details](netznutzungsabrechnungsdaten.md))
