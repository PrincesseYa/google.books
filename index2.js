/*// Récupération de la liste de livres depuis l'API Google Books

class API {
    static getData(value) {
        axios.get(`https://www.googleapis.com/books/v1/volumes?q=subject:geography&langRestrict=fr`)
        .then(res => {
            const { Search } = res.data
            App.displayResults(Search)
        })
        .catch((err) => console.log(err))
    }
}


// Affichage de chaque livre avec un bouton "Ajouter à ma bibliothèque"
listeLivres.forEach(function(livre) {
  var divLivre = document.createElement('div');
  divLivre.innerHTML = '<h3>' + livre.titre + '</h3>' +
                       '<img src="' + livre.image + '">' +
                       '<button class="ajouter-livre" data-id="' + livre.id + '">Ajouter à ma bibliothèque</button>';
  document.getElementById('liste-livres').appendChild(divLivre);
});




// Ecouteur d'événement pour le bouton "Ajouter à ma bibliothèque"
document.addEventListener('click', function(event) {
  if (event.target.classList.contains('ajouter_livre')) {
    var idLivre = event.target.getAttribute('data_id');
    var urlApi = 'https://www.googleapis.com/books/v1/volumes?q=subject:geography&langRestrict=fr' + idLivre;
    fetch(urlApi)
      .then(response => response.json())
      .then(data => {

        // Enregistrement des informations du livre dans la table de bibliothèque personnelle de l'utilisateur
        var xhr = new XMLHttpRequest();
        xhr.open('POST', './utilisateurs/ajouter.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
          }
        };
        xhr.send('id_livre=' + data.id +
                 '&titre=' + encodeURIComponent(data.volumeInfo.title) +
                 '&auteur=' + encodeURIComponent(data.volumeInfo.authors[0]) +
                 '&image=' + encodeURIComponent(data.volumeInfo.imageLinks.thumbnail));
      });
  }
});*/










