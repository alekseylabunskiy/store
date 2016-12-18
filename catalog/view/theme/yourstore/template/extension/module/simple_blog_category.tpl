<?php if($categories) : ?>

<?php if((isset($simple_blog_category_search_article)) && ($simple_blog_category_search_article)) { ?>
<h4 class="text-uppercase title-aside"><?php echo $button_search; ?></h4>

<div class="block-underline" id="blog-search">
    <form>
        <div class="input-group">
            <input type="text" name="article_search" value="<?php echo $blog_search; ?>" class="form-control" id="InputSearch" />
            <div class="input-group-btn">
                <a id="button-search" class="btn btn--ys btn-left"><?php echo $button_search; ?></a>
            </div>
        </div>
    </form>
</div>
<?php } ?>

<h4 class="text-uppercase title-aside"><?php echo $heading_title; ?></h4>
<div class="block-underline">
    <ul class="categories-list">

        <?php foreach ($categories as $category) : ?>
        <li class="<?php echo ($category['simple_blog_category_id'] == $category_id ? 'active' : 'none-active'); ?>">
            <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
            <?php if ($category['children']) { ?>
            <ul>
                <?php foreach ($category['children'] as $child) { ?>
                <li>
                    <a href="<?php echo (isset($child['external_link']) && $child['external_link'] != '' ? $child['external_link'] : $child['href']); ?>" class="<?php ($child['category_id'] == $child_id ? 'active' : 'none-active'); ?>">&nbsp;&nbsp;&nbsp;- <?php echo $child['name']; ?></a>
                </li>
                <?php } ?>
            </ul>
            <?php } ?>
        </li>
        <?php endforeach; ?>
    </ul>
</div>




<?php endif; ?>



<script type="text/javascript">




    $('#button-search').on('click', function() {
		//url = 'index.php?route=simple_blog/search';
        var url = $('base').attr('href') + 'index.php?route=simple_blog/search';

        var value = $('#blog-search input[name=\'article_search\']').val();
		
		if (value) {
			url += '&blog_search=' + encodeURIComponent(value);
		}
		
		location = url;
	});
    $('#blog-search input[name=\'article_search\']').on('keydown', function(e) {
        if (e.keyCode == 13) {

            setTimeout(function () {
                $('#button-search').trigger('click');
            }, 100);



        }

    });



</script>
