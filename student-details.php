
<!DOCTYPE html>
<html>
<head>
<title>Course Enroll Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style="background:url('images/proj.jpg')no-repeat;background-size:cover;height:300px;"></div>
<div class="container-fluid">
<div class ="card"> 
	<div class ="card-body" style="background-color:#884EA0;color:#ffffff;">
		<div class="row">
			<div class = "col-md-1">
		<a href="admin-panel.php" class = "btn btn-light">Main</a>
	</div>
	<div class="col-mod-3"><h3>Course Enroll Form</h3></div>
	<div class="col-mod-8">
		<form class="form-group" action="function.php" method="post">
			<div class="row">
         <div class="col-md-10"><input type = "text" name="search"class="form-control"></div>
          <div class="col-md-2"><input type = "submit" name="Patient_search"class="btn btn-light"></div></div>
		</form>
		</div>
	</div></div>
	<div class = "card-body"></div>
<table class="table table-striped">
  <thead>
    <tr>
      
      <th> First Name</th>
      <th> Middle Name</th>
      <th> Last Name</th>
      <th> Email</th>
      <th> Permanent Address</th>
      <th> Present Address</th>
      <th> Profession</th>
      <th> Agree?</th>
      <th> Which Course</th>
      <th> Course</th>

    </tr>
  </thead>
  <tbody>
    
    <?php
      
     require 'function.php';
      get_student_details(); 
      
      ?>
    
  </tbody>
</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>