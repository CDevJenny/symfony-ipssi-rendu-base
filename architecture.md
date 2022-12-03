# Entités

## Produit

-   (done) id
-   (done) nom
-   (done) description
-   (done) image (chaine de caractère et pas d'upload d'image ^^)
-   (done) année sortie
-   (done) quantité
-   (done) marque
-   (done) couleur
-   (done) isPublished (boolean)
-   (done) (isDeleted?)
-   (done) createdAt (timestamp)
-   (done) updatedAt (timestamp)

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

-   (done) id
-   (done) nom

## Panier

-   id
-   référence utilisateur

## Panier-Produit (table pivot)

-   (done) référence panier
-   (done) référence produit
-   (done) quantité
-   (done) createdAt (timestamp)
-   (done) updatedAt (timestamp)

# Controlleurs

## UserController

-   (done) Register
-   (done) Profile

## SecurityController

-   (done) Login
-   (done) Logout

## AdminController

-   Index
    -   Liste des produits
    -   Liste des articles
    -   Liste des utilisateurs
-   (done) Ajout, édition, suppression articles, produits, catégories, utilisateurs

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

-   (done) Barre de navigation

## Accueil

-   3 derniers articles : faire CSS

## Articles

-   Lister tous les articles
    -   Affichage : faire CSS
    -   (à faire) Filtres

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
