function clicked(id) {
    element = document.getElementById(id);

    if (element.classList.contains("niezaznaczone")) {
        document.getElementById(id).classList.remove("niezaznaczone");
        document.getElementById(id).classList.add("zaznaczone");
    } else {
        document.getElementById(id).classList.remove("zaznaczone");
        document.getElementById(id).classList.add("niezaznaczone");
    }

    checkWin();

}

function load() {

}

function checkWin() {
    var col1 = document.getElementById("col1").classList.contains("zaznaczone");
    var col2 = document.getElementById("col2").classList.contains("zaznaczone");
    var col3 = document.getElementById("col3").classList.contains("zaznaczone");
    var col4 = document.getElementById("col4").classList.contains("zaznaczone");
    var col5 = document.getElementById("col5").classList.contains("zaznaczone");
    var col6 = document.getElementById("col6").classList.contains("zaznaczone");
    var col7 = document.getElementById("col7").classList.contains("zaznaczone");
    var col8 = document.getElementById("col8").classList.contains("zaznaczone");
    var col9 = document.getElementById("col9").classList.contains("zaznaczone");

    var info = document.getElementById("info");

    if (col1 && col2 && col3) {
        info.innerHTML = "CHRUPINGOOOOO!!!!"
    } else if (col4 && col5 && col6) {
        info.innerHTML = "CHRUPINGOOOOO!!!!"
    } else if (col7 && col8 && col9) {
        info.innerHTML = "CHRUPINGOOOOO!!!!"
    } else if (col1 && col4 && col7) {
        info.innerHTML = "CHRUPINGOOOOO!!!!"
    } else if (col2 && col5 && col8) {
        info.innerHTML = "CHRUPINGOOOOO!!!!"
    } else if (col3 && col6 && col9) {
        info.innerHTML = "CHRUPINGOOOOO!!!!"
    } else if (col1 && col5 && col9) {
        info.innerHTML = "CHRUPINGOOOOO!!!!"
    } else if (col3 && col5 && col7) {
        info.innerHTML = "CHRUPINGOOOOO!!!!"
    } else {

    }

}