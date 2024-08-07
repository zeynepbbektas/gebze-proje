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
            <a href="meclisuyeleri-insert" class="btn btn-success" style="float:right; margin-bottom:10px;"><i
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
                        $result = getMeclisUyeleri($conn);
                        while ($uyeler = mysqli_fetch_assoc($result)):
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    $resimYolu = $uyeler["resim"];
                                    ?>
                                    <img src="<?php echo $resimYolu; ?>" alt="" class="img-fluid">
                                </td>
                                <td><?php echo $uyeler["isim"]; ?></td>
                                <td><?php echo $uyeler["gorev"]; ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm"
                                        href="<?= SITE ?>meclisuyeleri-edit/<?php echo $uyeler["id"]; ?>">Düzenle</a>
                                    <a class="btn btn-danger btn-sm"
                                        href="<?= SITE ?>meclisuyeleri-delete/<?php echo $uyeler["id"] ?>"
                                        onclick="return confirm('Silmek istediğinize emin misiniz?');">Sil</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>


            </div>

        </div>

    </div>