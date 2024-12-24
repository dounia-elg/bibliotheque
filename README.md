**Connection**

Pour connecter MySQL avec PHP, je dois utiliser une fonction comme mysqli_connect() en fournissant les informations nécessaires telles que l'hôte, le nom d'utilisateur, le mot de passe et le nom de la base de données. Une fois la connexion établie, je peux exécuter des requêtes pour manipuler ou récupérer des données de la base.



**Techniques de récupération de données (Data Fetching) :**

1: **mysqli_fetch_assoc()** : Récupère une ligne de résultats sous forme de tableau associatif, où les clés sont les noms des colonnes de la table.

    ---> Avantages : 
        - Facile d'accès à toutes les lignes.
        - Pratique pour récupérer toutes les données d'un coup.

    ---> Inconvenients :
        - Consomme plus de mémoire.
        - Charge toutes les lignes en mémoire d'un coup, ce qui peut être inefficace avec de grands ensembles de données.

2: **mysqli_fetch_all()** : Récupère toutes les lignes d'un résultat sous forme de tableau multidimensionnel, ce qui permet d’accéder à toutes les données d’un coup.

    ---> Avantages : 
        - Facile d'accès à toutes les lignes.
        - Pratique pour récupérer toutes les données d'un coup.

    ---> Inconvenients :
        - Consomme plus de mémoire.
        - Charge toutes les lignes en mémoire d'un coup, ce qui peut être inefficace avec de grands ensembles de données.

3: **mysqli_fetch_array()** : Récupère une ligne de résultats sous forme de tableau associatif et numérique. Vous pouvez accéder aux données à la fois par index numérique et par le nom de la colonne.

    ---> Avantages : 
        - Accès aux données par nom et index.
        - Flexible.

    ---> Inconvenients :
        - Moins optimal si vous n'avez besoin que d'un type d'accès.
        - Moins lisible et plus coûteux en mémoire.

4: **mysqli_fetch_row()** : Récupère une ligne sous forme de tableau indexé numériquement, où chaque valeur est accessible via un index (0, 1, 2, ...).

    ---> Avantages : 
        - Meilleure performance (accès par index).
        - Moins de consommation mémoire.

    ---> Inconvenients :
        - Moins clair et moins flexible.
        - L'ordre des colonnes doit être connu.




**Différence entre :**

1: **include** : Inclut un fichier PHP dans le script. Si le fichier n'est pas trouvé le script continue son exécution.

2: **include_once** : vérifie si ce fichier a déjà été inclus dans le script. Si le fichier a déjà été inclus, il ne sera pas inclus à nouveau.

3: **require** : cette fonction inclut un fichier PHP, mais si le fichier n'est pas trouvé ou ne peut pas être inclus, le script s'arrête 

4: **require_once** : Si le fichier a déjà été inclus, il ne sera pas inclus à nouveau.

