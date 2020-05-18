<section class="content-header">
	<h1>
		Dashboard
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3>
						<?php
							$cek = $this->db->get('pegawai')->result();
							echo count($cek);
						?>
					</h3>

					<p>Pegawai</p>
				</div>
				<div class="icon">
					<i class="ion ion-bag"></i>
				</div>
				<a href="<?php echo site_url('Pegawai'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3>
						<?php
							$cek = $this->db->get('berita')->result();
							echo count($cek);
						?>
					</h3>

					<p>Berita/Artikel</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="<?php echo site_url('News'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>
						<?php
							$cek = $this->db->get('pengaduan')->result();
							echo count($cek);
						?>
					</h3>

					<p>Pengaduan</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="<?php echo site_url('Pengaduans'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3>
						<?php
							$cek = $this->db->get('bukutamu')->result();
							echo count($cek);
						?>
					</h3>

					<p>Buku Tamu</p>
				</div>
				<div class="icon">
					<i class="ion ion-pie-graph"></i>
				</div>
				<a href="<?php echo site_url('Bukutamu'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
	</div>
	<!-- /.row -->
	<!-- Main row -->
	<div class="row">
		<!-- Left col -->
		<section class="col-lg-6 connectedSortable">
			<!-- Chat box -->
			<!-- TO DO List -->
			<div class="box box-primary">
				<div class="box-header">
					<i class="ion ion-clipboard"></i>

					<h3 class="box-title">Agenda Kegiatan</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<ul class="todo-list">
						<?php
							$no=0;
							$cek = $this->db->order_by('tanggal', 'DESC')->get('agenda', 10,0)->result();
							foreach($cek as $row):
								$replace = "/[^a-zA-Z0-9]/";
	              $judul = preg_replace($replace, '-', strtolower($row->agenda));

								$day = date('D', strtotime($row->tanggal));
								$dayList = array(
									'Sun' => 'Minggu',
									'Mon' => 'Senin',
									'Tue' => 'Selasa',
									'Wed' => 'Rabu',
									'Thu' => 'Kamis',
									'Fri' => 'Jumat',
									'Sat' => 'Sabtu'
								);

								$bulan = array(
									'01' => 'Januari',
									'02' => 'Februari',
									'03' => 'Maret',
									'04' => 'April',
									'05' => 'Mei',
									'06' => 'Juni',
									'07' => 'Juli',
									'08' => 'Agustus',
									'09' => 'September',
									'10' => 'Oktober',
									'11' => 'November',
									'12' => 'Desember'
								);

								$tgl = explode("-", $row->tanggal);
								$bln = $tgl[1];

								$tanggal = $dayList[$day].', '.$tgl[2].' '.$bulan[$bln].' '.$tgl[0];

						?>
						<li>
							<span>
								<?php echo ++$no; ?>
							</span>&nbsp;
							<!-- drag handle -->
									<span class="handle">
										<i class="fa fa-ellipsis-v"></i>
										<i class="fa fa-ellipsis-v"></i>
									</span>
							<!-- todo text -->
							<span class="text"><a href="<?php echo site_url('agenda/id/'.$row->id.'/'.$judul.'.html'); ?>" target="_blank"><?php echo $row->agenda; ?></a></span>
							<!-- Emphasis label -->
							<small class="label label-success"><i class="fa fa-clock-o"></i>
								<?php
									echo $tanggal;
								?>
							</small>
							<!-- General tools such as edit or delete-->
							<div class="tools">
								<a href="<?php echo site_url('Agenda_kegiatans/edit/'.$row->id); ?>">
									<i class="fa fa-edit"></i>
								</a>
								<a href="<?php echo site_url('Agenda_kegiatans/delete/'.$row->id); ?>" onclick="return confirm('Apakah anda yakin?')">
									<i class="fa fa-trash-o"></i>
								</a>
							</div>
						</li>
						<?php
							endforeach;
						?>
					</ul>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix no-border">
					<a href="<?php echo site_url('Agenda_kegiatans/add'); ?>" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</a>
				</div>
			</div>
			<!-- /.box -->

			<!-- quick email widget -->
		</section>
		<!-- /.Left col -->
	</div>
	<!-- /.row (main row) -->

</section>
<!-- /.content -->
<?php
	echo $this->session->flashdata('notif');
	echo $this->session->flashdata('audio');
?>
