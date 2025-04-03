# Portfolio de Mattéo Diseurs (examen web)

## Structure HTML

Le fichier principal `index.html` suit une structure organisée en plusieurs sections :

- **`<head>`** :
  - Définit le titre de la page (`<title>`).
  - Lie la feuille de style CSS au document (`<link rel="stylesheet" href="./CSS/style.css">`).

- **`<body>`** : Contient l'ensemble du contenu visible du site.

- **Navigation (`<nav>`)** :
  - Contient une liste de liens (`<ul>`, `<li>`, `<a>`) permettant de naviguer vers différentes sections du site.
  - Présente le nom et le rôle de Mattéo Diseurs.

- **Section principale (`<section class="header">`)** :
  - Contient le titre principal du site avec un effet typographique (`<h1>`).
  - Présente les informations essentielles sur moi.

- **Section Timeline (`<section id="timeline">`)** :
  - Présente une chronologie des projets réalisés.

- **Section Travail (`<section id="work">`)** :
  - Affiche un portfolio des projets développés par Mattéo Diseurs.

- **Section Contact (`<section id="contact">`)** :
  - Permet aux visiteurs d’envoyer un message ou de trouver des moyens de contacter Mattéo Diseurs.

## CSS et Media Queries

### Base du CSS

Le style est géré dans `CSS/style.css`. Voici quelques règles CSS importantes :

- **Généralités :**

  ```css
  html, body {
      scroll-behavior: smooth !important;
  }
  * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
  }
  ```

  Ces règles assurent un affichage fluide et une gestion homogène des marges et paddings.

- **Police d’écriture personnalisée :**

  ```css
  @font-face {
      font-family: OpenSans;
      src: url(../FONT/RobotoFlex-VariableFont.ttf);
  }
  ```

  Cette règle importe et applique une police spécifique au site.

- **Fond d’écran en dégradé :**

  ```css
  body {
      background: linear-gradient(190deg, rgba(94,94,94,1) 0%, rgba(25,25,25,1) 11%, rgba(20,20,20,1) 24%, rgba(0,0,0,1) 36%, rgba(0,0,0,1) 47%);
      font-family: 'OpenSans';
      color: white;
  }
  ```

  Applique un fond dégradé pour améliorer l’esthétique du site.

### Media Queries

Le site s'adapte à différentes tailles d'écran avec les Media Queries suivantes :

- **Petits écrans (mobiles) :**

  ```css
  @media (max-width: 600px) {
      /* Ajustements pour mobiles */
  }
  ```

- **Écrans intermédiaires (tablettes) :**

  ```css
  @media (min-width: 601px) and (max-width: 1250px) {
      /* Ajustements pour tablettes */
  }
  ```

- **Grands écrans (PC) :**

  ```css
  @media (min-width: 1251px) {
      /* Ajustements pour grands écrans */
  }
  ```

## Arborescence du projet

```
portfolio-matteodiseurs-main/
├── index.html
├── CSS/
│   ├── style.css
├── JS/
│   ├── script.js
├── FONT/
│   ├── RobotoFlex.ttf
├── IMAGES/
│   ├── background.png
│   ├── MXQR4905.PNG
└── README.md
```


