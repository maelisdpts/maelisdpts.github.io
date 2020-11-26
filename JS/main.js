var nb_slide = 1

// Renvoie un diaporama
function diapo(side) {

    if (side == "left") {
        if (nb_slide == 1) {
            nb_slide = 0;
            document.getElementById('first').style.backgroundImage = 'url("../ASSETS/ordinateur.jpg")';
        } else if ( nb_slide == 2) {
            nb_slide = 1;
            document.getElementById('first').style.backgroundImage = "url('../ASSETS/livre.jpg')";
        } else {
            nb_slide = 2;
            document.getElementById('first').style.backgroundImage = "url('../ASSETS/vetement.jpg')";
        }
    } else {
        if (nb_slide == 0) {
            nb_slide = 1;
            document.getElementById('first').style.backgroundImage = "url('../ASSETS/livre.jpg')";
        } else if (nb_slide == 1) {
            nb_slide = 2;
            document.getElementById('first').style.backgroundImage = "url('../ASSETS/vetement.jpg')";
        } else {
            nb_slide = 0;
            document.getElementById('first').style.backgroundImage = 'url("../ASSETS/ordinateur.jpg")';
        }
    }
    
}

