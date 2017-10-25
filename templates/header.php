<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Coder's Paradise</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
    </head>
    
    <body>
    
    <header>
    
    		<nav class="navbar navbar-expand-lg navbar-dark ccblue header-fixed">
  <a class="navbar-brand" href="#">Coder's Paradise</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#register">Register</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More...
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">HTML</a>
          <a class="dropdown-item" href="#">CSS</a>
          <a class="dropdown-item" href="#">JavaScript</a>
          <a class="dropdown-item" href="#">PHP</a>
      </li>
    </ul>
    
    
    <form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Email</label>
      <input type="email" class="form-control mb-2 mb-sm-0" id="inlineFormInput" placeholder="Email">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Password</label>
      <div class="input-group mb-2 mb-sm-0">
        <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
      </div>
    </div>
    <div class="col-auto">
      <div class="form-check mb-2 mb-sm-0">
        <label class="form-check-label ccwhitefont">
          <input class="form-check-input" type="checkbox"> Remember me
        </label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
  </div>
</nav>







<!-- MODAL -->


<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register form" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Register for Coder's Paradise</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="registerform">
        <form action="register.php" method="post">
        <div class="registerp">
            
        
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="firstName">First Name</label>
      <input type="text" name="firstName" class="form-control" placeholder="first name" value="<?php if (isset($_POST['firstName'])) {print htmlspecialchars($_POST['firstName']); } ?>" required>
    </div>
      <div class="col-md-6 mb-3">
      <label for="lastName">Last Name</label>
      <input type="text" name="lastName" class="form-control" placeholder="last name" value="<?php if (isset($_POST['lastName'])) {print htmlspecialchars($_POST['lastName']); } ?>" required>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" placeholder="email" value="<?php if (isset($_POST['email'])) {print htmlspecialchars($_POST['email']); } ?>"required>
    </div>
  </div>
    
    <div class="row">
    <div class="col-md-6 mb-3">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" placeholder="password" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="confirm">Confirm Password</label>
      <input type="password" name="confirm" class="form-control" placeholder="confirm password" required>
    </div>
    </div>
    
    <h6>Date of Birth: </h6>
    
    
  <div class="row">
  	<div class="col-md-4 mb-3">
    <label for="month">Month</label>
    <select name="month" class="form-control" id="month" required>
      <option value="">...</option>
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
	<option value="December">December</option>
    </select>
  </div>
  
  
  <div class="col-md-3 mb-3">
    <label for="day">Day</label>
    <select name="day" class="form-control" id="day" required>
      <option value="">...</option>
	                <?php  //Print out 31 days:
	                for ($i = 1; $i <= 31; $i++) {
	                    print "<option
	                    value=\"$i\">$i</option>\n";
	                }
	                ?>
    </select>
  </div>
  
  
  <div class="col-md-4 mb-3">
    <label for="year">Year</label>
    <select name="year" class="form-control" id="year" required>
      <option value="">...</option>
	                <?php  //Print out years from 1900 to current year:
	                for($i = 1900 ; $i < date('Y'); $i++){
	                echo "<option>$i</option>";
	                }
	                ?>
    </select>
  </div>
  
  
  
    
    
    
  </div>

  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

</div>

      </div>
      
    </div>
  </div>
</div>



	
    
    
    
    		
                            
                            
          </header>
          
          
          
          <main>