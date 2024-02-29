## Untitled object in undefined Type

`object` ([Details](zuordnungobjectcode.md))

# Untitled object in undefined Properties

| Property                                                                              | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                                                                |
| :------------------------------------------------------------------------------------ | :------- | :------- | :------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [referenzLokationsTyp](#referenzlokationstyp)                                         | `string` | Optional | cannot be null | [Untitled schema](lokationstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationstyp.schema.json#/properties/referenzLokationsTyp")                                                                           |
| [referenzLokationsId](#referenzlokationsid)                                           | `string` | Optional | cannot be null | [Untitled schema](zuordnungobjectcode-properties-referenzlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/referenzLokationsId")                                           |
| [vorgelagerteLokationTyp](#vorgelagertelokationtyp)                                   | `string` | Optional | cannot be null | [Untitled schema](lokationstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationstyp.schema.json#/properties/vorgelagerteLokationTyp")                                                                        |
| [vorgelagerteLokationId](#vorgelagertelokationid)                                     | `string` | Optional | cannot be null | [Untitled schema](zuordnungobjectcode-properties-vorgelagertelokationid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/vorgelagerteLokationId")                                     |
| [objectcode](#objectcode)                                                             | `array`  | Optional | cannot be null | [Untitled schema](zuordnungobjectcode-properties-objectcode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/objectcode")                                                             |
| [referenzMarktlokationTechnischeRessource](#referenzmarktlokationtechnischeressource) | `array`  | Optional | cannot be null | [Untitled schema](zuordnungobjectcode-properties-referenzmarktlokationtechnischeressource.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/referenzMarktlokationTechnischeRessource") |

## referenzLokationsTyp



`referenzLokationsTyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](lokationstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationstyp.schema.json#/properties/referenzLokationsTyp")

### referenzLokationsTyp Type

`string`

### referenzLokationsTyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                    | Explanation |
| :----------------------- | :---------- |
| `"MALO"`                 |             |
| `"MELO"`                 |             |
| `"NELO"`                 |             |
| `"TECHNISCHE_RESSOURCE"` |             |

## referenzLokationsId



`referenzLokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zuordnungobjectcode-properties-referenzlokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/referenzLokationsId")

### referenzLokationsId Type

`string`

## vorgelagerteLokationTyp



`vorgelagerteLokationTyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](lokationstyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Lokationstyp.schema.json#/properties/vorgelagerteLokationTyp")

### vorgelagerteLokationTyp Type

`string`

### vorgelagerteLokationTyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                    | Explanation |
| :----------------------- | :---------- |
| `"MALO"`                 |             |
| `"MELO"`                 |             |
| `"NELO"`                 |             |
| `"TECHNISCHE_RESSOURCE"` |             |

## vorgelagerteLokationId



`vorgelagerteLokationId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](zuordnungobjectcode-properties-vorgelagertelokationid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/vorgelagerteLokationId")

### vorgelagerteLokationId Type

`string`

## objectcode



`objectcode`

*   is optional

*   Type: `object[]` ([Details](objectcode.md))

*   cannot be null

*   defined in: [Untitled schema](zuordnungobjectcode-properties-objectcode.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/objectcode")

### objectcode Type

`object[]` ([Details](objectcode.md))

## referenzMarktlokationTechnischeRessource



`referenzMarktlokationTechnischeRessource`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](zuordnungobjectcode-properties-referenzmarktlokationtechnischeressource.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/referenzMarktlokationTechnischeRessource")

### referenzMarktlokationTechnischeRessource Type

`string[]`
