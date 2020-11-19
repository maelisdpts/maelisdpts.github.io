# SiteEcommerce
##### Un site de E-commerce

Pour notre projet de NSI du premier trimestre, nous avons choisi de réaliser un site-Ecommerce, cest-à-dire un site de vente en ligne. Pour cela, nous désirions faire un site avec un page d'acceuil, qui redigire le client vers une page contenant les différents produits que nous vendons, stockés dans une base de donnée, et une page pour chaque produit afin d'avoir plus d'information sur ces derniers et pouvoir les acheter. Après avoir reflechi, il nous a semblé important d'avoir des éléments permettants au client de faire ses achats, comme un panier qui se rempli au fur et a mesure que le client achete différents produits et se vide quand ce dernier "paye", ou encore une possiblité de se connecter à son compte personnel, pour lequel il nous a aussi semblé judicieux de faire un seconde base de donnée. 

Il nous fallait donc executer différentes taches les unes après les autres, pour obtenir un site facilement utilisable et bien pensé. Notre mode de fonctionnement: 
* creer les pages HTML et CSS 
* écrire les codes javascript 
* ajouter les code php et les bases de données 
* mettre le site en ligne

Nous avons utilisé la plateforme Github pour nous partagé les dossiers, faisant chacun nos modifications de notre coté, et se partageant le code ensuite. 

Pour se faire, nous avons commencé par les bases, avec un code HTML et CSS, pour creer le squelette de notre site.

le principale code du HTML est le code main.html, qui code la page d'acceuil de notre site,  et qui est rattaché au code main.css, qui code la mise en page de ce dernier. 

## les codes HTML et CSS

Par soucis pratique, Nous avons aussi fait une page css pour l'en-tête et le bas de page (header et footer) qui sont reliées à toutes nos pages HTML pour coder ses dernier: header.css et footer.css, afin à ne pas avoir à les recoder pour chaque page. 
Le code store.html est ensuite venu pour réaliser une interface où le client peut faire ses achats, donc  qui affiche les différents produits de notre future base de donnée, ainsi qu'une interface où le client peut faire des choix comme savoir s'il veut des vêtements, des livres, etc..., il est rattaché au css par store.css.
Pour finir, le code produit.html code la page de présentation de chaque produit, rattaché au code produit.css pour le css.
La page blog.html code une page additionelle qui nous est venue à l'esprit lors de la mise en forme du site, pour parler de notre projet ( on y retrouvera la doc), elle est mise en page par le code blog.css.
La page about.html présente elle aussi le projet mais de manière plus concise pour le client, elle est mise en page par le code about.css.

## les codes javascript, php et les bases de données

Nous sommes ensuite passés au javascript et au php, qui permettent l'accès à nos bases de données et dynamique de notre site, permettant d'exécuter des commandes du côté client. 
Dans toutes nos pages HTML, nous avons fait appel aux codes header.js et footer.js, qui correspondent à l'en-tête et le pied de page.
Le code header.js fait appel aux codes php pour son fond: il fait appel au header.php qui renvoie le code HTML du header, creant des liens vers la page d'accueil, la page des produits, le blog et la page about us accessible à partir de toutes les autres pages.Elle crée le header, l'icone de shopping avec le code panier.php (qui renvoie le code HTML du pop-up), permet de supprimer un élément du panier grâce au code supprimer.php et de payer le panier, nous ne faisons pas de système de payement, donc le code permet juste de vider le panier et de confirmer l'achat.
Le code footer.js creer le footer et fait appel au code footer.php, qui renvoie un code HTML, permettant lui aussi d'acceder aux différentes pages du site. 
Le code connexion.js permet au client de se connecter au site via la pop-up connexion que l'on retrouve dans l'header et le footer: il utilise le code connecte.php, pour la connexion, renvoie le code html de la popup connexion, renvoie le code html de la popup inscription, permet à l'utilisateur de quitter la pop-up, permet d'inscrire l'utilisateur dans la base de donnée grâce au code inscription.php, permet de connecter l'utilisateur à sa compte en appellant a la base de donnée grâce au code connexion.php, renvoie le code html de la pop-up compte et permet à l'utilisateur de se déconnecter grâce au code deconnection.php.
Le code main.js est appelé par le code main.html et renvoie les images sous frome de diaporama qui défile dans la page d'accueil, pour l'esthétique.
Le code store.js qui fait appel au code store.php code l'interface d'achat du site, où le client découvre les produits, par le code HTML (par le php), et renvoie le client vers une page contenant les caractéristiques du produit lorqu'il clique sur l'un d'entre eux.
Pour finir, le code produit.js est lui appelé par le code produit.html et creer la partie html de la page grâce au code produit.php, qui appelle à la base de donnée, et permet de signaler un achat grâce au code achat.php, ajoutant le nouveau produit au panier quand l'achat a lieu.

## finalisation du projet

Nous avons mis les images que nous utilisons dans un dossier assert pour les avoir avec le reste du code. 
Il a ensuite fallu trouver les différents produits, que nous avons classés avec leurs caractéristiques sur un tableau SQL, que nous avons relié à notre code pour les faire apparaitre sur le site. 

Une fois, fini, nous avons finalisé avec de la mise en page, puis les codes ont été mis sur l'hebergement en ligne, et notre site a été créer.

--------------
