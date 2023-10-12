# Exploiter l'api Cities-Api

## A quoi sert Cities-Api ?

Cities-Api est une ressource en ligne de type Api. Elle permet d'interroger aisément la liste des communes nationales ainsi que les informations géographiques associées à ces communes. Elle vous renvoie des données au format JSON. 

En exploitant l'API Cities-Api, vous pouvez notamment :
    Accéder à la liste des communes
    Rechercher une commune par son identifiant

## Données disponibles

|Nom|type|Description|
|---|---|---|
|name|string|nom de la commune|
|zip|string|code postale de la ville|
|lat|string|latitude de la commune|
|lon|string|longitude de la commune
---




> [!WARNING]
> L'api ne permet qu'une consommation en GET. <span style="color:red;">Toute autre méthode sera refusée par l'api.</span>

## Récupérer la liste des communes (GET)

Afin d'accéder à la liste des communes, vous pouvez utiliser le endpoint suivant : 

accessible en méthode <span style="color:green;"> GET</span> exclusivement :

```
https://127.0.0.1/api/cities
```

Vous recevrez la réponse dans le mode suivant : 
```
{
    "@context": "/api/contexts/City",
    "@id": "/api/cities",
    "@type": "hydra:Collection",
    "hydra:totalItems": 537,
    "hydra:member": [
        {
            "@id": "/api/cities/1",
            "@type": "City",
            "id": 1,
            "name": "ville du pont",
            "zip": "25650",
            "lat": "46.999873398",
            "lon": "6.498147193"
        },
        {
            "@id": "/api/cities/2",
            "@type": "City",
            "id": 2,
            "name": "villers grelot",
            "zip": "25640",
            "lat": "47.361512085",
            "lon": "6.235167025"
        },
        {
            "@id": "/api/cities/3",
            "@type": "City",
            "id": 3,
            "name": "villars les blamont",
            "zip": "25310",
            "lat": "47.368383721",
            "lon": "6.871414913"
        },
        
```

Pour accéder à une page précise de l'api, vous pouvez rajouter le paramètre suivant :<br>
<strong>?page={numéro de la page souhaité} </strong>

>exemple : 
>https://api.cities-api.com/v1/cities?page=2



## Récupérer une commune via son id (GET)

A partir de l'id, vous pouvez récupérer les informations d'une commune en particulier. Il vous suffit de rajouter l'id de la commune à la fin de l'url ou de l'exploiter en paramètre. 

accessible en méthode <span style="color:green;"> GET</span> exclusivement :

```
https://127.0.0.1/api/cities/{id}
```
>exemple : 
>https://127.0.0.1/api/cities/7



Vous recevrez la réponse de la manière suivante : 

```
{
    "id": 7,
    "name": "villers sous chalamont",
    "zip": "25270",
    "lat": "46.901588322",
    "lon": "6.045328224"
}
```

Vous pourrez exploiter à votre guise les données reçues, en exploitant les clés de l'objet JSON.

---
Bonne utilisation !



