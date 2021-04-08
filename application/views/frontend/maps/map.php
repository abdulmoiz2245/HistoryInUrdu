<?php   
$data['css'] = $css;
$this->load->view('frontend/layout/header' ,$data);
//    echo '<pre>';
//         var_dump($popular_categories);
//         echo '</pre>';
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
            <div class="bg_img"><img src="https://i.pinimg.com/originals/cd/5a/1e/cd5a1e9f65975ffb8bc164dd0e54beff.jpg" alt=""></div>
            <div class="center_text_categories">
                <h1>نقشہ
                </h1>
            </div>
        </div>
    </section>
    <section class="section2_categoeries">
        <div class="container">
            <div class="row justify-content-md-center">
                <!-- <div class="center_categories"> -->
                <div class="col-sm-4 d-flex justify-content-center" style="margin-top: 7rem !important; ">
                    <div class="right">
                    <div class="recipes_items_sidebar">
                            <div class="sidebar_recent_post">
                                <div class="heading_sidebar_2"><span>تازہ ترین نقشہ
                                    </span>
                                </div>
                                <?php foreach($recent_maps as $recent_map): ?>
                                <a href="<?= base_url() ?>/maps/<?= $recent_map->route_name ?>">
                                    <div class="sidebar-items">
                                        <div class="left_recent_sidebar"><a href="<?= base_url() ?>/maps/<?= $recent_map->route_name ?>"><img src="<?= base_url('uploads/admin/').$recent_map->image ?>" alt=""></a></div>
                                        <div class="right_recent_sidebar">
                                            <h2><?= $recent_map->title ?></h2><small style="font-family:"><?php
                                                            $timestamp1 = strtotime($recent_map->modified_at);
                                                            $month1 = date('m', $timestamp1);
                                                            $year1 = date('Y', $timestamp1);
                                                            echo get_month_name($month1);
                                                            echo $year1;


                                                     ?> </small>
                                        </div>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="recipes_items_sidebar">
                            <div class="sidebar_recent_post">
                                <div class="heading_sidebar_2"><span>مشہور زمرے
                                    </span></div>
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
                        <div class="left_main">
                            <?php foreach($maps as $map): ?>
                            <div class="img-div" id="img-div"><img src="<?= base_url('uploads/admin/').$map->image ?>" id="myImg"  style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1><?= $map->title ?>
                                </h1>
                                <div class="icons_count">
                                 
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<section class="section_modal_pics">
    <div id="modal01" class="modal" onclick="this.style.display='none'">
  <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  <div class="modal-content">
    <img id="img01" style="max-width:100%">
  </div>
</div>
</section>
     <section class="section4_load_more">
        <div class="container">
            <div class="section_load_more">
                <div class="left_main">
                   <div class="row justify-content-md-center">
                        <div class="col-sm-6"> <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div> <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div> <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div> <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div> <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div> <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div></div>
                        <div class="col-sm-6">
                            <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div> 
                            <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div> 
                            <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div> 
                            <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div> 
                            <div class="img-div" id="img-div"><img src="../Assets/Images/map1.jpg" id="myImg" style="max-width:100%;cursor:pointer" onclick="onClick(this)" class="modal-hover-opacity">
                                <h1>اس کی سب سے بڑی حد تک اموی خلافت کا نقشہ ، 750 عیسوی
                                </h1>
                                <div class="icons_count">
                                    <i class="fas fa-eye">1.5K</i>
                                    <i class="fa fa-heart">50</i>
                                    <i class="fas fa-comments">2</i>
                                </div>
                                <a href="post.html" class="read_more">مزید پڑھیں
                                </a>
                            </div>
                        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.textcomplete/1.8.5/jquery.textcomplete.js" integrity="sha512-QQzMH0Owf0yosqiKWIuainU924mQSLXGRicMIQwikdKdJPlkjezlXT+ukYvjDsPu/k53Hf53wOYi7w6RjzHMtQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url('assets/frontend') ?>/Js/App.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../Assets/Js/comments-data.js"></script>
    <script type="text/javascript" src="../Assets/Js/jquery-comments.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
   
</body>

</html>