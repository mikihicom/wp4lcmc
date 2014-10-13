<?php get_header(); ?>
    <div class="main">
        <div id="contents">
            <div class="top_collection_Area">
                <div class="top_collection_Area_title contents_title">Challemging Sticker(Stamps) Collections</div>
                <div class="pickup_collection_area">
                    <div class="sticker_box">
                        
                        <div class="top_sticker_image">
                        <div class="new_badge">new</div>
                        <div class="collection_btn"><a href="#"></a></div>
                        <img src="<?php bloginfo('stylesheet_directory');?>/images/maro_pug.png" width="170" height="170" alt="collection_btn" border="0">
                        <div class="top_sticker_state_sale">Get Now!!</div>
                        </div>
                        
                        <div class="top_sticker_name">Maro Pug!</div>
                        <div class="top_sticker_detail">
                            <div class="detail_link_btn"><a href="">detail &gt;&gt;</a></div>
                        </div>
                    </div>
                    <div class="sticker_box">
                        <div class="top_sticker_image">
                        <img src="<?php bloginfo('stylesheet_directory');?>/images/maro_bear.png" width="170" height="170" alt="collection_btn" border="0">
                        <div class="top_sticker_state_ue">under examination</div>
                        </div>
                        <div class="top_sticker_name">Maro Bear</div>
                        <div class="top_sticker_detail">
                            <div class="detail_link_btn"><a href="">detail &gt;&gt;</a></div>
                        </div>
                    </div>
                    <div class="sticker_box">
                        <div class="top_sticker_image">
                        <img src="<?php bloginfo('stylesheet_directory');?>/images/soymilk.png" width="170" height="170" alt="collection_btn" border="0">
                        <div class="top_sticker_state_np">Now Planning</div>
                        </div>
                        <div class="top_sticker_name">Soy milk</div>
                        <div class="top_sticker_detail">
                            <div class="detail_link_btn"><a href="">detail &gt;&gt;</a></div>
                        </div>
                    </div>
                    <div class="sticker_box">
                        <div class="top_sticker_image">
                        <img src="<?php bloginfo('stylesheet_directory');?>/images/sugerglider.png" width="170" height="170" alt="collection_btn" border="0">
                        <div class="top_sticker_state_np">Now Planning</div>
                        </div>
                        <div class="top_sticker_name">Suger Glider</div>
                        <div class="top_sticker_detail">
                            <div class="detail_link_btn"><a href="">detail &gt;&gt;</a></div>
                        </div>
                    </div>
                </div>
                <div class="cg_link">
                    <div class="cg_andmore"><a href="">and more...</a></div>
                </div>
            </div>
            <div class="new_post_Area">
               <div class="post_area_title contents_title">Recent post</div>
               <div id="post_area">
                         <?php
                            if(have_posts()):
                                while ( have_posts() ) :
                                    # code...
                                    the_post();
                            ?>
                    <a href="<?php the_permalink(); ?>">
                    <div class="post">
                        <ul>
                            <li class="post_catch_image">
                            <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(array(350,100));?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/<?php bloginfo('stylesheet_directory');?>/images/noimage.png" height="100" width="100">
                            <?php endif; ?>
                            </li>
                            <li class="post_date"><span class="update">update : </span><?php echo get_the_date();?></li>
                            <li class="post_title"><h2><?php the_title();?></h2></li>
                            <li class="post_subTitle"><h3>ついに「まろパグ」の販売が開始されました！</h3></li>
                            <li class="post_readmore">Read more &gt;&gt;</li>
                        </ul>
                        </a>
                    </div>
                    <?php
                        endwhile;
                        else:
                    ?>

                    <p>記事はありません</p>

                    <?php
                        endif;
                    ?>
                </div>
                <div class="clearboth"></div>
                   <div class="postNav_area">
                    <div class="nav_older nav_btn"><a href="<?php previous_posts_link(); ?>">&lt;&lt; Older Posts</a></div>
                    <div class="nav_newer nav_btn"><a href="<?php next_posts_link(); ?>">Newer Posts&gt;&gt;</a></div>
                </div>
                <div class="clearboth"></div>
            </div>
            <div class="top_twflw_Area ">
                <div class="twflw_title contents_title">Follow Stickers(Stamps)</div>
                <div class="twflw_main">
                    <div class="twflw_user_image">
                        <ul>
                            <li><a href=""><img src="http://www.paper-glasses.com/api/twipi/mameko_729/bigger " class="grow" ></a></li>
                            <li><a href=""><img src="http://www.paper-glasses.com/api/twipi/usa23luv/bigger" class="grow"></a></li>
                            <li><a href=""><img src="http://www.paper-glasses.com/api/twipi/madeleine_twi/bigger" class="grow" alt="まどれーぬ@LINEスタンプ審査中"></a></li>
                            <li><a href=""><img src="http://www.paper-glasses.com/api/twipi/a2co8/bigger" class="grow"></a></li>
                            <li><a href=""><img src="http://www.paper-glasses.com/api/twipi/zoro8toshi/bigger" class="grow"></a></li>
                            <li><a href=""><img src="http://www.paper-glasses.com/api/twipi/taipei_koala/bigger" class="grow"></a></li>
                            <li><a href=""><img src="http://www.paper-glasses.com/api/twipi/wadashi/bigger" class="grow"></a></li>
                            <li><a href="">more...</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="top_fb_Area">
                <div class="fb_area_title contents_title">Facebook</div>
                    <div class="fb_area_main">
                        <div class="fb-like-box" data-href="https://www.facebook.com/lcmchallenge" data-width="710" data-height="220" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                    </div>
            </div>
        </div>
                  <?php get_sidebar(); ?>
            
             </div>
<?php get_footer(); ?>