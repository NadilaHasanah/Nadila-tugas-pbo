<?php
// include 'dbcontroller.php';
require_once('dbcontroller.php');
$db = new dbController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=62969761faada80019c4386c&product=inline-share-buttons'
        async='async'></script>
    <link rel="icon"
        href="https://smknegeri40-jkt.sch.id/wp-content/uploads/2023/07/Logo_SMK_Negeri_40_Jakarta-150x150.png"
        sizes="32x32" />
    <link rel="icon" href="https://smknegeri40-jkt.sch.id/wp-content/uploads/2023/07/Logo_SMK_Negeri_40_Jakarta.png"
        sizes="192x192" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tugas PBO</title>
</head>

<body>
    <!-- Navbar -->
    <div class="fixed-top bg-light" style="height: 64px;" data-aos="fade-down" data-aos-duration="1000">
        <nav class="navbar container navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand text-dark" href="#">SMKN 40 JAKARTA</a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kelas">Kelas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jurusan">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#guru">Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#siswa">Siswa</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <hr style="position: relative; bottom: 10px;">
    </div>
    <!-- Akhir Navbar -->

    <!-- Cards -->
    <div class="container" id="kelas">
        <button title="Back To Top" class="btnScrollToTop bg-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-up"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
            </svg>
        </button>
        <h1 class="text-center text-center mb-5 mt-70">Kelas</h1>
        <div class="row text-center justify-content-center">

            <?php
            $sql = "select * from t_kelas";
            $row = $db->getALL($sql);
            foreach ($row as $value) :
            ?>

            <div class="card-all col-md-4 col-xl-4 mb-5" data-aos="flip-right" data-aos-duration="1000">
                <div class="card" style="width: 18rem;">
                    <img src="img/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Kelas">
                    <div class="card-body">
                        <h5 class="card-title text-dark">

                            <?php echo $value['f_nama']; ?>

                        </h5>
                    </div>
                </div>
            </div>

            <?php
            endforeach
            ?>
        </div>
    </div>

    <div class="container" id="jurusan">
        <h1 class="text-center text-center mb-5 mt-3">Jurusan</h1>
        <div class="row text-center justify-content-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
            data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="false" data-aos-once="false"
            data-aos-anchor-placement="top-center">

            <?php
            $sql = "select * from t_jurusan";
            $row = $db->getALL($sql);
            foreach ($row as $value) :
            ?>

            <div class="card-all col-md-4 col-xl-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="img/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Jurusan">
                    <div class="card-body">
                        <h5 class="card-title text-dark">

                            <?php echo $value['f_nama']; ?>

                        </h5>
                        <p class="card-text" style="font-size: 14px;">
                            <?php echo $value['f_deskripsi']; ?>
                        </p>
                    </div>
                </div>
            </div>

            <?php
            endforeach
            ?>
        </div>

        <div class="container" id="guru">
            <h1 class="text-center text-center mb-5 mt-3">Guru</h1>
            <div class="row text-center justify-content-center" data-aos="fade-up" data-aos-offset="200"
                data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-mirror="false"
                data-aos-once="false" data-aos-anchor-placement="top-center">

                <?php
                $sql = "select * from t_guru";
                $row = $db->getALL($sql);
                foreach ($row as $value) :
                ?>

                <div class="card-all col-md-4 col-xl-6 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?php echo $value['f_nama']; ?>.jpg" class="card-img-top" alt="Guru">
                        <div class="card-body">
                            <h5 class="card-title text-dark">

                                <?php echo $value['f_nama']; ?>

                            </h5>
                        </div>
                    </div>
                </div>

                <?php
                endforeach
                ?>
            </div>

            <div class="container" id="siswa">
                <h1 class="text-center text-center mb-5 mt-3">Siswa</h1>
                <div class="row text-center justify-content-center">

                    <?php
                    // Menggunakan PDO untuk menghubungkan ke database
                    $db = new PDO("mysql:host=localhost;dbname=sekolah", "root", "");

                    // Kueri SQL dengan JOIN untuk mengambil data siswa, nama kelas, dan nama jurusan
                    $sql = "SELECT t_siswa.f_nama, t_kelas.f_nama AS f_idkelas, t_jurusan.f_nama AS f_idjurusan
                        FROM t_siswa
                        INNER JOIN t_kelas ON t_siswa.f_idkelas = t_kelas.f_idkelas
                        INNER JOIN t_jurusan ON t_siswa.f_idjurusan = t_jurusan.f_idjurusan";

                    $result = $db->query($sql);

                    foreach ($result as $row) :
                    ?>

                    <div class="card-all col-md-4 col-xl-6 mb-5" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card" style="width: 18rem;">
                            <img src="img/<?php echo $row['f_nama']; ?>.jpg" class="card-img-top" alt="Siswa">
                            <div class="card-body">
                                <h5 class="card-title text-dark">
                                    <?php echo $row['f_nama']; ?>
                                </h5>
                                <span>Kelas: <?php echo $row['f_idkelas']; ?></span>
                                <p>Jurusan: <?php echo $row['f_idjurusan']; ?></p>
                            </div>
                        </div>
                    </div>

                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#D9D9D9" fill-opacity="1"
            d="M0,160L26.7,181.3C53.3,203,107,245,160,261.3C213.3,277,267,267,320,266.7C373.3,267,427,277,480,245.3C533.3,213,587,139,640,128C693.3,117,747,171,800,197.3C853.3,224,907,224,960,213.3C1013.3,203,1067,181,1120,170.7C1173.3,160,1227,160,1280,138.7C1333.3,117,1387,75,1413,53.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
        </path>
    </svg>
    <footer class="text-dark text-center mt-25" style="background: #D9D9D9;">
        <p>
            <a href="https://www.instagram.com/nadilaa.hasnh_5/" target="_blank"
                class="text-dark text-decoration-none fw-bold">
                <i class="bi bi-suit-heart-fill"></i>
            </a>
            Created by Nadila &copy;CopyRight
        </p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    const btnScrollToTop = document.querySelector(".btnScrollToTop");

    btnScrollToTop.addEventListener("click", function() {
        window.scrollTo(0, 0);
    });
    window.addEventListener("scroll", () => {
        if (window.pageYOffset > 100) {
            btnScrollToTop.classList.add("active");
        } else {
            btnScrollToTop.classList.remove("active");
        }
    })
    AOS.init();
    </script>
    <!-- Akhir Cards -->
</body>

</html>