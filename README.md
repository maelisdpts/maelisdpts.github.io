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

-------------------------------

## les codes HTML et CSS

le principale code du HTML est le code __main.html__, qui code la page d'acceuil de notre site,  et qui est rattaché au code __main.css__, qui code la mise en page de ce dernier.  
Par soucis pratique, Nous avons aussi fait une page css pour l'en-tête et le pied de page (header et footer) qui sont reliées à toutes nos pages HTML pour coder ses dernier: __header.css__ et __footer.css__, afin à ne pas avoir à les recoder pour chaque page. Elles sont appelées dans toutes nos pages HTML. 
Le code __store.html__ est ensuite venu pour nous permettre de réaliser une interface où le client peut faire ses achats, donc  qui affiche les différents produits de notre future base de donnée, ainsi qu'une interface où le client peut faire des choix comme savoir s'il veut des vêtements, des livres, etc..., il est rattaché au css par __store.css__ (qui le met en page).  
Pour finir, le code __produit.html__ code la page de présentation de chaque produit, rattaché au code __produit.css__ pour sa mise en page. Pour que la page ne soit codée qu'une fois pour correspondre aux différents produits, nous avons codé avec HTML que les différents intitulé des description et informations importantes dont le client aura besoin pour ses achats, que nous compléteront plus tard grâce au javascript et les bases de données, qui pour chaque produit, indiqueront par exemple son pris ou sa provenance. Pour cela, le code HTML est vide, mais appelle un code php qui contient le language HTML de la page, et sera compléter par les différents éléments de la base de donnée, grâce au CSS.  
La page __blog.html__ code une page additionelle qui nous est venue à l'esprit lors de la mise en forme du site, pour parler de notre projet (on y retrouvera la doc par exemple). Nous aimerions y ajouter une interface pour ajouter d'autre article, afin d'entretenir notre blog et nos clients au courant. Elle est mise en page par le code __blog.css__.  
La page __about.html__ présente elle  le projet mais de manière plus concise pour le client, nous présentant en quelque mots, ainsi que les circonstances de créations du site.  Elle est mise en page par le code __about.css__.

## les codes javascript, php et les bases de données

Nous sommes ensuite passés au javascript et au php, qui permettent l'accès à nos bases de données et dynamique de notre site, permettant d'exécuter des commandes du côté client.   
Dans toutes nos pages HTML, nous avons fait appel aux codes __header.js__ et __footer.js__, qui correspondent à ces dynamiques au niveau de l'en-tête et du pied de page.  
Le code __header.js__ fait appel aux codes php pour son fond: il a recours au code __header.php__, qui renvoie le code HTML de l'en_tête, creant des liens vers la page d'accueil, la page des produits, le blog et la page "about us" accessible à partir de toutes les autres pages. Elle crée l'en-tête en lui même, l'icone de shopping avec le code __panier.php__ (qui renvoie le code HTML du pop-up), permet de supprimer un élément du panier grâce au code __supprimer.php__ et de payer le panier, nous ne faisons pas de système de payement, donc le code permet juste de vider le panier et de confirmer l'achat.  
Le code __footer.js__ creer le pied de page et fait appel au code __footer.php__, qui renvoie un code HTML, permettant lui aussi d'acceder aux différentes pages du site.  
Le code __connexion.js__ permet au client de se connecter au site via la pop-up connexion que l'on retrouve dans l'en-tête et le pied de page: il utilise le code __connecte.php__, pour se connecter, renvoie le code html de la pop-up connexion, renvoie le code html de la pop-up inscription, permet à l'utilisateur de quitter la pop-up, permet d'inscrire l'utilisateur dans la base de donnée grâce au code __inscription.php__, permet de connecter l'utilisateur à sa compte en appellant a la base de donnée grâce au code __connexion.php__, renvoie le code html de la pop-up compte et permet à l'utilisateur de se déconnecter grâce au code __deconnection.php__. Le code fait donc grandement appel a la base de donnée user, crée vide pour recolter les informations de compte lors de l'inscription des clients, et permet au clients déjà inscrit de se connecter.  
Le code __main.js__ est appelé par le code __main.html__ et renvoie les images sous forme de diaporama qui défile dans la page d'accueil, pour l'esthétique.  
Le code __store.js__ qui fait appel au code __store.php__ code les interactions clients-site de l'interface d'achat du site, où le client découvre les produits, par le code HTML (par le php), et renvoie le client vers une page contenant les caractéristiques du produit lorqu'il clique sur l'un d'entre eux.  
Pour finir, le code __produit.js__ est lui appelé par le code __produit.html__ et creer la partie html de la page grâce au code __produit.php__, qui appelle à la base de donnée, et permet de signaler un achat grâce au code __achat.php__, ajoutant le nouveau produit au panier quand l'achat a lieu.

-------------------------------

## finalisation du projet

Nous avons mis les images que nous utilisons dans un dossier assert pour les avoir avec le reste du code. 
Il a ensuite fallu trouver les différents produits, que nous avons classés avec leurs caractéristiques une bade de donnée SQL, que nous avons relié à notre code pour les faire apparaitre sur le site. Nous les avons rangé dans trois catégories, "livre", "technologie" et "vetements", pour faciliter l'achat pour le client. Grâce à phpmyadmin, accédé par Uwamp, nous avons pu créer nos différentes bases de données. 

Une fois fini, nous avons finalisé avec de la mise en page, puis les codes ont été mis sur l'hebergement en ligne, eu5.org. Il a fallu importer tous nos codes et nos bases de données. Notre site n'a bien sur pas été créer pour vendre nos produits, et encore moins pour en vendre beaucoup, c'est pourquoi notre mode de fonctionnement a suffit pour réaliser ce projet. A une plus grande échelle, pour un site d'une ampleur plus importante, nous aurions surement du revoir les codes de certaines pages. Et ainsi, notre site a été créer !

--------------
