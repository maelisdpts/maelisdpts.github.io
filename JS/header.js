//var overlay;
var btnClose;

function closeShopping() {
    overlay.style.display='none';
};

function shopping() {
    overlay.style.display='block';
    overlay = document.getElementById('overlay');
    btnClose = document.getElementById('btnClose');
    btnClose.addEventListener('click',closeShopping);
};

function account() {
    prompt('Veuillez renseigner votre pseudo');
    prompt('Veuillez renseigner votre mot de passe');
}


// POUR CREER LE HEADER
var xhttp1 = new XMLHttpRequest();
xhttp1.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       document.getElementById('header').innerHTML = xhttp1.responseText;
    }
};
xhttp1.open("GET", "../PHP/header.php", true);
xhttp1.send(); 
