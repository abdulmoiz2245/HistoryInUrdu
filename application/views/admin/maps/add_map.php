
            <!-- <pre><?php  $data['title'] = $title ?></pre> -->
            <?php $this->load->view('admin/layout/header' , $data) ?>
            
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
                            <h2 class=" mt-0 mb-3">Add Map</h2>
                            <?php  if(validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                              <?php echo validation_errors(); ?>
                            </div>
                            <?php endif ?>
                            <?php  if($this->session->flashdata('error_message')): ?>
                            <div class="alert alert-danger">
                                <?= $this->session->flashdata('error_message'); ?>
                            </div>
                            <?php endif ?>
                            <?php  if($this->session->flashdata('success_message')): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('success_message'); ?>  
                            </div>
                            <?php endif ?>
                            <form action="save-map" method="POST"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="simpleinput" required name="map_title" class="form-control" value="<?php echo set_value('map_title'); ?>" placeholder="عنوان">
                                </div>
                                <div class="form-group">
                                    <label for="title">Route</label>
                                    <input type="text" id="" required name="route_name" class="form-control w-25" value="<?php echo set_value('map_route'); ?>" placeholder="Route">
                                </div>
                                
                                <div class="form-group">
                                    <label for="post_img" class="d-block">Map Image</label>
                                    <input type='file' required name="file_name" onchange="readURL(this);" />
                                    <img id="blah" src="#" alt="your image" width="300" height="200" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="post_tag">Add Tags</label>
                                    <input type="text" value="" name="tags" value="<?php echo set_value('tags'); ?>" data-role="tagsinput" placeholder="Add tags" />
                                </div>
                                <div class="form-group">
                                    <label for="passWord2">Body</label>
                                    <textarea name="map_body" value="<?php echo set_value('post_body'); ?>">
                                       
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

        