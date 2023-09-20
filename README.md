# bloc1
<h1><u>Client Serveur Web - Architecture</u></h1>
</br>
</br>
<h2><b>I-</b>Méthodes GET et POST</h2>
<img src="https://images.prismic.io/cryptrfront/5e82fc62-1836-48ba-a074-a1c6ab69264b_SCIM_schema_03_FR.jpg?auto=compress,format" alt="Methodes GET et Post"/>
</br>
<p>Comme vue dans le schéma ci dessus on peut différencié la méthode POST et la méthode GET de manière simple :</p>
<ul>
  <li><p>La Methode GET récupère une ou des ressources exemple ci dessous. En effet comme nous indique les informations disponibles dans le carré rouge nous somme en méthode GET. Cela ce voit grâce au nommage, en effet en face de Request Method il y a GET mais aussi dans Request Url on voit un GET après le search?q=  Nous détaillerons dans la suite</p></li>
</br>
<img src="https://image.noelshack.com/fichiers/2023/37/3/1694622312-stack.png" alt="Illustration methode get"/>
</br>
  <li><p>La Methode Post quand à elle permet de crée une resource. En effet si on ce réfère au MDN : <q>La méthode POST est un peu différente.C'est la méthode que le navigateur utilise pour demander au serveur une réponse prenant en compte les données contenues dans le corps de la requête HTTP : « Hé serveur ! vois ces données et renvoie-moi le résultat approprié ». Si un formulaire est envoyé avec cette méthode, les données sont ajoutées au corps de la requête HTTP.</q>q </p></li>
  <li><p>Site utilisé comme référence de mes réponses : 
    <ul>
      <li><b>Crypto.co</b> pour leur schéma des différentes méthodes <a href="https://www.cryptr.co/fr/blog/what-is-scim" target="_blank" alt="site expliquant les différentes méthodes">leur site</a></li>
      <li><b>Stackoverflow</b> pour la capture d'ecran qui à illustré la méthode GET</li>
      <li><b>Mdn web doc</b> pour leur explications sur les méthodes GET et Post : <a href="https://developer.mozilla.org/fr/docs/Learn/Forms/Sending_and_retrieving_form_data" target="_blank" alt="lien vers le site web de Mdn web doc">La page concernée</a></li>
    </ul>
    </p>
  </li>
</ul>
</br>
<h2><b>II-</b>Comparaison méthodes</h2>
<table>
  <caption>
    Tableau comparatif
  </caption>
  <tbody>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">GET</th>
      <th scope="col">POST</th>
    </tr>
    <tr>
      <th scope="row">Description</th>
      <td><q>La méthode GET demande une représentation de la ressource spécifiée. Les requêtes GET doivent uniquement être utilisées afin de récupérer des données.</q></td>
      <td><q>La méthode POST est utilisée pour envoyer une entité vers la ressource indiquée. Cela entraîne généralement un changement d'état ou des effets de bord sur le serveur.</q></td>
    </tr>
    <tr>
      <th scope="row">Ecriture</th>
      <td><code> &lt;form method="get" action="page.html"&gt;
&lt;/form&gt;</code></td>
      <td><code>&lt;form method="post" action="page.php"&gt;
&lt;/form&gt;</code></td>
    </tr>
    <tr>
      <th scope="row">Visibilité</th>
      <td>Visible pour l’utilisateur dans le champ d’adresse</td>
      <td>Invisible pour l’utilisateur</td>
    </tr>
      <tr>
      <th scope="row">Comportement lors de l’actualisation du navigateur / Bouton « précédent »</th>
      <td>Les paramètres de l’URL ne sont pas envoyés à nouveau.</td>
      <td>Le navigateur avertit que les données du formulaire doivent être renvoyées.</td>
    </tr>
  </tbody>
</table>
<p>Source :</p>
<ol>
  <li><b>Xul.fr</b> pour le code d'écriture des méthodes POST & GET : <a url="https://www.xul.fr/ecmascript/get-post.php" alt="lien vers la page site xul parlant des codes d'écritures des méthodes POST et GET ">La page concernée</a></li>
  <li><b>Ionos</b> pour une partie de leur tableau de comparaison des méthodes POST & GET : <a url="https://www.ionos.fr/digitalguide/sites-internet/developpement-web/get-vs-post" alt="lien vers la page ionos représentant le tableau de comparaison des méthodes GET et POST">La page concernée</a></li>
  <li><b>Mdn web doc</b> pour la définition des méthodes POST & GET : <a url="https://developer.mozilla.org/fr/docs/Web/HTTP/Methods" alt="lien vers la définition des méthodes POST et GET">La page concernée</a></li>
</ol>
</br>
<h2><b>III-</b>Extensible</h2>
<p>A) <b>Requête HTTP</b></p>
<p>Une requête HTTP est un ensemble de lignes envoyé au serveur par le navigateur. Elle comprend :</p>
<ul>
  <li><b>Une ligne de requête</b>: c'est une ligne précisant le type de document demandé, la méthode qui doit être appliquée, et la version du protocole utilisée. La ligne comprend trois éléments devant être séparés par un espace :
  <ul>
    <li>La méthode</li>
    <li>L'URL</li>
    <li>La version du protocole utilisé par le client</li>
  </ul>
  <li><b>Les champs d'en-tête de la requête</b>: il s'agit d'un ensemble de lignes facultatives permettant de donner des informations supplémentaires sur la requête et/ou le client (Navigateur, système d'exploitation, ...). Chacune de ces lignes est composée d'un nom qualifiant le type d'en-tête, suivi de deux points (:) et de la valeur de l'en-tête</li>
  </li>
  <li><b>Le corps de la requête:</b> c'est un ensemble de lignes optionnelles devant être séparées des lignes précédentes par une ligne vide et permettant par exemple un envoi de données par une commande POST lors de l'envoi de données au serveur par un formulaire</li>
</ul>
<p>B) <b>Réponse HTTP</b></p>
<p>Une réponse HTTP est un ensemble de lignes envoyées au navigateur par le serveur. Elle comprend :</p>
<ul>
  <li><b>Une ligne de statut</b>: c'est une ligne précisant la version du protocole utilisé et l'état du traitement de la requête à l'aide d'un code et d'un texte explicatif. La ligne comprend trois éléments devant être séparés par un espace :
  <ul>
    <li>La version du protocole utilisé</li>
    <li>Le code de statut</li>
    <li>La signification du code</li>
  </ul>
    <li><b>Les champs d'en-tête de la réponse</b>: il s'agit d'un ensemble de lignes facultatives permettant de donner des informations supplémentaires sur la réponse et/ou le serveur. Chacune de ces lignes est composée d'un nom qualifiant le type d'en-tête, suivi de deux points (:) et de la valeur de l'en-tête</li>
  </li>
  <li><b>Le corps de la réponse</b>: il contient le document demandé</li>
</ul>
<p>Source :</p>
<ul>
  <li>L'ensemble de la réponse est basé sur l'article de Comment ça marche : <a href="https://www.commentcamarche.net/informatique/technologies/26181-protocole-http-principe-de-fonctionnement/" alt="lien vers le site comment ça marche qui décrit en quoi le protocole http est extensible.">Lien de la page</a></li>
</ul>
</br>
<h2><b>IV-</b> Sans Etat</h2>
<p>En informatique, un protocole sans état (en anglais <i>stateless protocol</i>) est un protocole de communication qui n'enregistre pas l'état d'une session de communication entre deux requêtes successives. La communication est formée de paires requête-réponse indépendantes et chaque paire requête-réponse est traitée comme une transaction indépendante, sans lien avec les requêtes précédentes ou suivantes. Autrement dit, un protocole sans état ne nécessite pas que le serveur conserve, au cours de la session de communication, l'état de chacun des partenaires. A contrario, un protocole qui impose la conservation des informations sur l'état interne du serveur est appelé protocole avec état (en anglais <i>stateful protocol</i>).
</p>
<p>Source :</p>
<ul>
  <li>La réponse est bassée sur les informations comprise dans la fiche wikipédia : <a href="https://fr.wikipedia.org/wiki/Protocole_sans_%C3%A9tat" alt="lien vers la page expliquant ce que signifie le fait qu’http soit qualifié de protocole sans état.">Lien de la page</a></li>
</ul>
</br>
<h2><b>V-</b> URL</h2>
<p>Une URL est composée de 5 parties; le protocole, le sous-domaine, le nom de domaine principal, le domaine de deuxième niveau (SLD – Second-level Domain en anglais) et le répertoire développons le :</p>
<ul>
  <li>Le protocole</li>
  <p>Prenons comme exemple l’adresse suivante : https://www.mondomaine.com/contact</p>
</br>
  <p>Dans cet exemple, le protocole est: https://</p>
</br>  
  <li>Le sous-domaine</li>
  <p>Dans notre exemple, le sous-domaine est : www.</p>
</br>
  <li>Le nom de domaine principal</li>
  <p>Dans notre exemple, le nom de domaine est : mondomaine</p>
</br>
  <li>Le domaine de deuxième niveau</li>
  <p>Dans notre exemple, le domaine de deuxième niveau est : .com</p>
</br>
  <li>Le répertoire</li>
  <p>Dans notre exemple, le répertoire est : /contact</p>
</br>
</ul>
</br>
<p>Source :</p>
<ul>
  <li>La décomposition d'une URL est tiré d'un article de digital Mym : <a href="https://digitalmym.com/les-differentes-parties-dune-url/" alt="lien vers la page détaillant une URL">Lien de la page</a></li>
</ul>
</br>
<h2><b>VI-</b> Codes Status</h2>
</br>
<table>
  <caption>
    Les Codes status
  </caption>
  <tbody>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Message</th>
      <th scope="col">Description</th>
    </tr>
    <tr>
      <th scope="row">10x</th>
      <td>Message d'information</td>
      <td>Ces codes ne sont pas utilisés dans la version 1.0 du protocole</td>
    </tr>
    <tr>
      <th scope="row"><b>20x</b></th>
      <td><b>Réussite</b></td>
      <td><b>Ces codes indiquent le bon déroulement de la transaction</b></td>
    </tr>
    <tr>
      <th scope="row">200</th>
      <td>OK</td>
      <td>La requête a été accomplie correctement</td>
    </tr>
    <tr>
      <th scope="row">201</th>
      <td>CREATED</td>
      <td>Elle suit une commande POST, elle indique la réussite, le corps du reste du document est sensé indiquer l'URL à laquelle le document nouvellement créé devrait se trouver.</td>
    </tr>
    <tr>
      <th scope="row">202</th>
      <td>ACCEPTED</td>
      <td>La requête a été acceptée, mais la procédure qui suit n'a pas été accomplie</td>
    </tr>
    <tr>
      <th scope="row">203</th>
      <td>PARTIAL INFORMATION</td>
      <td>Lorsque ce code est reçu en réponse à une commande GET, cela indique que la réponse n'est pas complète.</td>
    </tr>
    <tr>
      <th scope="row">204</th>
      <td>NO RESPONSE</td>
      <td>Le serveur a reçu la requête mais il n'y a pas d'information à renvoyer</td>
    </tr>
    <tr>
      <th scope="row">205</th>
      <td>RESET CONTENT</td>
      <td>Le serveur indique au navigateur de supprimer le contenu des champs d'un formulaire</td>
    </tr>
    <tr>
      <th scope="row">206</th>
      <td>PARTIAL CONTENT</td>
      <td>Il s'agit d'une réponse à une requête comportant l'en-tête range. Le serveur doit indiquer l'en-tête content-Range</td>
    </tr>
    <tr>
      <th scope="row"><b>30x</b></th>
      <td><b>Redirection</b></td>
      <td><b>Ces codes indiquent que la ressource n'est plus à l'emplacement indiqué</b></td>
    </tr>
    <tr>
      <th scope="row">301</th>
      <td>MOVED</td>
      <td>Les données demandées ont été transférées à une nouvelle adresse</td>
    </tr>
    <tr>
      <th scope="row">302</th>
      <td>FOUND</td>
      <td>Les données demandées sont à une nouvelle URL, mais ont cependant peut-être été déplacées depuis..</td>
    </tr>
    <tr>
      <th scope="row">303</th>
      <td>METHOD</td>
      <td>Cela implique que le client doit essayer une nouvelle adresse, en essayant de préférence une autre méthode que GET</td>
    </tr>
    <tr>
      <th scope="row">304</th>
      <td>NOT MODIFIED</td>
      <td>Si le client a effectué une commande GET conditionnelle (en demandant si le document a été modifié depuis la dernière fois) et que le document n'a pas été modifié il renvoie ce code.</td>
    </tr>
    <tr>
      <th scope="row"><b>40x</b></th>
      <td><b>Erreur due au client</b></td>
      <td><b>Ces codes indiquent que la requête est incorrecte</b></td>
    </tr>
    <tr>
      <th scope="row">400</th>
      <td>BAD REQUEST</td>
      <td>La syntaxe de la requête est mal formulée ou est impossible à satisfaire</td>
    </tr>
    <tr>
      <th scope="row">401</th>
      <td>UNAUTHORIZED</td>
      <td>Le paramètre du message donne les spécifications des formes d'autorisation acceptables. Le client doit reformuler sa requête avec les bonnes données d'autorisation</td>
    </tr>
    <tr>
      <th scope="row">402</th>
      <td>PAYMENT REQUIRED</td>
      <td>Le client doit reformuler sa demande avec les bonnes données de paiement</td>
    </tr>
    <tr>
      <th scope="row">403</th>
      <td>FORBIDDEN</td>
      <td>L'accès à la ressource est tout simplement interdit</td>
    </tr>
    <tr>
      <th scope="row">404</th>
      <td>NOT FOUND</td>
      <td>Le serveur n'a rien trouvé à l'adresse spécifiée</td>
    </tr>
    <tr>
      <th scope="row"><b>50x</b></th>
      <td><b>NOT FOUND</b></td>
      <td><b>Le serveur n'a rien trouvé à l'adresse spécifiée</b></td>
    </tr>
    <tr>
      <th scope="row">500</th>
      <td>INTERNAL ERROR</td>
      <td>Le serveur a rencontré une condition inattendue qui l'a empêché de donner suite à la demande (comme quoi il leur en arrive des trucs aux serveurs...)</td>
    </tr>
    <tr>
      <th scope="row">501</th>
      <td>NOT IMPLEMENTED</td>
      <td>Le serveur ne supporte pas le service demandé (on ne peut pas tout savoir faire...)</td>
    </tr>
    <tr>
      <th scope="row">502</th>
      <td>BAD GATEWAY</td>
      <td>Le serveur a reçu une réponse invalide de la part du serveur auquel il essayait d'accéder en agissant comme une passerelle ou un proxy</td>
    </tr>
    <tr>
      <th scope="row">503</th>
      <td>SERVICE UNAVAILABLE</td>
      <td>Le serveur ne peut pas vous répondre à l'instant présent, car le trafic est trop dense (toutes les lignes de votre correspondant sont occupées veuillez rappeler ultérieurement)</td>
    </tr>
    <tr>
      <th scope="row">504</th>
      <td>GATEWAY TIMEOUT</td>
      <td>La réponse du serveur a été trop longue vis-à-vis du temps pendant lequel la passerelle était préparée à l'attendre (le temps qui vous était imparti est maintenant écoulé...)</td>
    </tr>
  </tbody>
</table>
<p>Source:</p>
<ul>
  <li>Liste extraite de comment ça marche: <a href="https://www.commentcamarche.net/informatique/technologies/26181-protocole-http-principe-de-fonctionnement/" alt="lien vers l'ensemble des codes d'erreurs">Lien de la page</a></li>
</ul>
</br>
<h2>VII- Negociation de contenue</h2>
<p>Quand un client soumet une requête à un serveur, il informe celui-ci des types de média qu'il comprend et de ses préférences. Concrètement, le client envoie deux en-têtes HTTP. Le premier, <code>Accept-Language</code>, liste les langues reconnues par le client, pondérées par des taux d’acceptabilité</p>
<p>Source :</p>
<ul>
  <li>Source Wikipédia : <a href="https://fr.wikipedia.org/wiki/N%C3%A9gociation_de_contenu#:~:text=automatisant%20la%20s%C3%A9lection.-,Fonctionnement,par%20des%20taux%20d'acceptabilit%C3%A9." alt="lien vers la réponse expliquant le principe de la négociation de contenu http entre client et serveur">Lien de la page</a>
  </li>
</ul>
<h2><b>VIII -</b> Installation Apache & configuration</h2>
<img src="https://image.noelshack.com/fichiers/2023/38/2/1695149035-xampp0.png" alt="Etape une pour setup un xampp"/>
<img src="https://image.noelshack.com/fichiers/2023/38/2/1695149035-xampp1.png" alt="Etape deux pour setup un xampp"/>
