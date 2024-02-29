## Untitled object in undefined Type

`object` ([Details](enfg.md))

# Untitled object in undefined Properties

| Property                                                      | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                              |
| :------------------------------------------------------------ | :------- | :------- | :------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [grundlageVerringerungUmlagen](#grundlageverringerungumlagen) | `string` | Optional | cannot be null | [Untitled schema](grundlageverringerungumlagen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/GrundlageVerringerungUmlagen.schema.json#/properties/grundlageVerringerungUmlagen") |
| [grund](#grund)                                               | `array`  | Optional | cannot be null | [Untitled schema](enfg-properties-grund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/EnFG.schema.json#/properties/grund")                                                        |

## grundlageVerringerungUmlagen



`grundlageVerringerungUmlagen`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](grundlageverringerungumlagen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/GrundlageVerringerungUmlagen.schema.json#/properties/grundlageVerringerungUmlagen")

### grundlageVerringerungUmlagen Type

`string`

### grundlageVerringerungUmlagen Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                      | Explanation |
| :----------------------------------------- | :---------- |
| `"ERFUELLT_VORAUSSETZUNG_NACH_ENFG"`       |             |
| `"ERFUELLT_NICHT_VORAUSSETZUNG_NACH_ENFG"` |             |
| `"KEINE_ANGABE"`                           |             |

## grund



`grund`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](enfg-properties-grund.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/EnFG.schema.json#/properties/grund")

### grund Type

`string[]`
