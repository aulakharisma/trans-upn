<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CRUD CI 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>

<!-- SIDEBARS -->
    <section id="sidebar">
        <a href="#" class="brand"> <i class="fa-solid fa-file-code"></i> CRUD CI3 - Aula </a>
        <ul class="side-menu">
            <li><a href="#" class="active"> <i class="fa-solid fa-house"></i> Dashboard </a></li>
            <li class="divider">Main Data</li>
            <li>
                <a href="#"> <i class="fa-solid fa-file-code"></i> Elements <i class="fa-solid fa-chevron-right next-icon"></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Alert</a></li>
                    <li><a href="#">Alert</a></li>
                    <li><a href="#">Alert</a></li>
                    <li><a href="#">Alert</a></li>
                </ul>
            </li>
            <li><a href="#"> <i class="fa-solid fa-users"></i> User </a></li>
        </ul>
    </section>

<!-- NAVBAR -->
    <section id="content">
        <nav>
            <i class="fa-solid fa-bars toggle-sidebar"></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class="fa-solid fa-magnifying-glass icon"></i>
                </div>
            </form>
            <a href="#" class="nav-link">
                <i class="fa-solid fa-message icon"></i>
                <span class="badge">5</span>
            </a>
            <a href="#" class="nav-link">
                <i class="fa-solid fa-bell icon"></i>
                <span class="badge">5</span>
            </a>

            <span class="divider"></span>
            <div class="profil">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.lensmen.ie%2Fwp-content%2Fuploads%2F2015%2F02%2FProfile-Portrait-Photographer-in-Dublin-Ireland..jpg&f=1&nofb=1&ipt=2157107dac9c1595ca5c081e0633d14827b4153bc5c6b011ba2b1d389785e7c0&ipo=images" alt="">
                <ul class="profil-link">
                    <li><a href="#"><i class="fa-solid fa-circle-user icon"></i>Profile</a></li>
                    <li><a href="#"><i class="fa-solid fa-gear"></i>Setting</a></li>
                    <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
                </ul>
            </div>
        </nav>
    </section>
























    <!-- <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="bg-dark col-auto col-md-2 min-vh-100">
                <div class="bg-dark p-3">
                    <a href="#" class="d-flex text-decoration-none mt-1 align-items-center text-white">
                        <span class="fs-4 d-none d-sm-inline">SideMenu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle"  id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-6 fa-solid fa-house"></i><span class="fs-6 d-none d-sm-inline">Dashboard</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>`
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-6 fa-solid fa-table"></i><span class="fs-6 d-none d-sm-inline">Main Data</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">
                                <i class="fs-6 fa-solid fa-user"></i><span class="fs-6 d-none d-sm-inline">User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="asset/script.js"></script>
</body>
</html>