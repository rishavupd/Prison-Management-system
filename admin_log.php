<html>

<head>
<title> Login Php Page </title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>

<body>
<form class="form-horizontal" action="a_log_verify.php" method="post">	
<fieldset>

<!-- Form Name -->
<legend>Admin Login Portal</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Username: </label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Admin Username" class="form-control input-md">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password: </label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="password" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Login</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>