<script src="jquery.min.js"></script>
<?php

$a = "a";
$b = "b";
$c = "c";
$verifier_message_nouveau_et_non_lu = [$a, $b, $c];
for($i=0; $i<=2; $i++){
    echo $verifier_message_nouveau_et_non_lu[$i];
    echo "<br>";
}

?>

<div id="test">
    <?php
        echo "bien";
    ?>

</div>

<a href="#" title="Messages" onClick="load_file()" data-ripple=""><i class="ti-comment"></i><span style="color:#610f91; font-weight:bold;">Clic</span></a>
<script>
function load_file(){
                $('#test').load("test1.php");

            }
</script>