// JavaScript Document
/* comentarios */

alert('ADVERTENCIA !!! \nel contenido de este sitio puede afectar seriamente su vision de la vida');

var mivideo, reproducir, barra, progreso, maximo;

maximo=250;

function comenzar() {
   mivideo=document.getElementById("mivideo");
   reproducir=document.getElementById("reproducir");
   barra=document.getElementById("barra");
   progreso=document.getElementById("progreso");

   reproducir.addEventListener("click",clickeando,false);
   barra.addEventListener("click",aleatorio,false);
}


function clickeando() {
   if( (mivideo.paused==false) && (mivideo.ended==false) ) {
      mivideo.pause();
      reproducir.innerHTML="Play";
   } 
   else {
      mivideo.play();
      reproducir.innerHTML="Pause";
      bucle=setInterval(estado,1000);
   }
}


function estado() {
   if (mivideo.ended == false) {
      var total=parseInt(mivideo.currentTime*maximo/mivideo.duration);
      progreso.style.width=total+"px";
   }
}


function aleatorio(posicion) {
   if ( (mivideo.paused==false && mivideo.ended==false) ) {
      var ratonX=posicion.pageX-barra.offsetLeft;
      var nuevoTiempo=ratonX*mivideo.duration/maximo;
      mivideo.currentTime=nuevoTiempo;
      progreso.style.width=ratonX+"px";
   }
}

window.addEventListener("load",comenzar,false);
