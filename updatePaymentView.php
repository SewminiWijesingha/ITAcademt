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
                            Register Students
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
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
                <h1 class="h2">Dashboard</h1>
               
            </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-title">
                                <h3 class="m-3">Update Payment</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" action="updatePayment.php">
                                    <div class="form-group">
                                        <label class="form-control-label">Student ID</label>
                                        <input type="text" name="sid" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Student Name</label>
                                        <input type="text" name="sname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Payment Amount</label>
                                        <input type="number" name="amount" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">Payment Date</label>
                                        <input type="date" name="date" class="form-control" placeholder=" ">

                                    </div>
                                    <div class="col-lg-6 login-btm login-button">
                                        <button type="submit" name="updatePayment" class="btn btn-outline-primary mt-4">Update</button>
                                    </div>
                            </div>

                        </div>

                        </form>
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


