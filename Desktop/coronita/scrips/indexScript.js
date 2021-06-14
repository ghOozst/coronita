//Buscando una los elementos del html que vamos a utlizar
const dots=document.querySelectorAll(".dots")
const mainImg=document.querySelector("#mainImg")

for(let i=0;i<dots.length;i++){

  dots[i].addEventListener("click",()=>{
    cambiardot(dots[i])
    //Al selecionar uno de los puntos hace que tambien cambie la imagen que se
    //esta mostrando
    switch(i){
      case 0:
        cambiarImg("./img/Blusas/Todas.jpg")
      break
      case 1:
        cambiarImg("./img/Blusas/blusa azul.jpg")
      break
      case 2:
        cambiarImg("./img/Blusas/blusa amarilla.jpg")
      break
      case 3:
        cambiarImg("./img/Blusas/blusa rosa.jpg")
      break
      case 4:
        cambiarImg("./img/Blusas/blusa negra.jpg")
      break
      case 5:
        cambiarImg("./img/Blusas/blusa roja.jpg")
      break
    }
  })
}


function cambiardot(element){
    // Esta for lo usamos para hacer que todos los puntos sean los rellenos
    for(let dot of dots){
        dot.src="./img/dot-full.svg"
    }
    //Este hace que el cambie al punto semi lleno
    element.src="./img/dot.svg"
}

//Esta funcion funciona para cambiar la imagen de una ya existente
function cambiarImg(url){
    mainImg.src=url
}