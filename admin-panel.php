<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron" style="background:url('images/proj.jpg')no-repeat;background-size:cover;height:550px;"></div>
<div class ="card-body" style="background:url('images/java.jpg')">
<div class="container-fluid">
  <div class="row">
    
    <div class="col-md-3.5">
    <div class="list-group">
      <a href="" class="list-group-item active"style = "background-color:#884EA0;color:#ffffff;">Course</a>

             <a href="patient-details.php" class="list-group-item ">Student's Details</a> 
             <a href="cse115.php" class="list-group-item ">CSE 115-C programming </a>
             <a href="cse173.php" class="list-group-item ">cse 173-Discrete Mathematics</a>
             <a href="cse215.php" class="list-group-item ">cse 215-Java Programming</a>
             <a href="cse225.php" class="list-group-item ">cse 225-Data Structures</a>
             <a href="" class="list-group-item ">cse 231-Digital Logic Design</a>
             <a href="" class="list-group-item ">cse 311-Database Design</a> 
             <a href="" class="list-group-item ">cse 327-Software Development</a> 
             <a href="" class="list-group-item ">cse 425-Concept Of Programming Language</a> 
             <a href="" class="list-group-item ">cse 452-Engineering Economics</a> 

         </div>
         <br></br>
         <br></br>
         <br></br>
         <div class="list-group">
      <a href="" class="list-group-item active"style = "background-color:#884EA0;color:#ffffff;">Extra</a>
             <a href="practice.php" class="list-group-item ">Practice C/C++ In Online Compiler</a> 
             <a href="edit.php" class="list-group-item ">HTML , CSS , JS Editor</a>
             <a href="discuss.php" class="list-group-item ">Discuss with a teacher</a>
             <a href="query.php" class="list-group-item ">Any query? Or Suggestion</a>    
         </div>
         <br></br>
         <br></br>
         <br></br>
         <div class="list-group">
      <a href="" class="list-group-item active"style = "background-color:#884EA0;color:#ffffff;">Contact</a>
      <a href="address.php" class="list-group-item ">Adress & Phone</a>

         </div>
       </div>
    
    <div class="col-md-9">
    <div class ="card">
    <div class ="card-body" style = "background-color:#884EA0;color:#ffffff;">
          <h1 align="center"><b>Get Enroll To A Course</b></h1>
    </div>
    <div class ="card-body">
      <form class="form-group" action="function.php" method = "post">
        <h2 class="text-success">Details About You</h2>
        <br>
        
        <label>Date  : </label>
        <input type = "Date" name="DOA"class = "form-control"></br>
        <label>Enter First Name : *</label>
        <input type = "text" name="F_name"class = "form-control"></br>
        <label>Enter Middle Name : </label>
        <input type = "text" name="M_name"class = "form-control"></br>
        <label>Enter Last Name : </label>
        <input type = "text" name="L_name"class = "form-control"></br>
        <label>Enter Your Email Address : * </label>
        <input type = "text" name="e_name"class = "form-control"></br>

  <h2 class="text-success">Address</h2>
  <br>
  <label>Street No:</label>
  <input type="text" name="Street No "class = "form-control"><br>
  <label>Street name:</label>  
  <input type="text" name="Street name"class = "form-control"><br>
  <label>Area:</label>
  <input type="text" name="Area"class = "form-control"> 
  <br>
  <label>City:</label>
  <input type="text" name="Thana"class = "form-control"><br>
  <label>District:</label>
  <input type="text" name="District"class = "form-control"><br>
  

  <h2 class="text-success">Profession</h2>
  <br>
  <p class="text-success">1) University Student, 2) School or College student, 3) Service holder, 4) Others.</p>
  <label>Profession</label>
  <input type="text" name="Prof"class = "form-control"> <br>
  
  <h3 class="text-success">Form Is Completed By:</h3>
  <br>
  <br>
  <label>Signature:</label>
  <input type = "text" name = "signature" class = "form-control">
  <br>
  <label>Full Name (Again):</label>
  <input type = "text" name = "Relative_P"class = "form-control"> 
  <br>
  <label>Are You Ready To Start This Course:</label>
  <input type = "text" name = "RWP"class = "form-control"> 
  <br>
  <label>Please Select Your Desire Course</label>
  <select class="form-control" name="docapp">
    <option value="CSE 115">C Programming Start From Scratch</option>
    <option value="CSE 173">Discrete Mathematics</option>
    <option value="CSE 215">Java Programming Start From Scratch>
    <option value="CSE 225">Data structure and C++ programming language</option>
    <option value="CSE 231">Digitial logic design start from scratch</option>
  </select><br><br>
  <input type = "submit" class="btn btn-info" name = "pat_submit" value = "Submit and confirm your course"> <br>
  <br>
  <br>
      </form>
    </div>
    </div>
    </div>
    <div class="col-md-1"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>