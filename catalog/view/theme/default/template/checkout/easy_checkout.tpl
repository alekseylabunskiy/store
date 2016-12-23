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
  <?php if ($error_warning) { ?>
  <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php } ?>

  <!--row-->
  <div class="row_rep">

    <div id="content">
    <!-- title -->
    <div class="title-box">
        <h1 class="text-center text-uppercase title-under"><?php echo $heading_title; ?></h1>
    </div>
    <!-- /title -->

    <!--top-->
    <div class="row">
        <?php if (!isset($address)) : ?>
        <div class="col-sm-4 col-xs-12">
            <a href="#" onclick="jQuery('.login-form').toggle();return false;" class="btn btn--ys"><span class="icon icon-vpn_key"></span><?php echo $text_i_am_returning_customer; ?></a>
            <div class="login-form registerbox clearfix" style="display:none">
                <div class="select-basket__inner">
                    <div class="message"></div>
                    <form role="form">
                        <div class="form-group">
                            <label for="input-email"><?php echo $entry_email; ?></label>
                            <input type="text" name="email" value="" id="input-email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="input-password"><?php echo $entry_password; ?></label>
                            <input type="password" name="password" value="" id="input-password" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-5">
                                <button class="btn btn--ys btn-top btn--xl" type="button" value="<?php echo $button_login; ?>" id="button-login">
                                    <span class="icon icon-vpn_key"></span><?php echo $button_login; ?>
                                </button>
                            </div>
                            <div class="divider divider--md visible-xs"></div>
                            <div class="col-xs-12 col-sm-6 col-md-7">
                                <p class="btn-top"><a class="link-color" href="<?php echo $forgotten; ?>"><?php echo $text_forgotten; ?></a></p>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <?php endif; ?>
        <!--cart-->
        <div class="col-sm-8  col-xs-12">
            <div class="visible-xs divider--sm"></div>
            <div class="pull-right pull-extra-left">
                <div class="dropdown select-basket">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="icon icon-shopping_basket"></span>
                        <?php
                             $last_price = array_pop($totals);
                             echo $last_price["text"];
                        ?>
                    </a>
                    <div class="dropdown-menu " role="menu">
                        <div class="select-basket__inner">
                            <h6 class="font18"><?php echo $text_cart;?></h6>
                            <table class="select-basket__table">
                                <thead>
                                <tr>
                                    <th><?php echo $column_name; ?></th>
                                    <th><?php echo $column_quantity; ?></th>
                                    <th><?php echo $column_total; ?></th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $product['href']; ?>" class="color"><?php echo $product['name']; ?></a>
                                        <?php foreach ($product['option'] as $option) { ?>
                                        <br />
                                        &nbsp;<small> - <?php echo $option['name']; ?>: <?php if (isset($option['option_value']) && !empty($option['option_value'])) echo $option['option_value'];else if (isset($option['value'])) echo $option['value']; ?></small>
                                        <?php } ?>
                                        <br><small><?php echo $column_model; ?>:</small> <?php echo $product['model']; ?>
                                    </td>
                                    <td><?php echo $product['quantity']; ?></td>
                                    <td>
                                        <b class="color"><?php echo $product['total']; ?></b>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                                <?php foreach ($vouchers as $voucher) : ?>
                                <tr>
                                    <td class="text-left"><?php echo $voucher['description']; ?></td>
                                    <td class="text-left hidden-xs"></td>
                                    <td class="text-right hidden-xs">1</td>
                                    <td class="text-right hidden-xs"><?php echo $voucher['amount']; ?></td>
                                    <td class="text-right"><?php echo $voucher['amount']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>

                                <tfoot>
                                <?php foreach ($totals as $total) : ?>
                                <tr>
                                    <td></td>
                                    <th><?php echo $total['title']; ?>:</th>
                                    <td><?php echo $total['text']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//cart-->
    </div>
    <hr>

    <!--//top-->
	
		<div class="row box checkout_form box-container">

        <!--================= col-left =================-->
        <div class="col-md-12 col-lg-4 register_block">
			<div>

                <h2 id="contact_data" class="title-checkout tt_uppercase">
                    <span id="icon_person" class="icon icon-person icon-large color"></span>
                    <?php echo $text_checkout_account; ?>
                </h2>


                <?php //if (!isset($address)) { ?>

                <div class="row">
                    <div class="form-group required col-md-6">
                        <label class="control-label" for="input-payment-firstname"><?php echo $entry_firstname; ?></label>
                        <input type="text" name="firstname" value="<?php if (isset($address['firstname'])) echo $address['firstname']; elseif (isset($firstname)) echo $firstname; ?>" placeholder="" id="input-payment-firstname" class="form-control" <?php if (isset($customer_id)) {?> readonly<?php }?>/>
                    </div>
                    <div class="form-group required col-md-6">
                        <label class="control-label" for="input-payment-lastname"><?php echo $entry_lastname; ?></label>
                        <input type="text" name="lastname" value="<?php if (isset($lastname)) echo $lastname;?>" placeholder="" id="input-payment-lastname" class="form-control" <?php if (isset($customer_id)) {?> readonly<?php }?>/>
                    </div>
                </div>
				<div class="form-group required" id="country">
					<label class="control-label" for="input-payment-country"><?php echo $entry_country; ?></label>
					<select name="country_id" id="input-payment-country" class="form-control">
						<option value=""><?php echo $text_select; ?></option>
						<?php foreach ($countries as $country) { ?>
						<?php if ($country['country_id'] == $country_id) { ?>
						<option value="<?php echo $country['country_id']; ?>" selected="selected"><?php echo $country['name']; ?></option>
						<?php } else { ?>
						<option value="<?php echo $country['country_id']; ?>"><?php echo $country['name']; ?></option>
						<?php } ?>
						<?php } ?>
					</select>
				</div>
				<div class="form-group required">
					<label class="control-label" for="input-payment-zone"><?php echo $entry_zone; ?></label>
					<select name="zone_id" id="input-payment-zone" class="form-control">
					</select>
				</div>
				<div class="form-group required">
					<label class="control-label" for="input-payment-city"><?php echo $entry_city; ?></label>
					<select name="city" id="input-payment-city" class="form-control">
					</select>
				</div>
				<div class="form-group required">
					<label class="control-label" for="input-payment-telephone"><?php echo $entry_telephone; ?></label>
					<input type="text" name="telephone" value="<?php if (isset($telephone)) echo $telephone;?>" placeholder="" id="input-payment-telephone" class="form-control" <?php if (isset($customer_id)) {?> readonly<?php }?>/>
				</div>
			  	<div class="form-group">
				    <label class="control-label" for="input-payment-email"><?php echo $entry_email; ?></label>
				    <input type="text" name="email" value="<?php if (isset($email)) echo $email;?>" placeholder="" id="input-payment-email" class="form-control" <?php if (isset($customer_id)) {?> readonly<?php }?>/>
			  	</div>

                <!--1-->
                <div class="divider--xl"></div>

			      <?php if ($addresses) { ?>
				  <?php if (isset($customer_id)) { ?>


			      <div id="payment-existing" hidden>
					<select name="payment_address_id" class="form-control">
				  <?php foreach ($addresses as $address) { ?>
				  <?php if (isset($payment_address_id) && $address['address_id'] == $payment_address_id) { ?>
				  <option value="<?php echo $address['address_id']; ?>" selected="selected"><?php echo $address['firstname']; ?> <?php echo $address['lastname']; ?>, <?php echo $address['address_1']; ?>, <?php echo $address['city']; ?>, <?php echo $address['zone']; ?>, <?php echo $address['country']; ?></option>
				  <?php } else { ?>
				  <option value="<?php echo $address['address_id']; ?>"><?php echo $address['firstname']; ?> <?php echo $address['lastname']; ?>, <?php echo $address['address_1']; ?>, <?php echo $address['city']; ?>, <?php echo $address['zone']; ?>, <?php echo $address['country']; ?></option>
				  <?php } ?>
				  <?php } ?>
				</select>
			      </div>
			      <?php } ?>
			    <?php if (isset($customer_id)) { ?>
				  <?php } ?>
			      <?php } ?>

                <!--1-->

                <div id="payment-address-new" <?php if (isset($customer_id) && $addresses) { ?>	style="display:none"<?php }?>>
				  <?php // if (!$checkout_hide_company){ ?>
				  <div class="form-group" hidden >
					<label hidden class="control-label" for="input-payment-company"><?php echo $entry_company; ?></label>
					<input type="hidden" name="company" value="<?php if (isset($company)) echo $company;?>" placeholder="<?php echo str_replace(':','',$entry_company); ?>" id="input-payment-company" class="form-control" />
				</div>
				<?php //} else { ?>
				<input type="hidden" name="company" value="" />
				<?php //}?>

				<?php if (isset($entry_company_id)) { ?>
				<?php if (!$checkout_hide_company_id){ ?>
				<div class="form-group" hidden>
					<label class="control-label" for="input-payment-company"><?php echo $entry_company_id; ?></label>
					<input type="hidden" name="company_id" value="" placeholder="<?php echo str_replace(':','',$entry_company_id); ?>" id="input-payment-company-id" class="form-control" />
				</div>
				<?php } else { ?>
				<input type="hidden" name="company_id" value="" />
				<?php }?>

				<?php if (!$checkout_hide_tax_id){ ?>
				<div class="form-group" hidden>
					<label class="control-label" for="input-tax-id-"><?php echo $entry_tax_id; ?></label>
					<input type="hidden" name="tax_id" value="<?php if (isset($tax_id)) echo $tax_id; ?>" placeholder="<?php echo str_replace(':','',$entry_tax_id); ?>" id="input-tax-id-" class="form-control" />
				</div>
				<?php } else { ?>
				<input type="hidden" name="tax_id" value="" />
				<?php } }?>
				  <div class="form-group" hidden>
				    <label class="control-label" for="input-payment-address-2"><?php echo $entry_address_2; ?></label>
				    <input type="text" name="address_2" value="<?php if (isset($address_2)) echo $address_2;?>" placeholder="<?php echo str_replace(':','',$entry_address_2); ?>" id="input-payment-address-2" class="form-control" />
				  </div>
				  <div class="form-group" hidden>

				  </div>
				</div>
				<?php if (!isset($customer_id)) { ?>
            <div class="checkbox-group" hidden>
                <input type="checkbox" id="register" type="checkbox" name="register" onclick="jQuery('.register-form').toggle()">
                <label for="register">
                    <span class="check"></span>
                    <span class="box"></span>
                    <?php echo $text_register; ?>
                </label>
            </div>
				<?php } ?>  
				
				
				<div class="register-form" style="display:none">
				      <div class="form-group required col-md-6">
					<label class="control-label" for="input-payment-password"><?php echo $entry_password; ?></label>
					<input type="password" name="password" value="" placeholder="<?php echo str_replace(':','',$entry_password); ?>" id="input-payment-password" class="form-control" />
				      </div>
				      <div class="form-group required col-md-6">
					<label class="control-label" for="input-payment-confirm"><?php echo $entry_confirm; ?></label>
					<input type="password" name="confirm" value="" placeholder="<?php echo str_replace(':','',$entry_confirm); ?>" id="input-payment-confirm" class="form-control" />
				      </div>
				</div>
			<?php /*} else { ?>
				  <div class="form-group required col-md-6">
				    <label class="control-label" for="input-payment-firstname"><?php echo $entry_firstname; ?></label>
				    <p><?php echo $firstname; ?></p>
				  </div>
				  <div class="form-group required col-md-6">
				    <label class="control-label" for="input-payment-lastname"><?php echo $entry_lastname; ?></label>
				    <p><?php echo $lastname; ?></p>
				  </div>
				  <div class="form-group required  col-md-6">
				    <label class="control-label" for="input-payment-email"><?php echo $entry_email; ?></label>
				    <p><?php echo $email; ?></p>
				  </div>
				  <div class="form-group required  col-md-6">
				    <label class="control-label" for="input-payment-telephone"><?php echo $entry_telephone; ?></label>
				    <p><?php echo $telephone; ?></p>
				  </div>
				  <?php if (!empty($fax)) { ?>
				  <div class="form-group col-md-12" >
				    <label class="control-label" for="input-payment-fax"><?php echo $entry_fax; ?></label>
				    <p><?php echo $fax; ?></p>
				  </div>
				  <?php }?>

				  <div class="col-md-12">
				    <h3 class="clearfix"><?php echo $text_your_address; ?></h3>
				  </div>

				  <?php if (!empty($address['company'])) { ?>
				  <div class="form-group col-md-6" >
				    <label class="control-label" for="input-payment-company"><?php echo $entry_company; ?></label>
				    <p><?php echo $address['company']; ?></p>
				  </div>
				  <?php }?>

				  <?php if (!empty($address['address_1'])) { ?>
				  <div class="form-group required col-md-12">
				    <label class="control-label" for="input-payment-address-1"><?php echo $entry_address_1; ?></label>
				    <p><?php echo $address['address_1'];?></p>
				  </div>
				   <?php }?>

				  <?php if (!empty($address['address_2'])) { ?>
				  <div class="form-group col-md-12">
				    <label class="control-label" for="input-payment-address-2"><?php echo $entry_address_2; ?></label>
				    <p><?php echo $address['address_2'];?></p>
				  </div>
				   <?php }?>
				   
				  <div class="form-group required col-md-6">
				    <label class="control-label" for="input-payment-country"><?php echo $entry_country; ?></label>
				    <p><?php echo $address['country'];?></p>
				  </div>
				  <div class="form-group required col-md-6">
				    <label class="control-label" for="input-payment-zone"><?php echo $entry_zone;; ?></label>
				    <p><?php echo $address['zone'];?></p>
				  </div>
				  <div class="form-group required col-md-6">
				    <label class="control-label" for="input-payment-city"><?php echo $entry_city; ?></label>
				    <p><?php echo $address['city'];?></p>
				  </div>
				  <div class="form-group required col-md-6" >
				    <label class="control-label" for="input-payment-postcode"><?php echo $entry_postcode; ?></label>
				    <p><?php echo $address['postcode'];?></p>
				  </div>
			    
			<?php } */?>
		      </div>

        </div>
    <!--================= /col-left =================-->

    <!--================= col-center =================-->
    <div class="col-md-12 col-lg-4" id="local_shipping" >
    <?php if ($shipping_required) { ?>
    <div class="shiptobilling clearfix" hidden>
        <h2 class="title-checkout tt_uppercase">
            <span class="icon color icon-local_shipping"></span>
            <?php echo $text_checkout_shipping_address; ?>
        </h2>

					<?php if (!isset($customer_id)) { ?>
        <div class="checkbox-group">
            <input type="checkbox" id="shipping_address" name="shipping_address" value="new" <?php if (isset($address_id)) echo 'checked="checked"';?> onclick="jQuery('.shipping-address').toggle()">

            <label for="shipping_address">
                <span class="check"></span>
                <span class="box"></span>
                <?php echo $text_address_new; ?>
            </label>
        </div>
					<?php } ?>
			    </div>

    <div class="shipping-address" <?php if (isset($shipping_address_id) || isset($customer_id)) echo 'style="display:none"'; else echo 'style="display:none"'; ?>>
			      <?php if ($addresses) { ?>
				  <?php if (isset($customer_id)) { ?>
			      <div class="radio">
				<label>
				  <input type="radio" name="shipping_address" id="jkl" value="existing" checked="checked" onclick="jQuery('#shipping-new').hide()" />
				  <?php echo $text_address_existing; ?>
                </label>

                  </div>
			      
			      

    <div id="shipping-existing">
        <select name="shipping_address_id" class="form-control" >
				  <?php foreach ($addresses as $address) { ?>
				  <?php if (isset($shipping_address_id) && $address['address_id'] == $shipping_address_id) { ?>
				  <option value="<?php echo $address['address_id']; ?>" selected="selected"><?php echo $address['firstname']; ?> <?php echo $address['lastname']; ?>, <?php echo $address['address_1']; ?>, <?php echo $address['city']; ?>, <?php echo $address['zone']; ?>, <?php echo $address['country']; ?></option>
				  <?php } else { ?>
				  <option value="<?php echo $address['address_id']; ?>"><?php echo $address['firstname']; ?> <?php echo $address['lastname']; ?>, <?php echo $address['address_1']; ?>, <?php echo $address['city']; ?>, <?php echo $address['zone']; ?>, <?php echo $address['country']; ?></option>
				  <?php } ?>
				  <?php } ?>

        </select>
    </div>
    <?php } ?>
    <?php if (isset($customer_id)) { ?>
    <div class="radio">
        <label>
            <input type="radio" name="shipping_address" value="new" onclick="jQuery('#shipping-new').show();"/>
            <?php echo $text_address_new; ?>
        </label>
    </div>
    <?php } ?>
    <?php } ?>
    <br />
    <div id="shipping-new" style="display: <?php echo (($addresses && isset($customer_id)) ? 'none' : 'block'); ?>;">
				<div class="form-group required">
				  <label class="control-label" for="input-shipping-firstname"><?php echo $entry_firstname; ?></label>
				  <div class="">
				    <input type="text" name="shipping_firstname" value="" placeholder="<?php echo str_replace(':','',$entry_firstname); ?>" id="input-shipping-firstname" class="form-control" />
				  </div>
				</div>
				<div class="form-group required">
				  <label class="control-label" for="input-shipping-lastname"><?php echo $entry_lastname; ?></label>
				  <div class="">
				    <input type="text" name="shipping_lastname" value="" placeholder="<?php echo str_replace(':','',$entry_lastname); ?>" id="input-shipping-lastname" class="form-control" />
				  </div>
				</div>
				<?php //if (!$checkout_hide_company_id){ ?>
				<div class="form-group" >
				  <label class="control-label" for="input-shipping-company"><?php echo $entry_company; ?></label>
				  <div class="">
				    <input type="text" name="shipping_company" value="" placeholder="<?php echo str_replace(':','',$entry_company); ?>" id="input-shipping-company" class="form-control" />
				  </div>
				</div>
			   <?php //} else { ?>
				   <input type="hidden" name="shipping_company" value="" />
			   <?php //}?>
				<div class="form-group required">
				  <label class="control-label" for="input-shipping-address-1"><?php echo $entry_address_1; ?></label>
				  <div class="">
				    <input type="text" name="shipping_address_1" value="" placeholder="<?php echo str_replace(':','',$entry_address_1); ?>" id="input-shipping-address-1" class="form-control" />
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label" for="input-shipping-address-2"><?php echo $entry_address_2; ?></label>
				  <div class="">
				    <input type="text" name="shipping_address_2" value="" placeholder="<?php echo str_replace(':','',$entry_address_2); ?>" id="input-shipping-address-2" class="form-control" />
				  </div>
				</div>
				<div class="form-group required">
				  <label class="control-label" for="input-shipping-city"><?php echo $entry_city; ?></label>
				  <div class="">
				    <input type="text" name="shipping_city" value="" placeholder="<?php echo str_replace(':','',$entry_city); ?>" id="input-shipping-city" class="form-control" />
				  </div>
				</div>
				<div class="form-group required" >
				  <label class="control-label" for="input-shipping-postcode"><?php echo $entry_postcode; ?></label>
				  <div class="">
				    <input type="text" name="shipping_postcode" value="<?php echo $postcode; ?>" placeholder="<?php echo str_replace(':','',$entry_postcode); ?>" id="input-shipping-postcode" class="form-control" />
				  </div>
				</div>
				<div class="form-group required">
				  <label class="control-label" for="input-shipping-country"><?php echo $entry_country; ?></label>
				  <div class="">
				    <select name="shipping_country_id" id="input-shipping-country" class="form-control">
				      <option value=""><?php echo $text_select; ?></option>
				      <?php foreach ($countries as $country) { ?>
				      <?php if ($country['country_id'] == $country_id) { ?>
				      <option value="<?php echo $country['country_id']; ?>" selected="selected"><?php echo $country['name']; ?></option>
				      <?php } else { ?>
				      <option value="<?php echo $country['country_id']; ?>"><?php echo $country['name']; ?></option>
				      <?php } ?>
				      <?php } ?>
				    </select>
				  </div>
				</div>
				<div class="form-group required">
				  <label class="control-label" for="input-shipping-zone"><?php echo $entry_zone; ?></label>
				  <div class="">
				    <select name="shipping_zone_id" id="input-shipping-zone" class="form-control">
				    </select>
				  </div>
				</div>
				<?php if (isset($custom_fields)) foreach ($custom_fields as $custom_field) { ?>
				<?php if ($custom_field['type'] == 'select') { ?>
				<div class="form-group<?php echo ($custom_field['required'] ? ' required' : ''); ?> custom-field">
				  <label class="control-label" for="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
				  <div class="">
				    <select name="shipping_custom_field[<?php echo $custom_field['custom_field_id']; ?>]" id="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control">
				      <option value=""><?php echo $text_select; ?></option>
				      <?php foreach ($custom_field['custom_field_value'] as $custom_field_value) { ?>
				      <option value="<?php echo $custom_field_value['custom_field_value_id']; ?>"><?php echo $custom_field_value['name']; ?></option>
				      <?php } ?>
				    </select>
				  </div>
				</div>
				<?php } ?>
				<?php if ($custom_field['type'] == 'radio') { ?>
				<div class="form-group<?php echo ($custom_field['required'] ? ' required' : ''); ?> custom-field">
				  <label class="control-label"><?php echo $custom_field['name']; ?></label>
				  <div class="">
				    <div id="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>">
				      <?php foreach ($custom_field['custom_field_value'] as $custom_field_value) { ?>
				      <div class="radio">
					<label>
					  <input type="radio" name="shipping_custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field_value['custom_field_value_id']; ?>" />
					  <?php echo $custom_field_value['name']; ?></label>
				      </div>
				      <?php } ?>
				    </div>
				  </div>
				</div>
				<?php } ?>
				<?php if ($custom_field['type'] == 'checkbox') { ?>
				<div class="form-group<?php echo ($custom_field['required'] ? ' required' : ''); ?> custom-field">
				  <label class="control-label"><?php echo $custom_field['name']; ?></label>
				  <div class="">
				    <div id="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>">
				      <?php foreach ($custom_field['custom_field_value'] as $custom_field_value) { ?>
				      <div class="checkbox">
					<label>
					  <input type="checkbox" name="shipping_custom_field[<?php echo $custom_field['custom_field_id']; ?>][]" value="<?php echo $custom_field_value['custom_field_value_id']; ?>" />
					  <?php echo $custom_field_value['name']; ?></label>
				      </div>
				      <?php } ?>
				    </div>
				  </div>
				</div>
				<?php } ?>
				<?php if ($custom_field['type'] == 'text') { ?>
				<div class="form-group<?php echo ($custom_field['required'] ? ' required' : ''); ?> custom-field">
				  <label class="control-label" for="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
				  <div class="">
				    <input type="text" name="shipping_custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" placeholder="<?php echo str_replace(':','',$custom_field['name']); ?>" id="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control" />
				  </div>
				</div>
				<?php } ?>
				<?php if ($custom_field['type'] == 'textarea') { ?>
				<div class="form-group<?php echo ($custom_field['required'] ? ' required' : ''); ?> custom-field">
				  <label class="control-label" for="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
				  <div class="">
				    <textarea name="shipping_custom_field[<?php echo $custom_field['custom_field_id']; ?>]" rows="5" placeholder="<?php echo str_replace(':','',$custom_field['name']); ?>" id="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control"><?php echo $custom_field['value']; ?></textarea>
				  </div>
				</div>
				<?php } ?>
				<?php if ($custom_field['type'] == 'file') { ?>
				<div class="form-group<?php echo ($custom_field['required'] ? ' required' : ''); ?> custom-field">
				  <label class="control-label"><?php echo $custom_field['name']; ?></label>
				  <div class="">
				    <button type="button" id="button-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="btn btn-default"><i class="fa fa-upload"></i> <?php echo $button_upload; ?></button>
				    <input type="hidden" name="shipping_custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" id="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>" />
				  </div>
				</div>
				<?php } ?>
				<?php if ($custom_field['type'] == 'date') { ?>
				<div class="form-group<?php echo ($custom_field['required'] ? ' required' : ''); ?> custom-field">
				  <label class="control-label" for="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
				  <div class="">
				    <input type="date" name="shipping_custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" placeholder="<?php echo str_replace(':','',$custom_field['name']); ?>" id="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control" />
				  </div>
				</div>
				<?php } ?>
				<?php if ($custom_field['type'] == 'datetime') { ?>
				<div class="form-group<?php echo ($custom_field['required'] ? ' required' : ''); ?> custom-field">
				  <label class="control-label" for="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
				  <div class="">
				    <input type="datetime-local" name="shipping_custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" placeholder="<?php echo str_replace(':','',$custom_field['name']); ?>" id="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control" />
				  </div>
				</div>
				<?php } ?>
				<?php if ($custom_field['type'] == 'time') { ?>
				<div class="form-group<?php echo ($custom_field['required'] ? ' required' : ''); ?> custom-field">
				  <label class="control-label" for="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>"><?php echo $custom_field['name']; ?></label>
				  <div class="">
				    <input type="time" name="shipping_custom_field[<?php echo $custom_field['custom_field_id']; ?>]" value="<?php echo $custom_field['value']; ?>" placeholder="<?php echo str_replace(':','',$custom_field['name']); ?>" id="input-shipping-custom-field<?php echo $custom_field['custom_field_id']; ?>" class="form-control" />
				  </div>
				</div>
				<?php } ?>
				<?php } ?>
			      </div>
			</div>

    <div class="shipping-method" >
        <h2 class="title-checkout tt_uppercase"><i class="icon fa fa-truck color" aria-hidden="true"></i> <?php echo $text_checkout_shipping_method; ?></h2>

        <?php if ($error_warning) { ?>
        <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
        <?php } ?>
        <?php if ($shipping_methods) { ?>
        <p><?php echo $text_shipping_method; ?></p>
        <?php foreach ($shipping_methods as $shipping_method) { ?>
        <h6 class="color"><?php echo $shipping_method['title']; ?></h6>
        <?php if (!$shipping_method['error']) { ?>
        <?php foreach ($shipping_method['quote'] as $quote) { ?>

        <div class="form-group clearfix">
            <label class="radio" for="shipping_method<?php echo $quote['code']; ?>">
                <?php if ($quote['code'] == $code || !$code) { ?>
                <?php $code = $quote['code']; ?>
                <input id="shipping_method<?php echo $quote['code']; ?>" type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>"  title="<?php echo $quote['title']; ?>" checked="checked" />
				<?php } else { ?>
                <input id="shipping_method<?php echo $quote['code']; ?>" type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>"  title="<?php echo $quote['title']; ?>" />
				<?php } ?>
                <span class="outer">
                    <span class="inner"></span>
                </span>
                <?php echo $quote['title']; ?> - <?php echo $quote['text']; ?>
            </label>

        </div>
        <?php } ?>
        <?php } else { ?>
        <div class="alert alert-danger"><?php echo $shipping_method['error']; ?></div>
        <?php } ?>
        <?php } ?>
        <?php } ?>
    </div>
    <?php } ?>
		<div id="warehouse_np" class="form-group col-lg-12" style="padding-left: 0px">
			<label class="control-label" for="input-payment-address-1"><?php echo $entry_address_1; ?></label>
			<select   name="address_1"  id="input-payment-address-1" class="form-control" ></select>
		</div>

    </div>
    <!--================= /col-center =================-->

    <!--================= col-right =================-->
    <div id="pay_method" class="col-md-12 col-lg-4">
        <!--payment-->
        <div class="payment-method">

            <?php if ($error_warning) { ?>
            <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
            <?php } ?>

            <h2 class="title-checkout tt_uppercase">
                <span class="icon icon-account_balance_wallet color"></span>
                <?php echo $text_checkout_payment_method; ?>
            </h2>

            <?php if ($payment_methods) { ?>
            <p><?php echo $text_payment_method; ?></p>
            <?php foreach ($payment_methods as $payment_method) { ?>

            <div class="form-group clearfix">
                <label class="radio">
                    <?php if ($payment_method['code'] == $code || !$code) { ?>
                    <?php $code = $payment_method['code']; ?>
                    <input type="radio" name="payment_method" value="<?php echo $payment_method['code']; ?>" title="<?php echo $payment_method['title']; ?>" checked="checked" />
                    <?php } else { ?>
                    <input type="radio" name="payment_method" value="<?php echo $payment_method['code']; ?>" title="<?php echo $payment_method['title']; ?>" />
                    <?php } ?>

	                            <span class="outer">
	                            	<span class="inner"></span>
	                            </span>
                    <?php echo $payment_method['title']; ?>
                </label>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
        <h6 class="color"><?php echo $text_comments; ?></h6>
        <p>
            <textarea name="comment" rows="3" class="form-control"><?php echo $comment; ?></textarea>
        </p>
        <!--//payment-->

        <div class="your_order" id="your_order_my">
            <?php if ($text_agree) { ?>
            <div class="buttons clearfix" id="terms-id">
                <div class="checkbox-group">
                    <?php if ($agree) { ?>
                    <input id="agree" type="checkbox" name="agree" value="1" checked="checked" />
                    <?php } else { ?>
                    <input id="agree" type="checkbox" name="agree" value="1" />
                    <?php } ?>
                    <label for="agree">
                        <span class="check"></span>
                        <span class="box"></span>
                        <?php echo $text_agree; ?>
                    </label>
                </div>
            </div>
            <?php } else { ?>
				<div class="buttons" hidden>
				  <div class="pull-right">
				    <input type="button" value="<?php echo $button_continue; ?>" id="button-payment-method" data-loading-text="<?php echo $text_loading; ?>" class="btn btn--ys btn--full btn--xl" />
				  </div>
				</div>
            <?php } ?>


            <div class="card card--padding fill-bg payment">
                <?php if ($payment) { ?>
                <p><?php $payment; ?></p>
                <?php } else { ?>
                <table class="table-total-checkout">
                    <tbody>
                    <tr>
                        <th><?php echo $column_total; ?>:</th>
                        <td><?php echo $last_price["text"]; ?></td>
                    </tr>
                    </tbody>
                </table>
                <button class="btn btn--ys btn--full btn--xl" type="button" id="button-register" value="<?php echo $heading_title;?>"><?php echo $heading_title;?> <span class="icon icon-reply icon--flippedX"></span></button>
                <?php } ?>
            </div>



        </div>
    </div>
    <!--================= /col-right =================-->

  </div>
</div>
</div>
<!--//row-->

</div>

<script type="text/javascript"><!--
var error = true;
$ = jQuery.noConflict();

// Login
$(document).delegate('#button-login', 'click', function() {
    $.ajax({
        url: 'index.php?route=checkout/checkout/login_validate',
        type: 'post',
        data: $('.login-form :input'),
        dataType: 'json',
        beforeSend: function() {
        	$('#button-login').button('loading');
		},  
        complete: function() {
            $('#button-login').button('reset');
        },              
        success: function(json) {
            $('.alert, .text-danger').remove();
            
            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                $('.login-form .message').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
           }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    }); 
});

// Register
$(document).delegate('#button-register', 'click', function() 
{
	
	var data = $('.checkout_form input[type=\'text\'], .checkout_form input[type=\'date\'], .checkout_form input[type=\'datetime-local\'], .checkout_form input[type=\'time\'], .checkout_form input[type=\'password\'], .checkout_form input[type=\'hidden\'], .checkout_form input[type=\'checkbox\']:checked, .checkout_form input[type=\'radio\']:checked, .checkout_form textarea, .checkout_form select').serialize();
	data += '&_shipping_method='+ jQuery('.checkout_form input[name=\'shipping_method\']:checked').prop('title') + '&_payment_method=' + jQuery('.checkout_form input[name=\'payment_method\']:checked').prop('title');
	
    $.ajax({
        url: 'index.php?route=checkout/checkout/validate',
        type: 'post',
        data: data,
        dataType: 'json',
        beforeSend: function() {
			$('#button-register').button('loading');
			
		},  
        complete: function() {
            $('#button-register').button('reset');
        },          
        success: function(json) {
            $('.alert, .text-danger').remove();
                        
            if (json['redirect']) {
                location = json['redirect'];                
            } else if (json['error']) {
				error = true;
             
                if (json['error']['warning']) {
                    $('#terms-id').prepend('<div class="alert alert-danger">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                }
                
		for (i in json['error']) {
                    $('[name="' + i + '"]').after('<div class="text-danger">' + json['error'][i] + '</div>');
		}
            } else 
	    {
			error = false;
			jQuery('[name=\'payment_method\']:checked').click();
            }    
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    }); 
});

$('select[name=\'country_id\']').on('change', function() {
	$.ajax({
        url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
			$('select[name=\'country_id\']').after(' <i class="fa fa-spinner fa-spin"></i>');
        },
        complete: function() {
			$('.fa-spinner').remove();
        },          
        success: function(json) {
			if (json['postcode_required'] == '1') {
				$('input[name=\'postcode\']').parent().parent().addClass('required');
			} else {
				$('input[name=\'postcode\']').parent().parent().removeClass('required');
			}
			            
            html = '<option value=""><?php echo $text_select; ?></option>';
            
            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value="' + json['zone'][i]['zone_id'] + '"';
                    
                    if (json['zone'][i]['zone_id'] == '<?php echo $zone_id; ?>') {
                        html += ' selected="selected"';
                    }
    
                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
            }
            
            $('select[name=\'zone_id\']').html(html).val("");
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});


$('select[name=\'shipping_country_id\']').on('change', function() {
	$.ajax({
        url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
			$('select[name=\'country_id\']').after(' <i class="fa fa-spinner fa-spin"></i>');
        },
        complete: function() {
			$('.fa-spinner').remove();
        },          
        success: function(json) {
			if (json['postcode_required'] == '1') {
				$('input[name=\'postcode\']').parent().parent().addClass('required');
			} else {
				$('input[name=\'postcode\']').parent().parent().removeClass('required');
			}
			            
            html = '<option value=""><?php echo $text_select; ?></option>';
            
            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value="' + json['zone'][i]['zone_id'] + '"';
                    
                    if (json['zone'][i]['zone_id'] == '<?php echo $zone_id; ?>') {
                        html += ' selected="selected"';
                    }
    
                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
            }
            
            $('select[name=\'shipping_zone_id\']').html(html).val("");
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});





$('select[name=\'country_id\'], select[name=\'zone_id\'], select[name=\'shipping_country_id\'], select[name=\'shipping_zone_id\'], input[type=\'radio\'][name=\'payment_address\'], input[type=\'radio\'][name=\'shipping_address\']').on('change', function() 
{
	if (this.name == 'contry_id') jQuery("select[name=\'zone_id\']").val("");
	if (this.name == 'shipping_country_id') jQuery("select[name=\'shipping_zone_id\']").val("");
	
    jQuery(".shipping-method").load('index.php?route=checkout/checkout/shipping_method', $('.checkout_form input[type=\'text\'], .checkout_form input[type=\'date\'], .checkout_form input[type=\'datetime-local\'], .checkout_form input[type=\'time\'], .checkout_form input[type=\'password\'], .checkout_form input[type=\'hidden\'], .checkout_form input[type=\'checkbox\']:checked, .checkout_form input[type=\'radio\']:checked,input[name=\'shipping_method\']:first, .checkout_form textarea, .checkout_form select'), function() 
    {
		if (jQuery("input[name=\'shipping_method\']:first").length) 
		{
			jQuery("input[name=\'shipping_method\']:first").attr('checked', 'checked').prop('checked', true).click();
		} else
		{
			jQuery("#cart_table").load('index.php?route=checkout/checkout/cart', $('.checkout_form input[type=\'text\'], .checkout_form input[type=\'date\'], .checkout_form input[type=\'datetime-local\'], .checkout_form input[type=\'time\'], .checkout_form input[type=\'password\'], .checkout_form input[type=\'hidden\'], .checkout_form input[type=\'checkbox\']:checked, .checkout_form input[type=\'radio\']:checked, .checkout_form textarea, .checkout_form select'));	
		}
    });

	jQuery(".payment-method").load('index.php?route=checkout/checkout/payment_method', $('.checkout_form input[type=\'text\'], .checkout_form input[type=\'date\'], .checkout_form input[type=\'datetime-local\'], .checkout_form input[type=\'time\'], .checkout_form input[type=\'password\'], .checkout_form input[type=\'hidden\'], .checkout_form input[type=\'checkbox\']:checked, .checkout_form input[type=\'radio\']:checked,input[name=\'shipping_method\']:first, .checkout_form textarea, .checkout_form select'), function() 
	{
		jQuery("[name=\'payment_method\']").attr("checked").prop('checked', true);
	});
});    


$(document).delegate('input[name=\'shipping_method\']', 'click', function() 
{
    jQuery("#cart_table").load('index.php?route=checkout/checkout/cart', $('.checkout_form input[type=\'text\'], .checkout_form input[type=\'date\'], .checkout_form input[type=\'datetime-local\'], .checkout_form input[type=\'time\'], .checkout_form input[type=\'password\'], .checkout_form input[type=\'hidden\'], .checkout_form input[type=\'checkbox\']:checked, .checkout_form input[type=\'radio\']:checked, .checkout_form textarea, .checkout_form select'));
});  

$('body').delegate('[name=\'payment_method\']','click', function() 
{

	var data = $('.checkout_form input[type=\'text\'], .checkout_form input[type=\'date\'], .checkout_form input[type=\'datetime-local\'], .checkout_form input[type=\'time\'], .checkout_form input[type=\'password\'], .checkout_form input[type=\'hidden\'], .checkout_form input[type=\'checkbox\']:checked, .checkout_form input[type=\'radio\']:checked, .checkout_form textarea, .checkout_form select').serialize();
	data += '&_shipping_method='+ jQuery('.checkout_form input[name=\'shipping_method\']:checked').prop('title') + '&_payment_method=' + jQuery('.checkout_form input[name=\'payment_method\']:checked').prop('title');

	if (!error)
    $.ajax({
        url: 'index.php?route=checkout/checkout/confirm',
        type: 'post',
        data: data,
        success: function(html) 
        {
			jQuery(".payment").html(html);
			
			jQuery("#button-confirm").show();
			
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    }); 
});

$('select[name=\'country_id\']').trigger('change');
jQuery(document).ready(function()
{
	jQuery('input:radio[name=\'payment_method\']:first').attr('checked', true).prop('checked', true);
});


//--></script> 
<script>
	$('#country').hide();
</script>
<script>
    $('select[name=\'zone_id\']').on('change',function(){
        var id = $(this).val();
        var d = {
            new_zone_id: id
        };
        $.ajax({
            url: 'index.php?route=checkout/checkout/getCityList',
            dataType: 'json',
            type: 'post',
            data: d,
            success: function(json) {
                html = '<option value=""><?php echo $text_select; ?></option>';
                for (var i = 0; i < json.length; i++) {
                    html += '<option value="' + json[i]['descriptionRu'] + '"';
                    html += '>' + json[i]['descriptionRu'] + '</option>';
                }

                $('select[name=\'city\']').html(html).val("");
            }
        });

    });
</script>
<script>
    $('select[name=\'city\']').on('change',function(){
		var m_city_id = $(this).val();

		var data = {
			city_id: m_city_id
		};
        $.ajax({
            url: 'index.php?route=checkout/checkout/getWarehousesList',
            dataType: 'json',
            type: 'post',
            data: data,
            success: function(json) {
                console.log(json);

                html = '<option value=""><?php echo $text_select; ?></option>';
                for (var i = 0; i < json.length; i++) {
                    html += '<option value="' + json[i]['descriptionRu'] + '"';
                    html += '>' + json[i]['descriptionRu'] + '</option>';
                }
                $('select[name=\'address_1\']').html(html).val("");
            }
        });
	});
    if($(window).width() > 1800)
    {
       	$('#local_shipping').removeClass('col-lg-4');
        $('#local_shipping').addClass('col-lg-5');
        $('#pay_method').removeClass('col-lg-4');
        $('#pay_method').addClass('col-lg-3');
        $('#warehouse_np').removeClass('col-lg-12');
        $('#warehouse_np').addClass('col-lg-10');
    }
    else
    {
        $('#local_shipping').removeClass('col-lg-5');
        $('#local_shipping').addClass('col-lg-4');
        $('#pay_method').removeClass('col-lg-3');
        $('#pay_method').addClass('col-lg-4');
        $('#warehouse_np').removeClass('col-lg-10');
        $('#warehouse_np').addClass('col-lg-12');
    }
</script>
<?php echo $footer; ?>
