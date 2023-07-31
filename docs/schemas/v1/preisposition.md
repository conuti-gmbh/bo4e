## Untitled object in undefined Type

`object` ([Details](preisposition.md))

# Untitled object in undefined Properties

| Property                                        | Type      | Required | Nullable       | Defined by                                                                                                                                                                                              |
| :---------------------------------------------- | :-------- | :------- | :------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [berechnungsmethode](#berechnungsmethode)       | `array`   | Optional | cannot be null | [Untitled schema](kalkulationsmethode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Kalkulationsmethode.schema.json#/properties/berechnungsmethode")                      |
| [leistungstyp](#leistungstyp)                   | `array`   | Optional | cannot be null | [Untitled schema](leistungstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Leistungstyp.schema.json#/properties/leistungstyp")                                          |
| [leistungsbezeichnung](#leistungsbezeichnung)   | `string`  | Optional | cannot be null | [Untitled schema](preisposition-properties-leistungsbezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/leistungsbezeichnung") |
| [preiseinheit](#preiseinheit)                   | `array`   | Optional | cannot be null | [Untitled schema](waehrungseinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waehrungseinheit.schema.json#/properties/preiseinheit")                                  |
| [bezugsgroesse](#bezugsgroesse)                 | `array`   | Optional | cannot be null | [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/bezugsgroesse")                                       |
| [zeitbasis](#zeitbasis)                         | `array`   | Optional | cannot be null | [Untitled schema](zeiteinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeiteinheit.schema.json#/properties/zeitbasis")                                               |
| [tarifzeit](#tarifzeit)                         | `array`   | Optional | cannot be null | [Untitled schema](tarifzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Tarifzeit.schema.json#/properties/tarifzeit")                                                   |
| [bdewArtikelnummer](#bdewartikelnummer)         | `array`   | Optional | cannot be null | [Untitled schema](bdewartikelnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BDEWArtikelnummer.schema.json#/properties/bdewArtikelnummer")                           |
| [zonungsgroesse](#zonungsgroesse)               | `array`   | Optional | cannot be null | [Untitled schema](bemessungsgroesse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Bemessungsgroesse.schema.json#/properties/zonungsgroesse")                              |
| [preisschluesselstamm](#preisschluesselstamm)   | `string`  | Optional | cannot be null | [Untitled schema](preisposition-properties-preisschluesselstamm.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/preisschluesselstamm") |
| [positionsnummer](#positionsnummer)             | `integer` | Optional | cannot be null | [Untitled schema](preisposition-properties-positionsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/positionsnummer")           |
| [messebene](#messebene)                         | `array`   | Optional | cannot be null | [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/messebene")                                                   |
| [beschreibung](#beschreibung)                   | `string`  | Optional | cannot be null | [Untitled schema](preisposition-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/beschreibung")                 |
| [verarbeitungszeitraum](#verarbeitungszeitraum) | `object`  | Optional | cannot be null | [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/verarbeitungszeitraum")                                          |
| [artikelId](#artikelid)                         | `string`  | Optional | cannot be null | [Untitled schema](preisposition-properties-artikelid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/artikelId")                       |
| [zu\_abschlaege](#zu_abschlaege)                | `array`   | Optional | cannot be null | [Untitled schema](preisposition-properties-zu_abschlaege.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/zu_abschlaege")               |
| [preisstaffeln](#preisstaffeln)                 | `array`   | Optional | cannot be null | [Untitled schema](preisposition-properties-preisstaffeln.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/preisstaffeln")               |

## berechnungsmethode



`berechnungsmethode`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](kalkulationsmethode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Kalkulationsmethode.schema.json#/properties/berechnungsmethode")

### berechnungsmethode Type

`string[]`

## leistungstyp



`leistungstyp`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](leistungstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Leistungstyp.schema.json#/properties/leistungstyp")

### leistungstyp Type

`string[]`

## leistungsbezeichnung



`leistungsbezeichnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-leistungsbezeichnung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/leistungsbezeichnung")

### leistungsbezeichnung Type

`string`

## preiseinheit



`preiseinheit`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](waehrungseinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Waehrungseinheit.schema.json#/properties/preiseinheit")

### preiseinheit Type

`string[]`

## bezugsgroesse



`bezugsgroesse`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](mengeneinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Mengeneinheit.schema.json#/properties/bezugsgroesse")

### bezugsgroesse Type

`string[]`

## zeitbasis



`zeitbasis`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](zeiteinheit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Zeiteinheit.schema.json#/properties/zeitbasis")

### zeitbasis Type

`string[]`

## tarifzeit



`tarifzeit`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](tarifzeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Tarifzeit.schema.json#/properties/tarifzeit")

### tarifzeit Type

`string[]`

## bdewArtikelnummer



`bdewArtikelnummer`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](bdewartikelnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/BDEWArtikelnummer.schema.json#/properties/bdewArtikelnummer")

### bdewArtikelnummer Type

`string[]`

## zonungsgroesse



`zonungsgroesse`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](bemessungsgroesse.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Bemessungsgroesse.schema.json#/properties/zonungsgroesse")

### zonungsgroesse Type

`string[]`

## preisschluesselstamm



`preisschluesselstamm`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-preisschluesselstamm.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/preisschluesselstamm")

### preisschluesselstamm Type

`string`

## positionsnummer



`positionsnummer`

*   is optional

*   Type: `integer`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-positionsnummer.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/positionsnummer")

### positionsnummer Type

`integer`

## messebene



`messebene`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](netzebene.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/enum/Netzebene.schema.json#/properties/messebene")

### messebene Type

`string[]`

## beschreibung



`beschreibung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-beschreibung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/beschreibung")

### beschreibung Type

`string`

## verarbeitungszeitraum



`verarbeitungszeitraum`

*   is optional

*   Type: `object` ([Details](zeitraum.md))

*   cannot be null

*   defined in: [Untitled schema](zeitraum.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Zeitraum.schema.json#/properties/verarbeitungszeitraum")

### verarbeitungszeitraum Type

`object` ([Details](zeitraum.md))

## artikelId



`artikelId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-artikelid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/artikelId")

### artikelId Type

`string`

## zu\_abschlaege



`zu_abschlaege`

*   is optional

*   Type: `object[]` ([Details](positionsaufabschlag.md))

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-zu_abschlaege.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/zu_abschlaege")

### zu\_abschlaege Type

`object[]` ([Details](positionsaufabschlag.md))

## preisstaffeln



`preisstaffeln`

*   is optional

*   Type: `object[]` ([Details](preisstaffel.md))

*   cannot be null

*   defined in: [Untitled schema](preisposition-properties-preisstaffeln.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e/main/schemas/v1/com/Preisposition.schema.json#/properties/preisstaffeln")

### preisstaffeln Type

`object[]` ([Details](preisstaffel.md))
