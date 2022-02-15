<?php
$id = $_GET['id'];

$sql = "SELECT * FROM t_tamu WHERE no=$id";
$sql_select = mysqli_query($konek, $sql);
$data = mysqli_fetch_array($sql_select);
?>

<main class="container">
    <div class="bg-light p-4 rounded">
        <h1>Perbarui Data Tamu</h1>
        <form method="post" action="?page=prosesupdate">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                <input type="email" name="email" class="form-control" placeholder="moch.kholil@akb.ac.id" required  value="<?php echo $data['email']; ?>">
                <input type="hidden" name="no" value=<?php echo $data['no']; ?>>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-5">
                <input type="text" name="nama" class="form-control" placeholder="Moch. Kholil" value="<?php echo $data['nama'];?>" required>
                </div>
            </div>
            <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="L" <?php if($data['gender'] == "L"){echo "checked";} ?> >
                <label class="form-check-label">
                Laki-Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="P" <?php if($data['gender'] == "P"){echo "checked";} ?>>
                <label class="form-check-label">
                Perempuan
                </label>
            </div>
            </div>
            </fieldset>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-5">
                <input type="text" name="telp" class="form-control" placeholder="0856xxxxxxxx" pattern="[0-9]+" value="<?php echo $data['telp']; ?>" required >
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Keperluan</label>
                <div class="col-sm-5">
                <textarea name="keperluan" class="form-control" placeholder="Tuliskan Keperluan Anda!" required><?php echo $data['keperluan']; ?></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</main>
