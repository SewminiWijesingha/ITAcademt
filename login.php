<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Seotech</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="homepage/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="homepage/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="homepage/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              IT ACADEMY
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          
          
          
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
              <div class="container-fluid ">
                  <div class="row ">
                      <div class="col m-2">
                          <div class="container m-5">
                              <div class="card">
                                  <div class="card-body">

                                      <form method="post" action="login_check.php">
                                          <div class="mb-3">
                                              <label for="exampleInputEmail1" class="form-label">Username</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1"
                                                     aria-describedby="emailHelp"
                                                     name="username">
                                          </div>
                                          <div class="mb-3">
                                              <label for="exampleInputPassword1" class="form-label">Password</label>
                                              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                          </div>

                                          <div class="mb-3">
                                              <label for="exampleInputPassword1" class="form-label">Type</label>

                                              <select name="account_type">
                                                  <option value="student">Student</option>
                                                  <option value="teacher">Teacher</option>
                                                  <option value="admin">Admin</option>
                                              </select>
                                          </div>

                                          <button type="submit" name="btn_login" class="btn btn-primary">Login</button>
                                          <button type="submit" name="btn_login" class="btn btn-primary">Reset</button>
                                      </form>

                                      <a class="mt-5" href="student/studentRegisterForm.php">Regiter New Studnet Here !</a>

                                  </div>
                              </div>

                          </div>
                      </div>

                  </div>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
            
            </div>
            <p>
              "Believe you can and you're halfway there.",<br>
              -Theodore Roosevelt-
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  

  

  <script type="text/javascript" src="homepage/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="homepage/js/bootstrap.js"></script>
  <script type="text/javascript" src="homepage/js/custom.js"></script>


</body>

</html>