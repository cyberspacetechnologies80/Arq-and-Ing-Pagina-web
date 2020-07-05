
var most=0;


function mostrar() {
    
    if(most==0){
        document.getElementById("opciones").style.display="inline-block";
        most=1;
    }
    else{
        document.getElementById("opciones").style.display="none";
        most=0;
    }
    
}
function quitar(){
    if (screen.width < 1053){ 
   
    if(most==1){
        document.getElementById("opciones").style.display="none";
    }
}
}