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

-   id
-   nom
-   prénom
-   mail
-   mot de passe
-   rôle (acheteur, vendeur ou admin)
-   (isDeleted?)
-   createdAt (timestamp)
-   updatedAt (timestamp)

---

## Article

-   id (done)
-   titre (done)
-   contenu (done)
-   auteur (à faire)
-   isPublished (done)
-   createdAt (done)
-   updatedAt (done)

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

-   Register
-   Profile

## SecurityController

-   Login
-   Logout

## AdminController

-   Index
    -   Liste des produits
    -   Liste des articles
    -   Liste des utilisateurs
-   Ajout, édition, suppression articles, produits, etc. ?

## ContentController

-   Index
-   Show

## ActionController

-   Add
-   Edit
-   Delete

## CartController

-   TODO

# Pages

(Navbar en haut)

## Accueil

-   3 derniers articles

## Articles

-   Lister tous les articles (avec filtre, etc.)

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
