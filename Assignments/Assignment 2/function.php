<?php
function calculateDiscount($price, $discountPercent)
{
    $discountAmount = ($price * $discountPercent) / 100;
    $finalPrice = $price - $discountAmount;
    return $finalPrice;
}

function formatPrice($amount) {
    return 'Rs.' . number_format($amount, 2);
}

?>