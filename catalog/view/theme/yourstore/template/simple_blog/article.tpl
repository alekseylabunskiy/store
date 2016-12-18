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

<?php if (!isset($description) || $description == '') : ?>
<div class="container">
        <div class="row">
<?php endif; ?>

            <div class="blog-layout">
                <?php echo $column_left; ?>
                <?php if ($column_left && $right_blog) { ?>
                <?php $class = 'col-sm-6'; ?>
                <?php } elseif ($column_left || $right_blog) { ?>
                <?php $class = 'col-xl-8 col-lg-8 col-md-12'; ?>
                <?php } else { ?>
                <?php $class = ''; ?>
                <?php } ?>

                <div class="<?php echo $class; ?>">
                <?php echo $content_top; ?>

                <div class="title-box">
                    <h1 class="text-center text-uppercase title-under"><?php echo $heading_title; ?></h1>
                </div>
                        <?php if (isset($description) && $description != '') {echo $description; }  ?>


                    <?php if ($articles) { ?>

                        <?php foreach($articles as $article) : ?>
                            <?php if (isset($post_columns) && $post_columns != 1) : ?>
                                <div class="<?php echo ($post_columns == 2 ? 'col-xl-6 col-lg-6 col-md-6 col-sm-12' : 'col-xl-4 col-lg-4 col-md-4 col-sm-6'); ?>">
                            <?php endif; ?>

                                    <div class="post">
                                        <div class="post__title_block">
                                            <figure>
                                                <a href="<?php echo $article['href']; ?>">
                                                    <?php if($article['image']) { ?>
                                                        <img src="<?php echo $article['image']; ?>" class="product-retina" data-image2x="<?php echo $article['image2x']; ?>" alt="<?php echo $article['article_title']; ?>" />
                                                    <?php } ?>
                                                </a>
                                            </figure>
                                            <div class="pull-left">
                                                <div class="time">
                                                    <?php echo $article['date_added']; ?>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <h2 class="post__title text-uppercase"><a href="<?php echo $article['href']; ?>"><?php echo ucwords($article['article_title']); ?></a></h2>
                                                <div class="post__meta">
											<span class="post__meta__item">
												<span class="autor">by <b><?php echo $article['author_name']; ?></b></span>
											</span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php echo $article['description']; ?>
                                        <div class="post__meta">
									<span class="post__meta__item">
                                        <?php if($article['allow_comment']) { ?>
                                        <span class="icon icon-message"></span>
                                        <a href="<?php echo $article['comment_href']; ?>#comment-section"><?php echo $article['total_comment']; ?></a>
                                        <?php } ?>
									</span>

                                        </div>

                                    </div>

                                    <?php if (isset($post_columns) && $post_columns != 1) : ?>
                                 </div>
                            <?php endif; ?>


                        <?php endforeach; ?>

                    <div class="row">
                        <div class="divider divider-lg"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left"><?php echo $pagination; ?></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right"><?php echo $results; ?></div>
                    </div>

                    <?php } elseif (!isset($description) || $description == '') { ?>
                    <div class="no_posts">
                        <h3 class="text-center"><?php echo $text_no_found; ?></h3>
                    </div>
                    <?php } ?>


                    <?php echo $content_bottom; ?>
                </div>
                <div class="divider divider--lg visible-md visible-sm visible-xs"></div>
                <?php echo $right_blog; ?>

            </div>

            <?php if (!isset($description) || $description == '') : ?>

        </div>
    </div>
<?php endif; ?>
<?php echo $footer; ?>