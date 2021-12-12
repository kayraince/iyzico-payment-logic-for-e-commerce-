<?php

function iyz_cut($Price, $iyz_variable)
{
    $cut = ($Price * ($iyz_variable / 100)) + 0.25;
    return $cut;
}
function iyzPass($Price, $iyz_variable, $VendorCom) {

    $com_applicable = $Price - iyz_cut($Price, $iyz_variable);
    return $com_applicable * ($VendorCom/100);



}

iyzPass(100, 2.99,80,18); // call the function

?>
