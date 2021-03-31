
            <!-- <pre><?php //var_dump( $categories) ?></pre> -->
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

                            <h2 class=" mt-0 mb-3">Add Categorie</h2>
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

                            <div id="success_alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success</strong>Categorie added Succesfully
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="error_alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Error :</strong>Someting Woring Contact to Abdul Moiz
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form_categorie" action="save-categorie" method="POST"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input type="text" id="categorie_name" name="categorie" class="form-control w-25" value="<?php echo set_value('categorie'); ?>" placeholder="عنوان">
                                </div>
                                
                                <div class="form-group">
                                    <label for="categorie">Parent Categorie</label>
                                    <select class="form-control w-25" id="categorie" name="parent_categorie">
                                        <option selected value="0">None</option>
                                        <?php foreach($categories as $ctegorie): ?>
                                            <option value = "<?= $ctegorie['id'] ?>"><?= $ctegorie['category'] ?></option>
                                        <?php endforeach; ?>
                                       
                                    </select>
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
                // $(document).ready(function () {
                //     $("#error_alert").alert('close');
                //     $("#success_alert").alert('close');

                //     $("#form_categorie").submit(function (event) {
                //         var formData = {
                //         name: $("#categorie").val(),
                //         email: $("#parent_categorie").val(),
                //         };

                //         $.ajax({
                //         type: "POST",
                //         url: "save-categorie",
                //         data: formData,
                //         }).done(function (data) {
                //             if(data){

                //                 $('#success_alert').alert();
                //                 $("#error_alert").alert('close');
                //             }else{
                //                 $('#error_alert').alert();
                //                 $("#success_alert").alert('close');
                //             }
                //         });

                //         event.preventDefault();
                //     });
                // });
            </script>
            <script src="https://cdn.tiny.cloud/1/xe86jsstydxsysjdo473wyinbzuz1mziocelg4wajosqses0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <?php $this->load->view('admin/layout/footer') ?>

        