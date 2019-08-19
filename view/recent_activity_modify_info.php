<div class="col-lg-3">
    <aside class="sidebar static">
        
    <?php

    require("view/recent_activity.php");
    if(!isset($select_profil_li["username"])){
        require("view/modifier_info.php");
    }

    ?>
        <!-- settings widget -->										
    </aside>
    </div><!-- sidebar -->