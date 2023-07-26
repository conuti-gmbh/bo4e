## Untitled object in undefined Type

`object` ([Details](statusmitteilung.md))

# Untitled object in undefined Properties

| Property                                          | Type     | Required | Nullable       | Defined by                                                                                                                                                          |
| :------------------------------------------------ | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [boTyp](#botyp)                                   | `array`  | Required | cannot be null | [Untitled schema](botyp.md "https://conuti.de/bo4e/schemas/v1/enum/BOTyp#/properties/boTyp")                                                                        |
| [versionStruktur](#versionstruktur)               | `string` | Required | cannot be null | [Untitled schema](statusmitteilung-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Statusmitteilung#/properties/versionStruktur")               |
| [statusObjekt](#statusobjekt)                     | `array`  | Optional | cannot be null | [Untitled schema](statusobjekt.md "https://conuti.de/bo4e/schemas/v1/enum/Statusobjekt#/properties/statusObjekt")                                                   |
| [statusanlass](#statusanlass)                     | `array`  | Optional | cannot be null | [Untitled schema](status.md "https://conuti.de/bo4e/schemas/v1/enum/Status#/properties/statusanlass")                                                               |
| [antwortstatusCodeliste](#antwortstatuscodeliste) | `string` | Optional | cannot be null | [Untitled schema](statusmitteilung-properties-antwortstatuscodeliste.md "https://conuti.de/bo4e/schemas/v1/bo/Statusmitteilung#/properties/antwortstatusCodeliste") |
| [antwortstatus](#antwortstatus)                   | `string` | Optional | cannot be null | [Untitled schema](statusmitteilung-properties-antwortstatus.md "https://conuti.de/bo4e/schemas/v1/bo/Statusmitteilung#/properties/antwortstatus")                   |
| [auftragsstatus](#auftragsstatus)                 | `array`  | Optional | cannot be null | [Untitled schema](auftragsstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Auftragsstatus#/properties/auftragsstatus")                                             |
| [positionsdaten](#positionsdaten)                 | `array`  | Optional | cannot be null | [Untitled schema](statusmitteilung-properties-positionsdaten.md "https://conuti.de/bo4e/schemas/v1/bo/Statusmitteilung#/properties/positionsdaten")                 |

## boTyp



`boTyp`

*   is required

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](botyp.md "https://conuti.de/bo4e/schemas/v1/enum/BOTyp#/properties/boTyp")

### boTyp Type

`string[]`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](statusmitteilung-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Statusmitteilung#/properties/versionStruktur")

### versionStruktur Type

`string`

## statusObjekt



`statusObjekt`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](statusobjekt.md "https://conuti.de/bo4e/schemas/v1/enum/Statusobjekt#/properties/statusObjekt")

### statusObjekt Type

`string[]`

## statusanlass



`statusanlass`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](status.md "https://conuti.de/bo4e/schemas/v1/enum/Status#/properties/statusanlass")

### statusanlass Type

`string[]`

## antwortstatusCodeliste



`antwortstatusCodeliste`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](statusmitteilung-properties-antwortstatuscodeliste.md "https://conuti.de/bo4e/schemas/v1/bo/Statusmitteilung#/properties/antwortstatusCodeliste")

### antwortstatusCodeliste Type

`string`

## antwortstatus



`antwortstatus`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](statusmitteilung-properties-antwortstatus.md "https://conuti.de/bo4e/schemas/v1/bo/Statusmitteilung#/properties/antwortstatus")

### antwortstatus Type

`string`

## auftragsstatus



`auftragsstatus`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](auftragsstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Auftragsstatus#/properties/auftragsstatus")

### auftragsstatus Type

`string[]`

## positionsdaten



`positionsdaten`

*   is optional

*   Type: `object[]` ([Details](statusmitteilungposition.md))

*   cannot be null

*   defined in: [Untitled schema](statusmitteilung-properties-positionsdaten.md "https://conuti.de/bo4e/schemas/v1/bo/Statusmitteilung#/properties/positionsdaten")

### positionsdaten Type

`object[]` ([Details](statusmitteilungposition.md))
