
function confirmacion(e){
    if (confirm ("¿seguro que quiere eliminarlas")){
        return true;
    } else{
        e.preventDefault()
    }
}
let linkdelete =document.querySelectorA11(".ri-eracer-line");
for (var i =0 ; i <linkdelete.length; i++){
    linkdelete[i].addEventListener('click',confirmacion);
}