## Untitled object in undefined Type

`object` ([Details](statusmitteilung.md))

# Untitled object in undefined Properties

| Property                            | Type     | Required | Nullable       | Defined by                                                                                                                                                                                         |
| :---------------------------------- | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                     | `array`  | Required | cannot be null | [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")                                                          |
| [versionStruktur](#versionstruktur) | `string` | Required | cannot be null | [Untitled schema](statusmitteilung-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusmitteilung.schema.json#/properties/versionStruktur") |
| [statusObjekt](#statusobjekt)       | `array`  | Optional | cannot be null | [Untitled schema](statusobjekt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Statusobjekt.schema.json#/properties/statusObjekt")                                     |
| [statusanlass](#statusanlass)       | `array`  | Optional | cannot be null | [Untitled schema](status.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Status.schema.json#/properties/statusanlass")                                                 |
| [auftragsstatus](#auftragsstatus)   | `array`  | Optional | cannot be null | [Untitled schema](auftragsstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Auftragsstatus.schema.json#/properties/auftragsstatus")                               |
| [positionsdaten](#positionsdaten)   | `array`  | Optional | cannot be null | [Untitled schema](statusmitteilung-properties-positionsdaten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusmitteilung.schema.json#/properties/positionsdaten")   |

## boTyp



`boTyp`

*   is required

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BOTyp.schema.json#/properties/boTyp")

### boTyp Type

`string[]`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](statusmitteilung-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusmitteilung.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## statusObjekt



`statusObjekt`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](statusobjekt.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Statusobjekt.schema.json#/properties/statusObjekt")

### statusObjekt Type

`string[]`

## statusanlass



`statusanlass`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](status.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Status.schema.json#/properties/statusanlass")

### statusanlass Type

`string[]`

## auftragsstatus



`auftragsstatus`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](auftragsstatus.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Auftragsstatus.schema.json#/properties/auftragsstatus")

### auftragsstatus Type

`string[]`

## positionsdaten



`positionsdaten`

*   is optional

*   Type: `object[]` ([Details](statusmitteilungposition.md))

*   cannot be null

*   defined in: [Untitled schema](statusmitteilung-properties-positionsdaten.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/bo/Statusmitteilung.schema.json#/properties/positionsdaten")

### positionsdaten Type

`object[]` ([Details](statusmitteilungposition.md))
