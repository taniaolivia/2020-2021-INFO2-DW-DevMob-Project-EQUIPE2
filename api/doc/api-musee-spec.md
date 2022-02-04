# Spécification de l'API par US

## <span style="color:orange"> US1 </span>


### Modèle du domaine
![US1](assets/US1.PNG) 

### Spec api

| Dev | Rôle | Description route | nom controller | nom route | url route | 
|--- |--- |--- |--- |--- |--- |
| Elyas | Admin | récupération d'un musée par id pour afficher des horaires du musée| MuseeController | getmusee | @Rest\Get("/api/musee/{id}") |

<br />
<br />
<br />
<br />

## <span style="color:orange"> US2 </span>

### Modèle du domaine
![US2](assets/US2.PNG)

### Spec api

| Dev | Rôle | Description route | nom controller | nom route | url route | 
|--- |--- |--- |--- |--- |--- |
| Nicolas | Admin | récupération d'un bâteau par nomunique pour afficher la carte permettant de géolocaliser les 8 bateaux à flot dans le port.  | BateauController | getbateau | @Rest\Get("/api/bateaux") |

<br />
<br />
<br />
<br />

## <span style="color:orange"> US3 </span>

### Modèle du domaine
![US3](assets/US3.PNG)

### Spec api

| Dev | Rôle | Description route | nom controller | nom route | url route | 
|--- |--- |--- |--- |--- |--- |
| Elyas | Admin | récupération d'un bâteau par nomunique pour afficher les détails d'un bateau | BateauController | getbateau | @Rest\Get("/api/bateaux/{nomunique}") |

<br />
<br />
<br />
<br />

## <span style="color:orange"> US6 </span>

### Modèle du domaine
![US6](assets/US6.PNG)

### Spec api

| Dev | Rôle | Description route | nom controller | nom route | url route | 
|--- |--- |--- |--- |--- |--- |
| Tania | Admin | liste des bateaux | BateauController | listebateaux | @Rest\Get("/api/bateaux") |

<br />
<br />
<br />
<br />

## <span style="color:orange"> US7 </span>

### Modèle du domaine
![US7](assets/US7.PNG)

### Spec api

| Dev | Rôle | Description route | nom controller | nom route | url route | 
|--- |--- |--- |--- |--- |--- |
| Nhan | Admin | témoignages d'un bâteau | TemoignageController | gettemoignage | @Rest\Get("/api/bateaux/{nomunique}/temoignages") |

<br />
<br />
<br />
<br />

## <span style="color:orange"> US8 </span>

### Modèle du domaine
![US8](assets/US8.PNG)

### Spec api

| Dev | Rôle | Description route | nom controller | nom route | url route | 
|--- |--- |--- |--- |--- |--- |
| Tania | Admin | planning d'un bateau | PlanningController | getplanning | @Rest\Get("/api/bateaux/{nomunique}/planning") |

<br />
<br />
<br />
<br />

## <span style="color:orange"> US9 </span>

### Modèle du domaine
![US9](assets/US9.PNG)

### Spec api

| Dev | Rôle | Description route | nom controller | nom route | url route | 
|--- |--- |--- |--- |--- |--- |
| Nicolas | Admin | récupération du planning pour la réservation d'un bateau | PlanningController | getplanning | @REST\Get("/api/bateaux/{nomunique}/planning") |
| Nicolas | Admin | modification du nombre de place restante dans le planning du bateau | PlanningController | updateCreneauNbPlace | @Rest\Patch("/api/bateaux/{nomunique}/planning/creneau/{id}") |

<br />
<br />

### Diagramme de classe
![DiagrammeDeClasse](assets/DiagrammeDeClasse.PNG)