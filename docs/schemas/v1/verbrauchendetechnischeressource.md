## Untitled object in undefined Type

`object` ([Details](verbrauchendetechnischeressource.md))

# Untitled object in undefined Properties

| Property                                          | Type      | Required | Nullable       | Defined by                                                                                                                                                                                                             |
| :------------------------------------------------ | :-------- | :------- | :------------- | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [enwg](#enwg)                                     | `boolean` | Optional | cannot be null | [Untitled schema](verbrauchendetechnischeressource-properties-enwg.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/VerbrauchendeTechnischeRessource.schema.json#/properties/enwg") |
| [inbetriebsetzungsdatum](#inbetriebsetzungsdatum) | `string`  | Optional | cannot be null | [Untitled schema](inbetriebsetzung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Inbetriebsetzung.schema.json#/properties/inbetriebsetzungsdatum")                              |
| [einordnung](#einordnung)                         | `string`  | Optional | cannot be null | [Untitled schema](ressourcewechselmoeglichkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/RessourceWechselmoeglichkeit.schema.json#/properties/einordnung")                  |

## enwg



`enwg`

*   is optional

*   Type: `boolean`

*   cannot be null

*   defined in: [Untitled schema](verbrauchendetechnischeressource-properties-enwg.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/VerbrauchendeTechnischeRessource.schema.json#/properties/enwg")

### enwg Type

`boolean`

## inbetriebsetzungsdatum



`inbetriebsetzungsdatum`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](inbetriebsetzung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Inbetriebsetzung.schema.json#/properties/inbetriebsetzungsdatum")

### inbetriebsetzungsdatum Type

`string`

### inbetriebsetzungsdatum Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                          | Explanation |
| :----------------------------- | :---------- |
| `"INBETRIEBSETZUNG_NACH_2023"` |             |
| `"INBETRIEBSETZUN_VOR_2024"`   |             |

## einordnung



`einordnung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](ressourcewechselmoeglichkeit.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/RessourceWechselmoeglichkeit.schema.json#/properties/einordnung")

### einordnung Type

`string`

### einordnung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                          | Explanation |
| :--------------------------------------------- | :---------- |
| `"WECHSELMOEGLICHKEIT_EINMALIG_NOCH_MOEGLICH"` |             |
| `"WECHSELMOEGLICHKEIT_NICHT_MOEGLICH"`         |             |
| `"BEFRISTET_OHNE_WECHSELMOEGLICHKEIT"`         |             |
| `"WECHSEL_WURDE_DURCHGEFUEHRT"`                |             |
