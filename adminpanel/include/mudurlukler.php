<?php
include_once (DATA . "ust.php");
include_once (DATA . "menu.php");
if (!isset($_SESSION['kullaniciadi'])) {
  header("Location: " . SITE . "login.php");
  exit();
}
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Müdürlükler</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
            <li class="breadcrumb-item active">Müdürlükler</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <a href="mudurlukler-insert" class="btn btn-success" style="float:right; margin-bottom:10px;"><i
          class="fa fa-plus"></i>YENI EKLE</a>
    </div>
  </div>
  <div class="container my-3">

    <div class="row">

      <div class="col-12">

        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 80px;">Resim</th>
              <th>Ad</th>
              <th>Yetkili</th>
              <th>E-posta</th>
              <th>Yönetmelik</th>
              <th style="width: 130px;"></th>
            </tr>
          </thead>
          <tbody>
            <?php $result = getMudurlukler($conn);
            while ($mudurluk = mysqli_fetch_assoc($result)): ?>
              <tr>
                <td>
                  <img src="<?php echo $mudurluk["resim"] ?>" alt="" class="img-fluid">
                </td>
                <td><?php echo $mudurluk["ad"] ?></td>
                <td><?php echo $mudurluk["yetkili"] ?></td>
                <td><?php echo $mudurluk["e_posta"] ?></td>
                <td><?php echo $mudurluk["yonetmelik"] ?></td>
                <td>
                  <a class="btn btn-primary btn-sm"
                    href="<?= SITE ?>mudurlukler-edit/<?php echo $mudurluk["id"]; ?>">Düzenle</a>
                  <a class="btn btn-danger btn-sm" href="<?= SITE ?>mudurlukler-delete/<?php echo $mudurluk["id"] ?>"
                    onclick="return confirm('Silmek istediğinize emin misiniz?');">Sil</a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>


      </div>

    </div>

  </div><?php
  include_once (DATA . "footer.php");
  ?>