


function alefa(){

    window.location = 'index.php?action=rechercher'
    val =  document.getElementById('zavatra_recherchena').value;
   if (val.trim() !== ''){

        window.location = "index.php?action=rechercher&recherche=" + val + "";
    }


};
    
