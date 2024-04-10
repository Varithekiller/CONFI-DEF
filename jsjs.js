let cont = 0;


var fotos = [
    "variados.jpg",
    "variados2.jpg",
    "variados3.jpg",
    "variados4.jpg",
    "variados5.jpg",
    "variados6.jpg"
  
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
