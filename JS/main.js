var nb_slide = 1

// Renvoie un diaporama
function diapo(side) {

    if (side == "left") {
        if (nb_slide == 1) {
            nb_slide = 0;
            document.getElementById('first').style.background = "red";
        } else if ( nb_slide == 2) {
            nb_slide = 1;
            document.getElementById('first').style.background = "lightblue";
        } else {
            nb_slide = 2;
            document.getElementById('first').style.background = "green";
        }
    } else {
        if (nb_slide == 0) {
            nb_slide = 1;
            document.getElementById('first').style.background = "lightblue";
        } else if (nb_slide == 1) {
            nb_slide = 2;
            document.getElementById('first').style.background = "green";
        } else {
            nb_slide = 0;
            document.getElementById('first').style.background = "red";
        }
    }
    
}

