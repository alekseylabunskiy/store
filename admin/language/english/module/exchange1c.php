<?php
// Heading
$_['heading_title']							= 'Exchange 1C v8.x (Tesla-Chita)';

//////////////////////////////// TABS ////////////////////////////////

$_['text_tab_store']						= 'Store';
$_['text_tab_general']						= 'General';
$_['text_tab_product']						= 'Products';
$_['text_tab_order']						= 'Orders';
$_['text_tab_manual']						= 'Manual processing';
$_['text_tab_developing']					= 'Developing';
$_['text_tab_seo']							= 'SEO';

// Directory
$_['legend_stores']							= 'Linking Catalog in 1C:Enterprise to Store';
$_['desc_stores']							= 'Determines the directory name of 1С what store download. If you do not specify any directory, it loads everything in the store by default.';

// Table catalog
$_['entry_catalog_1c']						= 'Catalog Name in 1C:Enterprise';
$_['entry_store']							= 'Shop';
$_['entry_action']							= 'Action';

$_['legend_auth']							= 'Authorization';

// Auth
$_['entry_username']						= 'Login:';
$_['placeholder_username']					= 'Username';
$_['desc_username']							= 'If you do not specify a login, it executes the exchange without checking the login/password, i.e. at any.';
$_['entry_password']						= 'Password:';
$_['desc_password']							= 'The password is always displayed, for convenience';
$_['placeholder_password']					= 'Enter password';

$_['legend_security']						= 'Security';

// Security
$_['entry_allow_ip']						= 'Allow IPs (Share a line break. If empty, all addresses are allowed.):';
$_['desc_allow_ip']							= 'To specify an IP address line, if empty is allowed with any.';
$_['entry_status']							= 'Status:';
$_['desc_status']							= 'If the module is disabled, the exchange will be free. 1C:Enterprise is disabled when the module responds with an error message that authorization failed!';

$_['legend_other']							= 'Other';

// Other
$_['entry_file_exchange']					= 'Format download data:';
$_['desc_file_exchange']					= 'By default, each file is transmitted separately, that is, the first loaded image, then xml files. When a large number of images loading can be very time-consuming than loading a single file. <br />If the selected format download <strong>ZIP</strong>, the beginning of the exchange of the module reports that 1C wants to take in the ZIP file and the maximum size of an uploaded file, in response 1C creates an archive file one or more if the file size exceeds the maximum allowed for upload to the server.';
$_['text_file_exchange_zip']				= 'One archive *.zip';
$_['text_file_exchange_files']				= 'Each file individually';

// Log
$_['entry_log_level']						= 'Level log write:';
$_['desc_log_level']						= 'For daily sharing, it is recommended to disable, to search for rare bugs to include in the ERROR mode, the DEBUG displays the name of the called function, the texts of SQL queries, and other information within functions.';
$_['text_log_level_0']						= 'Disable';
$_['text_log_level_1']						= 'Errors';
$_['text_log_level_2']						= 'Debug';

$_['entry_flush_log']						= 'Clear log:';
$_['desc_flush_log']						= 'The log is cleared at the beginning of each exchange. The log is cleared when initializing the directory with the http request from 1C:Enterprise';

//////////////////////////////// PRODUCTS ////////////////////////////////

$_['legend_prices']							= 'Linking Price types in 1C:Enterprise to Customer groups';
$_['desc_prices']							= 'Specifies what name the price (UT 10.3) or the model agreement (UT 11.x) of 1C:Enterprise for a group of buyers';

// Table price
$_['entry_config_price_type']				= 'Price type:';
$_['entry_customer_group']					= 'Customer group:';
$_['entry_quantity']						= 'Quantity:';
$_['entry_priority']						= 'Priority:';
$_['text_price_default']					= 'Price for OpenCart';

// Table currency
$_['text_legend_currency']					= 'Linking Currency types';

$_['legend_cleaning_db']					= 'Cleaning database';

// Конвертация валюты
$_['entry_currency_convert']				= 'Currency conversion:';
$_['desc_currency_convert']					= 'Downloadable convert prices in different currencies in the base, at the rate in OpenCart. In this case 1C:Enterprise needs in the name field to upload currency currency code is three-digit letter code in capital letters. If it is not found in the currency table of OpenCart, conversion and the price will be loaded as is.';

// button clean
$_['entry_cleaning_db']						= 'Cleaning database:';
$_['desc_cleaning_db']						= 'Cleans the products, categories, options, features, producers, balances and rates <strong>all stores</strong>!';
$_['entry_button_cleaning_db']				= 'Clean tables';

// Stock
$_['entry_flush_quantity']					= 'Install the balance of goods to 0:';
$_['desc_flush_quantity']					= 'Suppresses the display of goods in the directory of the site, if in the exchange the goods were unloaded and the rest had less than or equal to zero. Works with full or partial unloading. It is not recommended to enable it in the options exchange 1C:Enterprise selection (balance > 0)';

$_['legend_images']							= 'Images';

// Watermark
$_['entry_watermark']						= 'Apply watermark';
$_['desc_watermark']						= 'When sharing a picture of the product is superimposed on this image. The image should be with transparent background, PNG format recommended';

$_['legend_import']							= 'To update the exchange';
$_['legend_quantity']						= 'Quantity';

// update
$_['entry_import_product_name']				= 'Product name:';
$_['entry_import_product_description']		= 'Product description:';
$_['entry_import_categories']				= 'Product categories:';
$_['entry_import_images']					= 'Product images:';
$_['desc_import_product_name']				= 'Updates the name of the product in the exchange, other than new products';
$_['desc_import_product_description']		= 'Updates the description of the product in the exchange, other than new products';
$_['desc_import_categories']				= 'Updates product category, if the category is disabled will remain what was, other than new products';
$_['desc_import_images']					= 'Updates the pictures of the item if disabled, pictures will be what it was, other than new products';
$_['entry_import_product_manufacturer']		= 'The manufacturer in the product:';
$_['desc_import_product_manufacturer']		= 'When exchanging updates of the manufacturer, if disabled, then the manufacturer of the product will not be changed';

// Product name
$_['text_product_name']						= 'Name';
$_['text_product_fullname']					= 'Full name';
$_['text_product_sku']                      = 'Product sku';

// product options
$_['legend_product_options']				= 'Product options';
$_['entry_product_options_mode']			= 'Feature mode:';
$_['desc_product_options_mode']				= 'This setting configures how to download characteristics of the 1C:Enterprise or all the features in one option, either individually (selecting each option), but you want to link options. <strong>Attention! Not always unloads characteristics 1C:Enterprise with additional details!</strong> Before downloading on the website check the.XML file.';
$_['text_product_options_feature']			= 'Properties as one option';
$_['text_product_options_certine']			= 'Certine products';
$_['text_product_options_related']			= 'Related options';

$_['entry_product_options_name']			= 'Feature name:';
$_['desc_product_options_name']				= 'Short name forms the name &quot;Feature&quot; full and will consist of the names of the properties harakteristiki separated by commas. For example, &quot;wheel Size, Color, Purpose, article, Size, Profile, rim, Number of spokes, Material&quot;';
$_['text_product_options_short_name']		= 'Short name';
$_['text_product_options_full_name']		= 'Full name';

$_['entry_product_options_type']			= 'Display option mode:';
$_['desc_product_options_type']				= 'The display mode options on the website';
$_['text_product_options_type_select']		= 'Select';
$_['text_product_options_type_radio']		= 'Radio';

$_['entry_product_options_subtract']		= 'Subtract from stock:';
$_['desc_product_options_subtract']			= 'When placing the order balance will decrease';

// item
$_['entry_parse_only_types_item']			= 'Parse only types of items:';
$_['desc_parse_only_types_item']			= 'This option specifies which <strong>item types</strong> from 1C:Enterprise will be processed, not to be confused with <strong>item types</strong>. The types of items listed just like in 1C:Enterprise in one line, separated by any character. For example: merchandise, supplies, service';

// parent category
$_['entry_fill_parent_cats']				= 'Fill parent categories:';
$_['desc_fill_parent_cats']					= 'Communication fills in the item with all the categories which includes the main. For example, the item is in the category <strong>Category 1->Category 2->Category 3</strong>, the General category will be <strong>category 3</strong> and links will be listed the category <strong>Category 1</strong> and <strong>Category 2</strong>. That is, items on the site will be displayed in all three categories.';

// Stosk status
$_['entry_default_stock_status']			= 'Status in the absence of stock:';
$_['desc_default_stock_status']				= 'An experimental option. Sets the status of the goods, if the remainder is zero.';

// The description in HTML format
$_['entry_description_html']				= 'The description in HTML format';
$_['desc_description_html']					= 'Enable this option to description in HTML format output as HTML, otherwise it will be escaped all the HTML tags, and tags are included &lt;BR&gt; at the end of each data line';

// disable product
$_['entry_product_disable_if_zero'] 		= 'Does not show items on the site if the balance is equal to or less than zero.';
$_['desc_product_disable_if_zero'] 			= 'Suppresses the display of goods in the directory of the site, if in the exchange the goods were unloaded and the rest of it is less than or equal to zero.';

$_['legend_new_product_and_cats']			= 'Import of new products and categories';

// Disable new product
$_['entry_new_product_status_off']			= 'Disable new product';
$_['desc_new_product_status_off']			= 'Suppresses the display of goods in the directory of the website, if it has been added in the exchange process';

// Disable new category
$_['entry_new_category_status_off']			= 'Disable new category';
$_['desc_new_category_status_off']			= 'Suppresses the display of categories in site directory, if it has been added in the exchange process';

// Synchronize new product by
$_['entry_synchronize_new_product_by']		= 'Sync on:';
$_['desc_synchronize_new_product_by'] 		= 'If the item has never been synchronized with the database, it will attempt to sync for the specified field. Carefully check this option if you are sure that the field on which the search is unique. Otherwise, the goods with same field will be simply merged into one.';

// xml_id - id
$_['entry_synchronize_uuid_to_id']			= 'Record code 1C:Enterprise in ID';
$_['desc_synchronize_uuid_to_id']			= 'the <strong>UPDATED! THE FUNCTION IS UNDER DEVELOPMENT!</strong> Now this function reads the product code of the special tag &lt;0000001&gt; only when reading the directory to &lt;Товар&gt;. Code is converted to an integer and is written in the item ID, if the code specified for the category, it is written in the category.';

//////////////////////////////// SEO ////////////////////////////////

$_['legend_seo_product']					= 'Products';
$_['legend_seo_category']					= 'Catergory';
$_['legend_seo_manufacturer']				= 'Manufacturer';

// Head table
$_['label_available_patterns']				= 'Available patterns: ';

// Overwrite
$_['text_seo_overwrite']					= 'Overwrite';
$_['text_seo_if_empty']						= 'If empty field';
$_['text_disable']							= 'Disabled';
$_['text_template']							= 'From template';
$_['text_import']							= 'Import from 1C:Enterprise';

$_['desc_seo_product_overwrite']			= 'Check zapalenie fields are determined only by the SEO URL field in the near future will be converted on checking each field';
$_['desc_seo_category_overwrite']			= 'Check zapalenie fields are determined only by the SEO URL field in the near future will be converted on checking each field';
$_['desc_seo_manufacturer_overwrite']		= 'Check zapalenie fields are determined only by the SEO URL field in the near future will be converted on checking each field';

// Product
$_['entry_seo_product_overwrite']			= 'Overwrite:';
$_['entry_seo_product_seo_url']				= 'SEO URL:';
$_['entry_seo_product_seo_url_template']	= 'Template:';
$_['placeholder_seo_product_url_template']	= 'Template. Sample: {prod_id}.html';
$_['entry_seo_product_meta_title']			= 'Meta Title:';
$_['entry_seo_product_meta_description']	= 'Meta Description:';
$_['placeholder_seo_product_meta_description_template']	= 'Template. Sample: Товар {name}';
$_['entry_seo_product_description']			= 'Description:';
$_['entry_seo_product_meta_keyword']		= 'Meta Keyword:';
$_['entry_seo_product_meta_keyword_template'] = 'Template:';
$_['entry_seo_product_tag']					= 'Tag:';
$_['entry_seo_product_tag_template']		= 'Template:';
$_['entry_seo_product_meta_h1']				= 'Meta H1:';
$_['entry_seo_product_meta_h1_template']	= 'Template:';

// Category
$_['entry_seo_category_overwrite']			= 'Overwrite:';
$_['entry_seo_category_seo_url_template']	= 'Template:';
$_['entry_seo_category_seo_url']			= 'SEO URL:';
$_['entry_seo_category_meta_title']			= 'Meta Title:';
$_['entry_seo_category_meta_description']	= 'Meta Description:';
$_['entry_seo_category_description']		= 'Description:';
$_['entry_seo_category_meta_keyword']		= 'Meta Keyword:';
$_['entry_seo_category_meta_h1']			= 'Meta H1:';
$_['entry_seo_category_meta_h1_template']	= 'Template:';

// Manufacturer
$_['entry_seo_manufacturer_overwrite']				= 'Overwrite:';
$_['entry_seo_manufacturer_seo_url_template']		= 'Template:';
$_['entry_seo_manufacturer_seo_url']				= 'SEO URL:';
$_['entry_seo_manufacturer_meta_title_template']	= 'Шаблон:';
$_['entry_seo_manufacturer_meta_title']				= 'Meta Title:';
$_['entry_seo_manufacturer_meta_description_template']	= 'Template:';
$_['entry_seo_manufacturer_meta_description']		= 'Meta Description:';
$_['entry_seo_manufacturer_meta_keyword_template']	= 'Template:';
$_['entry_seo_manufacturer_meta_keyword']			= 'Meta Keyword:';
$_['entry_seo_manufacturer_meta_h1']				= 'Meta H1:';
$_['entry_seo_manufacturer_meta_h1_template']		= 'Template:';

// Orders
$_['legend_export_orders']					= 'Export Orders';
$_['legend_import_orders']					= 'Import Orders';

$_['text_order_status_to_exchange_not'] 	= "- don not use -";
$_['entry_order_status_to_exchange'] 		= 'Orders status to exchange:';
$_['desc_order_status_to_exchange'] 		= 'Only with this status will be exported orders';
$_['entry_order_status_change']				= 'Uploaded orders status:';
$_['desc_order_status_change'] 				= 'If the export is successful, this status will be set for the uploaded order';
$_['entry_order_status_canceled']			= 'Status of canceled orders:';
$_['desc_order_status_canceled'] 			= 'Status of canceled orders. (NOT USED)';
$_['entry_order_status_completed']			= 'Status of completed orders:';
$_['desc_order_status_completed'] 			= 'The status of completed orders. (NOT USED)';
$_['entry_order_notify']					= 'Notify users of status change:';
$_['entry_order_currency']					= 'Orders currency: (RUR.)';
$_['desc_order_currency'] 					= 'Nazwie currency as specified in 1S exactly, otherwise it will error when downloading orders in 1C:Enterprise.';
$_['placeholder_order_currency'] 			= 'руб.';
$_['desc_order_notify'] 					= 'When changing the status of an order, the buyer will be sent a notification by e-mail';

// Buttons
$_['button_upload']							= 'Upload';
$_['button_add']							= 'Add';
$_['button_download_orders']				= 'Download Orders';

// Footer module
$_['text_homepage']							= 'Module homepage';
$_['source_code']       					= 'Source code in GitHub';
$_['text_source_code']						= 'Source code in GitHub';
$_['text_change']							= 'Modified and support by: Vitaly E. Kirillov (Skype: KirilLoveVE, ICQ: 39927648, Viber: +79144306000, email: vitaly.kirillove@mail.ru)';

// Text
$_['text_module']							= 'Modules';
$_['text_success']							= 'Settings saved!';
$_['text_upload_success']					= 'Import completed';
$_['text_upload_error']						= 'Unknown error';
$_['text_max_filesize']						= 'Max upload size %s MB';
$_['text_empty']							= 'Settings are missing';
$_['text_image_manager'] 					= 'Image Manager';
$_['text_browse']        					= 'Browse Files';
$_['text_clear']         					= 'Clear Image';

$_['entry_upload']							= 'Select file:';
$_['entry_download_orders']					= 'Download orders.xml';
$_['entry_no_image']						= 'Image if empty:';

// Error
$_['error_permission']						= 'Premission denied!';

// Confirm
$_['text_confirm']							= 'You are sure?';

// Help
$_['help_upload']							= 'Takes XML files and ZIP archives';
$_['help_download_orders']					= 'Download orders in XML format';


?>