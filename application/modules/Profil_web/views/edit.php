<style type="text/css">
#image {
	width: 100%;
    height: 200px;
    overflow: hidden;
    cursor: pointer;
    background: #fff;
    color: #ddd;
    text-align: center;
    border: 2px dashed #ddd;
}
#image img {
	visibility: hiddenn;
}
</style>

<script type="text/javascript">
function openKCFinder(div) {
	window.KCFinder = {
		callBack: function(url) {
			window.KCFinder = null;
			div.innerHTML = '<div style="margin:5px">Loading...</div>';
			var img = new Image();
			img.src = url;
			img.onload = function() {
				div.innerHTML = '<img id="img" src="' + url + '" /><input type="hidden" name="foto" value="http://localhost'+url+'">';
				var img = document.getElementById('img');
				var o_w = img.offsetWidth;
				var o_h = img.offsetHeight;
				var f_w = div.offsetWidth;
				var f_h = div.offsetHeight;
				if ((o_w > f_w) || (o_h > f_h)) {
					if ((f_w / f_h) > (o_w / o_h))
						f_w = parseInt((o_w * f_h) / o_h);
					else if ((f_w / f_h) < (o_w / o_h))
						f_h = parseInt((o_h * f_w) / o_w);
					img.style.width = f_w + "px";
					img.style.height = f_h + "px";
				} else {
					f_w = o_w;
					f_h = o_h;
				}
				// img.style.marginLeft = parseInt((div.offsetWidth - f_w) / 2) + 'px';
				img.style.marginTop = parseInt((div.offsetHeight - f_h) / 2) + 'px';
				img.style.visibility = "visible";
			}
		}
	};
	window.open('<?php echo base_url('assets'); ?>/kcfinder/browse.php?type=files&dir=images/public',
		'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
		'directories=0, resizable=1, scrollbars=0, width=800, height=600'
	);
}
</script>

<section class="content-header">
  <h1>
	Slider
	<small>Edit</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li><a href="<?php echo site_url('Slider'); ?>">Slider</a></li>
  </ol>
	<li class="active">Edit Slider</li>
</section>

<!-- Main content -->
<section class="content">
<form method="POST" action="<?php echo site_url('Slider/update'); ?>">
  <div class="row">
	<!-- left column -->
	<div class="col-md-9">
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
			  <label for="exampleInputEmail1">Agenda</label>
				<input type="hidden" name="id" value="<?php echo $data->id; ?>" class="form-control" placeholder="Agenda" required>
			  <input type="text" name="judul" value="<?php echo $data->judul; ?>" class="form-control" placeholder="Agenda" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Gambar</label>
				<div id="image" onclick="openKCFinder(this)">
          <?php
            if($data->foto == null) {
          ?>
          <div style="margin:90px;">
            <input type="hidden" name="foto" value="">Click here to choose an image
          </div>
          <?php
            } else {
          ?>
          <img src="<?php echo $data->foto; ?>" style="height: 200px;">
          <div style="margin:60px;">
              <input type="hidden" name="foto" value="<?php echo $data->foto; ?>">
            </div>
          <?php
            }
          ?>
        </div>

			</div>
			<div class="box-footer">
				<a href="<?php echo site_url('Agenda_kegiatan'); ?>" class="btn btn btn-danger">
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
