<!DOCTYPE html>
<html>
<head>
<title>WELCOME TO C PROGRAMMING LANGUAGE</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style="background:url('images/c.jpg')no-repeat;background-size:cover;height:550px;"></div>
<div class="container-fluid">
<div class ="card"> 
	<div class ="card-body" style="background:url('images/d.jpg')">
		<div class="row">
			<div class = "col-md-1">
		<a href="admin-panel.php" class = " btn btn-light">Main</a>
	</div>
	<div class="col-mod-3"><h1><b>WELCOME TO C PROGRAMMING LANGUAGE </b></h1></div>
	<div class="col-mod-8">
		<form class="form-group" action="function.php" method="post">
			<div class="row">
         <div class="col-md-11"><input type = "text" name="search"class="form-control"></div>
   		</form>
		</div>
	</div></div>
	<div class = "card-body"></div>
<table class="table table-striped">

  <div style="text-align:center"> 
    <br><br>
    <h1><b>First Impression Review</b></h1>
  <video width="1200" controls>
    <source src="video/1.mp4" type="video/mp4">
  </video>
  </div> 

<br></br>
<div style="text-align:center">
<br><br> 
  <h1><b>Second Impression Review</b></h1>
  <video width="1200"controls>
    <source src ="video/2.mp4" type ="video/mp4">
  </video><br></br>
  <br></br>
  <h1><b>কি! পড়তে আর ভালো লাগছে না ? ব্যাপার নাহ । একটা গান শুনে আসি চলো।</b></h1>
<audio controls>
  <source src="audio/1.mp3" type="audio/mpeg">
</audio>
<br><h4><b>গানঃ বেদনা মধুর হয়ে যায়। 
  শিল্পীঃ জগজিৎ সিং  </b></h4>

  <br><br>
  <div style="text-align:center"> 
  <h1><b>Third Impression Review</b></h1>
  <video width="1200"controls>
    <source src ="video/3.mp4" type ="video/mp4">
  </video>
  
  <tbody>
    
    <?php
      
     require 'function.php';
      get_cse115(); 
      
      ?>
    
  </tbody>
</table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>