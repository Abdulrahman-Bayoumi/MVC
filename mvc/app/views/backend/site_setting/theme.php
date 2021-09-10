<?php include (VIEWS."backend/layout/header.php");   ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="inner">
                                <div class="row">
                                    <form action="<?= ASSETS.'/site_setting/posttheme'?>" method="post">
                                        <select name="value">
                                    <option value="skay" <?= ($theme_key == 'sky') ? "selected" : "";  ?>
                                                style="background-image: url(<?= ASSETS."/theme_img/sky.jpg" ?>);">
                                                skay</option>
                                     <option value="food" <?= ($theme_key == 'food') ? "selected" : "";  ?>
                                                style="background-image: url(<?= ASSETS."/theme_img/food.jpg" ?>);">
                                                food</option>
                                        </select>

                                        <input type="submit" name="submit" value="Change">

                                    </form>
                                </div>

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <b>Footer</b>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->