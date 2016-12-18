<?php
$type_of_slider = 'latest';
$slider_id = 'New';
$listing = 0;
    if (!isset($store_id)) {$store_id  = 0;}

if (!isset($customisation_slider[$type_of_slider.'_type'][$store_id]) || $customisation_slider[$type_of_slider.'_type'][$store_id] == 'slick') {
include('catalog/view/theme/list.php');
} else {
include('catalog/view/theme/carousel.php');
}
?>
