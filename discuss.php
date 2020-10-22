<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="jumbotron" style="background:url('images/d.jpg')no-repeat;background-size:cover;height:200px;"></div>
<div class="container-fluid">
<div class ="card"> 
  <div class ="card-body" style="background:url('images/b.jpg')">
      <div class="row">
      <div class = "col-md-1">
    <a href="admin-panel.php" class = "btn btn-light">Main</a>
  </div>
  <div class="col-mod-4"><h1><b><b>Faculty Schedule</b> </b></h1></div>
  <div class="col-mod-8">
    <form class="form-group" action="function.php" method="post">
      <div class="row">
         <div class="col-md-11"><input type = "text" name="search"class="form-control"></div>
      </form>
    </div>
  </div></div>
  <div class = "card-body"></div>
<table class="table table-striped">




  
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="your nsu email id">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Chosse Your Faculty</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Dr. Mahdy Rahman Chowdhury</option>
      <option>Dr. K. M. A. Salam</option>
      <option>Dr. Rajesh Palit</option>
      <option>Dr. Lamia Iftekhar</option>
      <option>Dr. Mohammad Monirujjaman Khan</option>
      <option>Dr. Sifat Momen</option>
      <option>Dr. Tanzilur Rahman</option>
      <option>Dr. Nabeel Mohammed</option>

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Faculty Schedule</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1. Dr. Mahdy Rahman Chowdhury(ST: 10.00 AM-11.00 AM)   Office: SAC946</option>
      <option>2. Dr. K.M.A. Salam          (MW: 1.00  PM-2.00  PM)   Office: SAC946</option>
      <option>3. Dr. Rajesh Palit          (ST: 10.00 AM-11.00 AM)   Office: SAC946</option>
      <option>4. Dr. Lamia Iftekhar (R 1.00 PM-2.00 PM)    Office: SAC946</option>
      <option>5. Dr. Mohammad Monirujjaman Khan (ST: 3.00 PM-4.00 PM)    Office: SAC946</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Please write summary about your problem</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <input type = "submit" class="btn btn-info" name = "pat_submit" value = "Mail to your respected faculty"> <br>
  <br>
</form>

</body>
 </html>



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