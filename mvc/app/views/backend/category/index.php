<?php include_once VIEWS."backend\layout\header.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
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
          <h3 class="card-title"><a class = "btn btn-success" href ="<?= ASSETS."/category/add"?>">Add New Category</a></h3>

          <div class="card-tools">

          
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <!-- /.card-header -->
          <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>category</th>
                      <th>UPDATA</th>
                      <th style="width: 40px">DELETE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($categorys as $category): ?>
                    <tr>
                      <td><?= $category['id'] ?></td>
                      <td><?= $category['name'] ?></td>
                      <td><a href="updata/<?= $category['id'] ?>">UPdata</a></td>
                      <td><a href="delete/<?= $category['id'] ?>">Delet</a></td>
                    </tr>
                  <?php  endforeach; ?>
                  </tbody>
                </table>
              </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <?php include_once VIEWS."backend\layout\\footer.php";
?>