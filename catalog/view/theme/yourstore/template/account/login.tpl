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
  <?php if ($success) { ?>
  <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?></div>
  <?php } ?>
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
  <?php } ?>

  <div class="row">
      <?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = ''; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>">
        <?php echo $content_top; ?>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 col-xl-offset-2">
                <div class="login-form-box">
                    <h3 class="color small"><?php echo $text_new_customer; ?></h3>
                    <p><?php echo $text_register_account; ?></p>
                    <br>
                    <a href="<?php echo $register; ?>" class="btn btn--ys btn--xl"><span class="icon icon-person_add"></span><?php echo $button_continue; ?></a>
                </div>
            </div>
            <div class="divider divider--md visible-sm visible-xs"></div>
            <section class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <div class="login-form-box">
                    <h3 class="color small"><?php echo $text_returning_customer; ?></h3>
                    <p><?php echo $text_i_am_returning_customer; ?></p>
                    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-returning">
                        <div class="form-group">
                            <label for="input-email"><?php echo $entry_email; ?></label>
                            <input type="text" name="email" value="<?php echo $email; ?>" id="input-email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="input-password"><?php echo $entry_password; ?></label>
                            <input type="password" name="password" value="<?php echo $password; ?>" id="input-password" class="form-control" />
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <button type="submit" class="btn btn--ys btn-top btn--xl" value="<?php echo $button_login; ?>"><span class="icon icon-vpn_key"></span><?php echo $button_login; ?></button>
                                <?php if ($redirect) { ?>
                                <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
                                <?php } ?>
                            </div>
                            <div class="divider divider--md visible-xs"></div>
                        </div>
                        <p class="btn-top">
                            <a class="link-color" href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a>
                        </p>
                    </form>
                </div>
            </section>
      </div>
      <?php echo $content_bottom; ?>
    </div>
    <?php echo $column_right; ?>
  </div>
</div>
<?php echo $footer; ?>