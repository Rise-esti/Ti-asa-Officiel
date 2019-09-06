<ul id="people-list" class="friendz-list">
            <?php
            while($resultat_profil = $rechercher_profil->fetch()){
                  if(!empty($resultat_profil["id"])){
                        if(isset($resultat_profil["photo_de_profil"])){
                        $pdp = $resultat_profil["photo_de_profil"];
                        $src_pdp = "public/images/picture/pdp/$pdp";
                        }
                        else{
                        $src_pdp = "public/images/av.png";
                        }
            ?>
            <li>
                  <figure >
                        <img style="height:50px !important; width:50px !important;" src="<?= $src_pdp ?>" alt="">
                  </figure>
                  <span class="friendz-meta" style="margin-left:9%; margin-top:-12%;" >
                        <a href="#" Onclick = "window.location='index.php?action=affichage_profil&amp;username=<?= $username ?>'" ><?= $resultat_profil["nom"].' '.$resultat_profil["prenom"] ?></a>
                        <i><a href="#" class="__cf_email__" ><?= $resultat_profil["poste"] ?></a></i>
                  </span>
                  
            </li>
            <?php
                  }
            }
            ?>
</ul>