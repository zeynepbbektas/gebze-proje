<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST["ad"];
    $yetkili = $_POST["yetkili"];
    $e_posta = $_POST["e_posta"];
    $resim = $_POST["resim"];
    $yonetmelik = $_POST["yonetmelik"];

    if (createMudurlukler($ad, $yetkili, $e_posta, $resim, $yonetmelik)) {
        $_SESSION['message'] = $ad . " isimli blog eklendi";
        $_SESSION['type'] = "success";

    } else {
        echo "hata";
    }
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Müdürlükler</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Müd</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     
 

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="ad" class="form-label">ad</label>
                            <input type="text" class="form-control" name="ad" id="ad">
                        </div>
                        <div class="mb-3">
                            <label for="yetkili" class="form-label">yetkili</label>
                            <input type="text" class="form-control" name="yetkili" id="yetkili">
                        </div>
                        <div class="form-group">
                            <label for="e_posta" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="e_posta" id="e_posta" placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label for="resim" class="form-label">resim</label>
                            <input type="text" class="form-control" name="resim" id="resim">
                        </div>
                        <div class="mb-3">
                            <label for="yonetmelik" class="form-label">yonetmelik</label>
                            <input type="text" class="form-control" name="yonetmelik" id="yonetmelik">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
