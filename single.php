<?php get_header(); ?>
    <div class="main">
        <div id="contents">
        <?php
        if(have_posts()):
            while ( have_posts() ) :
                # code...
                the_post();
        ?>
            <div class="breadcrumb"><a href="<?php echo home_url('/');?>" title="HOME" alt="HOME">HOME</a> &gt; <?php echo get_cat_name($cat->term_id); ?></div>
            <div class="head_pageNavi">
                <div class="hpg_prev">&nbsp;<?php previous_post_link('%link', '&lt;&lt; previw post', TRUE); ?></div>
                <div class="hpg_top"><a href="<?php echo home_url('/');?>" title="top" alt="top">top</a></div>
                <div class="hpg_next"><?php next_post_link('%link', 'next post &gt;&gt;', TRUE); ?></div>
                <span class="clearboth"></span>
            </div>
            <div class="post_head_title">
                <ul>
                    <li class="ph_category"><span>category : </span><a href=""><?php the_category(', ' );?></li>
                    <li class="ph_title"><h2><?php the_title();?></h2></li>
                    <li class="ph_date"><span>update : </span><?php echo get_the_date();?></li>
                </ul>
            </div>
            <div class="page_snsnavi_area">
               <div class="sns_share_btn">
                   <ul>
                       <li>
                       <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
                       </li>
                       <li>
                       <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-count="vertical" data-url="" data-hashtags="LINEスタンプ">ツイート</a>
                       <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                      </li>
                       <li>
                        <div class="g-plusone" data-size="tall"></div>
                       </li>
                       <li>
                       <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
                       </li>
                       <li>
                       <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/linebutton/linebutton_36x60.png" width="36px" height="60px" alt="LINEで送る" /></a>
                      </li>
                      <li>
                          <a data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en"></a>
                            <script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
                      </li>
                   </ul>
                   <span class="clearboth"></span>
               </div>
            </div>
            <div id="article_main_area">
            <div class="page_sponsor_area">
               <div class="psa_g pga_box"></div>
               <div class="psa_r pga_box"></div>
               
            </div>
            <div class="article_post_Area">
                <div id="post_main_area">
                       <?php the_content();?>                 
                        <div class="under_sns_Area">
                               <div class="sns_share_btn">
                               <ul>
                                   <li>
                                   <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
                                   </li>
                                   <li>
                                   <a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-count="vertical" data-url="" data-hashtags="LINEスタンプ">ツイート</a>
                                   <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                  </li>
                                   <li>
                                    <div class="g-plusone" data-size="tall"></div>
                                   </li>
                                   <li>
                                   <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
                                   </li>
                                   <li>
                                   <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/linebutton/linebutton_36x60.png" width="36px" height="60px" alt="LINEで送る" /></a>
                                  </li>
                                  <li>
                                      <a data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en"></a>
                                        <script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
                                  </li>
                               </ul>
                               <span class="clearboth"></span>
                               </div>
                        </div>
                        <div class="under_recommend_Area">
                            <div class="recommend_area_title contents_title">Related Posts</div>
                            <div class="recommend_Area_main">
                                <div class="recommend_post">
                                <?php
                                $tags = wp_get_post_tags($post->ID);
                                if ($tags) {
                                        $tag_ids = array();
                                        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

                                        $args=array(
                                                'tag__in' => $tag_ids,
                                                'post__not_in' => array($post->ID),
                                                'showposts'=>6, // Number of related posts that will be shown.
                                                'caller_get_posts'=>1
                                        );
                                        $my_query = new wp_query($args);
                                        if( $my_query->have_posts() ) {
                                                echo '<ul>';
                                                while ($my_query->have_posts()) {
                                                        $my_query->the_post();
                                                ?>
                                                        <li>
                                                           <a href="<?php the_permalink() ?>" rel="bookmark"  title="<?php the_title_attribute(); ?>" target="_self">

                                                            <?php if(has_post_thumbnail()) : ?>
                                                                <?php the_post_thumbnail('thumbnail',array('class' => 'rc_post_image'));?>
                                                            <?php else: ?>
                                                                <img src="<?php echo get_template_directory_uri(); ?>/<?php bloginfo('stylesheet_directory');?>/images/right_dammy_image.jpg" height="50" width="50">
                                                            <?php endif; ?>
                                                             </a>
                                                              <div class="rc_post_text">
                                                                 <div class="rc_post_date" title=""><?php echo get_the_date();?></div>
                                                                  <a href="" title="" target="_self">
                                                                    <div class="rc_post_title" title=""><h2><?php the_title(); ?></h2></div>
                                                                   </a>
                                                                </div>
                                                            <span class="clearboth"></span>
                                                       </li>
                                                <?php
                                                }
                                                echo '</ul>';
                                        }
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="page_under_sponsor_area">
                           <div class="psa_g u_pga_box"></div>
                           <div class="psa_r u_pga_box"></div>
                            <div class="clearboth"></div>
                        </div>
                        
                        <div class="comments_Area">
                            <div class="comments_area_title contents_title">comments</div>
                            <div class="comments_Area_main">
                                    <ul>
                                        <li>
                                            <div class="comment_box clearfix">
                                              <div class="comment_txt_area clearfix">
                                               <ul>
                                                   <li>name : </li>
                                                   <li>へのへのもへじ</li>
                                                   <li>subtitle : </li>
                                                   <li>なるほどねん</li>
                                                   <li>URL : </li>
                                                   <li>http://ww.ttttt.com</li>
                                                   <li>comment : </li>
                                                   <li>
                                                   <div>
                                                       aおおおおおssssssおおaaaaaお</br>おおおおおおおおおおおa</br>aaaaお</br>おおおおおおおおおおおaaaaa
                                                       <p>おおおおおおおおおおおおaaaaaおおおおおおおおおおおおaaaaaおおおおおおおおおお</p>
                                                       おおおおおおおおおおおおaaaaaおおおおおおおおおおおおaaaaaおおおおおおおおおおおお
                                                       <p>おおおおおおおおおおおおaaaaaおおおおおおおおおおおおaaaaaおおおおおおおおおお</p>おおお
                                                       aaaaaおおおおおおおおおおおおaaaaaおおおおおおおおおおお
                                                   </div>
                                                   </li>
                                               </ul>
                                               </div>
                                               <div class="comment_reply_area">
                                                   <div class="reply_btn"><a href="">Reply</a></div>
                                               </div>
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="comments_post_Area">
                           <?php comments_template(); ?> 
                            <div class="comments_area_title contents_title">post comment</div>
                            <div class="comments_Area_main">
                                    <ul>
                                        <li>
                                            <div class="comment_box clearfix">
                                              <div class="comment_txt_area ">
                                                    <form action="#" name="contact_name" method="post">
                                                        <dl class="contact_area">
                                                            <dt><label for="name"><span class="contact_required">*Subtitle</span> : </label></dt>
                                                            <dt class="post_area"><input type="text" id="name" name="name" required aria-required="true" value="" placeholder="Subtitle..." /></dt>
                                                            <dt><label for="name"><span class="contact_required">*name</span> : </label></dt>
                                                            <dt class="post_area"><input type="text" id="name" name="name" required aria-required="true" value="" placeholder="your name..." /></dt>
                                                            <dt><label for="email"><span class="contact_required">*email</span> :</label></dt>
                                                            <dt class="post_area"><input type="text" id="email" name="email" required aria-required="true" value="" placeholder="E-mail adress..." /></dt>
                                                            <dt><label for="url">URL : </label></dt>
                                                            <dt class="post_area"><input type="text" id="url" name="url" value="" placeholder="URL..." /></dt>
                                                            <dt ><label for="comment"><span class="contact_required">*comment</span> :</label></dt>
                                                            <dt ><textarea name="comment" rows="7" cols="100%" required aria-required="true" placeholder="put your comment..." ></textarea></dt>
                                                            <dd><button><span>Submit / コメントする</span></button></dd>
                                                            <dd><p style="font-size:0.5em;font-weight:bold;">* : 必須項目、Mandatory field</p></dd>
                                                        </dl>
                                                    </form>
                                               </div>
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                </div>
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
            <div class="top_fb_Area">
                <div class="fb_area_title contents_title">Facebook</div>
                <div class="fb_area_main">
                    <div class="fb-like-box" data-href="https://www.facebook.com/lcmchallenge" data-width="710" data-height="220" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                </div>
            </div>
            <div class="head_pageNavi bottom_navi">
                <div class="hpg_prev fpg_prev">
                   <ul>
                       <li class="nav_prev"><?php previous_post_link('%link', '&lt;&lt; previw post', TRUE); ?></li>
                       <li class="nav_link_text_prev nav_link_text"><?php previous_post_link('%link', '%title', TRUE); ?></li>
                   </ul>
                </div>
                <div class="hpg_top fpg_top"><a href="<?php echo home_url('/');?>" title="top" alt="top">top</a></div>
                <div class="hpg_next fpg_next">
                   <ul> 
                       <li class="nav_next"><?php next_post_link('%link', 'next post &gt;&gt;', TRUE); ?></li>
                       <li class="nav_link_text_next nav_link_text"><?php next_post_link('%link', '%title', TRUE); ?></li>
                   </ul>
                </div>
            </div>
            <div class="page_bottom_sponsor_area">
               <div class="psa_g fsps_box"></div>
            </div>
    </div>
            <?php get_sidebar(); ?>
            
</div>
<?php get_footer(); ?>