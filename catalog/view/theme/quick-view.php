<?php
if (isset($_GET['image_main'])){$image_main = $_GET['image_main'];}

if (isset($_GET['product_name'])){$product_name = $_GET['product_name'];}
if (isset($_GET['product_description_short'])){$product_description_short = $_GET['product_description_short'];}
if (isset($_GET['product_price'])){$product_price = $_GET['product_price'];}

if (isset($_GET['product_special']) && $_GET['product_special'] != 'none'){$product_special = $_GET['product_special'];} else {$product_special = 1;}


if (isset($_GET['product_rating'])){$product_rating = $_GET['product_rating'];}
if (isset($_GET['product_href'])){$product_href = $_GET['product_href'];}
if (isset($_GET['product_id'])){
    $product_href = $product_href.'&amp;product_id='.$_GET['product_id'];
} else {
    $product_href = $_GET['product_href'];
}

if (isset($_GET['text_tax'])){$text_tax = $_GET['text_tax'];}
if (isset($_GET['product_tax'])){$product_tax = $_GET['product_tax'];}
if (isset($_GET['stock'])){$stock = $_GET['stock'];}

if (isset($_GET['product_id'])){$product_id = $_GET['product_id'];}
if (isset($_GET['button_cart'])){$button_cart = $_GET['button_cart'];}

if (isset($_GET['button_wishlist'])){$button_wishlist = $_GET['button_wishlist'];}
if (isset($_GET['button_compare'])){$button_compare = $_GET['button_compare'];}
if (isset($_GET['brand_image'])){$brand_image = $_GET['brand_image'];}

?>

<div class="product-popup">
	<div class="product-popup-content">
	<div class="container-fluid">
		<div class="row product-info-outer">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="product-main-image">
					<div class="product-main-image__item"><img src="<?php echo $image_main; ?>" alt="<?php echo $product_name; ?>" /></div>
				</div>
			</div>
			<div class="product-info col-sm-12 col-md-6 col-lg-6">
				<div class="wrapper">
					<div class="product-info__sku pull-left">
                        <?php// echo $text_tax; ?> <strong><?php// echo $product_tax; ?></strong>
                    </div>
					<div class="product-info__availabilitu pull-right">
                        <strong class="color"><?php// echo $stock; ?></strong>
                    </div>
				</div>
				<div class="product-info__title">
					<h2><a href="<?php echo $product_href; ?>"><?php echo $product_name; ?></a> </h2>
				</div>
				<div class="price-box product-info__price">
                    <?php if ($product_special == 1) { ?>
                    <span class="price regular"><?php echo $product_price; ?></span>
                    <?php } else { ?>
                    <span class="price-box__new"><?php echo $product_special; ?></span>
                    <span class="price-box__old"><?php echo $product_price; ?></span>
                    <?php } ?>
                </div>
				<div class="divider divider--xs product-info__divider"></div>
				<div class="product-info__description">
					<?php if ($brand_image) : ?>
                        <div class="product-info__description__brand"><img src="<?php echo $brand_image; ?>"> </div>
                    <?php endif; ?>
					<div class="product-info__description__text"><?php echo $product_description_short; ?></div>
				</div>
				<div class="divider divider--xs product-info__divider"></div>

				<div class="divider divider--sm"></div>
				<div class="wrapper">
					<div class="pull-left">
                        <button onclick="cart_theme.add('<?php echo $product_id; ?>');" type="submit" class="btn btn--ys btn--xxl">
                            <span class="icon icon-shopping_basket"></span> <?php echo $button_cart; ?>
                        </button>
                    </div>
				</div>
				<ul class="product-link">
					<li class="text-right">
                        <span class="icon icon-favorite_border  tooltip-link"></span>
                        <a onclick="wishlist_theme.add('<?php echo $product_id; ?>');"><span class="text"><?php echo $button_wishlist; ?></span></a>
                    </li>
					<li class="text-left">
                        <span class="icon icon-sort  tooltip-link"></span>
                        <a onclick="compare_theme.add('<?php echo $product_id; ?>');"><span class="text"><?php echo $button_compare; ?></span></a>
                    </li>
				</ul>
			</div>
		</div>
	</div>
	</div>
</div>
