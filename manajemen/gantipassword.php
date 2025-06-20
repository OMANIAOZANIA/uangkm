<?php
include 'header.php';
include '../config/db.php';
?>

<div class="content-wrapper">
<section class="content-header">
    <h1>Ganti Password <small>Ganti Password</small></h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
    </ol>
</section>

<section class="content">
    <div class="row">
    <section class="col-lg-5">

        <?php if (isset($_GET['alert']) && $_GET['alert'] == "sukses"): ?>
        <div class="alert alert-success">
            Password anda berhasil diganti!
        </div>
        <?php endif; ?>

        <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Ganti Password</h3>
        </div>
        <div class="box-body">
            <form action="gantipassword_act.php" method="post">
            <div class="form-group">
                <label>Masukkan Password Baru</label>
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password Baru .." required minlength="5">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
            </div>
            </form>
        </div>
        </div>

    </section>
    </div>
</section>
</div>

<?php include 'footer.php'; ?>