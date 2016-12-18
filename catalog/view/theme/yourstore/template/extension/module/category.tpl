<?php
foreach ($categories as $category) :

if ($category['category_id'] == $category_id) :
if ($category['children']) :


?>
<div class="collapse-block open">
  <?php foreach ($categories as $category) : ?>
     <?php if ($category['category_id'] == $category_id) : ?>
        <h4 class="collapse-block__title category_name"><?php echo $category['name']; ?></h4>
        <?php if ($category['children']) : ?>
            <div class="collapse-block__content">
                <ul class="expander-list">
                    <?php foreach ($category['children'] as $k=>$child) : ?>
                           <li class="<?php echo ($k == 0 ? 'active' : 'non-active'); ?> <?php echo ($child['category_id'] == $child_id ? 'active' : 'non-active'); ?>">
                                <a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a>

                               <?php
                               if (isset($child['grandchildren'])):
                               $categories_sub_level_2 = $child['grandchildren'];
                               ?>
                               <span class="expander"></span>
                                <ul>
                                    <?php foreach ($categories_sub_level_2 as $m=>$category_sub_level_2) : ?>
                                        <li class="<?php echo ($category_sub_level_2['category_id'] == $grandchild_id ? 'active' : 'non-active'); ?> level2"><a href="<?php echo $category_sub_level_2['href']; ?>"><?php echo $category_sub_level_2['name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                               <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    <?php endif; ?>


  <?php endforeach; ?>
    <a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a>
</div>
<?php
endif;
endif;
endforeach;
?>

