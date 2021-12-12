


//deno


<?php
function iyz_cut($Price, $iyz_variable) {
    $cut = ($Price * ($iyz_variable/100)) + 0.25;
    return $cut;
}

function iyzPass($Price, $iyz_variable, $VendorCom, $VAT) {
    $vat_excluded = $Price/(1 + $VAT/100);
    $com_applicable = $vat_excluded - iyz_cut($Price, $iyz_variable);
    $vendorCut = $com_applicable * ($VendorCom/100);
    return $vendorCut / (1.02);



}

iyzPass(100, 2.99,80,18); // call the function
?>
