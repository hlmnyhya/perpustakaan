<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="js2/bootstrap.min.js">
    <link rel="stylesheet" href="style.css">
    <title>PERPUSTAKAAN</title>
</head>

<body>
    <!-- Sidebar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-md p-lg-4 fixed-top">
        <a class="navbar-brand text-white" href="beranda.php"><b>PERPUSTAKAAN DAERAH</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="akun.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg> User</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="mt-lg-5">
        <div class="row" id="body-row">
            <div id="sidebar-container" class="bg-dark sidebar-expanded d-none d-md-block shadow-lg">
                <div class="col-lg-12 mt-lg-5">
                    <ul class="list-group">
                        <div class="mt-5">
                            <a href="beranda.php" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start" style="background-color: dark;">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <small><b>MAIN MENU</b></small>
                                </div>
                            </a>
                            <a href="beranda.php" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                        </svg> DASHBOARD</span>
                                </div>
                            </a>
                            <a href="anggota.php" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-user fa-fw mr-3"></span>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                        </svg> ANGGOTA</span>
                                </div>
                            </a>
                            <a href="buku.php" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-user fa-fw mr-3"></span>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                        </svg> BUKU</span>
                                </div>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- End Sidebar -->
            
                <div class="col-lg-9 ml-lg-5 mt-lg-5 col-2">
                    <br><br>
                    <div id="carouselExampleSlidesOnly" class="carousel slide shadow-lg" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="vektor/c2.jpg" alt="First slide" width="550" height="250">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-5">
                        <h4 class="text-center">PERPUSTAKAAN DAERAH</h4>
                        <div class="col mt-lg-4 row-2 text-justify">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laudantium vero neque.
                                Magni aut maiores quo? Quaerat sequi fugit velit beatae similique sit.
                                Consequatur laboriosam, quos tempore dignissimos sunt reprehenderit?"
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente excepturi odio itaque cumque ut ipsam reiciendis ipsa vero odit harum
                                explicabo voluptatem deleniti aut quis labore, magnam doloremque quos nobis?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, provident mollitia sint
                                consectetur eum porro dicta, quas corporis dolore labore odit quasi laudantium ut.
                                Labore molestias esse amet itaque minima.
                            </p>
                        </div>
                        <div class="col mt-lg-4 row-3 text-justify">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laudantium vero neque.
                                Magni aut maiores quo? Quaerat sequi fugit velit beatae similique sit.
                                Consequatur laboriosam, quos tempore dignissimos sunt reprehenderit?"
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente excepturi odio itaque cumque ut ipsam reiciendis ipsa vero odit harum
                                explicabo voluptatem deleniti aut quis labore, magnam doloremque quos nobis?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, provident mollitia sint
                                consectetur eum porro dicta, quas corporis dolore labore odit quasi laudantium ut.
                                Labore molestias esse amet itaque minima.
                            </p>
                        </div>
                    </div>
                </div>
                <footer class="sticky-footer bg-primary text-lg-center text-white shadow-lg p-lg-5">
                    <span>Copyright &copy; Hilmanadi Yahya 2021</span>
                </footer>
        </>
    </div>
    </div>

</body>

</html>