<?php 
include_once VIEWS."backend\layout\header.php";
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
        <h3 class="card-title"><a class = "btn btn-success" href ="<?= ASSETS."/post/add"?>">Add New Post</a></h3>
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
                      <th>title</th>
                      <th>image</th>
                      <th>user</th>
                      <th>created_at</th>
                      <th>category</th>
                      <th style="width: 40px">updata</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    use itrax\models\userModel;
                    use itrax\models\categoryModel;
                    $category = new categoryModel();
                    $users = new userModel();
                    foreach($posts as $post):
                    $id = $post['category'];
                    $cat=$category->Getcategorybyid($id);
                    $use = $users->Getuserid($post['user_id']);
                      ?>
                      
                    <tr>
                      <td><?= $post['id']; ?></td>
                      <td><?= $post['title']; ?></td>
                      <td><img style="width: 50px;height: 50px;" src="../../images<?php echo $post['image']; ?>"></td>
                      <td><?= $use['name']; ?></td>
                      <td><?= $post['created_at']; ?></td>
                      <td><?= $cat['name'];?></td>
                      <td><a href="updata/<?= $post['id'] ;?>">UPdata</a></td>
                      <td><a href="delete/<?= $post['id']; ?>">Delet</a></td>
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