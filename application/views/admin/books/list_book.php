

    <?php $this->load->view('admin/layout/header') ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <!-- Topbar Start -->
    <style>
        .p_t{
            font-size: 20px;
            font-family: jameel-noori-nastaleeq;
            color:black;
        }
    </style>
    <?php $this->load->view('admin/layout/top_nav') ?>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <?php $this->load->view('admin/layout/sidebar') ?>

    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                    <?php  if($this->session->flashdata('success_message')): ?>
                            <div class="alert alert-success" role="alert">
                                <?= $this->session->flashdata('success_message'); ?>  
                            </div>
                            <?php endif ?>
                            
                        <table id="posts_table" class="display" style="width:100%;text-align:center;">
                            <thead>
                                <tr>
                                    <th style="width: 200px;">Title</th>
                                    <th style="width: 150px;">Categorie</th>
                                    <th style="width: 300px;">Tags</th>
                                    <th>Downloads</th>
                                    <th>Views</th>
                                    <th>Comments</th>
                                    <th>Date Modified</th>
                                    <th style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($posts as $post): ?>
                                        <tr>
                                            <td class="p_t"><?= $post->title ?></td>
                                            <td class="p_t"><?php foreach ($post->categories as $categorie ):  ?>
                                               <?= $categorie  ?> ,
                                           <?php endforeach; ?>
                                            </td>
                                            <td><?= $post->tags ?></td>
                                            <th><?= $post->num_download ?></th>
                                            <td><?= $post->views ?></td>
                                            <td><?= $post->num_comment ?></td>
                                            <td><?= $post->modified_at ?></td>
                                            <td>
                                                <button class="btn btn-success" style="display: inline;">Edit</button>
                                                <button class="btn btn-success" style="display: inline;">View</button>
                                            </td>


                                        </tr>
                                 <?php endforeach; ?>

                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>                    
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" ></script> -->

    <?php $this->load->view('admin/layout/footer') ?>

