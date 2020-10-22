<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="jumbotron" style="background:url('images/d.jpg')no-repeat;background-size:cover;height:200px;"></div>
<div class="container-fluid">
<div class ="card"> 
       
      <div class="row">
      <div class = "col-md-1">
    <a href="admin-panel.php" class = "btn btn-light">Main</a>
  </div>
  <div class="col-mod-4"><h1><b><b>C/C++ PROGRAM USING ONLINE COMPILER </b> </b></h1></div>
  <div class="col-mod-8">
    <form class="form-group" action="function.php" method="post">
      <div class="row">
         <div class="col-md-11"><input type = "text" name="search"class="form-control"></div>
      </form>
    </div>
  </div></div>
  <div class = "card-body"></div>
<table class="table table-striped">

<?php
 $current="";
 $answer="";

 if(!empty($_POST))
 {
  $current=$_POST['cppcode'];
  $file="hello.cpp";
  file_put_contents($file, $current);

  putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");

  shell_exec("g++ hello.cpp -o hello.exe");

  $answer = shell_exec("hello.exe");
 }


?>
<style>

 .txtarea{
  resize: none;
  outline: none;
  <center>
  width: 800px;
  height: 400px;
  </center>
  border: 3px solid #cccccc;
  padding: 5px;font-family: Tahoma, sans-serif;
  background-position: bottom right;
  background-repeat: no-repeat;
  font-size: 25px;
  color:#FFFFFF;
 }

 </style>
 <form method="POST">
     <textarea name="cppcode" style="background:#9597A6 ;" placeholder="Enter C or C++ code" class="txtarea"><?php echo $current; ?></textarea>
     <br>
     <center><input type="submit" value="COMPILE>>"></center>
   </br>
     <textarea name="cppcode2" style="background:black;" disabled class="txtarea" placeholder="See Result" ><?php echo $answer; ?></textarea>
   </form>

</div>
</div>
</div>
</div>
</body>
</html>
 
</table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html> 