function verifie_password(){
  let form = $("#myModal #connecter");
  let email = $("#myModal #connecter #email");
  let password = $("#myModal #connecter #password");

  email.css('border-color', '#fff');
  password.css('border-color', '#fff');

  notif = $("#myModal #connecter label");
  notif.html('')


  if (email.val() !== ''){
    if (password.val() !== ''){
          $.post(
            'index.php?action=se_connecter',
            {
              mail: email.val(),
              password: password.val(),
              valider_se_connecter: true
            },
            feed_back
          );
          function feed_back(reponse){


            if (reponse == 1){
                // Connection reussi
                window.location.reload();
            }
            else if (reponse == 587){
              // Mail Incorrecte
              email.css('border-color', 'red');
              notif.css({'border-color': 'red', 'text-align': 'center', 'margin-top':'5%'});
              notif.html('Votre Mail est incorrecte');
            }
            else if (reponse == 8){
              password.css('border-color', 'red');
              notif.css({'border-color': 'red', 'text-align': 'center', 'margin-top':'5%'});
              notif.html('Votre Mot de passe est incorrecte');
            }
            else{
              window.location = reponse ;
            }


          }
    }

    else{
        password.css('border-color', 'red');
        notif.css({'border-color': 'red', 'text-align': 'center', 'margin-top':'5%'});
        notif.html('Champ(s) obligatoire à remplir');
    }
  }

  else{
      email.css('border-color', 'red');
      notif.css({'border-color': 'red', 'text-align': 'center', 'margin-top':'5%'});
      notif.html('Champ(s) obligatoire à remplir');
  }

}


function inscription(){
      let nom = $("")
}
