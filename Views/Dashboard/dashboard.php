<?php headerAdmin($data); ?>

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Dashboard</a></li>
                    </ol>
                </div>
                <h4 class="page-title"><?= $data['page_title'] ?></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Dashboard</h4>


                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->


<?php footerAdmin($data); ?>