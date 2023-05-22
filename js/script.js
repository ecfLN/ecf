function verifcgu(){
    var checkbox = document.getElementById('cgu');
    var inscription = document.getElementById('btn_inscription');
    if(checkbox.checked){
        inscription.disabled=false;
    }else{
        inscription.disabled=true;
    }
}