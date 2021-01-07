<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registerlogin</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Kerala tourism</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Main</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img height="500px" src="images\kerala1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="500px" src="images\Kerala-Tourism.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="500px" src="images\kerala.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="500px" src="images\Alleppey.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>

            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <p><h3>Login</h3></p>
                <table class="table">
                <tr>
                    <td>UserName</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">Login</button></td>
                </tr>
            </table>
            </div>
            <div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
                <p><h3>Register</h3></p>
                <table class="table">
                <tr>
                    <td>Name</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Phonenumber</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>UserName</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>ConfirmPassword</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
               <tr>
                   <td></td>
                   <td><button class="btn btn-success">Register</button></td>
               </tr>
            </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
</body>
</html>