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
    <?php echo $content_top; ?>
    <div class="row">
        <?php echo $column_left; ?>
        <?php if ($column_left && $column_right_blog) { ?>
        <?php $class = 'col-sm-6'; ?>
        <?php } elseif ($column_left || $column_right_blog) { ?>
        <?php $class = 'col-xl-8 col-lg-8 col-md-12'; ?>
        <?php } else { ?>
        <?php $class = 'col-sm-12'; ?>
        <?php } ?>

        <div id="centerColumn" class="<?php echo $class; ?>">

        <?php if (isset($article_info_found)) { ?>

        <div class="title-box">
            <h1 class="text-center text-uppercase title-under"><?php echo $article_info['article_title']; ?></h1>
        </div>
        <div class="post">
            <!-- title post -->
            <div class="post__title_block">
                <div class="pull-left">
                    <div class="time"><?php echo $article_date_modified; ?></div>
                </div>
                <div class="pull-left">
                    <div class="post__meta">
						<span class="post__meta__item">
							<span class="autor">by <b><?php echo $article_info['author_name']; ?></b></span>
						</span>
                        <?php if($article_info['allow_comment']) { ?>
                            <span class="post__meta__item">
								<span class="icon icon-message"></span>
								<a href="<?php echo $author_url; ?>"><?php echo $total_comment; ?></a>
							</span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- /title post -->
            <!-- content post -->

            <p>
                <?php if($image) { ?>
                <img class="img-responsive" src="<?php echo $image; ?>" data-image2x="<?php echo $image2x; ?>" alt="<?php echo $article_info['article_title']; ?>" />
                <?php } ?>


            </p>
            <div class="divider divider--xs"></div>

            <?php echo html_entity_decode($article_info['description'], ENT_QUOTES, 'UTF-8'); ?>
            <!-- /content post -->




            <!--additional info-->
            <?php if($article_additional_description) { ?>
            <?php foreach($article_additional_description as $description) { ?>
            <div class="article-description">
                <?php echo html_entity_decode($description['additional_description'], ENT_QUOTES, 'UTF-8'); ?>
            </div>
            <?php } ?>
            <?php } ?>

            <?php if($products) { ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $text_related_product; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row product-layout">
                        <?php foreach($products as $product) { ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-thumb transition simple-blog-product">

                                <?php if ($product['thumb']) { ?>
                                <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
                                <?php } ?>

                                <div class="caption text-center">
                                    <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>

            <?php if(($simple_blog_related_articles) && ($related_articles)) { ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $text_related_article; ?></h3>
                </div>

                <div class="panel-body">
                    <div class="related-article">
                        <div class="row form-group">
                            <?php foreach($related_articles as $related_article) { ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="name text-center">
                                        <a href="<?php echo $related_article['article_href']; ?>"><?php echo $related_article['article_title']; ?></a>
                                    </div>

                                    <div class="related-article-meta">
                                        <?php echo $text_posted_by; ?> <a href="<?php echo $related_article['author_href']; ?>"><?php echo $related_article['author_name']; ?></a> | <?php echo $text_on; ?> <?php echo $related_article['date_added']; ?> | <?php echo $text_updated; ?> <?php echo $related_article['date_modified']; ?> |
                                    </div>

                                    <div class="image text-center">
                                        <a href="<?php echo $related_article['article_href']; ?>">
                                            <img src="<?php echo $related_article['image']; ?>" alt="<?php echo $related_article['article_title']; ?>" title="<?php echo $related_article['article_title']; ?>" class="img-responsive img-thumbnail" />
                                        </a>
                                    </div>

                                    <div>
                                        <?php if($column_left || $column_right_blog) { ?>
                                        <?php echo utf8_substr(strip_tags(html_entity_decode($related_article['description'], ENT_QUOTES, 'UTF-8')), 0, 100) . '...'; ?>
                                        <?php } else { ?>
                                        <?php echo utf8_substr(strip_tags(html_entity_decode($related_article['description'], ENT_QUOTES, 'UTF-8')), 0, 350) . '...'; ?>
                                        <?php } ?>
                                    </div>

                                    <div class="related-article-button">
                                        <a href="<?php echo $url; ?>" class="btn btn-success"><?php echo $button_continue_reading; ?></a>
                                    </div>

                                    <div class="related-article-footer">
                                        <?php echo $related_article['total_comment']; ?><?php echo $text_comment_on_article; ?> <a href="<?php echo $related_article['article_href']; ?>#comment-section"><?php echo $text_view_comment; ?></a>
                                    </div>

                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>
            <?php } ?>


            <?php if($simple_blog_author_information) { ?>
            <?php if(isset($author_image)) { ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $author_name . " " . $text_author_information; ?></h3>
                </div>

                <div class="panel-body">
                    <div class="author-info">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <img src="<?php echo $author_image; ?>" alt="<?php echo $article_info['article_title']; ?>" style="border: 1px solid #cccccc; padding: 5px; border-radius: 5px;" />
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                            <?php echo $author_description; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php } ?>

        </div>


        <?php } else { ?>
        <h3 class="text-center"><?php echo $text_no_found; ?></h3>
        <?php } ?>


        <div class="article-info">


            <?php if($article_info['allow_comment']) { ?>
            <div class="wrapper">
                <h3 class="pull-left title7"><?php echo $text_related_comment; ?></h3>
            </div>
            <div class="clearfix"></div>


            <div class="comments form-group">
                <div id="comments" class="blog-comment-info">
                    <div id="comment-list"></div>
                    <div id="comment-section"></div>
                    <div class="divider divider-sm"></div>
                    <div class="line-divider"></div>
                    <div class="divider divider-lg"></div>

                        <h3 id="review-title" class="title-aside text-uppercase">
                            <?php echo $text_write_comment; ?>
                            <i class="fa fa-times-circle fa-lg" id="reply-remove" style="display:none; cursor: pointer;" onclick="removeCommentId();"></i>
                        </h3>


                    <input type="hidden" name="blog_article_reply_id" value="0" id="blog-reply-id"/>

                            <div class="form-group">
                                <label for="InputName"><?php echo $entry_name; ?></label>
                                <input id="InputName" type="text" name="name" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="InputComment"><?php echo $entry_review; ?></label>
                                <textarea id="InputComment" name="text" rows="8" class="form-control"></textarea>
                                <span style="font-size: 11px;"><?php echo $text_note; ?></span>
                            </div>

                    <?php if ($site_key) : ?>

                    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script>
                    <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                    </div>
                    <?php endif; ?>

                    <a id="button-comment" class="btn btn-top btn--ys"><?php echo $button_submit; ?></a>
                    <div class="divider divider-lg"></div>

                </div>
            </div>

            <?php } ?>

        </div>



        <?php echo $content_bottom; ?>
        </div>

        <?php echo $column_right_blog; ?>

        </div>
    </div>

    <script type="text/javascript">
		function removeCommentId() {
			$("#blog-reply-id").val(0);
			$("#reply-remove").css('display', 'none');
		}
	</script>

    <script type="text/javascript">
		$('#comment-list .pagination a').delegate('click', function() {
			$('#comment-list').fadeOut('slow');

			$('#comment-list').load(this.href);

			$('#comment-list').fadeIn('slow');

			return false;
		});

		$('#comment-list').load('index.php?route=simple_blog/article/comment&simple_blog_article_id=<?php echo $simple_blog_article_id; ?>');

	</script>

    <script type="text/javascript">
			$('#button-comment').bind('click', function() {
				$.ajax({
					type: 'POST',
					url: 'index.php?route=simple_blog/article/writeComment&simple_blog_article_id=<?php echo $simple_blog_article_id; ?>',
					dataType: 'json',
					data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&reply_id=' + encodeURIComponent($('input[name=\'blog_article_reply_id\']').val()),
					beforeSend: function() {
						$('.success, .warning').remove();
						$('#button-comment').attr('disabled', true);
						//$('#review-title').after('<div class="attention"><img src="catalog/view/theme/default/image/loading.gif" alt="" /> <?php echo $text_wait; ?></div>');

                        /*
                        $('#notification').html('<div class="preloader"><div class="success_ev" style="display: none;"><?php echo $text_wait; ?></div></div>');
                        $('.success_ev').fadeIn('slow');

                        setTimeout(function(){
                            jQuery('.success_ev').fadeOut();
                        },1500)
                        */


                    },
					complete: function() {
						$('#button-comment').attr('disabled', false);
						$('.attention').remove();
					},
					success: function(data) {

                        $('.alert').remove();

						if (data['error']) {
							$('#review-title').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + data['error'] + '</div>');
						}

						if (data['success']) {
							$('#review-title').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + data['success'] + '</div>');

							$('input[name=\'name\']').val('');
							$('textarea[name=\'text\']').val('');
							$("#blog-reply-id").val(0);
							$("#reply-remove").css('display', 'none');

							$('#comment-list').load('index.php?route=simple_blog/article/comment&simple_blog_article_id=<?php echo $simple_blog_article_id; ?>');
						}
					}
				});
			});
		</script>


<?php echo $footer; ?>