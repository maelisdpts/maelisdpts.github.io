var xhttp9 = new XMLHttpRequest();
xhttp9.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('footer').innerHTML = xhttp9.responseText;
    }
}
xhttp9.open('POST', '../PHP/footer.php', true);
xhttp9.send();