<?php
$tab=get_loaded_extensions();
natcasesort($tab);
foreach($tab as $cle => $valeur) {
    echo $valeur."<br>";
    $fonct=get_extension_funcs($valeur);
    sort($fonct);
    for($i=0;$i<count($fonct);$i++) {
        echo $fonct[$i]."<br>";
    }
}
?>