## Untitled object in undefined Type

`object` ([Details](bilanzierung.md))

# Untitled object in undefined Properties

| Property                                                            | Type     | Required | Nullable       | Defined by                                                                                                                                                       |
| :------------------------------------------------------------------ | :------- | :------- | :------------- | :--------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                     | `string` | Required | cannot be null | [Untitled schema](bilanzierung-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/boTyp")                                        |
| [versionStruktur](#versionstruktur)                                 | `string` | Required | cannot be null | [Untitled schema](bilanzierung-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/versionStruktur")                    |
| [aggregationsverantwortung](#aggregationsverantwortung)             | `array`  | Optional | cannot be null | [Untitled schema](aggregationsverantwortung.md "https://conuti.de/bo4e/schemas/v1/enum/Aggregationsverantwortung#/properties/aggregationsverantwortung")         |
| [zeitreihentyp](#zeitreihentyp)                                     | `string` | Optional | cannot be null | [Untitled schema](bilanzierung-properties-zeitreihentyp.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/zeitreihentyp")                        |
| [prognosegrundlage](#prognosegrundlage)                             | `array`  | Optional | cannot be null | [Untitled schema](prognosegrundlage.md "https://conuti.de/bo4e/schemas/v1/enum/Prognosegrundlage#/properties/prognosegrundlage")                                 |
| [bilanzierungsbeginn](#bilanzierungsbeginn)                         | `string` | Optional | cannot be null | [Untitled schema](bilanzierung-properties-bilanzierungsbeginn.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/bilanzierungsbeginn")            |
| [bilanzierungsende](#bilanzierungsende)                             | `string` | Optional | cannot be null | [Untitled schema](bilanzierung-properties-bilanzierungsende.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/bilanzierungsende")                |
| [bilanzkreis](#bilanzkreis)                                         | `string` | Optional | cannot be null | [Untitled schema](bilanzierung-properties-bilanzkreis.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/bilanzkreis")                            |
| [fallgruppenzuordnung](#fallgruppenzuordnung)                       | `array`  | Optional | cannot be null | [Untitled schema](fallgruppenzuordnung.md "https://conuti.de/bo4e/schemas/v1/enum/Fallgruppenzuordnung#/properties/fallgruppenzuordnung")                        |
| [temperaturarbeit](#temperaturarbeit)                               | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/temperaturarbeit")                                                           |
| [jahresverbrauchsprognose](#jahresverbrauchsprognose)               | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/jahresverbrauchsprognose")                                                   |
| [kundenwert](#kundenwert)                                           | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/kundenwert")                                                                 |
| [verbrauchsaufteilung](#verbrauchsaufteilung)                       | `object` | Optional | cannot be null | [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/verbrauchsaufteilung")                                                       |
| [wahlrechtPrognosegrundlage](#wahlrechtprognosegrundlage)           | `array`  | Optional | cannot be null | [Untitled schema](wahlrechtprognosegrundlage.md "https://conuti.de/bo4e/schemas/v1/enum/WahlrechtPrognosegrundlage#/properties/wahlrechtPrognosegrundlage")      |
| [grundWahlrechtPrognosegrundlage](#grundwahlrechtprognosegrundlage) | `array`  | Optional | cannot be null | [Untitled schema](wahlrechtprognosegrundlage.md "https://conuti.de/bo4e/schemas/v1/enum/WahlrechtPrognosegrundlage#/properties/grundWahlrechtPrognosegrundlage") |
| [lastprofile](#lastprofile)                                         | `array`  | Optional | cannot be null | [Untitled schema](bilanzierung-properties-lastprofile.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/lastprofile")                            |
| [detailsPrognosegrundlage](#detailsprognosegrundlage)               | `array`  | Optional | cannot be null | [Untitled schema](bilanzierung-properties-detailsprognosegrundlage.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/detailsPrognosegrundlage")  |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/versionStruktur")

### versionStruktur Type

`string`

## aggregationsverantwortung



`aggregationsverantwortung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](aggregationsverantwortung.md "https://conuti.de/bo4e/schemas/v1/enum/Aggregationsverantwortung#/properties/aggregationsverantwortung")

### aggregationsverantwortung Type

`string[]`

## zeitreihentyp



`zeitreihentyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-zeitreihentyp.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/zeitreihentyp")

### zeitreihentyp Type

`string`

## prognosegrundlage



`prognosegrundlage`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](prognosegrundlage.md "https://conuti.de/bo4e/schemas/v1/enum/Prognosegrundlage#/properties/prognosegrundlage")

### prognosegrundlage Type

`string[]`

## bilanzierungsbeginn



`bilanzierungsbeginn`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-bilanzierungsbeginn.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/bilanzierungsbeginn")

### bilanzierungsbeginn Type

`string`

## bilanzierungsende



`bilanzierungsende`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-bilanzierungsende.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/bilanzierungsende")

### bilanzierungsende Type

`string`

## bilanzkreis



`bilanzkreis`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-bilanzkreis.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/bilanzkreis")

### bilanzkreis Type

`string`

## fallgruppenzuordnung



`fallgruppenzuordnung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](fallgruppenzuordnung.md "https://conuti.de/bo4e/schemas/v1/enum/Fallgruppenzuordnung#/properties/fallgruppenzuordnung")

### fallgruppenzuordnung Type

`string[]`

## temperaturarbeit



`temperaturarbeit`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/temperaturarbeit")

### temperaturarbeit Type

`object` ([Details](menge.md))

## jahresverbrauchsprognose



`jahresverbrauchsprognose`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/jahresverbrauchsprognose")

### jahresverbrauchsprognose Type

`object` ([Details](menge.md))

## kundenwert



`kundenwert`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/kundenwert")

### kundenwert Type

`object` ([Details](menge.md))

## verbrauchsaufteilung



`verbrauchsaufteilung`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/verbrauchsaufteilung")

### verbrauchsaufteilung Type

`object` ([Details](menge.md))

## wahlrechtPrognosegrundlage



`wahlrechtPrognosegrundlage`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](wahlrechtprognosegrundlage.md "https://conuti.de/bo4e/schemas/v1/enum/WahlrechtPrognosegrundlage#/properties/wahlrechtPrognosegrundlage")

### wahlrechtPrognosegrundlage Type

`string[]`

## grundWahlrechtPrognosegrundlage



`grundWahlrechtPrognosegrundlage`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](wahlrechtprognosegrundlage.md "https://conuti.de/bo4e/schemas/v1/enum/WahlrechtPrognosegrundlage#/properties/grundWahlrechtPrognosegrundlage")

### grundWahlrechtPrognosegrundlage Type

`string[]`

## lastprofile



`lastprofile`

*   is optional

*   Type: `object[]` ([Details](lastprofil.md))

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-lastprofile.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/lastprofile")

### lastprofile Type

`object[]` ([Details](lastprofil.md))

## detailsPrognosegrundlage



`detailsPrognosegrundlage`

*   is optional

*   Type: `string[][]`

*   cannot be null

*   defined in: [Untitled schema](bilanzierung-properties-detailsprognosegrundlage.md "https://conuti.de/bo4e/schemas/v1/bo/Bilanzierung#/properties/detailsPrognosegrundlage")

### detailsPrognosegrundlage Type

`string[][]`
