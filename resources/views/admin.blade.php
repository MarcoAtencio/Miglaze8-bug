<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- local  -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">


</head>

<body>


    <!-- navbar -->
    <nav class="navbar navbar-expand-md  navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse " id="myNavbar">
            <div class="container-fluid">
                <div class="row">
                    <!-- sidebar navbar -->
                    <div class="col-lg-3 col-xl-2 col-md-4 sidebar fixed-top">
                        <a href="#" class="navbar-brand text-white d-block mx-auto text-center mb-4 bottom-border pb-2">
                        CodeAdmin
                        </a>

                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" width="50"height="50" alt="nice" class="rounded-circle mr-3">
                        <a href="#" class="text-white ">Bode Maegsn </a>
                        <div class="border-bottom pb-3"></div>
                        <ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-light p-3 mb-2 current"> <i class="fa fa-home text-light fa-lg mr-3" aria-hidden="true"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-user text-light fa-lg mr-3" aria-hidden="true"></i> Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-envelope text-light fa-lg mr-3" aria-hidden="true"></i> Inbox
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-shopping-cart text-light fa-lg mr-3" aria-hidden="true"></i> Sales
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-table text-light fa-lg mr-3" aria-hidden="true"></i> Analytics
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fas fa-table text-light fa-lg mr-3" aria-hidden="true"></i> Charts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-table text-light fa-lg mr-3" aria-hidden="true"></i> Tables
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-wrench text-light fa-lg mr-3" aria-hidden="true"></i> Settings
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-light p-3 mb-2 sidebar-link"> <i class="fa fa-file text-light fa-lg mr-3" aria-hidden="true"></i> Documentation
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end sidebar -->

                    <!--  top nav-->
                    <div class="col-lg-9 col-xl-10 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                            </div>
                            <div class="col-md-5">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control"id="search-input" placeholder="Search here">
                                        <button type="button" class="btn btn-light"id="search-button"><i class="fa fa-search text-danger"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item icon-parent">
                                        <a href="#" class="nav-link icon-bullet "><i class="fa fa-comments text-muted fa-lg"></i></a>
                                    </li>
                                     <li class="nav-item icon-parent">
                                        <a href="#" class="nav-link icon-bullet"><i class="fa fa-bell text-muted fa-lg"></i></a>
                                    </li>
                                     <li class="nav-item ml-md-auto ">
                                        <a href="#" class="nav-link "><i class="fa fa-sign-out text-danger fa-lg"></i></a>
                                    </li>
                                </ul>

                            </div>

                        </div>


                    </div>
                    <!-- end nav -->
                </div>
            </div>
        </div>

    </nav>





    <!-- end navbar -->






    <!-- local -->
    <script type="text/javascript " src="script.js "></script>
    <script src="js/bootstrap.min.js "></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  
  </body>

</html>

</html>