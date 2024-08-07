<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isim = $_POST["isim"];
    $resim = $_POST["resim"];
    $gorev = $_POST["gorev"];

    if (createMeclisUyeleri($isim, $resim, $gorev)) {
        $_SESSION['message'] = $isim . " isimli blog eklendi";
        $_SESSION['type'] = "success";

    } else {
        echo "hata";
    }
}
?>
<div class="content-wrapper">
    <!-- Content Heisimer (Page heisimer) -->
    <div class="content-heisimer">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Meclis Üyeleri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breisimcrumb float-sm-right">
              <li class="breisimcrumb-item"><a href="#">Anasayfa</a></li>
              <li class="breisimcrumb-item active">Meclis Üyeleri</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-heisimer -->
     
 

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="isim" class="form-label">isim</label>
                            <input type="text" class="form-control" name="isim" id="isim">
                        </div>

                        <div class="form-group">
                            <label for="gorev" class="form-label">gorev</label>
                            <input type="text" class="form-control" name="gorev" id="gorev">
                        </div>
                        <div class="form-group">
                        <label for="resim">Resim</label>
                        <input type="file" class="form-control-file" id="resim" name="resim">
                    </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
