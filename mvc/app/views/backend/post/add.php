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
          <h3 class="card-title">Title</h3>

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
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ADD NEW POST</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "PostAdd" method ="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="category">Post name</label>
                    <input type="text" name ="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title of post">
                    <label for="category">image Post</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" >
                    <label for="category">select category</label>
                 <select name="category" id="do" class="form-control">
                 <option value="">Select category</option>
               	<?php 
                    use itrax\models\categoryModel;
                    $category = new categoryModel();
                    $cats =$category -> Getallcategory();
		         foreach ($cats as $key) {?>
                           
		              	<option value="<?= $key['id']; ?>"id="exampleInputEmail1" class="form-control"><?php echo $key['name']; ?></option>
		                   <?php 	
	                       	}
		                      ?>
               </select>
               <label for="user">select user</label>
               <select name="user_id" id="do" class="form-control">
               <option value="">Select user</option>
                    <?php 
                    use itrax\models\userModel;
                    $users = new userModel();
                    $user =$users -> Getalluser();
		         foreach ($user as $key) {?>
                           
		              	<option value="<?= $key['id']; ?>"id="exampleInputEmail1" class="form-control"><?php echo $key['name']; ?></option>
		                   <?php 	
	                       	}
		                      ?>
               </select>

                </div>
            

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add New Post</button>
                </div>
              </form>
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