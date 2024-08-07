<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isim = $_POST['isim'];
        $unvan = $_POST['unvan'];
        $telefon = $_POST['telefon'];
        $email = $_POST['email'];
        $resim = $_FILES['resim']['name'];

        // Resmi yükleyin
        if (!empty($resim)) {
            $targetDir = "resimler/";
            $targetFile = $targetDir . basename($resim);
            move_uploaded_file($_FILES['resim']['tmp_name'], $targetFile);
        }

        // Veriyi ekleyin
        $result = createBaskanYardimcilari($isim, $unvan, $telefon, $email, $resim);

        if ($result) {
            echo "<div class='alert alert-success'>Başkan yardımcısı başarıyla eklendi.</div>";
        } else {
            echo "<div class='alert alert-danger'>Başkan yardımcısı eklenirken bir hata oluştu.</div>";
        }
    }
?>

<!-- HTML Form -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Başkan Yardımcıları</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Başkan Yardımcıları</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container my-3">


        <!-- Form -->
        <div class="row">
            <div class="col-9">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="isim">İsim</label>
                        <input type="text" class="form-control" id="isim" name="isim" required>
                    </div>
                    <div class="form-group">
                        <label for="unvan">Unvan</label>
                        <input type="text" class="form-control" id="unvan" name="unvan" required>
                    </div>
                    <div class="form-group">
                        <label for="telefon">Telefon</label>
                        <input type="text" class="form-control" id="telefon" name="telefon" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-posta</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="resim">Resim</label>
                        <input type="file" class="form-control-file" id="resim" name="resim">
                    </div>
                    <button type="submit" class="btn btn-primary">Ekle</button>
                </form>
            </div>
        </div>
    </div>
</div>