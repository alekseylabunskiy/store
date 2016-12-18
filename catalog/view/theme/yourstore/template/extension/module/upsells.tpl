<?php
if (isset($products) && sizeof($products) > 0) :
?>

<section class="content">
    <div class="container">
        <!-- title -->
        <div class="title-with-button">
            <div class="carousel-products__button pull-right"> <span class="btn-prev"></span> <span class="btn-next"></span> </div>
            <h2 class="text-uppercase title-under <?php echo ($image_size != 'big' ? 'text-left pull-left' : 'text-center') ; ?>"><?php echo $upsells_promo; ?></h2>
        </div>
        <!-- /title -->
        <!-- carousel -->
        <div class="carousel-products row" id="carouselUpsell">
            <?php $listing = 0; $type_of_slider = 0; $related = 1; include('catalog/view/theme/list.php'); ?>

        </div>
        <!-- /carousel -->
    </div>
</section>
<script type="text/javascript">
    $j(document).ready(function() {
        // Init All Carousel
        productCarousel($j('#carouselUpsell'),6,4,4,2,1);
    })
</script>

<?php endif; ?>
