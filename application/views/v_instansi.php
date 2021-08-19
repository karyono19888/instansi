
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin 1.0 | Instansi</title>
<!-- favicon -->
<link rel="shortcut icon" href="<?= base_url('assets');?>/dist/img/favicon.ico" type="image/x-icon">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Sweetalert2 -->
<link rel="stylesheet" href="<?= base_url('assets');?>/plugins/sweetalert2/sweetalert2.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
<!-- daterange picker -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<!-- BS Stepper -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/bs-stepper/css/bs-stepper.min.css">
<!-- dropzonejs -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/dropzone/min/dropzone.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
<div class="container">
	<a href="<?= base_url('assets'); ?>/index3.html" class="navbar-brand">
	<img src="<?= base_url('assets'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
	<span class="brand-text font-weight-light">Admin 1.0</span>
	</a>

	<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse order-3" id="navbarCollapse">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
		<!-- <a href="index3.html" class="nav-link">Home</a> -->
		</li>
		<li class="nav-item">
		<!-- <a href="#" class="nav-link">Contact</a> -->
		</li>
		<li class="nav-item dropdown">
		<!-- <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a> -->
		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
			<li><a href="#" class="dropdown-item">Some action </a></li>
			<li><a href="#" class="dropdown-item">Some other action</a></li>

			<li class="dropdown-divider"></li>

			<!-- Level two dropdown-->
			<li class="dropdown-submenu dropdown-hover">
			<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
			<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
				<li>
				<a tabindex="-1" href="#" class="dropdown-item">level 2</a>
				</li>

				<!-- Level three dropdown-->
				<li class="dropdown-submenu">
				<a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
				<ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
					<li><a href="#" class="dropdown-item">3rd level</a></li>
					<li><a href="#" class="dropdown-item">3rd level</a></li>
				</ul>
				</li>
				<!-- End Level three -->

				<li><a href="#" class="dropdown-item">level 2</a></li>
				<li><a href="#" class="dropdown-item">level 2</a></li>
			</ul>
			</li>
			<!-- End Level two -->
		</ul>
		</li>
	</ul>

	<!-- SEARCH FORM -->
	<!-- <form class="form-inline ml-0 ml-md-3">
		<div class="input-group input-group-sm">
		<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
		<div class="input-group-append">
			<button class="btn btn-navbar" type="submit">
			<i class="fas fa-search"></i>
			</button>
		</div>
		</div>
	</form> -->
	</div>

	<!-- Right navbar links -->
	<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
	<!-- Messages Dropdown Menu -->
	<li class="nav-item dropdown">
		<!-- <a class="nav-link" data-toggle="dropdown" href="#">
		<i class="fas fa-comments"></i>
		<span class="badge badge-danger navbar-badge">3</span>
		</a> -->
		<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
		<a href="#" class="dropdown-item">
			<!-- Message Start -->
			<div class="media">
			<img src="<?= base_url('assets'); ?>/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
			<div class="media-body">
				<h3 class="dropdown-item-title">
				Brad Diesel
				<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
				</h3>
				<p class="text-sm">Call me whenever you can...</p>
				<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
			</div>
			</div>
			<!-- Message End -->
		</a>
		<div class="dropdown-divider"></div>
		<a href="#" class="dropdown-item">
			<!-- Message Start -->
			<div class="media">
			<img src="<?= base_url('assets'); ?>/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
			<div class="media-body">
				<h3 class="dropdown-item-title">
				John Pierce
				<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
				</h3>
				<p class="text-sm">I got your message bro</p>
				<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
			</div>
			</div>
			<!-- Message End -->
		</a>
		<div class="dropdown-divider"></div>
		<a href="#" class="dropdown-item">
			<!-- Message Start -->
			<div class="media">
			<img src="<?= base_url('assets'); ?>/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
			<div class="media-body">
				<h3 class="dropdown-item-title">
				Nora Silvester
				<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
				</h3>
				<p class="text-sm">The subject goes here</p>
				<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
			</div>
			</div>
			<!-- Message End -->
		</a>
		<div class="dropdown-divider"></div>
		<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
		</div>
	</li>
	<!-- Notifications Dropdown Menu -->
	<li class="nav-item dropdown">
		<!-- <a class="nav-link" data-toggle="dropdown" href="#">
		<i class="far fa-bell"></i>
		<span class="badge badge-warning navbar-badge">15</span>
		</a> -->
		<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
		<span class="dropdown-header">15 Notifications</span>
		<div class="dropdown-divider"></div>
		<a href="#" class="dropdown-item">
			<i class="fas fa-envelope mr-2"></i> 4 new messages
			<span class="float-right text-muted text-sm">3 mins</span>
		</a>
		<div class="dropdown-divider"></div>
		<a href="#" class="dropdown-item">
			<i class="fas fa-users mr-2"></i> 8 friend requests
			<span class="float-right text-muted text-sm">12 hours</span>
		</a>
		<div class="dropdown-divider"></div>
		<a href="#" class="dropdown-item">
			<i class="fas fa-file mr-2"></i> 3 new reports
			<span class="float-right text-muted text-sm">2 days</span>
		</a>
		<div class="dropdown-divider"></div>
		<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
		</div>
	</li>
	<!-- <li class="nav-item">
		<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
		<i class="fas fa-th-large"></i>
		</a>
	</li> -->
	</ul>
</div>
</nav>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container">
	<div class="row mb-2">
		<div class="col-sm-6">
		<h1 class="m-0">Data <small>Marak 1.0</small></h1>
		</div><!-- /.col -->
		<div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
			<li class="breadcrumb-item active">Form Instansi</li>
		</ol>
		</div><!-- /.col -->
	</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container">
		<form action="" method="POST" id="form">
		<div class="row">
			<!-- /.col-md-6 -->
			<div class="col-lg-12">
			<div class="card card-default shadow">
			<div class="card-header">
				<h3 class="card-title text-primary">Form Instansi</h3>

				<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse">
					<i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove">
					<i class="fas fa-times"></i>
				</button>
				</div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
					<div class="form-group">
					<label for="exampleInputEmail1">Nama Instansi</label>
					<input type="text" class="form-control" id="namainstansi" name="namainstansi" placeholder="Input instansi">
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Wilayah</label>
							<select class="form-control select2" id="wilayah" name="wilayah" style="width: 100%;">
								<option selected="selected">-Pilih-</option>
							</select>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-md-6">
						<div class="form-group">
							<label>Provinsi</label>
							<select class="form-control select2" id="provinsi" name="provinsi" style="width: 100%;">
								<option selected="selected">-Pilih-</option>
							</select>
						</div>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Kabupaten/Kota</label>
							<select class="form-control select2" id="kabupaten" name="kabupaten" style="width: 100%;">
								<option selected="selected">-Pilih-</option>
							</select>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-md-6">
						<div class="form-group">
							<label>Alamat</label>
							<textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea>
						</div>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->


				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button class="btn btn-primary float-right" id="tombol_tambah" type="button">Simpan</button>
				</div>
			</div>
        <!-- /.card -->
		</div>
		<!-- /.col-md-6 -->
		</form>
		</div>
	<!-- /.row -->
	<div class="card shadow mb-3">
				<div class="card-header">
					<h3 class="card-title">DataTable Instansi</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
					<thead>
					<tr class="text-center">
						<th>No</th>
						<th>Instansi</th>
						<th>Alamat</th>
						<th>Wilayah</th>
						<th>Provinsi</th>
						<th>Kabupaten/Kota</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($data->result_array() as $row ):
						?>
					<tr>
					<td class="text-center"><?= $no++ ?></td>
                    <td><?= $row['m_data_instansi'] ?></td>
                    <td><?= $row['m_data_alamat'] ?></td>
                    <td><?= $row['wilayah_nama'] ?></td>
                    <td><?= $row['prov_nama'] ?></td>
                    <td><?= $row['kab_nama'] ?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
                </table>
				</div>
				<!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
<!-- To the right -->
<div class="float-right d-none d-sm-inline">
	Marak 1.0
</div>
<!-- Default to the left -->
<strong>Copyright &copy; 2021 <a href="#">Admin 1.0</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets'); ?>/plugins/select2/js/select2.min.js"></script>
<!-- Sweetalert2 -->
<script src="<?= base_url('assets');?>/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('assets'); ?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets'); ?>/plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets'); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('assets'); ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets'); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('assets'); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= base_url('assets'); ?>/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?= base_url('assets'); ?>/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
$(document).on("click", "#tombol_tambah", function () {
if(validasi()){
var data = $('#form').serialize();
$.ajax({
	type: 'POST',
	url: '<?=site_url('Instansi/create')?>',
	data: data,
	success: function(response) {
	var data=JSON.parse(response);
	if(data.success){
		SweetAlert.fire({
		icon: 'success',
		title: 'Berhasil',
		text: data.msg,
		showConfirmButton: true,
		});
	}else{
		SweetAlert.fire({
		icon: 'error',
		title: 'Error',
		text: data.msg,
		showConfirmButton: false,
		});
	}
	setTimeout(() => {  window.location.assign('<?php echo site_url("instansi")?>'); }, 2000);
	}
});
}
});
function validasi() {
	let namainstansi= document.getElementById("namainstansi").value;
	let wilayah 	= document.getElementById("wilayah").value;
	let provinsi 	= document.getElementById("provinsi").value;
	let kabupaten 	= document.getElementById("kabupaten").value;
	let alamat 		= document.getElementById("alamat").value;
	if ((namainstansi == "") || (wilayah == "") || (provinsi== "") || (alamat== "") || (kabupaten== "")) {
		if(namainstansi ==""){notif("Nama Instansi");}
		if(wilayah ==""){notif("Wilayah");}
		if(provinsi ==""){notif("Provinsi");}
		if(kabupaten ==""){notif("Kabupaten");}
		if(alamat ==""){notif("Alamat");}
	}else{
	return true;
	}
}

function notif(word){
	Swal.fire({
		title: 'Perhatian',
		text: word+' wajib di isi !',
		icon: 'info',
	}).then((result) => {})
}
$(function () {
    $("#example1").DataTable({
		"responsive": true, "lengthChange": false, "autoWidth": false,
		"buttons": ["excel"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"responsive": true,
    });
  });
</script>
<!-- Page specific script -->
<script>
	$(function () {
//Initialize Select2 Elements
$('.select2').select2()

//Initialize Select2 Elements
$('.select2bs4').select2({
	theme: 'bootstrap4'
})

//Datemask dd/mm/yyyy
$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
//Datemask2 mm/dd/yyyy
$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
//Money Euro
$('[data-mask]').inputmask()

//Date picker
$('#reservationdate').datetimepicker({
	format: 'L'
});




})

/ wilayah
$(document).ready(function() {
	$("#wilayah").select2({
	// minimumInputLength: 3,
		ajax: {
			url: '<?= base_url() ?>Instansi/getdatawil',
			type: "post",
			dataType: 'json',
			delay: 200,
			data: function(params) {
				return {
					searchTerm: params.term
				};
			},
			processResults: function(response) {
				return {
					results: response
				};
			},
			cache: true
		}
	});
});
// Provinsi
$("#wilayah").change(function() {
    var wilayah_id = $("#wilayah").val();
    $("#provinsi").select2({
        ajax: {
            url: '<?= base_url() ?>Instansi/getdataprov/' + wilayah_id,
            type: "post",
            dataType: 'json',
            delay: 200,
            data: function(params) {
                return {
                    searchTerm: params.term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
});
// Kabupaten
$("#provinsi").change(function() {
    var id_prov = $("#provinsi").val();
    $("#kabupaten").select2({
        ajax: {
            url: '<?= base_url() ?>Instansi/getdatakab/' + id_prov,
            type: "post",
            dataType: 'json',
            delay: 200,
            data: function(params) {
                return {
                    searchTerm: params.term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true
        }
    });
});
</script>
</body>
</html>
