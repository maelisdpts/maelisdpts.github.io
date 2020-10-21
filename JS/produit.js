function acheter() {
    alert('Votre produit a bien été acheter ! ');
    document.location = "store.html";
}

let chaine = window.location.search;
chaine = chaine.replace('?ID=', '');

let Data = new FormData();
Data.append('ID', chaine);

let xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState==4 && this.status==200) {
        console.log(xhttp.responseText);
        document.getElementById('main').innerHTML = xhttp.responseText;
    }
};
xhttp.open('POST', '../PHP/produit.php', true);
xhttp.send(Data);

