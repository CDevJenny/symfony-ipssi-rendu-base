# Entités

## Produit

- (done) id
- (done) nom
- (done) description
- (done) image (chaine de caractère et pas d'upload d'image ^^)
- (done) année sortie
- (done) quantité
- (done) marque
- (done) couleur
- (done) isPublished (boolean)
- (done) (isDeleted?)
- (done) createdAt (timestamp)
- (done) updatedAt (timestamp)

---

## Utilisateur

- (done) id
- (done) nom
- (done) prénom
- (done) mail
- (done) mot de passe
- (done) rôle (acheteur, vendeur ou admin)
- (done) isActive (boolean)
- (done) createdAt (timestamp)
- (done) updatedAt (timestamp)

---

## Article

- id (done)
- titre (done)
- contenu (done)
- auteur (à faire)
- isPublished (done)
- createdAt (done)
- updatedAt (done)

## Catégorie (table générique)

- (done) id
- (done) nom

## Panier

- id
- référence utilisateur

## Panier-Produit (table pivot)

- (done) référence panier
- (done) référence produit
- (done) quantité
- (done) createdAt (timestamp)
- (done) updatedAt (timestamp)

# Controlleurs

## UserController

- Register
- Profile

## SecurityController

- Login
- Logout

## AdminController

- Index
    - Liste des produits
    - Liste des articles
    - Liste des utilisateurs
- Ajout, édition, suppression articles, produits, etc. ?

## ContentController

- Index
- Show

## ActionController

- Add
- Edit
- Delete

## CartController

- TODO

# Pages

(Navbar en haut)

## Accueil

- 3 derniers articles

## Articles

- Lister tous les articles (avec filtre, etc.)

## Produits

- Non connecté
    - liste des 5 derniers produits
    - filtre
    - bouton show vers page détaillée
- Connecté en tant que membre de la plèbe (sans perms haha le nul)
    - même chose qu'au dessus
    - formulaire ajout au panier
        - quantité
        - couleur
        - etc.

## Panier

- Connecté
    - Liste des produits
        - Prix unité
        - Prix total
        - Total des produits

## Dashboard Admin

- Navbar custom
    - Stats
    - Pages admin pour articles, produits et utilisateurs
        - Filtragre (vendeur, catégories, desc ou asc)
        -
