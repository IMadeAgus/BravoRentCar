<!DOCTYPE html>
<html lang="en">
<?php include '../Koneksi/koneksi.php';?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Sewa Mobil</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="../Bootstrap/bootstrap.css" />
    <!-- CSS Custom -->
    <link rel="stylesheet" href="../Css/style.css" />
    <!-- Css Responsive -->
    <link rel="stylesheet" href="../Css/responsive.css">
    <!-- Feather Icons -->
    <script script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top  navbar-light" style="background-color: #412496;">
        <div class="container-fluid py-2">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                <img src="../img/logo.png" width="50" height="50" class="navbar-logo" alt="">
                BRAVO RENT CAR
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i data-feather="list"></i></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="final.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="final.php">CAR LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orderlist.php">ORDER LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">GALLERY</a>
                    </li>
                    <li>
                        <a class="nav-link" href="logout.php" onclick="return confirm('Yakin mau Log Out?')">LOG
                            OUT</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- //End Navbar Session -->

    <!-- GALLERY -->
    <div class="container-fluid gallery">
        <h2 class="fw-bold  my-5">GALLERY</h2>

        <table class="gallery" width="100%" height="100%">
            <!-- Baris 1 -->
            <tr>
                <td>
                    <img class="img " src="../img/img1.png" alt="">
                </td>
                <td>
                    <img class="img" src="../img/img2.png" alt="">
                </td>
                <td rowspan="2" colspan="2">
                    <img class="imgbesar img-fluid" src="../img/img3.png" alt="">
                </td>
                <td></td>
            </tr>
            <!-- Baris 2 -->
            <tr>
                <td>
                    <img class="img" src="../img/img4.png" alt="">
                </td>
                <td>
                    <img class="img" src="../img/img5.png" alt="">
                </td>
            </tr>
            <!-- Baris 3 -->
            <tr>
                <td rowspan="2">
                    <img class="imgbesar" src="../img/img6.png" alt="">
                </td>
                <td>
                    <img class="img" src="../img/img7.png" alt="">
                </td>
                <td>
                    <img class="img" src="../img/img8.png" alt="">
                </td>
                <td>
                    <img class="img" src="../img/img9.png" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <img class="img" src="../img/img10.png" alt="">
                </td>
                <td>
                    <img class="img" src="../img/img11.png" alt="">
                </td>
                <td>
                    <img class="img" src="../img/img12.png" alt="">
                </td>
            </tr>
        </table>
    </div>

    <!-- //end GALLERY session -->






    <!-- Footer -->
    <section class="Footer ">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-4 py-5">

                    <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                        <img src="../img/logo2.png" width="55" height="55" class="navbar-logo" alt="">
                        <h3 class="fw-bold">BRAVO RENT CAR</h3>
                    </a>

                    <p class="text-white mt-2">Drive in Paradise, Feel the Bravo Vibes! </p>
                    <div>
                        <a href="https://www.instagram.com/bravoclasstrpl/"> <i
                                class="fa-brands fa-instagram fa-2xl mx-3 icon-footer" style="color: #ffffff;"></i></a>
                        <i class="fa-brands fa-whatsapp fa-2xl mx-4 icon-footer" style="color: #ffffff;"></i>
                        <i class="fa-brands fa-square-facebook fa-2xl mx-3 icon-footer" style="color: #ffffff;"></i>

                    </div>
                </div>
                <div class="col-4">

                </div>
                <div class="col-4">
                    <div class="text-white mt-5 ">
                        <h3 class="fw-bold">Contact Us</h3>
                        <p class="mt-3">Kampus Bukit, Jimbaran, South Kuta, Badung Regency, Bali 80364</p>
                        <p>(0361) 701981</p>
                        <p>BravoRentCar@gmail.com</p>

                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center py-3">
                <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                    <p class="text-white text-center">Copyright@2023 BMWM Team. All Rights Reserved.</p>
                </div>
            </div>
        </div>

    </section>

    <!--  -->


    <!-- Bootsrap js -->
    <script src="../js/bootstrap.bundle.js"></script>
    <script>
    feather.replace()
    </script>
</body>

</html>