<?php echo $header; ?>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb--ys pull-left">
            <?php foreach ($breadcrumbs as $k => $breadcrumb) :  ?>
            <li class="<?php echo ($k == 0 ? 'home-link' : ($k == (count($breadcrumbs) - 1) ? 'active' : '')); ?>">
                <?php if ($k == (count($breadcrumbs) - 1)) {  echo $breadcrumb['text']; } else { echo '<a class="'.(count($breadcrumbs)-1).'" href="'.$breadcrumb['href'].'">'.$breadcrumb['text'].'</a>'; } ?>
            </li>
            <?php endforeach; ?>
        </ol>
    </div>
</div>
<div class="container">
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
        <!-- title -->
        <div class="title-box">
            <h1 class="text-center text-uppercase title-under"><?php echo $heading_title; ?></h1>
        </div>
        <!-- /title -->

        <?php if ($orders) { ?>
      <div class="table-responsive">
        <table class="table-order-history">
          <thead>
            <tr>
              <th><?php echo $column_order_id; ?></th>
              <th><?php echo $column_customer; ?></th>
              <th><?php echo $column_product; ?></th>
              <th><?php echo $column_status; ?></th>
              <th><?php echo $column_total; ?></th>
              <th><?php echo $column_date_added; ?></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($orders as $order) { ?>
            <tr>
              <td><div class="th-title visible-xs"><?php echo $column_order_id; ?></div>#<?php echo $order['order_id']; ?></td>
              <td><div class="th-title visible-xs"><?php echo $column_customer; ?></div><?php echo $order['name']; ?></td>
              <td><div class="th-title visible-xs"><?php echo $column_product; ?></div><?php echo $order['products']; ?></td>
              <td><div class="th-title visible-xs"><?php echo $column_status; ?></div><?php echo $order['status']; ?></td>
              <td><div class="th-title visible-xs"><?php echo $column_total; ?></div><?php echo $order['total']; ?></td>
              <td><div class="th-title visible-xs"><?php echo $column_date_added; ?></div><?php echo $order['date_added']; ?></td>
              <td class="text-right">
                  <div class="th-title visible-xs"><?php echo $button_view; ?></div>
                  <a href="<?php echo $order['view']; ?>" data-toggle="tooltip" title="<?php echo $button_view; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="text-right"><?php echo $pagination; ?></div>
      <?php } else { ?>
      <p><?php echo $text_empty; ?></p>
      <?php } ?>
      <div class="buttons clearfix">
        <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
      </div>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>