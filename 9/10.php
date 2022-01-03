




<?php
function iyz_cut($price, $iyz_variable) {
    $cut = ($price * ($iyz_variable/100)) + 0.25;
    return $cut;
}

function art_cut($price, $iyz_variable, $com_art, $VAT){
    $art_profit = ($price * $com_art/100) - iyz_cut($price, $iyz_variable);
    return $art_profit * (1 + ($VAT/100));
}
function iyzicoPass($price, $iyz_variable, $com_art, $shipping, $VAT){
    $vendor_cut = $price - art_cut($price, $iyz_variable, $com_art, $VAT);
    $iyzi_final = $vendor_cut - ($shipping * (1 + ($VAT/100)));
    return $iyzi_final;
}

iyzicoPass(1000, 2.99,25,30,18); // call the function

?>

