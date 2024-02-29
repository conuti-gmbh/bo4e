## Untitled object in undefined Type

`object` ([Details](technischeressource.md))

# Untitled object in undefined Properties

| Property                                                    | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                                                |
| :---------------------------------------------------------- | :-------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                             | `string`  | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                                                        |
| [versionStruktur](#versionstruktur)                         | `string`  | Required | cannot be null | [Untitled schema](technischeressource-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/versionStruktur")                         |
| [ressourcenId](#ressourcenid)                               | `string`  | Optional | cannot be null | [Untitled schema](technischeressource-properties-ressourcenid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/ressourcenId")                               |
| [sparte](#sparte)                                           | `string`  | Optional | cannot be null | [Untitled schema](sparte.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sparte.schema.json#/properties/sparte")                                                                                     |
| [lokationszuordnung](#lokationszuordnung)                   | `string`  | Optional | cannot be null | [Untitled schema](lokationszuordnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationszuordnung.schema.json#/properties/lokationszuordnung")                                                 |
| [referenzMesslokation](#referenzmesslokation)               | `string`  | Optional | cannot be null | [Untitled schema](technischeressource-properties-referenzmesslokation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/referenzMesslokation")               |
| [referenzMarktlokation](#referenzmarktlokation)             | `string`  | Optional | cannot be null | [Untitled schema](technischeressource-properties-referenzmarktlokation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/referenzMarktlokation")             |
| [referenzNetzlokation](#referenznetzlokation)               | `string`  | Optional | cannot be null | [Untitled schema](technischeressource-properties-referenznetzlokation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/referenzNetzlokation")               |
| [referenzSteuerbareRessource](#referenzsteuerbareressource) | `string`  | Optional | cannot be null | [Untitled schema](technischeressource-properties-referenzsteuerbareressource.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/referenzSteuerbareRessource") |
| [nennleistung](#nennleistung)                               | `object`  | Optional | cannot be null | [Untitled schema](nennleistung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Nennleistung.schema.json#/properties/nennleistung")                                                                    |
| [speicherkapazitaet](#speicherkapazitaet)                   | `number`  | Optional | cannot be null | [Untitled schema](technischeressource-properties-speicherkapazitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/speicherkapazitaet")                   |
| [verbrauchsart](#verbrauchsart)                             | `string`  | Optional | cannot be null | [Untitled schema](verbrauchsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Verbrauchsart.schema.json#/properties/verbrauchsart")                                                                |
| [waermenutzung](#waermenutzung)                             | `string`  | Optional | cannot be null | [Untitled schema](waermenutzung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Waermenutzung.schema.json#/properties/waermenutzung")                                                                |
| [artEMobilitaet](#artemobilitaet)                           | `string`  | Optional | cannot be null | [Untitled schema](artemobilitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/ArtEmobilitaet.schema.json#/properties/artEMobilitaet")                                                             |
| [erzeugungsart](#erzeugungsart)                             | `string`  | Optional | cannot be null | [Untitled schema](erzeugungsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Erzeugungsart.schema.json#/properties/erzeugungsart")                                                                |
| [speicherart](#speicherart)                                 | `string`  | Optional | cannot be null | [Untitled schema](speicherart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Speicherart.schema.json#/properties/speicherart")                                                                      |
| [enwg](#enwg)                                               | `boolean` | Optional | cannot be null | [Untitled schema](technischeressource-properties-enwg.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/enwg")                                               |
| [inbetriebsetzungsdatum](#inbetriebsetzungsdatum)           | `string`  | Optional | cannot be null | [Untitled schema](inbetriebsetzung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Inbetriebsetzung.schema.json#/properties/inbetriebsetzungsdatum")                                                 |
| [einordnung](#einordnung)                                   | `string`  | Optional | cannot be null | [Untitled schema](ressourcewechselmoeglichkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/RessourceWechselmoeglichkeit.schema.json#/properties/einordnung")                                     |
| [weitereEinrichtung](#weitereeinrichtung)                   | `boolean` | Optional | cannot be null | [Untitled schema](technischeressource-properties-weitereeinrichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/weitereEinrichtung")                   |
| [art](#art)                                                 | `string`  | Optional | cannot be null | [Untitled schema](technischeressourceart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/TechnischeRessourceArt.schema.json#/properties/art")                                                        |

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

*   defined in: [Untitled schema](technischeressource-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## ressourcenId



`ressourcenId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](technischeressource-properties-ressourcenid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/ressourcenId")

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

## referenzMesslokation



`referenzMesslokation`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](technischeressource-properties-referenzmesslokation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/referenzMesslokation")

### referenzMesslokation Type

`string`

## referenzMarktlokation



`referenzMarktlokation`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](technischeressource-properties-referenzmarktlokation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/referenzMarktlokation")

### referenzMarktlokation Type

`string`

## referenzNetzlokation



`referenzNetzlokation`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](technischeressource-properties-referenznetzlokation.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/referenzNetzlokation")

### referenzNetzlokation Type

`string`

## referenzSteuerbareRessource



`referenzSteuerbareRessource`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](technischeressource-properties-referenzsteuerbareressource.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/referenzSteuerbareRessource")

### referenzSteuerbareRessource Type

`string`

## nennleistung



`nennleistung`

*   is optional

*   Type: `object` ([Details](nennleistung.md))

*   cannot be null

*   defined in: [Untitled schema](nennleistung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Nennleistung.schema.json#/properties/nennleistung")

### nennleistung Type

`object` ([Details](nennleistung.md))

## speicherkapazitaet



`speicherkapazitaet`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](technischeressource-properties-speicherkapazitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/speicherkapazitaet")

### speicherkapazitaet Type

`number`

## verbrauchsart



`verbrauchsart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](verbrauchsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Verbrauchsart.schema.json#/properties/verbrauchsart")

### verbrauchsart Type

`string`

### verbrauchsart Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value    | Explanation |
| :------- | :---------- |
| `"KL"`   |             |
| `"W"`    |             |
| `"EMOB"` |             |
| `"SB"`   |             |
| `"SW"`   |             |

## waermenutzung



`waermenutzung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](waermenutzung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Waermenutzung.schema.json#/properties/waermenutzung")

### waermenutzung Type

`string`

### waermenutzung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value               | Explanation |
| :------------------ | :---------- |
| `"SPEICHERHEIZUNG"` |             |
| `"WAERMEPUMPE"`     |             |
| `"DIREKTHEIZUNG"`   |             |

## artEMobilitaet



`artEMobilitaet`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](artemobilitaet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/ArtEmobilitaet.schema.json#/properties/artEMobilitaet")

### artEMobilitaet Type

`string`

### artEMobilitaet Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value  | Explanation |
| :----- | :---------- |
| `"WB"` |             |
| `"LS"` |             |
| `"LP"` |             |

## erzeugungsart



`erzeugungsart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](erzeugungsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Erzeugungsart.schema.json#/properties/erzeugungsart")

### erzeugungsart Type

`string`

### erzeugungsart Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                      | Explanation |
| :------------------------- | :---------- |
| `"EEG"`                    |             |
| `"KWK"`                    |             |
| `"EEG_DV"`                 |             |
| `"KWK_DV"`                 |             |
| `"WIND"`                   |             |
| `"SOLAR"`                  |             |
| `"KERNKRAFT"`              |             |
| `"WASSER"`                 |             |
| `"GEOTHERMIE"`             |             |
| `"BIOMASSE"`               |             |
| `"KOHLE"`                  |             |
| `"GAS"`                    |             |
| `"SONSTIGE"`               |             |
| `"SONSTIGE_EEG"`           |             |
| `"SONSTIGE_ERZEUGUNGSART"` |             |

## speicherart



`speicherart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](speicherart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Speicherart.schema.json#/properties/speicherart")

### speicherart Type

`string`

### speicherart Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                    | Explanation |
| :----------------------- | :---------- |
| `"WASSERSTOFFSPEICHER"`  |             |
| `"PUMPSPEICHER"`         |             |
| `"BATTERIESPEICHER"`     |             |
| `"SONSTIGE_SPEICHERART"` |             |

## enwg



`enwg`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](technischeressource-properties-enwg.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/enwg")

### enwg Type

`boolean`

## inbetriebsetzungsdatum



`inbetriebsetzungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](inbetriebsetzung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Inbetriebsetzung.schema.json#/properties/inbetriebsetzungsdatum")

### inbetriebsetzungsdatum Type

`string`

### inbetriebsetzungsdatum Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                          | Explanation |
| :----------------------------- | :---------- |
| `"INBETRIEBSETZUNG_NACH_2023"` |             |
| `"INBETRIEBSETZUN_VOR_2024"`   |             |

## einordnung



`einordnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](ressourcewechselmoeglichkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/RessourceWechselmoeglichkeit.schema.json#/properties/einordnung")

### einordnung Type

`string`

### einordnung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                          | Explanation |
| :--------------------------------------------- | :---------- |
| `"WECHSELMOEGLICHKEIT_EINMALIG_NOCH_MOEGLICH"` |             |
| `"WECHSELMOEGLICHKEIT_NICHT_MOEGLICH"`         |             |
| `"BEFRISTET_OHNE_WECHSELMOEGLICHKEIT"`         |             |
| `"WECHSEL_WURDE_DURCHGEFUEHRT"`                |             |

## weitereEinrichtung



`weitereEinrichtung`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](technischeressource-properties-weitereeinrichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/TechnischeRessource.schema.json#/properties/weitereEinrichtung")

### weitereEinrichtung Type

`boolean`

## art



`art`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](technischeressourceart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/TechnischeRessourceArt.schema.json#/properties/art")

### art Type

`string`

### art Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value              | Explanation |
| :----------------- | :---------- |
| `"STROMERZEUGUNG"` |             |
| `"STROMVERBRAUCH"` |             |
| `"SPEICHER"`       |             |
