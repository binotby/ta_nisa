<!-- ================ -->
<!-- LOGICAL PHP CODE -->
<?php include('include/functions.php');

if (isset($_POST['hapus'])) {
    delete('penumpang', "idpenumpang = $_POST[idpenumpang]");
}

$penumpang = get_all("SELECT * FROM penumpang ORDER BY idpenumpang");

?>
<!-- END OF LOGICAL PHP CODE -->
<!-- ======================= -->


<!-- untuk edit header dari file header.php -->
<?php include('include/header.php') ?>

<div class="container">
    <div class="card card-body" style="overflow-x: scroll;">
        <table class="table display data-table" style="width:100%">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>ID Penumpang</th>
                    <th>NAMA</th>
                    <th>NO.TELP</th>
                    <th>EMAIL</th>
                    <th>BANDARA</th>
                    <th>KATEGORI</th>
                    <th>DESKRIPSI HAZARD</th>
                    <th>GAMBAR</th>
                    <th>AkSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($penumpang as $ppg) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $ppg['idpenumpang'] ?></td>
                        <td><?= $ppg['nama'] ?></td>
                        <td><?= $ppg['notelp'] ?></td>
                        <td><?= $ppg['email'] ?></td>
                        <td><?= $ppg['nmbandara'] ?></td>
                        <td><?= $ppg['nmkategori'] ?></td>
                        <td><?= $ppg['deskripsi'] ?></td>
                        <td>
                            <a href="/uploads/<?= $ppg['gambar'] ?>">
                                <img class="img-thumbnail" src="/uploads/<?= $ppg['gambar'] ?>">
                            </a>
                        </td>
                        <td style="width:1%;white-space: nowrap;">
                            <a class="btn btn-sm btn-primary" href="/edit-hazard.php?idpenumpang=<?= $ppg['idpenumpang'] ?>">Edit</a>
                            <form action="#" method="post" class="d-inline">
                                <input type="hidden" name="idpenumpang" value="<?= $ppg['idpenumpang'] ?>">
                                <button class="btn btn-sm btn-danger" name="hapus" type="submit">hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('.data-table').DataTable();
    });
</script>

<!-- untuk edit footer dari file footer.php -->
<?php include('include/footer.php') ?>