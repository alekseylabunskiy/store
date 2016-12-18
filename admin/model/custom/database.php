<?php
class ModelCustomDatabase extends Model {
    public function createTables() {

        $this->db->query(
            "CREATE TABLE IF NOT EXISTS ". DB_PREFIX . "testimonials (
  `testimonials_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `bottom` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `show_description` tinyint(1) NOT NULL DEFAULT '0',
  `show_title` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`testimonials_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8"
        );



$this->db->query("
CREATE TABLE IF NOT EXISTS ". DB_PREFIX . "testimonials_description (
  `testimonials_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`testimonials_id`,`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
");


        $this->db->query("
CREATE TABLE IF NOT EXISTS ". DB_PREFIX . "testimonials_related (
  `testimonials_id` int(11) NOT NULL,
  `related_id` int(11) NOT NULL,
  PRIMARY KEY (`testimonials_id`,`related_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
");

        $this->db->query("
CREATE TABLE IF NOT EXISTS ". DB_PREFIX . "testimonials_to_layout (
  `testimonials_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  PRIMARY KEY (`testimonials_id`,`store_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
");

        $this->db->query("
CREATE TABLE IF NOT EXISTS ". DB_PREFIX . "testimonials_to_store (
  `testimonials_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`testimonials_id`,`store_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
");

        $this->db->query("
CREATE TABLE IF NOT EXISTS ". DB_PREFIX . "testimonials_url_alias (
  `url_alias_id` int(11) NOT NULL AUTO_INCREMENT,
  `query` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`url_alias_id`),
  KEY `query` (`query`),
  KEY `keyword` (`keyword`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8
");


    }

    public function makeSettings() {
        $this->db->query("UPDATE ". DB_PREFIX . "category_description SET `html_description` = '&lt;p class=&quot;light-font&quot;&gt;Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.&lt;/p&gt;\r\n &lt;ul class=&quot;marker-list&quot;&gt;\r\n  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;\r\n  &lt;li&gt;Conse ctetur adipisicing&lt;/li&gt;\r\n  &lt;li&gt;Elit sed do eiusmod tempor&lt;/li&gt;\r\n &lt;/ul&gt;\r\n&lt;p class=&quot;light-font&quot;&gt;Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.&lt;/p&gt;' WHERE `category_id` = 20 AND `language_id` = 1;");
        $this->db->query("UPDATE ". DB_PREFIX . "category_description SET `html_description` = '&lt;p class=&quot;light-font&quot;&gt;Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.&lt;/p&gt;\r\n &lt;ul class=&quot;marker-list&quot;&gt;\r\n  &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;\r\n  &lt;li&gt;Conse ctetur adipisicing&lt;/li&gt;\r\n  &lt;li&gt;Elit sed do eiusmod tempor&lt;/li&gt;\r\n &lt;/ul&gt;\r\n&lt;p class=&quot;light-font&quot;&gt;Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labor.&lt;/p&gt;' WHERE `category_id` = 18 AND `language_id` = 1;");

        $this->db->query("UPDATE ". DB_PREFIX . "category_description SET `promo` = '&lt;span class=&quot;badge badge--menu&quot;&gt;NEW&lt;/span&gt;' WHERE `category_id` = 20 AND `language_id` = 1;");
        $this->db->query("UPDATE ". DB_PREFIX . "category_description SET `promo` = '&lt;span class=&quot;badge badge--menu badge--color&quot;&gt;SALE&lt;/span&gt;' WHERE `category_id` = 18 AND `language_id` = 1;");
        $this->db->query("UPDATE  ". DB_PREFIX . "category SET  `ctop` =  '1' WHERE  `category_id` =20;");
        $this->db->query("UPDATE  ". DB_PREFIX . "category SET  `vtop` =  '1' WHERE  `category_id` =20;");
        $this->db->query("UPDATE  ". DB_PREFIX . "category SET  `ctop` =  '1' WHERE  `category_id` =18;");


        $this->db->query("UPDATE ". DB_PREFIX . "category_description SET `html_bottom` = '&lt;div class=&quot;row&quot;&gt;&lt;div class=&quot;col-sm-6&quot;&gt; &lt;a href=&quot;#&quot; class=&quot;discolor-hover&quot;&gt;&lt;img class=&quot;img-responsive&quot; src=&quot;image/catalog/custom/banner-megamenu-01.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt; &lt;/div&gt;&lt;div class=&quot;col-sm-6&quot;&gt; &lt;a href=&quot;#&quot; class=&quot;discolor-hover&quot;&gt;&lt;img class=&quot;img-responsive&quot; src=&quot;image/catalog/custom/banner-megamenu-02.jpg&quot; alt=&quot;&quot;&gt;&lt;/a&gt; &lt;/div&gt;&lt;/div&gt;' WHERE `category_id` = 20 AND `language_id` = 1;");
        $this->db->query("UPDATE ". DB_PREFIX . "category_description SET `html_bottom` = '&lt;div class=&quot;hor-line&quot;&gt;&lt;/div&gt;\r\n&lt;ul class=&quot;list-inline brands-list&quot;&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b01.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b02.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b03.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b04.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b05.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b06.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b07.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b08.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b09.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;li&gt;&lt;a href=&quot;index.php&quot;&gt;&lt;img src=&quot;image/catalog/brands/top/b10.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/li&gt;\r\n&lt;/ul&gt;' WHERE `category_id` = 18 AND `language_id` = 1;");

        $this->db->query("UPDATE ". DB_PREFIX . "category_description SET `html_bottom` = '&lt;img class=&quot;img-responsive&quot; src=&quot;image/catalog/custom/mens-category-1.jpg&quot; alt=&quot;&quot;&gt;' WHERE `category_id` = 46 AND `language_id` = 1;");
        $this->db->query("UPDATE ". DB_PREFIX . "category_description SET `html_bottom` = '&lt;img class=&quot;img-responsive&quot; src=&quot;image/catalog/custom/mens-category-2.jpg&quot; alt=&quot;&quot;&gt;' WHERE `category_id` = 45 AND `language_id` = 1;");

        $this->db->query("UPDATE ". DB_PREFIX . "product_description SET `short_description` = 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.';");
        $this->db->query("UPDATE ". DB_PREFIX . "product_description SET `video1` = 'https://www.youtube.com/watch?v=jaWvdJBVBSc';");

        $this->db->query("UPDATE ". DB_PREFIX . "product_description SET `tab_title` = 'CUSTOM TAB';");
        $this->db->query("UPDATE ". DB_PREFIX . "product_description SET `html_product_tab` = '&lt;div&gt;\r\n    &lt;h5&gt;&lt;strong class=&quot;color text-uppercase&quot;&gt;Lorem ipsum dolor sit amet conse ctetur adipisicing elit&lt;/strong&gt;&lt;/h5&gt;\r\n    &lt;div class=&quot;divider divider--xs&quot;&gt;&lt;/div&gt;\r\n    &lt;p&gt;Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  orem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.&lt;/p&gt;\r\n    &lt;ul class=&quot;marker-list-circle&quot;&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Lorem ipsum dolor sit amet&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Conse ctetur adipisicing&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Elit sed do eiusmod tempor&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Incididunt ut laborev&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Et dolore magna aliqua&lt;/span&gt;&lt;/li&gt;\r\n        &lt;li&gt;&lt;span class=&quot;text-uppercase&quot;&gt;Ut enim ad min&lt;/span&gt;&lt;/li&gt;\r\n    &lt;/ul&gt;\r\n&lt;/div&gt;';");

        $this->db->query("UPDATE ". DB_PREFIX . "product_description SET `html_product_right` = '&lt;div class=&quot;custom_right_block&quot;&gt;\n    &lt;div class=&quot;delivery-banner&quot; onclick=&quot;window.location.href = ''#''&quot;&gt;\n        &lt;div class=&quot;delivery-banner__icon&quot;&gt;&lt;span class=&quot;icon-redeem&quot;&gt;&lt;/span&gt;&lt;/div&gt;\n        &lt;div class=&quot;delivery-banner__text&quot;&gt;\n            &lt;h3&gt;SPECIAL OFFER 1+1=3&lt;/h3&gt;\n            &lt;h5&gt;Get a gift!&lt;/h5&gt;\n            &lt;p&gt;Donec eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis.&lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;delivery-banner&quot; onclick=&quot;window.location.href = ''#''&quot;&gt;\n        &lt;div class=&quot;delivery-banner__icon&quot;&gt;&lt;span class=&quot;icon-card_membership&quot;&gt;&lt;/span&gt;&lt;/div&gt;\n        &lt;div class=&quot;delivery-banner__text&quot;&gt;\n            &lt;h3&gt;FREE REWARD CARD&lt;/h3&gt;\n            &lt;h5&gt;Worth 10$, 50$, 100$&lt;/h5&gt;\n            &lt;p&gt;Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. &lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;delivery-banner&quot; onclick=&quot;window.location.href = ''#''&quot;&gt;\n        &lt;div class=&quot;delivery-banner__icon&quot;&gt;&lt;span class=&quot;icon-local_shipping&quot;&gt;&lt;/span&gt;&lt;/div&gt;\n        &lt;div class=&quot;delivery-banner__text&quot;&gt;\n            &lt;h3&gt;Free Shipping&lt;/h3&gt;\n            &lt;h5&gt;on orders over $100&lt;/h5&gt;\n            &lt;p&gt;Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. &lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;delivery-banner&quot; onclick=&quot;window.location.href = ''#''&quot;&gt;\n        &lt;div class=&quot;delivery-banner__icon&quot;&gt;&lt;span class=&quot;icon-replay_5&quot;&gt;&lt;/span&gt;&lt;/div&gt;\n        &lt;div class=&quot;delivery-banner__text&quot;&gt;\n            &lt;h3&gt;Order Return&lt;/h3&gt;\n            &lt;h5&gt;Returns within 5 days&lt;/h5&gt;\n            &lt;p&gt;Eros tellus, scelerisque nec, rhoncus eget, laoreet sit amet, nunc. Ut sit amet turpis. &lt;/p&gt;\n        &lt;/div&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;divider-line&quot;&gt;&lt;/div&gt;\n\n&lt;/div&gt;\n';");

        $this->db->query("UPDATE ". DB_PREFIX . "product SET `mainsize` = 'big' WHERE `product_id` = 47;");
        $this->db->query("UPDATE ". DB_PREFIX . "product SET `mainsize` = 'big' WHERE `product_id` = 30;");
        $this->db->query("UPDATE ". DB_PREFIX . "product SET `mainsize` = 'default' WHERE `product_id` = 42;");
        $this->db->query("UPDATE ". DB_PREFIX . "product SET `mainsize` = 'small' WHERE `product_id` = 43;");

        $this->db->query("UPDATE ". DB_PREFIX . "product_description SET `description` = '&lt;div class=&quot;big_description_wrapper&quot;&gt;\r\n    &lt;div class=&quot;content offset-top-0  fullwidth container-no-col-indent&quot;&gt;\r\n        &lt;div class=&quot;row&quot;&gt;\r\n            &lt;div class=&quot;col-sm-12&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_04.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n    &lt;div class=&quot;divider divider--lg visible-sm visible-xs&quot;&gt;&lt;/div&gt;\r\n    &lt;div class=&quot;container-fluid container-no-col-indent&quot;&gt;\r\n        &lt;div class=&quot;row&quot;&gt;\r\n            &lt;div class=&quot;pull-left col-xs-12 col-sm-12 col-md-6&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_05.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;pull-right col-xs-12 col-sm-12 col-md-6&quot;&gt;\r\n                &lt;div class=&quot;product-data-big&quot;&gt;\r\n                    &lt;h5&gt;Denim shorts by ASOS Collection&lt;/h5&gt;\r\n                    &lt;ul class=&quot;simple-list&quot;&gt;\r\n                        &lt;li&gt;Non-stretch denim &lt;/li&gt;\r\n                        &lt;li&gt;Mid wash&lt;/li&gt;\r\n                        &lt;li&gt;High-rise waist&lt;/li&gt;\r\n                        &lt;li&gt;Zip fly &lt;/li&gt;\r\n                        &lt;li&gt;Ripped detail &lt;/li&gt;\r\n                        &lt;li&gt;Frayed hem&lt;/li&gt;\r\n                        &lt;li&gt;Regular fit - true to size &lt;/li&gt;\r\n                        &lt;li&gt;Machine wash &lt;/li&gt;\r\n                        &lt;li&gt;100% Cotton &lt;/li&gt;\r\n                        &lt;li&gt;Our model wears a UK 8/EU 36/US 4 and is 175cm/5''9&quot; tall&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n\r\n                &lt;/div&gt;\r\n            &lt;/div&gt;\r\n\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n    &lt;div class=&quot;container-fluid container-no-col-indent&quot;&gt;\r\n        &lt;div class=&quot;row&quot;&gt;\r\n            &lt;div class=&quot;pull-right col-xs-12 col-sm-12 col-md-6&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_06.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;pull-left col-xs-12 col-sm-12 col-md-6&quot;&gt;\r\n                &lt;div class=&quot;product-data-big&quot;&gt;\r\n                    &lt;h5&gt;About&lt;/h5&gt;\r\n                    &lt;ul class=&quot;simple-list&quot;&gt;\r\n                        &lt;li&gt;Main: 100% Cotton.&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n                    &lt;h5&gt;Size &amp;amp; Fit&lt;/h5&gt;\r\n                    &lt;ul class=&quot;simple-list&quot;&gt;\r\n                        &lt;li&gt;Model wears: UK 8/ EU 36/ US 4&lt;/li&gt;\r\n                        &lt;li&gt;Model''s height: 175 cm/5''9”&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n                    &lt;h5&gt;Look after Me&lt;/h5&gt;\r\n                    &lt;ul class=&quot;simple-list&quot;&gt;\r\n                        &lt;li&gt;Machine Wash According To Instructions On Care Label&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n                &lt;/div&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n    &lt;div class=&quot;fill-bg-custom&quot;&gt;\r\n        &lt;div class=&quot;container&quot;&gt;\r\n            &lt;div class=&quot;row&quot;&gt;\r\n                &lt;div class=&quot;col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0 text-center&quot;&gt;\r\n                    &lt;div class=&quot;banner-all-width text-center color-white&quot;&gt;\r\n                        &lt;h3 class=&quot;title font50&quot;&gt;ASOS Collection&lt;/h3&gt;\r\n                        &lt;p&gt;\r\n                            Directional, exciting and diverse, the ASOS Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion’s most covetable trends; providing you with\r\n                            a cutting edge wardrobe season upon season.\r\n                        &lt;/p&gt;\r\n                    &lt;/div&gt;\r\n                &lt;/div&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n    &lt;div class=&quot;container-fluid container-no-col-indent&quot;&gt;\r\n        &lt;div class=&quot;row&quot;&gt;\r\n            &lt;div class=&quot;col-xs-6&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_07.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;col-xs-6&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_08.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n\r\n&lt;/div&gt;\r\n'  WHERE `product_id` = 47 AND `language_id` = 1;");
        $this->db->query("UPDATE ". DB_PREFIX . "product_description SET `description` = '&lt;div class=&quot;big_description_wrapper&quot;&gt;\r\n    &lt;div class=&quot;content offset-top-0  fullwidth container-no-col-indent&quot;&gt;\r\n        &lt;div class=&quot;row&quot;&gt;\r\n            &lt;div class=&quot;col-sm-12&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_04.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n    &lt;div class=&quot;divider divider--lg visible-sm visible-xs&quot;&gt;&lt;/div&gt;\r\n    &lt;div class=&quot;container-fluid container-no-col-indent&quot;&gt;\r\n        &lt;div class=&quot;row&quot;&gt;\r\n            &lt;div class=&quot;pull-left col-xs-12 col-sm-12 col-md-6&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_05.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;pull-right col-xs-12 col-sm-12 col-md-6&quot;&gt;\r\n                &lt;div class=&quot;product-data-big&quot;&gt;\r\n                    &lt;h5&gt;Denim shorts by ASOS Collection&lt;/h5&gt;\r\n                    &lt;ul class=&quot;simple-list&quot;&gt;\r\n                        &lt;li&gt;Non-stretch denim &lt;/li&gt;\r\n                        &lt;li&gt;Mid wash&lt;/li&gt;\r\n                        &lt;li&gt;High-rise waist&lt;/li&gt;\r\n                        &lt;li&gt;Zip fly &lt;/li&gt;\r\n                        &lt;li&gt;Ripped detail &lt;/li&gt;\r\n                        &lt;li&gt;Frayed hem&lt;/li&gt;\r\n                        &lt;li&gt;Regular fit - true to size &lt;/li&gt;\r\n                        &lt;li&gt;Machine wash &lt;/li&gt;\r\n                        &lt;li&gt;100% Cotton &lt;/li&gt;\r\n                        &lt;li&gt;Our model wears a UK 8/EU 36/US 4 and is 175cm/5''9&quot; tall&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n\r\n                &lt;/div&gt;\r\n            &lt;/div&gt;\r\n\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n    &lt;div class=&quot;container-fluid container-no-col-indent&quot;&gt;\r\n        &lt;div class=&quot;row&quot;&gt;\r\n            &lt;div class=&quot;pull-right col-xs-12 col-sm-12 col-md-6&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_06.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;pull-left col-xs-12 col-sm-12 col-md-6&quot;&gt;\r\n                &lt;div class=&quot;product-data-big&quot;&gt;\r\n                    &lt;h5&gt;About&lt;/h5&gt;\r\n                    &lt;ul class=&quot;simple-list&quot;&gt;\r\n                        &lt;li&gt;Main: 100% Cotton.&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n                    &lt;h5&gt;Size &amp;amp; Fit&lt;/h5&gt;\r\n                    &lt;ul class=&quot;simple-list&quot;&gt;\r\n                        &lt;li&gt;Model wears: UK 8/ EU 36/ US 4&lt;/li&gt;\r\n                        &lt;li&gt;Model''s height: 175 cm/5''9”&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n                    &lt;h5&gt;Look after Me&lt;/h5&gt;\r\n                    &lt;ul class=&quot;simple-list&quot;&gt;\r\n                        &lt;li&gt;Machine Wash According To Instructions On Care Label&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n                &lt;/div&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n    &lt;div class=&quot;fill-bg-custom&quot;&gt;\r\n        &lt;div class=&quot;container&quot;&gt;\r\n            &lt;div class=&quot;row&quot;&gt;\r\n                &lt;div class=&quot;col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0 text-center&quot;&gt;\r\n                    &lt;div class=&quot;banner-all-width text-center color-white&quot;&gt;\r\n                        &lt;h3 class=&quot;title font50&quot;&gt;ASOS Collection&lt;/h3&gt;\r\n                        &lt;p&gt;\r\n                            Directional, exciting and diverse, the ASOS Collection makes and breaks the fashion rules. Scouring the globe for inspiration, our London based Design Team is inspired by fashion’s most covetable trends; providing you with\r\n                            a cutting edge wardrobe season upon season.\r\n                        &lt;/p&gt;\r\n                    &lt;/div&gt;\r\n                &lt;/div&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n    &lt;div class=&quot;container-fluid container-no-col-indent&quot;&gt;\r\n        &lt;div class=&quot;row&quot;&gt;\r\n            &lt;div class=&quot;col-xs-6&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_07.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n            &lt;div class=&quot;col-xs-6&quot;&gt;\r\n                &lt;img src=&quot;image/catalog/custom/product_big_img_08.jpg&quot; class=&quot;img-responsive&quot; alt=&quot;&quot;&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt;\r\n    &lt;/div&gt;\r\n\r\n&lt;/div&gt;\r\n'  WHERE `product_id` = 30 AND `language_id` = 1;");




    }

    public function insertTestimonials() {
        $this->db->query("

        INSERT INTO ". DB_PREFIX . "testimonials VALUES
(1, 'catalog/custom/slider-blog-img01.jpg', 0, 0, 1, 1, 1),
(2, 'catalog/custom/slider-blog-img02.jpg', 0, 0, 1, 1, 1),
(3, 'catalog/custom/slider-blog-img03.jpg', 0, 0, 1, 1, 1);
");


        $this->db->query("

        INSERT INTO ". DB_PREFIX . "testimonials_description VALUES
(1, 1, 'Eleanor  &lt;em&gt;&amp;nbsp;-&amp;nbsp;  designer&lt;/em&gt;', '&lt;p&gt;Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.&lt;/p&gt;', '', 'testimonials1', '', ''),
(2, 1, 'Piper  &lt;em&gt;&amp;nbsp;-&amp;nbsp;  designer&lt;/em&gt;', '&lt;p&gt;Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.&lt;/p&gt;', '', 'testimonials2', '', ''),
(3, 1, 'Mark  &lt;em&gt;&amp;nbsp;-&amp;nbsp;  designer&lt;/em&gt;', '&lt;p&gt;Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.&lt;/p&gt;', '', 'testimonials3', '', '');

");


        $this->db->query("

        INSERT INTO ". DB_PREFIX . "testimonials_to_layout VALUES
(1, 0, 0),
(2, 0, 0),
(3, 0, 0);
");

        $this->db->query("

        INSERT INTO ". DB_PREFIX . "testimonials_to_store VALUES
(1, 0),
(2, 0),
(3, 0);
");

        $this->db->query("

        INSERT INTO ". DB_PREFIX . "testimonials_url_alias VALUES
(1, 'tltpath=blogs', 'blogs'),
(2, 'testimonials_id=1', 'testimonials1'),
(3, 'testimonials_id=2', 'testimonials2'),
(4, 'testimonials_id=3', 'testimonials3');
");







    }


}