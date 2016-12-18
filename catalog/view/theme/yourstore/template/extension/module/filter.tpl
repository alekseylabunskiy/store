    <div id="box-filter">
        <?php foreach ($filter_groups as $k=>$filter_group) : ?>


        <?php foreach ($filter_group['filter'] as $filter) { ?>
        <?php if (in_array($filter['filter_id'], $filter_category)) { $class = 'open'; } else { $class = ''; } ?>
        <?php } ?>

        <div class="collapse-block open">
            <h4 class="collapse-block__title"><?php echo $filter_group['name']; ?></h4>
            <div id="filter-group<?php echo $filter_group['filter_group_id']; ?>" class="collapse-block__content">
                    <ul class="options-swatch7 options-swatch--color7 options-swatch--lg">
                        <?php foreach ($filter_group['filter'] as $filter) { ?>
                        <?php if (in_array($filter['filter_id'], $filter_category)) { ?> <li class="active"> <?php } else { ?>
                        <li>
                        <?php } ?>
                        <div class="checkbox-group clearfix">
                                <input id="checkBox<?php echo $filter['filter_id']; ?>" data-type="search" name="filter[]" type="checkbox" value="<?php echo $filter['filter_id']; ?>" <?php if (in_array($filter['filter_id'], $filter_category)) { ?> checked="checked" <?php } ?> />
                                <label class="checkbox" for="checkBox<?php echo $filter['filter_id']; ?>">
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <?php echo $filter['name']; ?>
                                </label>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
            </div>
            </div>
        <?php endforeach; ?>


        <div class="collapse-block">
            <ul class="tags-list  filter-popup">
                <li class="active">
                    <a id="clear-filter"></a>
                </li>
                <li>
                    <a id="button-filter"><?php echo $button_filter; ?></a>
                </li>
            </ul>

        </div>
    </div>

    <script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	filter = [];
	
	$('input[name^=\'filter\']:checked').each(function(element) {
		filter.push(this.value);
	});
	
	location = '<?php echo $action; ?>&filter=' + filter.join(',');
});
//--></script>

    <script>
        $(document).on('click', '#clear-filter', function(){
            $('input[data-type="search"]').attr('checked', false);
            location = '<?php echo $action; ?>';

        });
    </script>
