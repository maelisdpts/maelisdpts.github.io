let produits;

function produit(ID) {
    document.location = 'produit.html?ID=' +ID;
}

var xhttp2 = new XMLHttpRequest();
xhttp2.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('produit').innerHTML = xhttp2.responseText;
    }
};
xhttp2.open("GET", "../PHP/store.php", true);
xhttp2.send(); 

