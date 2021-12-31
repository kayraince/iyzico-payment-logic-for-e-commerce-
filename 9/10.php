




<?php
function iyz_cut($Price, $iyz_variable) {
    $cut = ($Price * ($iyz_variable/100)) + 0.25;
    return $cut;
}

function art_cut($Price, $iyz_variable, $com_art){
    $art_profit = ($Price * $com_art/100) - iyz_cut($Price, $iyz_variable);
    return $art_profit;
}
function iyzicoPass($Price, $iyz_variable, $com_art, $shipping){
    $vendor_cut = $Price - art_cut($Price, $iyz_variable, $com_art);
    $iyzi_final = $vendor_cut - $shipping;
    return $iyzi_final;
}
iyzicoPass(100, 2.99,25,15); // call the function

?>

