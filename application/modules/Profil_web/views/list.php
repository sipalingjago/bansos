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
				div.innerHTML = '<img id="img" src="' + url + '" /><input type="hidden" name="logo" value="'+url+'">';
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
<script type="text/javascript">
function openKCFinder2(div) {
	window.KCFinder = {
		callBack: function(url) {
			window.KCFinder = null;
			div.innerHTML = '<div style="margin:5px">Loading...</div>';
			var img = new Image();
			img.src = url;
			img.onload = function() {
				div.innerHTML = '<img id="img" src="' + url + '" /><input type="hidden" name="bg" value="'+url+'">';
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
<script type="text/javascript">
function openKCFinder3(div) {
	window.KCFinder = {
		callBack: function(url) {
			window.KCFinder = null;
			div.innerHTML = '<div style="margin:5px">Loading...</div>';
			var img = new Image();
			img.src = url;
			img.onload = function() {
				div.innerHTML = '<img id="img" src="' + url + '" /><input type="hidden" name="favicon" value="'+url+'">';
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
	Sambutan
	<small>Kepala</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="<?php echo site_url('Dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	<li class="active">Sambutan</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <?php if(!$data) { ?>
  <form method="POST" action="<?php echo site_url('Profil_web/insert'); ?>">
  <?php } else { ?>
  <form method="POST" action="<?php echo site_url('Profil_web/update'); ?>">
    <input type="hidden" name="id" value="<?php echo $data->id; ?>" class="form-control">
  <?php } ?>
  <div class="row">
	<!-- left column -->
	<div class="col-md-6">
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
			  <label for="exampleInputEmail1">Nama Website</label>
			  <input type="text" name="nama" value="<?php if(!$data) { echo ""; } else { echo $data->nama; } ?>" class="form-control" placeholder="Nama" required>
			</div>
      <div class="form-group">
			  <label for="exampleInputEmail1">Deskripsi</label>
			  <textarea class="form-control" name="deskripsi" rows="5" placeholder="Deskripsi" required><?php if(!$data) { echo ""; } else { echo $data->deskripsi; } ?></textarea>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Keyword</label>
			  <input type="text" name="keyword" value="<?php if(!$data) { echo ""; } else { echo $data->keyword; } ?>" class="form-control" placeholder="Keyword" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Url Website</label>
			  <input type="text" name="url" value="<?php if(!$data) { echo ""; } else { echo $data->url; } ?>" class="form-control" placeholder="Url" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Alamat Kantor</label>
			  <input type="text" name="alamat" value="<?php if(!$data) { echo ""; } else { echo $data->alamat; } ?>" class="form-control" placeholder="Alamat" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Nomor Telepon</label>
			  <input type="text" name="telp" value="<?php if(!$data) { echo ""; } else { echo $data->telp; } ?>" class="form-control" placeholder="Telepon" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Email</label>
			  <input type="text" name="email" value="<?php if(!$data) { echo ""; } else { echo $data->email; } ?>" class="form-control" placeholder="Email" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Kode Pos</label>
			  <input type="text" name="kode_pos" value="<?php if(!$data) { echo ""; } else { echo $data->kode_pos; } ?>" class="form-control" placeholder="Kode Pos" required>
			</div>
			<!-- <div class="form-group">
			  <label for="exampleInputEmail1">Nama Desa</label>
			  <input type="text" name="nama_desa" value="<?php if(!$data) { echo ""; } else { echo $data->nama_desa; } ?>" class="form-control" placeholder="Desa" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Nama Kecamatan</label>
			  <input type="text" name="nama_kecamatan" value="<?php if(!$data) { echo ""; } else { echo $data->nama_kecamatan; } ?>" class="form-control" placeholder="Kecamatan" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Nama Kabupaten</label>
			  <input type="text" name="nama_kabupaten" value="<?php if(!$data) { echo ""; } else { echo $data->nama_kabupaten; } ?>" class="form-control" placeholder="Kabupaten" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Nama Provinsi</label>
			  <input type="text" name="nama_provinsi" value="<?php if(!$data) { echo ""; } else { echo $data->nama_provinsi; } ?>" class="form-control" placeholder="Provinsi" required>
			</div> -->
			<div class="form-group">
			  <label for="exampleInputEmail1">Facebook</label>
			  <input type="text" name="facebook" value="<?php if(!$data) { echo ""; } else { echo $data->facebook; } ?>" class="form-control" placeholder="Facebook" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Twitter</label>
			  <input type="text" name="twitter" value="<?php if(!$data) { echo ""; } else { echo $data->twitter; } ?>" class="form-control" placeholder="Twitter" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Instagram</label>
			  <input type="text" name="instagram" value="<?php if(!$data) { echo ""; } else { echo $data->instagram; } ?>" class="form-control" placeholder="Instagram" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Youtube</label>
			  <input type="text" name="youtube" value="<?php if(!$data) { echo ""; } else { echo $data->youtube; } ?>" class="form-control" placeholder="Youtube" required>
			</div>
			
		  </div>
		  <!-- /.box-body -->

	  </div>
	  <!-- /.box -->

	</div>

	<div class="col-md-6">
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
			  <label for="exampleInputEmail1">Google Map</label>
			  <input type="text" name="googlemap" value="<?php if(!$data) { echo ""; } else { echo $data->googlemap; } ?>" class="form-control" placeholder="Google Map" required>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Latar Belakang</label>
        <div id="image" onclick="openKCFinder2(this)">
          <?php
            if(!$data) {
          ?>
          <div style="margin:90px;">
            <input type="hidden" name="bg" value="">Click here to choose an image
          </div>
          <?php
            } else
            if($data->bg == null) {
          ?>
          <div style="margin:90px;">
            <input type="hidden" name="bg" value="">Click here to choose an image
          </div>
          <?php
            } else {
          ?>
          <img src="<?php echo $data->bg; ?>" style="height: 200px;">
          <div style="margin:90px;">
              <input type="hidden" name="bg" value="<?php echo $data->bg; ?>">
            </div>
          <?php
            }
          ?>
        </div>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Logo</label>
        <div id="image" onclick="openKCFinder(this)">
          <?php
            if(!$data) {
          ?>
          <div style="margin:90px;">
            <input type="hidden" name="logo" value="">Click here to choose an image
          </div>
          <?php
            } else
            if($data->logo == null) {
          ?>
          <div style="margin:90px;">
            <input type="hidden" name="logo" value="">Click here to choose an image
          </div>
          <?php
            } else {
          ?>
          <img src="<?php echo $data->logo; ?>" style="height: 200px;">
          <div style="margin:90px;">
              <input type="hidden" name="logo" value="<?php echo $data->logo; ?>">
            </div>
          <?php
            }
          ?>
        </div>
			</div>
			<div class="form-group">
			  <label for="exampleInputEmail1">Favicon</label>
        <div id="image" onclick="openKCFinder3(this)">
          <?php
            if(!$data) {
          ?>
          <div style="margin:90px;">
            <input type="hidden" name="favicon" value="">Click here to choose an image
          </div>
          <?php
            } else
            if($data->favicon == null) {
          ?>
          <div style="margin:90px;">
            <input type="hidden" name="favicon" value="">Click here to choose an image
          </div>
          <?php
            } else {
          ?>
          <img src="<?php echo $data->favicon; ?>" style="height: 200px;">
          <div style="margin:90px;">
              <input type="hidden" name="favicon" value="<?php echo $data->favicon; ?>">
            </div>
          <?php
            }
          ?>
        </div>
			</div>
			<div class="box-footer">
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
