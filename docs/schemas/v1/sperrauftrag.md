## Untitled object in undefined Type

`object` ([Details](sperrauftrag.md))

# Untitled object in undefined Properties

| Property                                                                  | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                                               |
| :------------------------------------------------------------------------ | :-------- | :------- | :------------- | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                           | `string`  | Required | cannot be null | [Untitled schema](sperrauftrag-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Sperraufrag.schema.json#/properties/boTyp")                                                           |
| [versionStruktur](#versionstruktur)                                       | `string`  | Required | cannot be null | [Untitled schema](sperrauftrag-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Sperraufrag.schema.json#/properties/versionStruktur")                                       |
| [treffpunkt](#treffpunkt)                                                 | `object`  | Optional | cannot be null | [Untitled schema](adresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Adresse.schema.json#/properties/treffpunkt")                                                                               |
| [sperrauftragsart](#sperrauftragsart)                                     | `string`  | Optional | cannot be null | [Untitled schema](sperrauftragsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sperrauftragsart.schema.json#/properties/sperrauftragsart")                                                      |
| [sperrauftragsstatus](#sperrauftragsstatus)                               | `string`  | Optional | cannot be null | [Untitled schema](auftragsstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Auftragsstatus.schema.json#/properties/sperrauftragsstatus")                                                       |
| [sperrauftragsablehnungsgrund](#sperrauftragsablehnungsgrund)             | `string`  | Optional | cannot be null | [Untitled schema](sperrauftragsablehngrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sperrauftragsablehngrund.schema.json#/properties/sperrauftragsablehnungsgrund")                          |
| [sperrauftragsverhinderungsgrund](#sperrauftragsverhinderungsgrund)       | `string`  | Optional | cannot be null | [Untitled schema](sperrauftragsverhinderungsgrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sperrauftragsverhinderungsgrund.schema.json#/properties/sperrauftragsverhinderungsgrund")         |
| [zaehlernummer](#zaehlernummer)                                           | `string`  | Optional | cannot be null | [Untitled schema](sperrauftrag-properties-zaehlernummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Sperraufrag.schema.json#/properties/zaehlernummer")                                           |
| [istVomGerichtsvollzieherAngeordnet](#istvomgerichtsvollzieherangeordnet) | `boolean` | Optional | cannot be null | [Untitled schema](sperrauftrag-properties-istvomgerichtsvollzieherangeordnet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Sperraufrag.schema.json#/properties/istVomGerichtsvollzieherAngeordnet") |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sperrauftrag-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Sperraufrag.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sperrauftrag-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Sperraufrag.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## treffpunkt



`treffpunkt`

*   is optional

*   Type: `object` ([Details](adresse.md))

*   cannot be null

*   defined in: [Untitled schema](adresse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Adresse.schema.json#/properties/treffpunkt")

### treffpunkt Type

`object` ([Details](adresse.md))

## sperrauftragsart



`sperrauftragsart`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sperrauftragsart.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sperrauftragsart.schema.json#/properties/sperrauftragsart")

### sperrauftragsart Type

`string`

### sperrauftragsart Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value          | Explanation |
| :------------- | :---------- |
| `"SPERREN"`    |             |
| `"ENTSPERREN"` |             |

## sperrauftragsstatus



`sperrauftragsstatus`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](auftragsstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Auftragsstatus.schema.json#/properties/sperrauftragsstatus")

### sperrauftragsstatus Type

`string`

### sperrauftragsstatus Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                                                     | Explanation |
| :------------------------------------------------------------------------ | :---------- |
| `"GESCHEITERT"`                                                           |             |
| `"ERFOLGREICH"`                                                           |             |
| `"LIEFERUNG_GEPLANT"`                                                     |             |
| `"GEPLANT"`                                                               |             |
| `"ZUGESTIMMT"`                                                            |             |
| `"WIDERSPROCHEN"`                                                         |             |
| `"STOERUNGSFREI"`                                                         |             |
| `"GESTOERT"`                                                              |             |
| `"FESTGESTELLTE_STOERUNG"`                                                |             |
| `"VERMUTETE_STOERUNG"`                                                    |             |
| `"ABGELEHNT"`                                                             |             |
| `"BEENDET"`                                                               |             |
| `"ANTWORT_DRITTER"`                                                       |             |
| `"BESTAETIGT"`                                                            |             |
| `"UMGESETZT"`                                                             |             |
| `"ENFG_STROMSPEICHER_UND_VERLUSTENERGIE"`                                 |             |
| `"ENFG_ELEKTRISCH_ANGETRIEBENE_WAERMEPUMPEN"`                             |             |
| `"ENFG_UMLAGEERHEBUNG_BEI_ANLAGEN_ZUR_VERSTROMUNG_VON_KUPPELGASEN"`       |             |
| `"ENFG_HERSTELLUNG_VON_GRUENEN_WASSERSTOFF"`                              |             |
| `"ENFG_STROMKOSTENINTENSIVE_UNTERNEHMEN"`                                 |             |
| `"ENFG_HERSTELLUNG_VON_WASSERSTOFF_IN_STROMKOSTENINTENSIVEN_UNTERNEHMEN"` |             |
| `"ENFG_SCHIENENBAHNEN"`                                                   |             |
| `"ENFG_ELEKTRISCHE_BETRIEBENE_BUSSEN_IM_LINIENVERKEHR"`                   |             |
| `"ENFG_LANDSTROMANLAGEN"`                                                 |             |

## sperrauftragsablehnungsgrund



`sperrauftragsablehnungsgrund`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sperrauftragsablehngrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sperrauftragsablehngrund.schema.json#/properties/sperrauftragsablehnungsgrund")

### sperrauftragsablehnungsgrund Type

`string`

### sperrauftragsablehnungsgrund Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                    | Explanation |
| :--------------------------------------- | :---------- |
| `"DUPLIKAT"`                             |             |
| `"FALSCHER_MSB"`                         |             |
| `"FALSCHE_SPANNUNGSEBENE"`               |             |
| `"WEITERE_MALO_BETROFFEN"`               |             |
| `"ANDERER_ABLEHNGRUND"`                  |             |
| `"FRISTVERLETZUNG_TERMINGEBUNDEN"`       |             |
| `"FRISTVERLETZUNG_NICHT_TERMINGEBUNDEN"` |             |
| `"ANDERER_FEHLER"`                       |             |
| `"LIEGT_BEREITS_VOR"`                    |             |
| `"ANDERER_ZUKUENFTIGER_LIEFERANT"`       |             |
| `"BESTAETIGTER_LIEFERBEGINN"`            |             |

## sperrauftragsverhinderungsgrund



`sperrauftragsverhinderungsgrund`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sperrauftragsverhinderungsgrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Sperrauftragsverhinderungsgrund.schema.json#/properties/sperrauftragsverhinderungsgrund")

### sperrauftragsverhinderungsgrund Type

`string`

### sperrauftragsverhinderungsgrund Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                       | Explanation |
| :------------------------------------------ | :---------- |
| `"RECHTLICHER_GRUND_FEHLT"`                 |             |
| `"AKTIVE_ZUTRITTSVERWEIGERUNG"`             |             |
| `"PASSIVE_ZUTRITTSVERWEIGERUNG"`            |             |
| `"ANDERER_VERHINDERUNGSGRUND"`              |             |
| `"TATSAECHLICHER_VERHINDERUNGSGRUND"`       |             |
| `"TECHNISCHER_VERHINDERUNGSGRUND"`          |             |
| `"ANSCHLUSSNUTZER_WURDE_NICHT_ANGETROFFEN"` |             |

## zaehlernummer



`zaehlernummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](sperrauftrag-properties-zaehlernummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Sperraufrag.schema.json#/properties/zaehlernummer")

### zaehlernummer Type

`string`

## istVomGerichtsvollzieherAngeordnet



`istVomGerichtsvollzieherAngeordnet`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](sperrauftrag-properties-istvomgerichtsvollzieherangeordnet.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Sperraufrag.schema.json#/properties/istVomGerichtsvollzieherAngeordnet")

### istVomGerichtsvollzieherAngeordnet Type

`boolean`
