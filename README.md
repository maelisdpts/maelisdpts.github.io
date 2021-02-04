# SiteEcommerce
##### Un site de E-commerce

Pour notre projet de NSI du premier trimestre, nous avons choisi de réaliser un site-Ecommerce, cest-à-dire un site de vente en ligne. Pour cela, nous désirions faire un site avec uns page d'acceuil, qui redigire le client vers une page contenant les différents produits que nous vendons, stockés dans une base de donnée, et une page pour chaque produit afin d'avoir plus d'information sur ces derniers et pouvoir les acheter. Après avoir reflechi, il nous a semblé important d'avoir des éléments permettants au client de faire ses achats, comme un panier qui se rempli au fur et a mesure que le client achete différents produits et se vide quand ce dernier "paye", ou encore une possiblité de se connecter à son compte personnel, pour lequel il nous a aussi semblé judicieux de faire un seconde base de donnée. 

Il nous fallait donc executer différentes taches les unes après les autres, pour obtenir un site facilement utilisable et bien pensé. Notre mode de fonctionnement: 
* creer les pages HTML et CSS 
* écrire les codes javascript 
* ajouter les codes php et les bases de données 
* mettre le site en ligne

Nous avons utilisé la plateforme Github pour nous partagé les dossiers, faisant chacun nos modifications de notre coté, et se partageant le code ensuite. 

Pour se faire, nous avons commencé par les bases, avec un code HTML et CSS, pour creer le squelette de notre site.

-------------------------------

## L'esthétique

Pour la création de notre site, nous avons priviligié un design simple, permettant à l'utilisateur d'aller à l'essenciel en quelques clics, sans complication.
Nous avons utilisé CSS pour la mise en page du site, connecté aux pages HTML.  
le principale code du HTML est le code __main.html__, qui code la page d'acceuil de notre site,  et qui est rattaché au code __main.css__, qui code la mise en page de ce dernier. Nous avons choisi des couleurs simples, et pour attirer l'attention du client sur les produits directements, nous avons créer un diaporama en fond de la page d'acceuil avec les images de produits vendables. On retrouve aussi des informations sur nous et l'en-tête et le pied de page, qui sera le même pour toutes les pages de notre site.  
Par soucis pratique, Nous avons aussi fait une page css pour l'en-tête et le pied de page (header et footer) qui sont reliées à toutes nos pages HTML pour créer ces derniers et ne pas avoir à les refaire à chaque fois: __header.css__ et __footer.css__. Elles sont appelées dans toutes nos pages HTML. On y retrouve des liens amenant aux autres pages du site, pour plus de mobilité de la part du client, qui peut se connecter et regarder le panier ou se trouve ses achats très facilement où qu'il soit.   
Le code __store.html__ est ensuite venu pour nous permettre de réaliser une interface où le client peut faire ses achats, donc  qui affiche les différents produits de notre future base de donnée, ainsi qu'une interface où le client peut faire des choix comme savoir s'il veut des vêtements, des livres, etc..., il est rattaché au css par __store.css__ (qui le met en page). Cette page garde les mêmes couleurs que la page d'acceuil, pour rester dans une cohérance du site. D'un coté, on trouve l'interface de selection des types de produits ou des prix, de l'autre les produits, qui sont placés en ligne de manière esthétique.     
Pour finir, le code __produit.html__ code la page de présentation de chaque produit, rattaché au code __produit.css__ pour sa mise en page. Pour que la page ne soit codée qu'une fois pour correspondre aux différents produits, nous avons codé avec HTML que les différents intitulé des description et informations importantes dont le client aura besoin pour ses achats, que nous compléteront plus tard grâce au javascript et les bases de données, qui pour chaque produit, indiqueront par exemple son pris ou sa provenance. Pour cela, le code HTML est vide, mais appelle un code php qui contient le language HTML de la page, et sera compléter par les différents éléments de la base de donnée, grâce au SQL.  
La page __blog.html__ code une page additionelle qui nous est venue à l'esprit lors de la mise en forme du site, pour parler de notre projet (on y retrouvera la doc par exemple). Nous aimerions y ajouter une interface pour ajouter d'autre article, afin d'entretenir notre blog et nos clients au courant. Elle est mise en page par le code __blog.css__. Elle garde les couleurs prédominante du site.    
La page __about.html__ présente elle  le projet mais de manière plus concise pour le client, nous présentant en quelque mots, ainsi que les circonstances de créations du site.  Elle est mise en page par le code __about.css__, garde la même logique de mise en page que ses voisines ( couleurs, etc...)  

----------------------------------------------------------------------------------------------------

## les pages php et les interactions utilisateurs-machines

Nous sommes ensuite passés au javascript et au php, qui permettent l'accès à nos bases de données et de rendre dynamique notre site, permettant d'exécuter des commandes du côté client.   
Dans toutes nos pages HTML, nous avons fait appel aux codes __header.js__ et __footer.js__, qui correspondent à ces dynamiques au niveau de l'en-tête et du pied de page.  
Le code __header.js__ fait appel aux codes php pour son fond: il a recours au code __header.php__, qui renvoie le code HTML de l'en_tête, creant des liens vers la page d'accueil, la page des produits, le blog et la page "about us" accessible à partir de toutes les autres pages. Elle crée l'en-tête en elle même, l'icone de shopping avec le code __panier.php__ (qui renvoie le code HTML du pop-up), permet de supprimer un élément du panier grâce au code __supprimer.php__ et de payer le panier, nous ne faisons pas de système de payement, donc le code permet juste de vider le panier et de confirmer l'achat, par le biais du code __paye.php__.  
Le code __footer.js__ creer le pied de page et fait appel au code __footer.php__, qui renvoie un code HTML, permettant lui aussi d'acceder aux différentes pages du site.  
Le code __connexion.js__ permet au client de se connecter au site via la pop-up connexion que l'on retrouve dans l'en-tête et le pied de page: il utilise le code __connecte.php__, pour se connecter, renvoie le code html de la pop-up connexion, renvoie le code html de la pop-up inscription, permet à l'utilisateur de quitter la pop-up, permet d'inscrire l'utilisateur dans la base de donnée grâce au code __inscription.php__, permet de connecter l'utilisateur à sa compte en appellant a la base de donnée grâce au code __connexion.php__, renvoie le code html de la pop-up compte et permet à l'utilisateur de se déconnecter grâce au code __deconnection.php__. Le code fait donc grandement appel a la base de donnée user, crée vide pour recolter les informations de compte lors de l'inscription des clients, et permet au clients déjà inscrit de se connecter.  
Le code __main.js__ est appelé par le code __main.html__ et renvoie les images sous forme de diaporama qui défile dans la page d'accueil, pour l'esthétique.  
Le code __store.js__ qui fait appel au code __store.php__ code les interactions clients-site de l'interface d'achat du site, où le client découvre les produits, par le code HTML (par le php), et renvoie le client vers une page contenant les caractéristiques du produit lorqu'il clique sur l'un d'entre eux.  
Pour finir, le code __produit.js__ est lui appelé par le code __produit.html__ et creer la partie html de la page grâce au code __produit.php__, qui appelle à la base de donnée, et permet de signaler un achat grâce au code __achat.php__, ajoutant le nouveau produit au panier quand l'achat a lieu.

-------------------------------

## Base de donnée

Pour la création de notre base de donnée, nous avons utilisé MYSQL qui permets de créer des tables stockant les données dont nous avons besoin pour notre site. Nous avons donc créer deux tables, user et produits. La table user permet de gérer les utilisateurs possédant un compte sur notre site. Ainsi, ils peuvent se connecter s'ils ont déjà un compte existant et s'inscrire s'ils ne possèdent pas de compte. La table produits permet de lister tous les produits présents sur notre site ainsi que des informations sur les produits. Nous avons par exemple une colonne permettant de stocker les descriptions de chaque produit, une pour les prix, une pour la marque.... 
Nous accédons à cette base de donnée grâce au language PHP qui permet à nos page web d'accéder à ces informations et ainsi de créer des pages dynamiques. 
Nous avons mis les images que nous utilisons dans un dossier assert pour les avoir avec le reste du code. Elles ont été utile pour illuster les produits notamment. 
Il a ensuite fallu trouver les différents produits, que nous avons classés avec leurs caractéristiques dans une base de donnée SQL, que nous avons relié à notre code pour les faire apparaitre sur le site. Nous les avons rangé dans trois catégories, "livre", "technologie" et "vetements", pour faciliter l'achat pour le client. Grâce à phpmyadmin, accédé par Uwamp, nous avons pu créer nos différentes bases de données et les remplir facilement. 

Une fois fini, nous avons finalisé avec de la mise en page, puis les codes ont été mis sur l'hebergement en ligne, eu5.org. Il a fallu importer tous nos codes et nos bases de données. Notre site n'a bien sur pas été créer pour vendre nos produits, et encore moins pour en vendre beaucoup, c'est pourquoi notre mode de fonctionnement a suffit pour réaliser ce projet. A une plus grande échelle, pour un site d'une ampleur plus importante, nous aurions surement du revoir les codes de certaines pages. Et ainsi, notre site a été créer !

-------------------------

## API

Pour notre projet du second trimestre, nous avons du ajouter une API. 
Mais qu'est-ce qu'une API. En informatique, une API est l'acronyme d'Application Programming Interface, que l'on traduit en français par interface de programmation applicative ou interface de programmation d'application. L'API peut être résumée à une solution informatique qui permet à des applications de communiquer entre elles et de s'échanger mutuellement des services ou des données. Il s'agit en réalité d'un ensemble de fonctions qui facilitent, via un langage de programmation, l'accès aux services d'une application.

Pour cela, il nous a fallu trouver une API de site e-commerce libre d'accès, ce qui s'est étrangement trouvé plus dur qu'on aurait pu le penser. Une fois l'API trouvée, nous avons dû l'incorporer dans notre site par le biai du code javascript __store.js__ ou encore directement dans le code HTML __strore.html__ dans lequel nous avons mis nos code javascript, car il était plus facile pour nous de les appeler. Nous avons dû ensuite relié les différents éléments de notre API à notre base de donnée pour les faire concorder et faire apparaitre les éléments de l'API dans la base de donnée. AInsi, nous avons pu faire appel grace a la fonction GET à une API extérieure pour alimenter les différents produits de notre site.
