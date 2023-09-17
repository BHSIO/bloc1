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
    <ol>
      <li><b>Crypto.co</b> pour leur schéma des différentes méthodes <a href="https://www.cryptr.co/fr/blog/what-is-scim" target="_blank">leur site</a></li>
      <li><b>Stackoverflow</b> pour la capture d'ecran qui à illustré la méthode GET</li>
      <li><b>Mdn web doc</b> pour leur explications sur les méthodes GET et Post : <a href="https://developer.mozilla.org/fr/docs/Learn/Forms/Sending_and_retrieving_form_data" target="_blank">La page concernée</a></li>
    </ol>
    </p>
  </li>
</ul>
<h3><b>II-</b>Comparaison méthodes</h3>
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
  <li><b>Xul.fr</b> pour le code d'écriture des méthodes POST & GET : <a url="https://www.xul.fr/ecmascript/get-post.php">La page concernée</a></li>
  <li><b>Ionos</b> pour une partie de leur tableau de comparaison des méthodes POST & GET : <a url="https://www.ionos.fr/digitalguide/sites-internet/developpement-web/get-vs-post/">La page concernée</a></li>
  <li><b>Mdn web doc</b> pour la définition des méthodes POST & GET : <a url="https://developer.mozilla.org/fr/docs/Web/HTTP/Methods">La page concernée</a></li>
</ol>
