## Untitled object in undefined Type

`object` ([Details](anfrage.md))

# Untitled object in undefined Properties

| Property                                            | Type     | Required | Nullable       | Defined by                                                                                                                                                                                                |
| :-------------------------------------------------- | :------- | :------- | :------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| [boTyp](#botyp)                                     | `string` | Required | cannot be null | [Untitled schema](anfrage-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/boTyp")                                     |
| [versionStruktur](#versionstruktur)                 | `string` | Required | cannot be null | [Untitled schema](anfrage-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/versionStruktur")                 |
| [lokationsId](#lokationsid)                         | `string` | Optional | cannot be null | [Untitled schema](anfrage-properties-lokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/lokationsId")                         |
| [anfragetyp](#anfragetyp)                           | `string` | Optional | cannot be null | [Untitled schema](anfragetyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Anfragetyp.schema.json#/properties/anfragetyp")                                         |
| [abonnement](#abonnement)                           | `string` | Optional | cannot be null | [Untitled schema](abonnement.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Abonnement.schema.json#/properties/abonnement")                                         |
| [anfragereferenz](#anfragereferenz)                 | `string` | Optional | cannot be null | [Untitled schema](anfrage-properties-anfragereferenz.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/anfragereferenz")                 |
| [allgemeineInformationen](#allgemeineinformationen) | `string` | Optional | cannot be null | [Untitled schema](anfrage-properties-allgemeineinformationen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/allgemeineInformationen") |
| [anfragekategorie](#anfragekategorie)               | `string` | Optional | cannot be null | [Untitled schema](anfragekategorie.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Anfragekategorie.schema.json#/properties/anfragekategorie")                       |
| [energierichtung](#energierichtung)                 | `string` | Optional | cannot be null | [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Energierichtung.schema.json#/properties/energierichtung")                          |
| [gueltigkeitszeitspanne](#gueltigkeitszeitspanne)   | `string` | Optional | cannot be null | [Untitled schema](anfrage-properties-gueltigkeitszeitspanne.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/gueltigkeitszeitspanne")   |
| [gueltigAb](#gueltigab)                             | `string` | Optional | cannot be null | [Untitled schema](anfrage-properties-gueltigab.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/gueltigAb")                             |

## boTyp



`boTyp`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](anfrage-properties-botyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/boTyp")

### boTyp Type

`string`

## versionStruktur



`versionStruktur`

*   is required

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](anfrage-properties-versionstruktur.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/versionStruktur")

### versionStruktur Type

`string`

## lokationsId



`lokationsId`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](anfrage-properties-lokationsid.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/lokationsId")

### lokationsId Type

`string`

## anfragetyp



`anfragetyp`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](anfragetyp.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Anfragetyp.schema.json#/properties/anfragetyp")

### anfragetyp Type

`string`

### anfragetyp Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                     | Explanation |
| :---------------------------------------- | :---------- |
| `"KAUF"`                                  |             |
| `"NUTZUNGSUEBERLASSUNG"`                  |             |
| `"ABRECHNUNGSBRENNWERT_UND_ZUSTANDSZAHL"` |             |
| `"LASTGANGDATEN"`                         |             |
| `"ZAEHLERSTAENDE"`                        |             |
| `"WERTEERMITTLUNG"`                       |             |
| `"ENERGIEMENGE_EINZELWERT"`               |             |
| `"INNERHALB_DER_ARBEITSZEIT"`             |             |
| `"AUCH_AUSSERHALB_DER_ARBEITSZEIT"`       |             |
| `"WECHSEL_SAEMTLICHER_EINRICHTUNGEN"`     |             |
| `"TEILWEISER_WECHSEL"`                    |             |
| `"AENDERUNG_ZAEHLZEITDEFINITION"`         |             |
| `"ABBESTELLUNG_ZAEHLZEITEN"`              |             |
| `"ABBESTELLUNG_MESSPRODUKT"`              |             |
| `"ANGEBOT_AUF_BASIS_PREISBLATT"`          |             |
| `"INDIVIDUELLES_ANGEBOT"`                 |             |
| `"AENDERUNG_KONFIGURATION"`               |             |
| `"KANN_NICHT_ANGEBOTEN_WERDEN"`           |             |

## abonnement



`abonnement`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](abonnement.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Abonnement.schema.json#/properties/abonnement")

### abonnement Type

`string`

### abonnement Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value         | Explanation |
| :------------ | :---------- |
| `"START_ABO"` |             |
| `"ENDE_ABO"`  |             |
| `"OHNE_ABO"`  |             |

## anfragereferenz



`anfragereferenz`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](anfrage-properties-anfragereferenz.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/anfragereferenz")

### anfragereferenz Type

`string`

## allgemeineInformationen



`allgemeineInformationen`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](anfrage-properties-allgemeineinformationen.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/allgemeineInformationen")

### allgemeineInformationen Type

`string`

## anfragekategorie



`anfragekategorie`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](anfragekategorie.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Anfragekategorie.schema.json#/properties/anfragekategorie")

### anfragekategorie Type

`string`

### anfragekategorie Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value                                                                         | Explanation |
| :---------------------------------------------------------------------------- | :---------- |
| `"PROZESSDATENBERICHT"`                                                       |             |
| `"GERAETEUEBERNAHME"`                                                         |             |
| `"WEITERVERPFLICHTUNG_BETRIEB_MELO"`                                          |             |
| `"AENDERUNG_MELO"`                                                            |             |
| `"STAMMDATEN_MALO_ODER_MELO"`                                                 |             |
| `"BILANZIERTE_MENGE_MEHR_MINDER_MENGEN"`                                      |             |
| `"ALLOKATIONSLISTE_MEHR_MINDER_MENGEN"`                                       |             |
| `"ENERGIEMENGE_UND_LEISTUNGSMAXIMUM"`                                         |             |
| `"ABRECHNUNG_MESSSTELLENBETRIEB_MSB_AN_LF"`                                   |             |
| `"AENDERUNG_PROGNOSEGRUNDLAGE_GERAETEKONFIGURATION"`                          |             |
| `"AENDERUNG_GERAETEKONFIGURATION"`                                            |             |
| `"REKLAMATION_VON_WERTEN"`                                                    |             |
| `"LASTGANG_MALO_TRANCHE"`                                                     |             |
| `"SPERRUNG"`                                                                  |             |
| `"ENTSPERRUNG"`                                                               |             |
| `"REKLAMATION_ZAEHLZEITDEFINITION"`                                           |             |
| `"ZEITREIHEN_IM_RAHMEN_BILANZKREISABRECHNUNG"`                                |             |
| `"GERAETEWECHSELABSICHT"`                                                     |             |
| `"AENDERUNG_KONZESSIONSABGABE"`                                               |             |
| `"AENDERUNG_ZAEHLZEITDEFINITION"`                                             |             |
| `"UEBERMITTLUNG_WERTE_AN_ESA"`                                                |             |
| `"AENDERUNG"`                                                                 |             |
| `"BILANZKREISZUORDNUNGSLISTE"`                                                |             |
| `"CLEARINGLISTE"`                                                             |             |
| `"NORMIERTES_PROFIL_PROFILSCHAR"`                                             |             |
| `"REDISPATCH_EINZELZEITREIHE_AUSFALLARBEIT"`                                  |             |
| `"REKLAMATION_PROFIL_PROFILSCHAR"`                                            |             |
| `"STAMMDATEN_MALO"`                                                           |             |
| `"STAMMDATEN_MELO"`                                                           |             |
| `"STAMMDATEN_TRANCHE"`                                                        |             |
| `"BEENDIGUNG_EINER_KONFIGURATION"`                                            |             |
| `"BESTELLUNG_EINER_KONFIGURATION"`                                            |             |
| `"BESTELLUNG_EINES_ANGEBOTS_EINER_KONFIGURATION"`                             |             |
| `"REKLAMATION_EINER_KONFIGURATION"`                                           |             |
| `"BESTELLUNG_AENDERUNG_NETZENTGELTE_NETZORIENTIERTER_STEUERUNGSMOEGLICHKEIT"` |             |

## energierichtung



`energierichtung`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](energierichtung.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/enum/Energierichtung.schema.json#/properties/energierichtung")

### energierichtung Type

`string`

### energierichtung Constraints

**enum**: the value of this property must be equal to one of the following values:

| Value     | Explanation |
| :-------- | :---------- |
| `"AUSSP"` |             |
| `"EINSP"` |             |

## gueltigkeitszeitspanne



`gueltigkeitszeitspanne`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](anfrage-properties-gueltigkeitszeitspanne.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/gueltigkeitszeitspanne")

### gueltigkeitszeitspanne Type

`string`

## gueltigAb



`gueltigAb`

*   is optional

*   Type: `string`

*   cannot be null

*   defined in: [Untitled schema](anfrage-properties-gueltigab.md "https://raw.githubusercontent.com/conuti-gmbh/bo4e-schema/master/schemas/v1/bo/Anfrage.schema.json#/properties/gueltigAb")

### gueltigAb Type

`string`
