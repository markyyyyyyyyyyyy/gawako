<?php 
include 'appointments.php';
session_start();
if(isset($_POST['submit'])){
    $editid = $_POST['editid'];
   
    $editbranch = $_POST['editbranch'];
    $editcontact = $_POST['editnumber'];
    $editdate = $_POST['date'];
    $edittime = $_POST['edittime'];
    
}
    if(isset($_POST['update'])){
        $updateid = $_POST['updateID'];
        $updatename = $_POST['updatename'];
        $updateemail = $_POST['updateemail'];
        $updatebranch = $_POST['updatebranch'];
        $updatecontact = $_POST['updatecontactnumber'];
        $updatedate = $_POST['updatedate'];
        $updatetime = $_POST['updatetime'];
        $updateverification = $_POST['updateverification'];

        $queryupdate = "UPDATE appointments, users SET name = '$updatename', user_name = '$updateemail', branch = '$updatebranch', contact_number = '$updatecontact', date = '$updatedate', time = '$updatetime', verification = '$updateverification'";
        
    }


?>


<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Toothbook Dental Clinic</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>

    <body>
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-none d-md-block">
                            <ul class="left-info">
                                <li><i class="bi bi-envelope"></i> toothbookdentalcare@gmail.com</li>
                                <li><i class="bi bi-telephone"></i> 0917-624-3186</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="rit-info">
                                <li><i class="bi bi-stopwatch"></i> Monday - Sunday: 8:00am - 7:00pm</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12  mx-auto logo-col">
                             <a href="index.php">
                                 <img src="tblogo.jpg" alt="">
                            </a>
                            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                             <i class="bi bi-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="nav-row">
                <div class="container">
                    <div id="menu-jk" class="nav-row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="container-fluid">
                      <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="user_page.php">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="about_user.php">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pricing_user.php">Services/pricing</a>
                          </li>
                          
                           <li class="nav-item">
                              <a class="nav-link" href="contact_user.php">Contact US</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="booking-system.php">Book Now</a>
                          </li>
                         
                      </ul>
                  </div>
                  </div>
              </nav>
      </div>
    </div>
</div>
            
</header>

<!-- confirmation starts here -->
<center>
<div class="regis-form">
  
  <div class="col-12">
    <label for="contact_number" class="form-label">Contact Number</label>
    <input type="number" class="form-control" id="contact_number" name="editcontact" required placeholder="Contact Number">
  </div>
  <div class="col-12">
  <label for="date">Preferred date</label>
            <input type="date" id="date" name="editdate" required name="date" value="<?php echo $editdate ?>"><br><br>
    
  </div>
  <div class="col-md-6">
  <label for="time">Preferred time:</label>
            <input type="time" id="time" name="usertime" required name="edittime"><br><br>
  </div>
  <div class="col-md-6">
    <label for="inputMessComs" class="form-label">Message/Comments </label>
    <input type="text" class="form-control" id="inputMessComs" name="message">
  </div>
  <div class="col-md-4">
    <label for="inputMessComm" class="form-label">Select Branch</label>
    <select id="inputMessComm" class="form-select" name="editbranch">
      <option >Panay Avenue Branch</option>
      <option>Bago Bantay (Santo Cristo Branch)</option>
    
    </select>
    </div>
  </div>
  
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      </label>
    </div>
  </div>
  <div class="col-12">
    <button name="update" type="submit" class="btn btn-primary">Book Now</button>
  </div>
  </div>

</form>
</center>