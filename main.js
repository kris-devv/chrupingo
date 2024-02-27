function clicked(id){   
    element = document.getElementById(id);
    
    if(element.classList.contains("niezaznaczone")) {   
        document.getElementById(id).classList.remove("niezaznaczone");
        document.getElementById(id).classList.add("zaznaczone");
    } else{
        document.getElementById(id).classList.remove("zaznaczone");
        document.getElementById(id).classList.add("niezaznaczone");
    }

}