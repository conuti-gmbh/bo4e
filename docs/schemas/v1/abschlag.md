## Untitled object in undefined Type

`object` ([Details](abschlag.md))

# Untitled object in undefined Properties

| Property            | Type     | Required | Nullable       | Defined by                                                                                                                                                                   |
| :------------------ | :------- | :------- | :------------- | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [typ](#typ)         | `string` | Required | cannot be null | [Untitled schema](abschlagtyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/AbschlagTyp.schema.json#/properties/typ")                 |
| [prozent](#prozent) | `number` | Required | cannot be null | [Untitled schema](abschlag-properties-prozent.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/prozent") |

## typ



`typ`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](abschlagtyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/AbschlagTyp.schema.json#/properties/typ")

### typ Type

`string`

### typ Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                       | Explanation |
| :-------------------------- | :---------- |
| `"GEMEINDERABATT_KAV"`      |             |
| `"ANPASSUNG_P19_STROM_NEV"` |             |

## prozent



`prozent`

*   is required

*   Type: `number`

*   cannot be null

*   defined in: [Untitled schema](abschlag-properties-prozent.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/com/Abschlag.schema.json#/properties/prozent")

### prozent Type

`number`
