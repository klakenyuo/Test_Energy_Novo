<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/1894fe19d0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Energy Novo</title>
</head>
<body class="d-flex">
   <div style="position: fixed !important; overflow-x:hidden !important;" class="col-md-3 col-1 d-fle flex-column justify-content-center min-vh-100  h-25 pt-3 shadow">
        <!-- logo -->
        <div class="w-md-100 d-flex justify-content-center">
            <img class="d-none d-md-block" src="logo_energy.png" alt="">
            <img class="d-md-none" src="icon_energy.png" alt="">
        </div>

        <!-- user info -->
        <div class="w-md-100 mt-3 p-3 d-flex px-md-5   " style="background-color:#11D68C;">
            <img src="user_logo.png" alt="" width="20%" class="d-none d-md-block">
            <img src="user_logo.png" alt="" width="200%" class="d-md-none" >
            <div class="flex-column text-white px-md-2 d-none d-md-block ">
                <span class="fs-5 fw-md-bold">Rone Dupuis</span> <br>
                <span class="-mt-4">Secrétaire - Paris</span>
            </div>
        </div>
        <!-- Menu navigation -->
        <nav class="w-md-100 sidebar   mt-3 flex-column side_menu fs-6">
            <ul class="p-0">
                <li class="nav-item">
                    <a href="#"  class="  text-decoration-none nav-link   p-2 d-flex px-md-5 align-items-center  " >
                        <i class="fa fa-home "></i>
                        <span class=" mx-4  ">Tableau de Bord</span> <br>
                    </a>
                </li>
                <li class=" nav-item has-submenu">
                    <a href="#"   class=" text-decoration-none nav-link  justify-content-between d-flex p-2 d-flex px-md-5 align-items-center  " >
                        <span>
                            <i class="fa fa-wrench "></i>
                            <span class=" mx-4  ">Dossiers Clients</span> <br>
                        </span>
                        <i class="fa fa-chevron-right chevron_change"></i>
                    </a>
                    <ul class="submenu collapse border-dark border-bottom m-3 text-secondary pl-3">
                        <li class="mx-5"><a class="sub-link nav-link text-decoration-none text-secondary" href="#">Avant installation </a></li>
                        <li class="mx-5"><a class="sub-link nav-link text-decoration-none text-secondary" href="/apres_installation">Après installation</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"  class=" text-decoration-none nav-link   p-2 d-flex px-md-5 align-items-center  " >
                        <i class="fa fa-calendar  "></i>
                        <span class=" mx-4  ">Agenda</span> <br>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"  class=" text-decoration-none nav-link   p-2 d-flex px-md-5 align-items-center  " >
                        <i class="fa fa-industry  "></i>
                        <span class=" mx-4  ">Rapport d’activité</span> <br>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"  class=" text-decoration-none nav-link   p-2 d-flex px-md-5 align-items-center  " >
                        <i class="fa fa-bell  "></i>
                        <span class=" mx-4  ">Notifications</span> <br>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"  class=" text-decoration-none nav-link   p-2 d-flex px-md-5 align-items-center  " >
                        <i class="fa fa-user  "></i>
                        <span class=" mx-4  ">Modifier mon profil</span> <br>
                    </a>
                </li>
            </ul>
             
        </nav>
        <div class="w-md-100   mt-3  fs-6 mt-5 pt-5    ">
            <a href="#"  class=" text-decoration-none text-dark  p-2 d-flex px-md-5 align-items-center  " >
                <img class="d-none d-md-block" src="signout.png" alt="">
                <span class=" mx-4  ">Deconnexion</span> <br>
            </a>
        </div>
    </div>
    {{-- section body --}}
        @yield('body')
    {{-- end section --}}
    
</body>
</html>