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
                            <a class="nav-link active" aria-current="page" href="#">
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
                            <a class="nav-link" href="">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Register Students
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="classRegisterView.php">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Class Register
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="updatePaymentView.php">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Update Payment
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>


            <!--end of nav bar -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    
                </div>


                <div class="container-fluid">
                    <div class="row">


                        <div class="col-2">
                            <div class="card bg-primary">

                                <div class="card-body text-light">
                                    <p class="text-light bold"> Student Count</p>
                                    <?php
                                    include('connection.php');

                                    $query = "SELECT sid FROM student ORDER BY sid";
                                    $query_run = mysqli_query($conn, $query);
                                    $Row = mysqli_num_rows($query_run);
                                    echo '<h3> <!--add tag--> ' . $Row . '</h3>'
                                    ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="card bg-primary" >
                                <div class="card-body text-light">
                                    <p class="text-light bold"> Teachers Count</p>
                                    <?php
                                    include('connection.php');

                                    $query = "SELECT Tid FROM teacher ORDER BY Tid";
                                    $query_run = mysqli_query($conn, $query);
                                    $Row = mysqli_num_rows($query_run);
                                    echo '<h3> <!--add tag--> ' . $Row . '</h3>'
                                    ?>
                                </div>

                            </div>
                        </div>

                        <div class="col-2">
                            <div class="card bg-primary">

                                <div class="card-body text-light">
                                    <p class="text-light bold"> Class Count</p>
                                    <?php
                                    include('connection.php');

                                    $query = "SELECT sname FROM subject ORDER BY sname";
                                    $query_run = mysqli_query($conn, $query);
                                    $Row = mysqli_num_rows($query_run);
                                    echo '<h3> <!--add tag--> ' . $Row . '</h3>'
                                    ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="card bg-primary">

                                <div class="card-body text-light">
                                    <p class="text-light bold"> Total Payment Count</p>
                                    <?php
                                    include('connection.php');

                                    $query = "SELECT sid FROM payment ORDER BY sid";
                                    $query_run = mysqli_query($conn, $query);
                                    $Row = mysqli_num_rows($query_run);
                                    echo '<h3> <!--add tag--> ' . $Row . '</h3>'
                                    ?>

                                </div>
                            </div>
                        </div>


                        <div class="col-4">
                            <div class="card bg-danger" >
                                <div class="card-body text-light">
                                    <p class="text-light bold"> Total Fee</p>
                                    <?php
                                    include('connection.php');

                                    $sql = "SELECT  sum(fee) as total FROM student";
                                    $result = $conn->query($sql);
                                    ?>

                                    <?php
                                    while ($row = $result->fetch_object()): ?>
                                        <h3>Rs <?php echo $row->total ?>. 00 </h3>
                                    <?php endwhile; ?>
                                </div>

                            </div>
                        </div>


                    </div>

                    <hr>

                    <div class="row mt-4">

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <p class="">Teachers Details</p>
                                    <div class="table-responsive">

                                        <?php

                                        include('connection.php');

                                        if ($conn) {
                                            $query = "select * from teacher";
                                            $query_run = mysqli_query($conn, $query);

                                        } else {
                                            echo '<div class="alert alert-warning" role="alert">
                                        No Data Found !
                                        </div>';
                                        }
                                        ?>
                                        <table class="table" id="dataTable">
                                            <thead>
                                            <tr>
                                                <th>TID</th>
                                                <th>Name</th>
                                                <th>Grade</th>
                                                <th>Gender</th>
                                                <th>Tel</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <!--to fetch data to rows-->
                                            <?php

                                            if (mysqli_num_rows($query_run) > 0) {

                                                while ($row = mysqli_fetch_assoc($query_run)) {

                                                    ?>
                                                    <tr>
                                                        <td> <?php echo $row ['Tid']; ?> </td>
                                                        <td> <?php echo $row ['name']; ?> </td>
                                                        <td> <?php echo $row ['grade']; ?> </td>
                                                        <td> <?php echo $row ['gender']; ?> </td>
                                                        <td> <?php echo $row ['tel']; ?> </td>


                                                    </tr>

                                                    <?php
                                                }
                                            } else {
                                                echo '<div class="alert alert-warning" role="alert">
                                        No Data Found !
                                        </div>';
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <p class="bold">Student Details</p>
                                    <div class="table-responsive">

                                        <?php

                                        include('connection.php');

                                        if ($conn) {
                                            $query = "select * from student";
                                            $query_run = mysqli_query($conn, $query);

                                        } else {
                                            echo '<div class="alert alert-warning" role="alert">
                                        No Data Found !
                                        </div>';
                                        }
                                        ?>
                                        <table class="table" id="dataTable">
                                            <thead>
                                            <tr>
                                                <th>SID</th>
                                                <th>Name</th>
                                                <th>Grade</th>
                                                <th>Gender</th>
                                                <th>Tel</th>
                                                <th>Fee</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <!--to fetch data to rows-->
                                            <?php

                                            if (mysqli_num_rows($query_run) > 0) {

                                                while ($row = mysqli_fetch_assoc($query_run)) {

                                                    ?>
                                                    <tr>
                                                        <td> <?php echo $row ['sid']; ?> </td>
                                                        <td> <?php echo $row ['name']; ?> </td>
                                                        <td> <?php echo $row ['grade']; ?> </td>
                                                        <td> <?php echo $row ['gender']; ?> </td>
                                                        <td> <?php echo $row ['tel']; ?> </td>
                                                        <td> <?php echo $row ['fee']; ?> </td>
                                                    </tr>

                                                    <?php
                                                }
                                            } else {
                                                echo '<div class="alert alert-warning" role="alert">
                                        No Data Found !
                                        </div>';
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row mt-4">

                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <p class="">Payment Details</p>
                                    <div class="table-responsive">

                                        <?php

                                        include('connection.php');

                                        if ($conn) {
                                            $query = "select * from payment";
                                            $query_run = mysqli_query($conn, $query);

                                        } else {
                                            echo '<div class="alert alert-warning" role="alert">
                                        No Data Found !
                                        </div>';
                                        }
                                        ?>
                                        <table class="table" id="dataTable">
                                            <thead>
                                            <tr>
                                                <th>SID</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Payment</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <!--to fetch data to rows-->
                                            <?php

                                            if (mysqli_num_rows($query_run) > 0) {

                                                while ($row = mysqli_fetch_assoc($query_run)) {

                                                    ?>
                                                    <tr>
                                                        <td> <?php echo $row ['sid']; ?> </td>
                                                        <td> <?php echo $row ['sname']; ?> </td>
                                                        <td> <?php echo $row ['date']; ?> </td>
                                                        <td> <?php echo $row ['payment']; ?> </td>



                                                    </tr>

                                                    <?php
                                                }
                                            } else {
                                                echo '<div class="alert alert-warning" role="alert">
                                        No Data Found !
                                        </div>';
                                            }
                                            ?>
                                            </tbody>
                                        </table>
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