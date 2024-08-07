<<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Meclis Üyeleri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Meclis Üyeleri</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
        <div class="col-md-12">
            <a href="<?= SITE ?>haberler_insert" class="btn btn-success" style="float:right; margin-bottom:10px;"><i
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
                            <th>İsim</th>
                            <th>Görev</th>
                            <th style="width: 130px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = getHaberler($conn);
                        while ($haber = mysqli_fetch_assoc($result)):
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    $resimYolu = 'resimler/' . $haber["resim"];
                                    if (file_exists($resimYolu)):
                                        ?>
                                        <img src="<?php echo $resimYolu; ?>" alt="" class="img-fluid">
                                    <?php else: ?>
                                        <img src="img/default.jpg" alt="Varsayılan Resim" class="img-fluid">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $haber["baslik"]; ?></td>
                                <td><?php echo $haber["aciklama"]; ?></td>
                                <td><?php echo $haber["haber_url"]; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm"
                                        href="haberler-edit/<?php echo $haber["id"]; ?>">Düzenle</a>
                                    <a class="btn btn-danger btn-sm"
                                        href="haberler-delete/<?php echo $haber["id"]; ?>">Sil</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>


            </div>

        </div>

    </div>