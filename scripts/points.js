function checkPoints() {
    var col1 = document.getElementById("col1").classList.contains("zaznaczone");
    var col2 = document.getElementById("col2").classList.contains("zaznaczone");
    var col3 = document.getElementById("col3").classList.contains("zaznaczone");
    var col4 = document.getElementById("col4").classList.contains("zaznaczone");
    var col5 = document.getElementById("col5").classList.contains("zaznaczone");
    var col6 = document.getElementById("col6").classList.contains("zaznaczone");
    var col7 = document.getElementById("col7").classList.contains("zaznaczone");
    var col8 = document.getElementById("col8").classList.contains("zaznaczone");
    var col9 = document.getElementById("col9").classList.contains("zaznaczone");

    var info = document.getElementById("punkty");

    var punkty = 0;

    // Single
    if (col1) { punkty++; }
    if (col2) { punkty++; }
    if (col3) { punkty++; }
    if (col4) { punkty++; }
    if (col5) { punkty++; }
    if (col6) { punkty++; }
    if (col7) { punkty++; }
    if (col8) { punkty++; }
    if (col9) { punkty++; }

    // Cols
    if (col1 && col2 && col3) { punkty += 3; }
    if (col4 && col5 && col6) { punkty += 3; }
    if (col7 && col8 && col9) { punkty += 3; }

    // Rows
    if (col1 && col4 && col7) { punkty += 3; }
    if (col2 && col5 && col8) { punkty += 3; }
    if (col3 && col6 && col9) { punkty += 3; }

    // X
    if (col1 && col5 && col9) { punkty += 3; }
    if (col3 && col5 && col7) { punkty += 3; }

    info.innerHTML = "Twoje punkty: " + punkty;

}