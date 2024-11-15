<?php
$session    = session();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rego | Upload Pembayaran Event</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/iconRego.png" rel="icon">
    <link href="../assets/img/iconRego.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets_admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets_admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets_admin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets_admin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets_admin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets_admin/vendor/simple-datatables/style.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

    <!-- Template Main CSS File -->
    <link href="../assets_admin/css/style.css" rel="stylesheet">
</head>

<body>

    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Upload Bukti Bayar Registrasi Event
                                            Di REGO</h5>
                                        <h5>Berikut Data Event</h5>
                                        <table width="100%">
                                            <tr>
                                                <td width="30%">Nama Event</td>
                                                <td width="35%"> Tanggal Event</td>
                                                <td width="35%">Lokasi Event</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><?= $dataEvent[0]['namaEvent'] ?></td>
                                                <td width="35%"><?= $dataEvent[0]['tanggalEvent'] ?></td>
                                                <td width="35%"><?= $dataEvent[0]['lokasiEvent'] ?></td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <h5>Silahkan Melakukan Pembayaran Melalui Nomor Rekening Di Bawah Ini </h5>
                                        <table width="100%">
                                            <tr>
                                                <td width="30%">Nomor Rekening 1</td>
                                                <td width="35%">Nomor Rekening 2</td>
                                                <td width="35%">Nomor Rekening 3</td>
                                            </tr>
                                            <tr>
                                                <td width="30%">BCA : 123456</td>
                                                <td width="35%">BSI : 123456</td>
                                                <td width="35%">BNI : 123456</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <form method="POST" action="<?= base_url() ?>UploadBuktiPembayaranEvent"
                                        enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="yourUsername" class="form-label">Nomor Rekening
                                                    Pembayaran</label>
                                                <div class="input-group has-validation">
                                                    <input type="text" name="idEvent" class="form-control"
                                                        id="yourUsername" value="<?= $dataEvent[0]['idEvent'] ?>"
                                                        hidden>
                                                    <input type="number" name="nomorRekeningPembayaran"
                                                        class="form-control" id="yourUsername" required>
                                                    <div class="invalid-feedback">Masukkan Nomor Rekening Pembayaran
                                                    </div>
                                                </div>
                                                <label for="yourUsername" class="form-label">Nama Rekening
                                                    Pembayaran</label>
                                                <div class="input-group has-validation">
                                                    <input type="text" name="namaRekeningPembayaran"
                                                        class="form-control" id="yourUsername" required>
                                                    <div class="invalid-feedback">Masukkan Nama Rekening Pembayaran
                                                    </div>
                                                </div>
                                                <label for="yourUsername" class="form-label">Bukti Bayar</label>
                                                <div class="input-group has-validation">
                                                    <input type="file" name="buktiBayar" class="form-control"
                                                        id="yourUsername" required>
                                                    <div class="invalid-feedback">Masukkan Nama Rekening Pembayaran
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" style="margin-top:1%;">
                                                <button class="btn btn-primary w-100" type="submit">Upload Bukti
                                                    Bayar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
        </div>

        </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="../assets_admin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets_admin/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets_admin/vendor/echarts/echarts.min.js"></script>
    <script src="../assets_admin/vendor/quill/quill.min.js"></script>
    <script src="../assets_admin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets_admin/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets_admin/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="../assets_admin/js/main.js"></script>

    <!-- Sweet Alert -->
    <script script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?php
    $dataSession = $session->get('status');
    $dataKeterangan = $session->get('keterangan');
    if ($dataSession == "Berhasil") {
    ?>
        <script>
            swal("Selamat ! ", "<?= $dataKeterangan; ?>", "success");
        </script>
    <?php
        $arraySession = ['status', 'keterangan'];
        $session->remove($arraySession);
    } else if ($dataSession == "Gagal") {
    ?>
        <script>
            swal("Gagal ! ", "<?= $dataKeterangan; ?>", "error");
        </script>
    <?php
        $arraySession = ['status', 'keterangan'];
        $session->remove($arraySession);
    }
    ?>

</body>

</html>