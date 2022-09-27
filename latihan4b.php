<?php
    $negaraAwal = [" Indonesia ", " Singapura ", " Malaysia ", " Brunei ", " Thailand "];
?>

<?php
    $negarabaru = [" Indonesia ", " Singapura ", " Malaysia ", " Brunei ", " Thailand ", " Laos ", " Filipina ", " Myanmar "];
?>


<!DOCTYPE html >
<html  lang =" en " >
<kepala >
    <meta  charset =" UTF-8 " >
    <title > Looping untuk array </title >
</kepala >
<tubuh >
    <h3 > Daftar Negara ASEAN Awal : </h3 >
    <?php
        for ( $i = 0 ; $i < count( $negaraAwal ); $i ++) {
            echo " <li> $ negaraAwal [ $ i ] </li> ";
        }
    ?>

    <br> _ _
    <h3 > Daftar Negara ASEAN baru : </h3 >

    <?php
        for ($i = 0 ; $i < count( $negarabaru ); $i ++) {
            echo " <li> $ negarabaru [ $ i ] </li> ";
        }
    ?>   
</tubuh >
</html >