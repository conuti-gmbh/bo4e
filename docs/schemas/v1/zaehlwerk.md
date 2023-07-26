## Untitled object in undefined Type

`object` ([Details](zaehlwerk.md))

# Untitled object in undefined Properties

| Property                                                                  | Type      | Required | Nullable       | Defined by                                                                                                                                                                          |
| :------------------------------------------------------------------------ | :-------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [zaehlwerkId](#zaehlwerkid)                                               | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-zaehlwerkid.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/zaehlwerkId")                                                    |
| [bezeichnung](#bezeichnung)                                               | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-bezeichnung.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/bezeichnung")                                                    |
| [richtung](#richtung)                                                     | `array`   | Optional | cannot be null | [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/richtung")                                                                 |
| [obisKennzahl](#obiskennzahl)                                             | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-obiskennzahl.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/obisKennzahl")                                                  |
| [wandlerfaktor](#wandlerfaktor)                                           | `number`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-wandlerfaktor.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/wandlerfaktor")                                                |
| [einheit](#einheit)                                                       | `array`   | Optional | cannot be null | [Untitled schema](mengeneinheit.md "https://conuti.de/bo4e/schemas/v1/enum/Mengeneinheit#/properties/einheit")                                                                      |
| [schwachlastfaehig](#schwachlastfaehig)                                   | `array`   | Optional | cannot be null | [Untitled schema](schwachlastfaehig.md "https://conuti.de/bo4e/schemas/v1/enum/Schwachlastfaehig#/properties/schwachlastfaehig")                                                    |
| [verbrauchsart](#verbrauchsart)                                           | `array`   | Optional | cannot be null | [Untitled schema](verbrauchsart.md "https://conuti.de/bo4e/schemas/v1/enum/Verbrauchsart#/properties/verbrauchsart")                                                                |
| [unterbrechbarkeit](#unterbrechbarkeit)                                   | `array`   | Optional | cannot be null | [Untitled schema](unterbrechbarkeit.md "https://conuti.de/bo4e/schemas/v1/enum/Unterbrechbarkeit#/properties/unterbrechbarkeit")                                                    |
| [waermenutzung](#waermenutzung)                                           | `array`   | Optional | cannot be null | [Untitled schema](waermenutzung.md "https://conuti.de/bo4e/schemas/v1/enum/Waermenutzung#/properties/waermenutzung")                                                                |
| [konzessionsabgabe](#konzessionsabgabe)                                   | `object`  | Optional | cannot be null | [Untitled schema](konzessionsabgabe.md "https://conuti.de/bo4e/schemas/v1/com/Konzessionsabgabe#/properties/konzessionsabgabe")                                                     |
| [steuerbefreit](#steuerbefreit)                                           | `boolean` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-steuerbefreit.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/steuerbefreit")                                                |
| [vorkommastelle](#vorkommastelle)                                         | `integer` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-vorkommastelle.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/vorkommastelle")                                              |
| [nachkommastelle](#nachkommastelle)                                       | `integer` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-nachkommastelle.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/nachkommastelle")                                            |
| [abrechnungsrelevant](#abrechnungsrelevant)                               | `boolean` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-abrechnungsrelevant.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/abrechnungsrelevant")                                    |
| [anzahlAblesungen](#anzahlablesungen)                                     | `boolean` | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-anzahlablesungen.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/anzahlAblesungen")                                          |
| [zaehlzeiten](#zaehlzeiten)                                               | `object`  | Optional | cannot be null | [Untitled schema](zaehlzeitregister.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlzeitregister#/properties/zaehlzeiten")                                                           |
| [konfiguration](#konfiguration)                                           | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-konfiguration.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/konfiguration")                                                |
| [messprodukt](#messprodukt)                                               | `string`  | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-messprodukt.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/messprodukt")                                                    |
| [wertegranularitaet](#wertegranularitaet)                                 | `array`   | Optional | cannot be null | [Untitled schema](wertegranularitaet.md "https://conuti.de/bo4e/schemas/v1/enum/Wertegranularitaet#/properties/wertegranularitaet")                                                 |
| [notwendigkeitZweiteMessung](#notwendigkeitzweitemessung)                 | `array`   | Optional | cannot be null | [Untitled schema](notwendigkeitzweitemessung.md "https://conuti.de/bo4e/schemas/v1/enum/NotwendigkeitZweiteMessung#/properties/notwendigkeitZweiteMessung")                         |
| [werteuebermittlungVerwendungszweck](#werteuebermittlungverwendungszweck) | `array`   | Optional | cannot be null | [Untitled schema](werteuebermitllungverwendungszweck.md "https://conuti.de/bo4e/schemas/v1/enum/WerteuebermittlungVerwendungszweck#/properties/werteuebermittlungVerwendungszweck") |
| [artEMobilitaet](#artemobilitaet)                                         | `array`   | Optional | cannot be null | [Untitled schema](artemobilitaet.md "https://conuti.de/bo4e/schemas/v1/enum/ArtEmobilitaet#/properties/artEMobilitaet")                                                             |
| [verwendungszwecke](#verwendungszwecke)                                   | `array`   | Optional | cannot be null | [Untitled schema](zaehlwerk-properties-verwendungszwecke.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/verwendungszwecke")                                        |

## zaehlwerkId



`zaehlwerkId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-zaehlwerkid.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/zaehlwerkId")

### zaehlwerkId Type

`string`

## bezeichnung



`bezeichnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-bezeichnung.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/bezeichnung")

### bezeichnung Type

`string`

## richtung



`richtung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://conuti.de/bo4e/schemas/v1/enum/Energierichtung#/properties/richtung")

### richtung Type

`string[]`

## obisKennzahl



`obisKennzahl`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-obiskennzahl.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/obisKennzahl")

### obisKennzahl Type

`string`

## wandlerfaktor



`wandlerfaktor`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-wandlerfaktor.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/wandlerfaktor")

### wandlerfaktor Type

`number`

## einheit



`einheit`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](mengeneinheit.md "https://conuti.de/bo4e/schemas/v1/enum/Mengeneinheit#/properties/einheit")

### einheit Type

`string[]`

## schwachlastfaehig



`schwachlastfaehig`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](schwachlastfaehig.md "https://conuti.de/bo4e/schemas/v1/enum/Schwachlastfaehig#/properties/schwachlastfaehig")

### schwachlastfaehig Type

`string[]`

## verbrauchsart



`verbrauchsart`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](verbrauchsart.md "https://conuti.de/bo4e/schemas/v1/enum/Verbrauchsart#/properties/verbrauchsart")

### verbrauchsart Type

`string[]`

## unterbrechbarkeit



`unterbrechbarkeit`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](unterbrechbarkeit.md "https://conuti.de/bo4e/schemas/v1/enum/Unterbrechbarkeit#/properties/unterbrechbarkeit")

### unterbrechbarkeit Type

`string[]`

## waermenutzung



`waermenutzung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](waermenutzung.md "https://conuti.de/bo4e/schemas/v1/enum/Waermenutzung#/properties/waermenutzung")

### waermenutzung Type

`string[]`

## konzessionsabgabe



`konzessionsabgabe`

*   is optional

*   Type: `object` ([Details](konzessionsabgabe.md))

*   cannot be null

*   defined in: [Untitled schema](konzessionsabgabe.md "https://conuti.de/bo4e/schemas/v1/com/Konzessionsabgabe#/properties/konzessionsabgabe")

### konzessionsabgabe Type

`object` ([Details](konzessionsabgabe.md))

## steuerbefreit



`steuerbefreit`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-steuerbefreit.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/steuerbefreit")

### steuerbefreit Type

`boolean`

## vorkommastelle



`vorkommastelle`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-vorkommastelle.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/vorkommastelle")

### vorkommastelle Type

`integer`

## nachkommastelle



`nachkommastelle`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-nachkommastelle.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/nachkommastelle")

### nachkommastelle Type

`integer`

## abrechnungsrelevant



`abrechnungsrelevant`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-abrechnungsrelevant.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/abrechnungsrelevant")

### abrechnungsrelevant Type

`boolean`

## anzahlAblesungen



`anzahlAblesungen`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-anzahlablesungen.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/anzahlAblesungen")

### anzahlAblesungen Type

`boolean`

## zaehlzeiten



`zaehlzeiten`

*   is optional

*   Type: `object` ([Details](zaehlzeitregister.md))

*   cannot be null

*   defined in: [Untitled schema](zaehlzeitregister.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlzeitregister#/properties/zaehlzeiten")

### zaehlzeiten Type

`object` ([Details](zaehlzeitregister.md))

## konfiguration



`konfiguration`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-konfiguration.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/konfiguration")

### konfiguration Type

`string`

## messprodukt



`messprodukt`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-messprodukt.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/messprodukt")

### messprodukt Type

`string`

## wertegranularitaet



`wertegranularitaet`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](wertegranularitaet.md "https://conuti.de/bo4e/schemas/v1/enum/Wertegranularitaet#/properties/wertegranularitaet")

### wertegranularitaet Type

`string[]`

## notwendigkeitZweiteMessung



`notwendigkeitZweiteMessung`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](notwendigkeitzweitemessung.md "https://conuti.de/bo4e/schemas/v1/enum/NotwendigkeitZweiteMessung#/properties/notwendigkeitZweiteMessung")

### notwendigkeitZweiteMessung Type

`string[]`

## werteuebermittlungVerwendungszweck



`werteuebermittlungVerwendungszweck`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](werteuebermitllungverwendungszweck.md "https://conuti.de/bo4e/schemas/v1/enum/WerteuebermittlungVerwendungszweck#/properties/werteuebermittlungVerwendungszweck")

### werteuebermittlungVerwendungszweck Type

`string[]`

## artEMobilitaet



`artEMobilitaet`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](artemobilitaet.md "https://conuti.de/bo4e/schemas/v1/enum/ArtEmobilitaet#/properties/artEMobilitaet")

### artEMobilitaet Type

`string[]`

## verwendungszwecke



`verwendungszwecke`

*   is optional

*   Type: `object[]` ([Details](verwendungszweck.md))

*   cannot be null

*   defined in: [Untitled schema](zaehlwerk-properties-verwendungszwecke.md "https://conuti.de/bo4e/schemas/v1/com/Zaehlwerk#/properties/verwendungszwecke")

### verwendungszwecke Type

`object[]` ([Details](verwendungszweck.md))
