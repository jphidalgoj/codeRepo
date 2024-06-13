let btnSumar=document.querySelector("#btn-sumar");

btnSumar.addEventListener("click", sumar);

function sumar(){
    let respuesta = document.querySelector("#resp-sumar");
    let numero1=document.querySelector("#numero1").value;
    let numero2=document.querySelector("#numero2").value;
    let suma = numero1 + numero2
    
    respuesta.innerHTML="hola";


}