# TP 3 PHP — Suivi des notes des apprenants

## 1. Présentation du projet

Ce projet consiste à développer une mini-application web en PHP permettant de saisir, stocker, afficher et analyser les notes des apprenants d'une classe.

## 2. Objectifs du TP

Ce TP permet de mettre en pratique les notions suivantes :

- Structuration d'un script PHP : balises, commentaires et affichage avec `echo`.
- Déclaration et utilisation des variables et constantes.
- Manipulation des types de données et conversion de types (cast).
- Utilisation des structures conditionnelles : `if`, `elseif`, `else` et `switch`.
- Utilisation des boucles : `while`, `do-while`, `for` et `foreach`.
- Manipulation des tableaux indexés et associatifs.
- Utilisation des opérateurs et des fonctions de manipulation des tableaux.
- Traitement des formulaires HTML avec `$_GET`, `$_POST` et `$_REQUEST`.
- Inclusion de fichiers PHP avec `include`, `require`, `include_once` et `require_once`.
- Lecture et écriture de fichiers texte et CSV.
- Sérialisation des données avec `json_encode`, `json_decode` et `serialize`.
- Gestion des cookies et des sessions avec `setcookie`, `session_start` et `date`.

## 3. Structure du projet

```text
tp_php/
├── README.md
├── config.php
├── index.php
├── includes/
│   ├── entete_inc.php
│   ├── menu_inc.php
│   └── pied_inc.php
└── data/
    ├── notes.csv
    └── notes.json
├── deconnexion.php
├── exo1_bases.php
├── exo2_flux.php
├── exo3_tableaux.php
├── export.php
├── info.html
├── info.php
├── liste.php
├── login.php
├── saisie.html
├── traitement.php
...
```
## 4. Fonctionnalités de l'application

L'application a pour objectif de permettre :

- La saisie des notes des apprenants à travers des formulaires HTML.
- L'enregistrement et la conservation des notes.
- L'affichage des notes enregistrées.
- La lecture et l'écriture des données dans des fichiers CSV et JSON.
- L'analyse des résultats des apprenants à l'aide des traitements PHP.
- La réutilisation de composants communs grâce aux fichiers inclus.

## 6. Technologies utilisées

- **PHP** : traitement des données et logique de l'application.
- **HTML** : création des formulaires et structuration des pages.
- **CSV et JSON** : stockage et échange des données.
- **XAMPP** : environnement de développement local.
- **Navigateur web** : accès à l'application.

## 7. Conclusion

Ce TP permet de consolider les bases de PHP à travers le développement d'une mini-application concrète. Il met en pratique les structures de contrôle, les tableaux, les formulaires, les fichiers, la sérialisation et la gestion des sessions et des cookies.
