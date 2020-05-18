<section class="content-header">
  <h1>
	Users
	<small>Edit</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="<?php echo site_url('Users'); ?>">Users</a></li>
	<li class="active">Edit Users</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<form method="POST" action="<?php echo site_url('Users/update'); ?>">
  <div class="row">
	<!-- left column -->
	<div class="col-md-12">
	  <!-- general form elements -->
	  <div class="box box-primary">
		<div class="box-header with-border">
		  <h3 class="box-title"></h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
          <?php echo $this->session->flashdata('message'); ?>
		  <div class="box-body">
			<div class="form-group">
			  <label for="exampleInputEmail1">Nama</label>
        <input type="hidden" name="id" value="<?php echo $data->id; ?>" class="form-control" placeholder="Nama" required>
			  <input type="text" name="nama" value="<?php echo $data->nama; ?>" class="form-control" placeholder="Nama" required>
			</div>
      <div class="form-group">
			  <label for="exampleInputEmail1">Email</label>
			  <input type="text" name="email" value="<?php echo $data->email; ?>" class="form-control" placeholder="Email" required>
			</div>
      <div class="form-group">
			  <label for="exampleInputEmail1">Password</label>
			  <input type="password" name="password" class="form-control" placeholder="Password" required>
			</div>
      <div class="form-group">
			  <label for="exampleInputEmail1">Hak Akses</label>
        <select name="hak_akses" class="form-control" required>
				<option value="">-</option>
				<option <?php echo $data->hak_akses==1?"selected":""; ?> value="1">Superadmin</option>
				<option <?php echo $data->hak_akses==2?"selected":""; ?> value="2">Admin</option>
        </select>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Status</label>
			  <select name="status" class="form-control" required>
				<option value="">-</option>
				<option <?php echo $data->status==1?"selected":""; ?> value="1">Aktif</option>
				<option <?php echo $data->status==0?"selected":""; ?> value="0">Tidak Aktif</option>
			  </select>
			</div>
			<div class="box-footer">
				<a href="<?php echo site_url('Users'); ?>" class="btn btn btn-danger">
  			  <i class="fa fa-angle-double-left"></i> Back</a>
			  <button type="submit" class="btn btn-primary">Simpan</button>
			  <button type="reset" class="btn btn-warning">Batal</button>
			</div>

		  </div>
		  <!-- /.box-body -->

	  </div>
	  <!-- /.box -->

	</div>

	</div>
	<!--/.col (left) -->
  </div>
</form>
  <!-- /.row -->
</section>
<!-- /.content -->
<script type='text/javascript'>
var editor = CKEDITOR.replace('content');
// CKFinder.setupCKEditor(editor, 'ckfinder/');
</script>

<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>
