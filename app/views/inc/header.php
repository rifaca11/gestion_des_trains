<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Trains</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="wrapper" style="min-height: 800px !important">
        <nav id="sidebar">
            <div class="fixed">
                <div class="sidebar-header">
                    <div class="logo">
                        <img src="/assets/img/logo.svg" alt="">
                    </div>
                    <h4>Rifa Train</h4>
                </div>

                <ul class="list-unstyled components my-5">
                    <h6>main</h6>
                    <li class="active my-2">
                        <a href="/admin/showdashboard">
                            <span> <i class="las la-tachometer-alt"></i> dashboard </span>
                        </a>
                    </li>

                    <li class="my-2">
                        <a href="/admin/add">
                            <span> <i class="las la-inbox"></i> Trips </span>
                        </a>
                    </li>

                    <li class="my-2">
                        <a href="/admin/history/">
                            <span> <i class="las la-chart-pie"></i> Reservations </span>
                        </a>
                    </li>

                    <li class="my-2">
                        <a href="/admin/showClients">
                            <span> <i class="las la-tasks"></i> Clients </span>
                        </a>
                    </li>
  
                </ul>
            </div>
        </nav>

        <!--regular nav-->
        <div class="main">
            <nav class="upper navbar">
                <div class="right">
                
                   
                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="las la-bars"></i>
                    </button>

                   
                </div>

                <div class="admin">
                    <ul>
                       
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                <i class="las la-cog"></i>
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/admin/UpdateAdmin/"> Check Profil</a>
                            <a class="dropdown-item" href="/home/loginAdmin">logout</a>
                                <!-- <div class="dropdown-divider"></div> -->
                                <!-- <a class="dropdown-item" href="/admin/profil"> Check Profil</a> -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="profile">
                                    <img src="/assets/img/hero.jpg" alt="" />
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>



