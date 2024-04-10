let cont = 0;


var fotos = [
    "pinchos.jpg",
    "pinchos2.jpg",
    "pinchos3.jpg"
];
function cargar(){
    if (cont<fotos.length-1){
        cont++;
    }
    else{
        cont=0;
    }
    document.getElementById("secuencia2").src = "img/"+fotos[cont];
}
cargar();
setInterval(cargar,4000)