<?php include('Includes/dash_header.php') ?>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Admin Panel</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-nav">

        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin_dash.php">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registerTeachersView.php">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Register Teachers
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="registerStudnetView.php">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Register Student
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="classRegisterView.php">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Class Register
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>


            <!--end of nav bar -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Register Teachers</h1>
                   
                </div>


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="card" style="width: 100%;">
                                <img src="Assets/Img/teacherReg.jpg" class="img" alt="reg">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card p-4">
                                <div class="card-body">

                                    <div class="card-body">

                                        <form action="registerTeachers.php" method="post">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">ID</label>
                                                <input type="text" class="form-control" name="Tid" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Name</label>
                                                <input type="text" name="uname" class="form-control" id="exampleInputPassword1">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1"  class="form-label">Telephone</label>
                                                <input type="tel" class="form-control" name="uTel" id="exampleInputPassword1">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Whatsapp</label>
                                                <input type="tel" class="form-control" name="uWhatsapp" id="exampleInputPassword1">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Address</label>
                                                <input type="text" name="uaddress" class="form-control" id="exampleInputPassword1">
                                            </div>

                                            <label for="exampleInputPassword1" class="form-label">Gender</label>

                                            <div class="form-check">

                                                <input class="form-check-input"  type="radio" name="tGender" value="Male" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Male
                                                </label>
                                            </div>

                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="radio" name="tGender"  value="Female"  id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Female
                                                </label>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Grade</label>
                                                <input type="number" min="6" max="13" name="ugrade" class="form-control" id="exampleInputPassword1">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" name="upass" class="form-control" id="exampleInputPassword1">
                                            </div>


                                            <button type="submit" name="regbtn" class="btn btn-primary mt-3">Register</button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


            </main>
        </div>
    </div>


<?php include('Includes/dash_footer.php') ?>