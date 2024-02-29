## Untitled object in undefined Type

`object` ([Details](reklamation.md))

# Untitled object in undefined Properties

| Property                                                  | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                       |
| :-------------------------------------------------------- | :------- | :------- | :------------- | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                           | `string` | Required | cannot be null | [Untitled schema](reklamation-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/boTyp")                                    |
| [versionStruktur](#versionstruktur)                       | `string` | Required | cannot be null | [Untitled schema](reklamation-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/versionStruktur")                |
| [lokationsId](#lokationsid)                               | `string` | Optional | cannot be null | [Untitled schema](reklamation-properties-lokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/lokationsId")                        |
| [lokationsTyp](#lokationstyp)                             | `string` | Optional | cannot be null | [Untitled schema](lokationstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationstyp.schema.json#/properties/lokationsTyp")                                          |
| [obiskennzahl](#obiskennzahl)                             | `string` | Optional | cannot be null | [Untitled schema](reklamation-properties-obiskennzahl.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/obiskennzahl")                      |
| [zeitraumMesswertanfrage](#zeitraummesswertanfrage)       | `object` | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zeitraum.schema.json#/properties/zeitraumMesswertanfrage")                                        |
| [reklamationsgrund](#reklamationsgrund)                   | `string` | Optional | cannot be null | [Untitled schema](reklamationsgrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Reklamationsgrund.schema.json#/properties/reklamationsgrund")                           |
| [reklamationsgrundBemerkung](#reklamationsgrundbemerkung) | `object` | Optional | cannot be null | [Untitled schema](reklamationsgrundbemerkung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/ReklamationsgrundBemerkung.schema.json#/properties/reklamationsgrundBemerkung") |
| [konfiguration](#konfiguration)                           | `string` | Optional | cannot be null | [Untitled schema](reklamation-properties-konfiguration.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/konfiguration")                    |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](reklamation-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](reklamation-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## lokationsId



`lokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](reklamation-properties-lokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/lokationsId")

### lokationsId Type

`string`

## lokationsTyp



`lokationsTyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](lokationstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationstyp.schema.json#/properties/lokationsTyp")

### lokationsTyp Type

`string`

### lokationsTyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                    | Explanation |
| :----------------------- | :---------- |
| `"MALO"`                 |             |
| `"MELO"`                 |             |
| `"NELO"`                 |             |
| `"TECHNISCHE_RESSOURCE"` |             |

## obiskennzahl



`obiskennzahl`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](reklamation-properties-obiskennzahl.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/obiskennzahl")

### obiskennzahl Type

`string`

## zeitraumMesswertanfrage



`zeitraumMesswertanfrage`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Zeitraum.schema.json#/properties/zeitraumMesswertanfrage")

### zeitraumMesswertanfrage Type

`object` ([Details](zeitraum.md))

## reklamationsgrund



`reklamationsgrund`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](reklamationsgrund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Reklamationsgrund.schema.json#/properties/reklamationsgrund")

### reklamationsgrund Type

`string`

### reklamationsgrund Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                             | Explanation |
| :------------------------------------------------ | :---------- |
| `"WERTE_ZU_HOCH"`                                 |             |
| `"WERTE_ZU_NIEDRIG"`                              |             |
| `"WERTE_FEHLEN"`                                  |             |
| `"KONFIGURATION_WIRKT_NICHT"`                     |             |
| `"KONFIGURATION_WIRKT_TEILWEISE"`                 |             |
| `"WERTE_WERDEN_NICHT_NACH_VORGABEN_UEBERMITTELT"` |             |
| `"UEBERSICHT_FEHLT"`                              |             |
| `"UEBERSICHT_UNPLAUSIBEL"`                        |             |
| `"AUSGEROLLTE_DEFINITION_FEHLT"`                  |             |
| `"AUSGEROLLTE_DEFINITION_UNPLAUSIBEL"`            |             |

## reklamationsgrundBemerkung



`reklamationsgrundBemerkung`

*   is optional

*   Type: `object` ([Details](reklamationsgrundbemerkung.md))

*   cannot be null

*   defined in: [Untitled schema](reklamationsgrundbemerkung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/ReklamationsgrundBemerkung.schema.json#/properties/reklamationsgrundBemerkung")

### reklamationsgrundBemerkung Type

`object` ([Details](reklamationsgrundbemerkung.md))

## konfiguration



`konfiguration`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](reklamation-properties-konfiguration.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Reklamation.schema.json#/properties/konfiguration")

### konfiguration Type

`string`
