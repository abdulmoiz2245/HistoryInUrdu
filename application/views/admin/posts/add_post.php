
            <!-- <pre><?php //var_dump( $categorie) ?></pre> -->
            <?php $this->load->view('admin/layout/header') ?>
            
            <!-- Topbar Start -->
            <?php $this->load->view('admin/layout/top_nav') ?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view('admin/layout/sidebar') ?>

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="card-box">
                            <h2 class=" mt-0 mb-3">Add new post</h2>
                            <div class="alert alert-danger" role="alert">
                              <?php echo validation_errors(); ?>
                            </div>
                            <form action="save-post" method="POST" >
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="simpleinput" name="post_title" class="form-control" value="<?php echo set_value('post_title'); ?>" placeholder="عنوان">
                                </div>
                                <div class="form-group">
                                    <label for="post_categorie">Categorie</label>
                                    <div class="post_categorie_checkbox" id="">
                                        <ul>
                                             <?php foreach ($categore['top_categore'] as $categores_top) : $count=0?>
                                                <li>
                                                <input type="checkbox" id="option" name="categorie[]" value="<?= $categores_top['id'] ?>"><label for="option<?= $categores_top['id'] ?>"> <?= $categores_top['name']?> </label>
                                                <?php foreach($categore['sub_categore'] as $categores_sub): 
                                                    if($categores_sub['parent_id'] == $categores_top['id']):  ?>
                                                     <?php if($count == 0):?><ul> <?php endif?>
                                                        <?php $count++ ?>
                                                        <li><label><input type="checkbox" name="categorie[]" id="<?=$categores_sub['id'] ?>" class="subOption" parent_id="<?=$categores_sub['parent_id'] ?>" 
                                                         value = "<?=$categores_sub['id'] ?>" ><?=$categores_sub['name'] ?></label></li>
                                                    <?php endif;?>
                                                    <?php if($count > 1): ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                <?php  endforeach; ?>
                                                </li>
                                             <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="post_img" class="d-block">Featured Image</label>
                                    <input type='file' name="post_img" onchange="readURL(this);" />
                                    <img id="blah" src="#" alt="your image" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="post_tag">Add Tags</label>
                                    <input type="text" value="" name="tags" value="<?php echo set_value('tags'); ?>" data-role="tagsinput" placeholder="Add tags" />
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Body</label>
                                    <textarea name="post_body" value="<?php echo set_value('post_body'); ?>">
                                       
                                    </textarea>
                                </div>
                                

                                <div class="form-group text-right mb-0">
                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2020 - 2021 © History in Urdu <a href="">Rivozone</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
            <script type="text/javascript">
                
            </script>
            <script src="https://cdn.tiny.cloud/1/xe86jsstydxsysjdo473wyinbzuz1mziocelg4wajosqses0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <?php $this->load->view('admin/layout/footer') ?>

        