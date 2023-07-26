## Untitled object in undefined Type

`object` ([Details](handelsunstimmigkeit.md))

# Untitled object in undefined Properties

| Property                            | Type     | Required | Nullable       | Defined by                                                                                                                                                    |
| :---------------------------------- | :------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [boTyp](#botyp)                     | `string` | Required | cannot be null | [Untitled schema](handelsunstimmigkeit-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Handelsunstimmigkeit#/properties/boTyp")                     |
| [versionStruktur](#versionstruktur) | `string` | Required | cannot be null | [Untitled schema](handelsunstimmigkeit-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Handelsunstimmigkeit#/properties/versionStruktur") |
| [nummer](#nummer)                   | `string` | Optional | cannot be null | [Untitled schema](handelsunstimmigkeit-properties-nummer.md "https://conuti.de/bo4e/schemas/v1/bo/Handelsunstimmigkeit#/properties/nummer")                   |
| [typ](#typ)                         | `array`  | Optional | cannot be null | [Untitled schema](handelsunstimmigkeitstyp.md "https://conuti.de/bo4e/schemas/v1/enum/Handelsunstimmigkeitstyp#/properties/typ")                              |
| [begruendung](#begruendung)         | `object` | Optional | cannot be null | [Untitled schema](handelsunstimmungkeitsbegruendung.md "https://conuti.de/bo4e/schemas/v1/com/Handelsunstimmigkeitsbegruendung#/properties/begruendung")      |
| [zuZahlen](#zuzahlen)               | `object` | Optional | cannot be null | [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/zuZahlen")                                                              |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeit-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Handelsunstimmigkeit#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeit-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Handelsunstimmigkeit#/properties/versionStruktur")

### versionStruktur Type

`string`

## nummer



`nummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeit-properties-nummer.md "https://conuti.de/bo4e/schemas/v1/bo/Handelsunstimmigkeit#/properties/nummer")

### nummer Type

`string`

## typ



`typ`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmigkeitstyp.md "https://conuti.de/bo4e/schemas/v1/enum/Handelsunstimmigkeitstyp#/properties/typ")

### typ Type

`string[]`

## begruendung



`begruendung`

*   is optional

*   Type: `object` ([Details](handelsunstimmungkeitsbegruendung.md))

*   cannot be null

*   defined in: [Untitled schema](handelsunstimmungkeitsbegruendung.md "https://conuti.de/bo4e/schemas/v1/com/Handelsunstimmigkeitsbegruendung#/properties/begruendung")

### begruendung Type

`object` ([Details](handelsunstimmungkeitsbegruendung.md))

## zuZahlen



`zuZahlen`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/zuZahlen")

### zuZahlen Type

`object` ([Details](betrag.md))
