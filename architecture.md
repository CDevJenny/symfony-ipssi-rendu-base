# Entités

## Produit

-   id
-   nom
-   description
-   image (chaine de caractère et pas d'upload d'image ^^)
-   année sortie
-   quantité
-   isPublished (boolean)
-   (isDeleted?)
-   createdAt (timestamp)
-   updatedAt (timestamp)

### console

-   id
-   marque
-   couleur

### accessoires

-   id
-   référence console

### jeux

-   id
-   référence console
-   références accessoires compatibles
-   éditeur (string, pas de référence)

---

## Utilisateur

-   (done) id
-   (done) nom
-   (done) prénom
-   (done) mail
-   (done) mot de passe
-   (done) rôle (acheteur, vendeur ou admin)
-   (done) isActive (boolean)
-   (done) createdAt (timestamp)
-   (done) updatedAt (timestamp)

---

## Article

-   (done) id
-   (done) titre
-   (done) contenu
-   (done) auteur
-   (done) isPublished
-   (done) createdAt
-   (done) updatedAt

## Catégorie (table générique)

-   id
-   nom

## Panier

-   id
-   référence utilisateur

## Panier-Produit (table pivot)

-   référence panier
-   référence produit
-   quantité
-   createdAt (timestamp)
-   updatedAt (timestamp)

# Controlleur

## UserController

-   (done) Register
-   Profile

## SecurityController

-   (done) Login
-   (done) Logout

## AdminController

-   Index
    -   Liste des produits
    -   Liste des articles
    -   Liste des utilisateurs
-   Ajout, édition, suppression articles, produits, etc. ?

## ContentController

-   (done) Index
-   Show

## ActionController

-   Add
    -   (done) Article
    -   Produit
-   Edit
    -   (done) Article
    -   Produit
-   Delete
    -   (done) Article
    -   Produit

## CartController

-   TODO

# Pages

(Navbar en haut)

## Accueil

-   (done) 3 derniers articles

## Articles

-   Lister tous les articles (avec filtre, etc.)
    -   Filtre
    -   (done) Afficher tous les articles
    -   Création, édition et suppression sur dashboard admin

## Produits

-   Non connecté
    -   liste des 5 derniers produits
    -   filtre
    -   bouton show vers page détaillée
-   Connecté en tant que membre de la plèbe (sans perms haha le nul)
    -   même chose qu'au dessus
    -   formulaire ajout au panier
        -   quantité
        -   couleur
        -   etc.

## Panier

-   Connecté
    -   Liste des produits
        -   Prix unité
        -   Prix total
        -   Total des produits

## Dashboard Admin

-   Navbar custom
    -   Stats
    -   Pages admin pour articles, produits et utilisateurs
        -   Filtragre (vendeur, catégories, desc ou asc)
        -
