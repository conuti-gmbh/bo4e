## Untitled object in undefined Type

`object` ([Details](rechnung.md))

# Untitled object in undefined Properties

| Property                                                            | Type      | Required | Nullable       | Defined by                                                                                                                                                  |
| :------------------------------------------------------------------ | :-------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                                     | `string`  | Required | cannot be null | [Untitled schema](rechnung-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/boTyp")                                           |
| [versionStruktur](#versionstruktur)                                 | `string`  | Required | cannot be null | [Untitled schema](rechnung-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/versionStruktur")                       |
| [istSelbstausgestellt](#istselbstausgestellt)                       | `boolean` | Optional | cannot be null | [Untitled schema](rechnung-properties-istselbstausgestellt.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/istSelbstausgestellt")             |
| [bearbeitungsdatum](#bearbeitungsdatum)                             | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-bearbeitungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/bearbeitungsdatum")                   |
| [rechnungsdatum](#rechnungsdatum)                                   | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-rechnungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/rechnungsdatum")                         |
| [rechnungsstatus](#rechnungsstatus)                                 | `array`   | Optional | cannot be null | [Untitled schema](rechnungsstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Rechnungsstatus#/properties/rechnungsstatus")                                  |
| [vorlaeufigerAbrechnungszeitraum](#vorlaeufigerabrechnungszeitraum) | `object`  | Optional | cannot be null | [Untitled schema](zeitraum.md "https://conuti.de/bo4e/schemas/v1/com/Zeitraum#/properties/vorlaeufigerAbrechnungszeitraum")                                 |
| [rechnungsperiode](#rechnungsperiode)                               | `object`  | Optional | cannot be null | [Untitled schema](zeitraum.md "https://conuti.de/bo4e/schemas/v1/com/Zeitraum#/properties/rechnungsperiode")                                                |
| [rechnungstyp](#rechnungstyp)                                       | `array`   | Optional | cannot be null | [Untitled schema](rechnungstyp.md "https://conuti.de/bo4e/schemas/v1/enum/Rechnungstyp#/properties/rechnungstyp")                                           |
| [istReverseCharge](#istreversecharge)                               | `boolean` | Optional | cannot be null | [Untitled schema](rechnung-properties-istreversecharge.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/istReverseCharge")                     |
| [gesamtbrutto](#gesamtbrutto)                                       | `object`  | Optional | cannot be null | [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/gesamtbrutto")                                                        |
| [zuZahlen](#zuzahlen)                                               | `object`  | Optional | cannot be null | [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/zuZahlen")                                                            |
| [originalRechnungsnummer](#originalrechnungsnummer)                 | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-originalrechnungsnummer.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/originalRechnungsnummer")       |
| [referenzNachrichtendatum](#referenznachrichtendatum)               | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-referenznachrichtendatum.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/referenzNachrichtendatum")     |
| [referenzDokumentennummer](#referenzdokumentennummer)               | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-referenzdokumentennummer.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/referenzDokumentennummer")     |
| [referenzVorgaengerrechnung](#referenzvorgaengerrechnung)           | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-referenzvorgaengerrechnung.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/referenzVorgaengerrechnung") |
| [datumVorgaengerrechnung](#datumvorgaengerrechnung)                 | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-datumvorgaengerrechnung.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/datumVorgaengerrechnung")       |
| [netzkonto](#netzkonto)                                             | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-netzkonto.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/netzkonto")                                   |
| [vorausgezahlt](#vorausgezahlt)                                     | `object`  | Optional | cannot be null | [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/vorausgezahlt")                                                       |
| [gemeinderabatt](#gemeinderabatt)                                   | `object`  | Optional | cannot be null | [Untitled schema](gemeinderabatt.md "https://conuti.de/bo4e/schemas/v1/com/Gemeinderabatt#/properties/gemeinderabatt")                                      |
| [ausfuehrungsdatum](#ausfuehrungsdatum)                             | `string`  | Optional | cannot be null | [Untitled schema](rechnung-properties-ausfuehrungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/ausfuehrungsdatum")                   |
| [sonderrechnungsart](#sonderrechnungsart)                           | `array`   | Optional | cannot be null | [Untitled schema](sonderrechnungsart.md "https://conuti.de/bo4e/schemas/v1/enum/SonderrechnungsArt#/properties/sonderrechnungsart")                         |
| [steuerbetraege](#steuerbetraege)                                   | `array`   | Optional | cannot be null | [Untitled schema](rechnung-properties-steuerbetraege.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/steuerbetraege")                         |
| [rechnungspositionen](#rechnungspositionen)                         | `array`   | Optional | cannot be null | [Untitled schema](rechnung-properties-rechnungspositionen.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/rechnungspositionen")               |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-botyp.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-versionstruktur.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/versionStruktur")

### versionStruktur Type

`string`

## istSelbstausgestellt



`istSelbstausgestellt`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-istselbstausgestellt.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/istSelbstausgestellt")

### istSelbstausgestellt Type

`boolean`

## bearbeitungsdatum



`bearbeitungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-bearbeitungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/bearbeitungsdatum")

### bearbeitungsdatum Type

`string`

## rechnungsdatum



`rechnungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-rechnungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/rechnungsdatum")

### rechnungsdatum Type

`string`

## rechnungsstatus



`rechnungsstatus`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](rechnungsstatus.md "https://conuti.de/bo4e/schemas/v1/enum/Rechnungsstatus#/properties/rechnungsstatus")

### rechnungsstatus Type

`string[]`

## vorlaeufigerAbrechnungszeitraum



`vorlaeufigerAbrechnungszeitraum`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://conuti.de/bo4e/schemas/v1/com/Zeitraum#/properties/vorlaeufigerAbrechnungszeitraum")

### vorlaeufigerAbrechnungszeitraum Type

`object` ([Details](zeitraum.md))

## rechnungsperiode



`rechnungsperiode`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://conuti.de/bo4e/schemas/v1/com/Zeitraum#/properties/rechnungsperiode")

### rechnungsperiode Type

`object` ([Details](zeitraum.md))

## rechnungstyp



`rechnungstyp`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](rechnungstyp.md "https://conuti.de/bo4e/schemas/v1/enum/Rechnungstyp#/properties/rechnungstyp")

### rechnungstyp Type

`string[]`

## istReverseCharge



`istReverseCharge`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-istreversecharge.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/istReverseCharge")

### istReverseCharge Type

`boolean`

## gesamtbrutto



`gesamtbrutto`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/gesamtbrutto")

### gesamtbrutto Type

`object` ([Details](betrag.md))

## zuZahlen



`zuZahlen`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/zuZahlen")

### zuZahlen Type

`object` ([Details](betrag.md))

## originalRechnungsnummer



`originalRechnungsnummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-originalrechnungsnummer.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/originalRechnungsnummer")

### originalRechnungsnummer Type

`string`

## referenzNachrichtendatum



`referenzNachrichtendatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-referenznachrichtendatum.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/referenzNachrichtendatum")

### referenzNachrichtendatum Type

`string`

## referenzDokumentennummer



`referenzDokumentennummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-referenzdokumentennummer.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/referenzDokumentennummer")

### referenzDokumentennummer Type

`string`

## referenzVorgaengerrechnung



`referenzVorgaengerrechnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-referenzvorgaengerrechnung.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/referenzVorgaengerrechnung")

### referenzVorgaengerrechnung Type

`string`

## datumVorgaengerrechnung



`datumVorgaengerrechnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-datumvorgaengerrechnung.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/datumVorgaengerrechnung")

### datumVorgaengerrechnung Type

`string`

## netzkonto



`netzkonto`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-netzkonto.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/netzkonto")

### netzkonto Type

`string`

## vorausgezahlt



`vorausgezahlt`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/vorausgezahlt")

### vorausgezahlt Type

`object` ([Details](betrag.md))

## gemeinderabatt



`gemeinderabatt`

*   is optional

*   Type: `object` ([Details](gemeinderabatt.md))

*   cannot be null

*   defined in: [Untitled schema](gemeinderabatt.md "https://conuti.de/bo4e/schemas/v1/com/Gemeinderabatt#/properties/gemeinderabatt")

### gemeinderabatt Type

`object` ([Details](gemeinderabatt.md))

## ausfuehrungsdatum



`ausfuehrungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-ausfuehrungsdatum.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/ausfuehrungsdatum")

### ausfuehrungsdatum Type

`string`

## sonderrechnungsart



`sonderrechnungsart`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](sonderrechnungsart.md "https://conuti.de/bo4e/schemas/v1/enum/SonderrechnungsArt#/properties/sonderrechnungsart")

### sonderrechnungsart Type

`string[]`

## steuerbetraege



`steuerbetraege`

*   is optional

*   Type: `object[]` ([Details](steuerbetrag.md))

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-steuerbetraege.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/steuerbetraege")

### steuerbetraege Type

`object[]` ([Details](steuerbetrag.md))

## rechnungspositionen



`rechnungspositionen`

*   is optional

*   Type: `object[]` ([Details](rechnungsposition.md))

*   cannot be null

*   defined in: [Untitled schema](rechnung-properties-rechnungspositionen.md "https://conuti.de/bo4e/schemas/v1/bo/Rechnung#/properties/rechnungspositionen")

### rechnungspositionen Type

`object[]` ([Details](rechnungsposition.md))