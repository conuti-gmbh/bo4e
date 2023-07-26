## Untitled object in undefined Type

`object` ([Details](netznutzungsabrechnungsdaten.md))

# Untitled object in undefined Properties

| Property                                                        | Type      | Required | Nullable       | Defined by                                                                                                                                                                                 |
| :-------------------------------------------------------------- | :-------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [artikelId](#artikelid)                                         | `string`  | Optional | cannot be null | [Untitled schema](netznutzungsabrechnungsdaten-properties-artikelid.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/artikelId")                         |
| [artikelIdTyp](#artikelidtyp)                                   | `array`   | Optional | cannot be null | [Untitled schema](artikelidtyp.md "https://conuti.de/bo4e/schemas/v1/enum/ArtikelIdTyp#/properties/artikelIdTyp")                                                                          |
| [anzahl](#anzahl)                                               | `integer` | Optional | cannot be null | [Untitled schema](netznutzungsabrechnungsdaten-properties-anzahl.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/anzahl")                               |
| [gemeinderabatt](#gemeinderabatt)                               | `number`  | Optional | cannot be null | [Untitled schema](netznutzungsabrechnungsdaten-properties-gemeinderabatt.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/gemeinderabatt")               |
| [zuschlag](#zuschlag)                                           | `number`  | Optional | cannot be null | [Untitled schema](netznutzungsabrechnungsdaten-properties-zuschlag.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/zuschlag")                           |
| [abschlag](#abschlag)                                           | `number`  | Optional | cannot be null | [Untitled schema](netznutzungsabrechnungsdaten-properties-abschlag.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/abschlag")                           |
| [singulaereBetriebsmittel](#singulaerebetriebsmittel)           | `object`  | Optional | cannot be null | [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/singulaereBetriebsmittel")                                                                             |
| [preisSingulaereBetriebsmittel](#preissingulaerebetriebsmittel) | `object`  | Optional | cannot be null | [Untitled schema](preis.md "https://conuti.de/bo4e/schemas/v1/com/Preis#/properties/preisSingulaereBetriebsmittel")                                                                        |
| [abrechnungblindarbeit](#abrechnungblindarbeit)                 | `boolean` | Optional | cannot be null | [Untitled schema](netznutzungsabrechnungsdaten-properties-abrechnungblindarbeit.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/abrechnungblindarbeit") |
| [zahlerderblindarbeit](#zahlerderblindarbeit)                   | `array`   | Optional | cannot be null | [Untitled schema](zahlerblindarbeit.md "https://conuti.de/bo4e/schemas/v1/enum/ZahlerBlindarbeit#/properties/zahlerderblindarbeit")                                                        |
| [zahlerBlindarbeitLf](#zahlerblindarbeitlf)                     | `boolean` | Optional | cannot be null | [Untitled schema](netznutzungsabrechnungsdaten-properties-zahlerblindarbeitlf.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/zahlerBlindarbeitLf")     |

## artikelId



`artikelId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsabrechnungsdaten-properties-artikelid.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/artikelId")

### artikelId Type

`string`

## artikelIdTyp



`artikelIdTyp`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](artikelidtyp.md "https://conuti.de/bo4e/schemas/v1/enum/ArtikelIdTyp#/properties/artikelIdTyp")

### artikelIdTyp Type

`string[]`

## anzahl



`anzahl`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsabrechnungsdaten-properties-anzahl.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/anzahl")

### anzahl Type

`integer`

## gemeinderabatt



`gemeinderabatt`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsabrechnungsdaten-properties-gemeinderabatt.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/gemeinderabatt")

### gemeinderabatt Type

`number`

### gemeinderabatt Constraints

**unknown format**: the value of this string must follow the format: `float`

## zuschlag



`zuschlag`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsabrechnungsdaten-properties-zuschlag.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/zuschlag")

### zuschlag Type

`number`

### zuschlag Constraints

**unknown format**: the value of this string must follow the format: `float`

## abschlag



`abschlag`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsabrechnungsdaten-properties-abschlag.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/abschlag")

### abschlag Type

`number`

### abschlag Constraints

**unknown format**: the value of this string must follow the format: `float`

## singulaereBetriebsmittel



`singulaereBetriebsmittel`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/singulaereBetriebsmittel")

### singulaereBetriebsmittel Type

`object` ([Details](menge.md))

## preisSingulaereBetriebsmittel



`preisSingulaereBetriebsmittel`

*   is optional

*   Type: `object` ([Details](preis.md))

*   cannot be null

*   defined in: [Untitled schema](preis.md "https://conuti.de/bo4e/schemas/v1/com/Preis#/properties/preisSingulaereBetriebsmittel")

### preisSingulaereBetriebsmittel Type

`object` ([Details](preis.md))

## abrechnungblindarbeit



`abrechnungblindarbeit`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsabrechnungsdaten-properties-abrechnungblindarbeit.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/abrechnungblindarbeit")

### abrechnungblindarbeit Type

`boolean`

## zahlerderblindarbeit



`zahlerderblindarbeit`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](zahlerblindarbeit.md "https://conuti.de/bo4e/schemas/v1/enum/ZahlerBlindarbeit#/properties/zahlerderblindarbeit")

### zahlerderblindarbeit Type

`string[]`

## zahlerBlindarbeitLf



`zahlerBlindarbeitLf`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](netznutzungsabrechnungsdaten-properties-zahlerblindarbeitlf.md "https://conuti.de/bo4e/schemas/v1/com/Netznutzungsabrechnungsdaten#/properties/zahlerBlindarbeitLf")

### zahlerBlindarbeitLf Type

`boolean`
