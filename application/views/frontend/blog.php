<?php   
$data['css'] = $css;
$this->load->view('frontend/layout/header' ,$data);

        // $timestamp = strtotime($post->modified_at);
        // $date = date('m', $timestamp);
        // $time = date('Gi.s', $timestamp);

  

        function get_month_name($num){
             if($num == '01'){
                return 'جنوری';
             }elseif ($num == '02') {
                return 'فروری';
             }elseif ($num == '03') {
                return 'مارچ';
             }elseif ($num == '04') {
                return 'اپریل';
             }elseif ($num == '05') {
                return 'مئ';
             }elseif ($num == '06') {
                return 'جون';
             }elseif ($num == '07') {
                return 'جولائ';
             }elseif ($num == '08') {
                return 'جولائ';
             }elseif ($num == '09') {
                return 'ستمبر';
             }elseif ($num == '10') {
                return 'اکتوبر';
             }elseif ($num == '11') {
                return 'نومبر ';
             }elseif ($num == '12') {
                return 'دسمبر';
             }
        }

?>

    <section class="section1_bg_categories">
        <div class="overlay">
        </div>
        <div class="bg_main">
            <div class="bg_img"><img src="../Assets/Images/IMG-20210312-WA0003.jpg" alt=""></div>
            <div class="center_text_categories">
                <h1>بلاگ
                </h1>
            </div>
        </div>
    </section>
    <section class="section2_categoeries">
        <div class="container">
             <div class="row justify-content-md-center">
                <!-- <div class="center_categories"> -->
                <div class="col-sm-4 d-flex justify-content-center" style="margin-top: 15rem !important; ">
                <div class="right">
                    <div class="recipes_items_sidebar">
                        <div class="top_recipes">
                            <a href="post.html"><img src="../Assets/Images/IMG-20210312-WA0003.jpg" alt=""></a>
                        </div>
                        <div class="bottom_recipes">
                            <h4>ہیلو! میں سہیل ہوں</h4>
                            <p>یوٹبر اور فوٹو گرافر۔ فطرت اور صحتمند کھانا ، اور تاریخ سے محبت کرتا ہے۔ ایک چھوٹا سا "ہیلو!" کہنے کے لئے آنے سے نہیں ہچکچاتے</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <a href="Pages/blog.html" class="btn_recipes">اورجانیے</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="left">
                    <div class="heading_left">
                        <h1><?= $categories1[0]->category ?></h1>
                        <img src="../Assets/Images/bar_title.svg" alt="">
                    </div>
                    <div class="left_main">
                    <?php if($posts1){ ?>
                                <?php foreach($posts1 as $post1): ?>
                                    <div><a href="<?= base_url() ?>/posts/<?= $post1[0]->route_name ?>"><img src="<?= base_url('uploads/admin') ?>/<?= $post1[0]->image?>" alt=""></a>
                                        <h1><?=$post1[0]->title ?>
                                        </h1>
                                      
                                        <p><?php $str = word_limiter($post1[0]->body , 40);
                                            echo   strip_tags( $str) ; ?></p>
                                        <a href="<?= base_url() ?>/posts/<?= $post1[0]->route_name ?>" class="read_more">مزید پڑھیں
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php }else{ ?>
                            <?php } ?>
                        
                    </div>
                </div>
                </div>
            </div>
             <div class="row justify-content-md-center">
                <!-- <div class="center_categories"> -->
                <div class="col-sm-4 d-flex justify-content-center" style="margin-top: 15rem !important; ">
           
                <div class="right">
                    <div class="recipes_items_sidebar">
                        <div class="sidebar_recent_post">
                        <div class="heading_sidebar_2"><span>تازہ ترین پوسٹ
                                </span></div>
                            <?php foreach($recent_posts as $recent_post): ?>    
                            <a href="<?= base_url() ?>/posts/<?= $recent_post->route_name ?>">
                                <div class="sidebar-items">
                                    <div class="left_recent_sidebar"><a href="post.html"><img src="<?= base_url('uploads/admin/').$recent_post->image ?>" alt=""></a></div>
                                    <div class="right_recent_sidebar">
                                        <h2><?= $recent_post->title ?></h2><small><?php
                                                            $timestamp1 = strtotime($recent_post->modified_at);
                                                            $month1 = date('m', $timestamp1);
                                                            $year1 = date('Y', $timestamp1);
                                                            echo get_month_name($month1);
                                                            echo $year1;


                                                     ?></small>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="left">
                    <div class="heading_left">
                        <h1><?= $categories2[0]->category ?></h1>
                        <img src="../Assets/Images/bar_title.svg" alt="">
                    </div>
                    <div class="left_main">
                    <?php if($posts2){ ?>
                                <?php foreach($posts2 as $post2): ?>
                                    <div><a href="<?= base_url() ?>/posts/<?= $post2[0]->route_name ?>"><img src="<?= base_url('uploads/admin') ?>/<?= $post1[0]->post2?>" alt=""></a>
                                        <h1><?=$post2[0]->title ?>
                                        </h1>
                                      
                                        <p><?php $str = word_limiter($post2[0]->body , 40);
                                            echo   strip_tags( $str) ; ?></p>
                                        <a href="<?= base_url() ?>/posts/<?= $post2[0]->route_name ?>" class="read_more">مزید پڑھیں
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php }else{ ?>
                            <?php } ?>
                        
                    </div>
                </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <!-- <div class="center_categories"> -->
                <div class="col-sm-4 d-flex justify-content-center" style="margin-top: 15rem !important; ">
                <div class="right">
                    <div class="recipes_items_sidebar">
                        <div class="sidebar_recent_post">
                        <div class="heading_sidebar_22"><span>مشہور زمرے</span></div>
                            <?php foreach($popular_categories as $popular_categorie): ?>
                                <a href="<?= base_url() ?>/categorie/<?= $popular_categorie->route_name ?>">
                                    <div class="sidebar-items">
                                        <div class="left_recent_sidebar"><img src="<?= base_url('Uploads/admin') ?>/<?= $popular_categorie->image ?>" alt=""></div>
                                        <div class="right_recent_sidebar">
                                            <h2><?= $popular_categorie->category ?></h2>
                                        </div>
                                    </div>
                                </a>
                                <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="left">
                <div class="heading_left">
                        <h1><?= $categories3[0]->category ?></h1>
                        <img src="../Assets/Images/bar_title.svg" alt="">
                    </div>
                    <div class="left_main">
                    <?php if($posts3){ ?>
                                <?php foreach($posts3 as $post3): ?>
                                    <div><a href="<?= base_url() ?>/posts/<?= $post3[0]->route_name ?>"><img src="<?= base_url('uploads/admin') ?>/<?= $post3[0]->image?>" alt=""></a>
                                        <h1><?=$post3[0]->title ?>
                                        </h1>
                                      
                                        <p><?php $str = word_limiter($post3[0]->body , 40);
                                            echo   strip_tags( $str) ; ?></p>
                                        <a href="<?= base_url() ?>/posts/<?= $post3[0]->route_name ?>" class="read_more">مزید پڑھیں
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php }else{ ?>
                            <?php } ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="section4_load_more">
        <div class="container">
            <div class="section_load_more">
                <div class="left_main">
                    <div><a href="post.html"><img src="../Assets/Images/spain-Recovered.png" alt=""></a>
                        <h1>اسپین برآمد ہوا
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Mongol Empire.jpg" alt=""></a>
                        <h1>منگول سلطنت
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/spain-Recovered.png" alt=""></a>
                        <h1>اسپین برآمد ہوا
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Mongol Empire.jpg" alt=""></a>
                        <h1>منگول سلطنت
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/spain-Recovered.png" alt=""></a>
                        <h1>اسپین برآمد ہوا
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Mongol Empire.jpg" alt=""></a>
                        <h1>منگول سلطنت
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/spain-Recovered.png" alt=""></a>
                        <h1>اسپین برآمد ہوا
                        </h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                    <div><a href="post.html"><img src="../Assets/Images/Ameer Taimoor Part 01 Thumbnail.png" alt=""></a>
                        <h1>امیر تیمور</h1>
                        <div class="icons_count">
                            <i class="fas fa-eye">1.5K</i>
                            <i class="fa fa-heart">50</i>
                            <i class="fas fa-comments">2</i>
                        </div>
                        <p>چنگیز خان کی موت کے بعد اسکی سلطنت ایشیا میں صدیوں تک قایم رہی۔یہاں تک کہ 13ھرویں صدی عیسوی کے درمیاں میں منگول آپس کی خانہ جنگی میں تباہی کا شکار ہو کر مختلف چھوٹی چھو ٹی ریاستوں میں تقسیم ہو گے تھے۔
                        </p>
                        <a href="post.html" class="read_more">مزید پڑھیں
                        </a>
                    </div>
                </div>
            </div>
            <div class="load_more" style="display:none">
                <a href="#" id="js-loadMore">مزید لوڈ کریں
                </a>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="center_footer">
                <div class="left_footer">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="right_footer">
                    <ul>
                        <li><a href="../index.html">Copyright 2021 - All Rights Reserved
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/frontend') ?>/Js/App.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
</body>

</html>