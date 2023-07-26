## Untitled object in undefined Type

`object` ([Details](rechnungsposition.md))

# Untitled object in undefined Properties

| Property                                            | Type      | Required | Nullable       | Defined by                                                                                                                                                               |
| :-------------------------------------------------- | :-------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [einzelpreis](#einzelpreis)                         | `object`  | Optional | cannot be null | [Untitled schema](preis.md "https://conuti.de/bo4e/schemas/v1/com/Preis#/properties/einzelpreis")                                                                        |
| [lieferungBis](#lieferungbis)                       | `string`  | Optional | cannot be null | [Untitled schema](rechnungsposition-properties-lieferungbis.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/lieferungBis")                       |
| [lieferungVon](#lieferungvon)                       | `string`  | Optional | cannot be null | [Untitled schema](rechnungsposition-properties-lieferungvon.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/lieferungVon")                       |
| [positionsMenge](#positionsmenge)                   | `object`  | Optional | cannot be null | [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/positionsMenge")                                                                     |
| [positionsnummer](#positionsnummer)                 | `integer` | Optional | cannot be null | [Untitled schema](rechnungsposition-properties-positionsnummer.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/positionsnummer")                 |
| [artikelnummer](#artikelnummer)                     | `string`  | Optional | cannot be null | [Untitled schema](rechnungsposition-properties-artikelnummer.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/artikelnummer")                     |
| [teilsummeNetto](#teilsummenetto)                   | `object`  | Optional | cannot be null | [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/teilsummeNetto")                                                                   |
| [teilsummeSteuer](#teilsummesteuer)                 | `object`  | Optional | cannot be null | [Untitled schema](steuerbetrag.md "https://conuti.de/bo4e/schemas/v1/com/Steuerbetrag#/properties/teilsummeSteuer")                                                      |
| [zeitbezogeneMenge](#zeitbezogenemenge)             | `object`  | Optional | cannot be null | [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/zeitbezogeneMenge")                                                                  |
| [abschlag](#abschlag)                               | `object`  | Optional | cannot be null | [Untitled schema](abschlag.md "https://conuti.de/bo4e/schemas/v1/com/Abschlag#/properties/abschlag")                                                                     |
| [zuschlag](#zuschlag)                               | `object`  | Optional | cannot be null | [Untitled schema](zuschlag.md "https://conuti.de/bo4e/schemas/v1/com/Zuschlag#/properties/zuschlag")                                                                     |
| [gemeinderabatt](#gemeinderabatt)                   | `object`  | Optional | cannot be null | [Untitled schema](gemeinderabatt.md "https://conuti.de/bo4e/schemas/v1/com/Gemeinderabatt#/properties/gemeinderabatt")                                                   |
| [gesamtZuAbschlagsbetrag](#gesamtzuabschlagsbetrag) | `number`  | Optional | cannot be null | [Untitled schema](rechnungsposition-properties-gesamtzuabschlagsbetrag.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/gesamtZuAbschlagsbetrag") |

## einzelpreis



`einzelpreis`

*   is optional

*   Type: `object` ([Details](preis.md))

*   cannot be null

*   defined in: [Untitled schema](preis.md "https://conuti.de/bo4e/schemas/v1/com/Preis#/properties/einzelpreis")

### einzelpreis Type

`object` ([Details](preis.md))

## lieferungBis



`lieferungBis`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnungsposition-properties-lieferungbis.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/lieferungBis")

### lieferungBis Type

`string`

## lieferungVon



`lieferungVon`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnungsposition-properties-lieferungvon.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/lieferungVon")

### lieferungVon Type

`string`

## positionsMenge



`positionsMenge`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/positionsMenge")

### positionsMenge Type

`object` ([Details](menge.md))

## positionsnummer



`positionsnummer`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](rechnungsposition-properties-positionsnummer.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/positionsnummer")

### positionsnummer Type

`integer`

## artikelnummer



`artikelnummer`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](rechnungsposition-properties-artikelnummer.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/artikelnummer")

### artikelnummer Type

`string`

## teilsummeNetto



`teilsummeNetto`

*   is optional

*   Type: `object` ([Details](betrag.md))

*   cannot be null

*   defined in: [Untitled schema](betrag.md "https://conuti.de/bo4e/schemas/v1/com/Betrag#/properties/teilsummeNetto")

### teilsummeNetto Type

`object` ([Details](betrag.md))

## teilsummeSteuer



`teilsummeSteuer`

*   is optional

*   Type: `object` ([Details](steuerbetrag.md))

*   cannot be null

*   defined in: [Untitled schema](steuerbetrag.md "https://conuti.de/bo4e/schemas/v1/com/Steuerbetrag#/properties/teilsummeSteuer")

### teilsummeSteuer Type

`object` ([Details](steuerbetrag.md))

## zeitbezogeneMenge



`zeitbezogeneMenge`

*   is optional

*   Type: `object` ([Details](menge.md))

*   cannot be null

*   defined in: [Untitled schema](menge.md "https://conuti.de/bo4e/schemas/v1/com/Menge#/properties/zeitbezogeneMenge")

### zeitbezogeneMenge Type

`object` ([Details](menge.md))

## abschlag



`abschlag`

*   is optional

*   Type: `object` ([Details](abschlag.md))

*   cannot be null

*   defined in: [Untitled schema](abschlag.md "https://conuti.de/bo4e/schemas/v1/com/Abschlag#/properties/abschlag")

### abschlag Type

`object` ([Details](abschlag.md))

## zuschlag



`zuschlag`

*   is optional

*   Type: `object` ([Details](zuschlag.md))

*   cannot be null

*   defined in: [Untitled schema](zuschlag.md "https://conuti.de/bo4e/schemas/v1/com/Zuschlag#/properties/zuschlag")

### zuschlag Type

`object` ([Details](zuschlag.md))

## gemeinderabatt



`gemeinderabatt`

*   is optional

*   Type: `object` ([Details](gemeinderabatt.md))

*   cannot be null

*   defined in: [Untitled schema](gemeinderabatt.md "https://conuti.de/bo4e/schemas/v1/com/Gemeinderabatt#/properties/gemeinderabatt")

### gemeinderabatt Type

`object` ([Details](gemeinderabatt.md))

## gesamtZuAbschlagsbetrag



`gesamtZuAbschlagsbetrag`

*   is optional

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](rechnungsposition-properties-gesamtzuabschlagsbetrag.md "https://conuti.de/bo4e/schemas/v1/com/Rechnungsposition#/properties/gesamtZuAbschlagsbetrag")

### gesamtZuAbschlagsbetrag Type

`number`
