<!-- ================ -->
<!-- LOGICAL PHP CODE -->
<?php include('include/functions.php');

$bandara = get_all("SELECT idbandara,nmbandara,kota FROM bandara ORDER BY nmbandara");
$kategori = get_all("SELECT idkategori,nmkategori,keterangan FROM kategori ORDER BY nmkategori");

if (isset($_POST['submit'])) {
	$gambar = upload_file($_FILES['gambar']);

	$data = [
		'idpenumpang' => $_POST['idpenumpang'],
		'nama' => $_POST['nama'],
		'notelp' => $_POST['notelp'],
		'email' => $_POST['email'],
		'nmbandara' => $_POST['nmbandara'],
		'nmkategori' => $_POST['nmkategori'],
		'tgl' => $_POST['tgl'],
		'deskripsi' => $_POST['deskripsi'],
		'gambar' => $gambar,
	];

	insert('penumpang', $data);
}
?>
<!-- END OF LOGICAL PHP CODE -->
<!-- ======================= -->


<!-- untuk edit header dari file header.php -->
<?php include('include/header.php') ?>

<div class="container mt-5" style="margin-top: 80px">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-header">
					FORM HAZARD REPORTING
				</div>
				<div class="card-body">
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="mb-3">
							<label for="idpenumpang" class="form-label">ID Penumpang</label>
							<input type="text" class="form-control" id="idpenumpang" name="idpenumpang" required>
						</div>

						<div class="mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" required>
						</div>

						<div class="mb-3">
							<label for="notelp" class="form-label">No.Telp</label>
							<input type="text" class="form-control" id="notelp" name="notelp" required>
						</div>

						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="text" class="form-control" id="email" name="email" required>
						</div>

						<div class="mb-3">
							<label for="tgl" class="form-label">Tanggal</label>
							<input type="date" class="form-control" id="tgl" name="tgl" required>
						</div>

						<div class="row">
							<div class="col-md-6">
								<label for="bandara" class="form-label">Bandara</label>

								<select class="form-select" id="nmbandara" name="nmbandara" required>
									<option selected>Open this select menu</option>
									<?php foreach ($bandara as $bnd) : ?>
										<option value="<?= $bnd['nmbandara'] ?>" data-kota="<?= $bnd['kota'] ?>"><?= $bnd['nmbandara'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label for="kota" class="form-label">Kota</label>
									<input type="text" class="form-control" id="kota" name="kota" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="kategori" class="form-label">Kategori</label>

								<select class="form-select" id="nmkategori" name="nmkategori" required>
									<option selected>Open this select menu</option>
									<?php foreach ($kategori as $kat) : ?>
										<option value="<?= $kat['nmkategori'] ?>" data-keterangan="<?= $kat['keterangan'] ?>"><?= $kat['nmkategori'] ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label for="keterangan" class="form-label">Keterangan</label>
									<input type="text" class="form-control" id="keterangan" name="keterangan" required>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="deskripsi" class="form-label">Deskripsi Hazard</label>
							<textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
						</div>
						<div class="mb-3">
							<input type="file" class="form-control" aria-label="file example" name="gambar" required>
						</div>
						<button type="submit" name="submit" class="btn btn-success">SIMPAN</button>
						<button type="reset" name="reset" class="btn btn-warning">RESET</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	document.getElementById("nmbandara").addEventListener("change", function() {
		e = document.getElementById("nmbandara");
		var kota = e.options[e.selectedIndex].dataset.kota;
		document.getElementById("kota").value = kota;
	});
	document.getElementById("nmkategori").addEventListener("change", function() {
		e = document.getElementById("nmkategori");
		var keterangan = e.options[e.selectedIndex].dataset.keterangan;
		document.getElementById("keterangan").value = keterangan;
	});
</script>

<!-- untuk edit footer dari file footer.php -->
<?php include('include/footer.php') ?>