## Untitled object in undefined Type

`object` ([Details](messlokationszuordnung.md))

# Untitled object in undefined Properties

| Property                            | Type     | Required | Nullable       | Defined by                                                                                                                                                         |
| :---------------------------------- | :------- | :------- | :------------- | :----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [messlokationsId](#messlokationsid) | `string` | Optional | cannot be null | [Untitled schema](messlokationszuordnung-properties-messlokationsid.md "https://conuti.de/bo4e/schemas/v1/com/Messlokationszuordnung#/properties/messlokationsId") |
| [arithmetik](#arithmetik)           | `array`  | Optional | cannot be null | [Untitled schema](arithmetischeoperation.md "https://conuti.de/bo4e/schemas/v1/enum/ArithmetischeOperation#/properties/arithmetik")                                |
| [gueltigSeit](#gueltigseit)         | `string` | Optional | cannot be null | [Untitled schema](messlokationszuordnung-properties-gueltigseit.md "https://conuti.de/bo4e/schemas/v1/com/Messlokationszuordnung#/properties/gueltigSeit")         |
| [gueltigBis](#gueltigbis)           | `string` | Optional | cannot be null | [Untitled schema](messlokationszuordnung-properties-gueltigbis.md "https://conuti.de/bo4e/schemas/v1/com/Messlokationszuordnung#/properties/gueltigBis")           |

## messlokationsId



`messlokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokationszuordnung-properties-messlokationsid.md "https://conuti.de/bo4e/schemas/v1/com/Messlokationszuordnung#/properties/messlokationsId")

### messlokationsId Type

`string`

## arithmetik



`arithmetik`

*   is optional

*   Type: `string[]`

*   cannot be null

*   defined in: [Untitled schema](arithmetischeoperation.md "https://conuti.de/bo4e/schemas/v1/enum/ArithmetischeOperation#/properties/arithmetik")

### arithmetik Type

`string[]`

## gueltigSeit



`gueltigSeit`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokationszuordnung-properties-gueltigseit.md "https://conuti.de/bo4e/schemas/v1/com/Messlokationszuordnung#/properties/gueltigSeit")

### gueltigSeit Type

`string`

### gueltigSeit Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")

## gueltigBis



`gueltigBis`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](messlokationszuordnung-properties-gueltigbis.md "https://conuti.de/bo4e/schemas/v1/com/Messlokationszuordnung#/properties/gueltigBis")

### gueltigBis Type

`string`

### gueltigBis Constraints

**date time**: the string must be a date time string, according to [RFC 3339, section 5.6](https://tools.ietf.org/html/rfc3339 "check the specification")
