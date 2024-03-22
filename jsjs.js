let cont = 0;


var fotos = [
    "secuencia1.webp",
    "secuencia2.jpg",
    "secuencia3.jpg"
  
];
function cargar(){
    if (cont<fotos.length-1){
        cont++;
    }
    else{
        cont=0;
    }
    document.getElementById("secuencia").src = "img/"+fotos[cont];
}
cargar();
setInterval(cargar,4000)
