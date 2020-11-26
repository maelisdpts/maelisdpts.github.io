// POUR CREER LE HEADER
var xhttp1 = new XMLHttpRequest();
xhttp1.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById('header').innerHTML = xhttp1.responseText;
    }
};
xhttp1.open("GET", "../PHP/header.php", true);
xhttp1.send(); 


// Pour l'icône de Shopping
function shopping() {
    overlay.style.display = 'block';
    document.getElementById('popup').innerHTML = '<p class="quitter" onclick="quitter()"> X </p><h1> PANIER </h1><div class="articles" id="articles"> Bonjour </div>'
    var shopping = new XMLHttpRequest();
    shopping.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('articles').innerHTML = shopping.responseText;
        };
    }
    shopping.open('POST', '../PHP/panier.php', true);
    shopping.send();
}

// Permet de supprimer un élément du panier
function supprimer(id) {
    let Data = new FormData();
    Data.append('ID', id);
    var sup = new XMLHttpRequest();
    sup.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.location = window.location;
        }
    }
    sup.open('POST', '../PHP/supprimer.php', true);
    sup.send(Data);
};

// Permet de payer le panier
function payer() {
    var paye = new XMLHttpRequest();
    paye.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(paye.responseText);
        }
    }
    paye.open('POST', '../PHP/paye.php', true);
    paye.send();
    alert('Vous avez bien acheter les produits');
    document.location = '../HTML/main.html';
}
