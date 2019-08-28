<div class="widget stick-widget">
    <h4 class="widget-title">Modifier info</h4>
    <ul class="naves">
        <li>
            <i class="ti-info-alt"></i>
            <a href="index.php?action=modifier_profil&id=<?= $id ?>" title="">Informations générale</a>
        </li>
        <li>
            <i class="ti-mouse-alt"></i>
            <a href="index.php?action=modifier_information&id=<?= $id ?>" title="">Formations</a>
        </li>
        <li>
            <i class="fa fa-sliders"></i>
            <a href="index.php?action=modifier_competence&id=<?= $id ?>" title="">Compétences</a>
        </li>
        <li>
            <i class="fa fa-sliders"></i>
            <a href="index.php?action=modifier_experience&id=<?= $id ?>" title="">Expériences</a>
        </li>
        <li>
            <i class="fa fa-heart"></i>
            <a href="index.php?action=modifier_centre_interet&id=<?= $id ?>" title="">Centre d'intérêt</a>
        </li>
        <li>
            <i class="ti-settings"></i>
            <a href="index.php?action=modifier_parametre_compte&id=<?= $id ?>" title="">Parmètres du compte</a>
        </li>
        <?php
            for($i=0; $i<$nbr_page; $i++){
        ?>
        <li>
            <i class="fa fa-sliders"></i>
            <a href="index.php?action=afficher_ma_page&amp;id=<?=$id?>&amp;nom_page=<?=$tab_list_page[$i]["nom_page"]?>" title=""><?= $tab_list_page[$i]["nom_page"] ?></a>
        </li>
        <?php
            }
        ?>
        <li>
            <i class="ti-lock"></i>
            <a href="index.php?action=modifier_mot_de_passe&id=<?= $id ?>" title="">Mot de passe</a>
        </li>
    </ul>
</div>