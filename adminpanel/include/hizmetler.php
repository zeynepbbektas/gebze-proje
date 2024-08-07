<?php
include "ayar.php"; 
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Hizmetler</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Hizmetler</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
        <div class="col-md-12">
            <a href="hizmetler-insert" class="btn btn-success" style="float:right; margin-bottom:10px;"><i
                    class="fa fa-plus"></i>YENİ EKLE</a>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 80px;">Resim</th>
                            <th>icon</th>
                            <th>Başlık</th>
                            <th>Adres</th>
                            <th>Açıklama</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Detaylı Bilgi</th>
                            <th style="width: 130px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = getHizmetler($conn);
                        while ($hizmet = mysqli_fetch_assoc($result)):
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    $resimYolu = 'resimler/'.$hizmet["resim"];
                                    if (file_exists($resimYolu)):
                                        ?>
                                        <img src="<?php echo $resimYolu; ?>" alt="" class="img-fluid">
                                    <?php else: ?>
                                        <img src="<?php echo $hizmet["resim"]; ?>" alt="Varsayılan Resim" class="img-fluid">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $hizmet["icon"]; ?></td>
                                <td><?php echo $hizmet["baslik"]; ?></td>
                                <td><?php echo $hizmet["adres"]; ?></td>
                                <td><?php echo $hizmet["aciklama"]; ?></td>
                                <td><?php echo $hizmet["telefon"]; ?></td>
                                <td><?php echo $hizmet["eposta"]; ?></td>
                                <td><?php echo $hizmet["detayli_bilgi"]; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm"
                                        href="<?= SITE ?>baskanhizmetlari-edit/<?php echo $hizmet["id"]; ?>">Düzenle</a>
                                    <a class="btn btn-danger btn-sm"
                                        href="<?= SITE ?>baskanhizmetlari-delete/<?php echo $hizmet["id"] ?>"
                                        onclick="return confirm('Silmek istediğinize emin misiniz?');">Sil</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>