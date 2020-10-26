var xhttp2 = new XMLHttpRequest();
xhttp2.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('produit').innerHTML = xhttp2.responseText;
    }
};
xhttp2.open("GET", "../PHP/store.php", true);
xhttp2.send(); 


// Renvoie l'utilisateur vers une page contenant les caractéristiques du produit
function produit(ID) {
    document.location = 'produit.html?ID=' +ID;
}

function selection() {
    let selectionne = 0;
    if (document.getElementById('Vetements').checked == true) {
        precision = 'Vetements';
        selectionne += 1;
    } else if (document.getElementById('Accessoires').checked == true) {
        precision = 'Accessoires';
        selectionne += 1;
    } else if (document.getElementById('Ordinateurs').checked == true) {
        precision = 'Ordinateurs';
        selectionne += 1;
    };

    let categorie = new XMLHttpRequest();
    categorie.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('produit').innerHTML = categorie.responseText;
        }
    }
    categorie.open('POST', '../PHP/store.php', true);
    categorie.send();
};
