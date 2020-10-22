<?php
require 'connection.php';
if(isset($_POST['login-submit'])){
    $username=$_POST['Username']; 
	$password=$_POST['Password'];
	$query="select * from logindb where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    	{
    		
		header("Location:admin-panel.php");
	}
	else
  {
		echo"<script>alert('You Input Wrong Password Or Username')</script>";
	    echo"<script>window.open('index.php','_self')</script>";
		
}
}
if(isset($_POST['pat_submit']))
{
  $DOA=$_POST['DOA'];
    $F_name=$_POST['F_name'];
    $M_name=$_POST['M_name'];
    $L_name=$_POST['L_name'];
    $Prmt_add=$_POST['Prmt_add'];
    $Psnt_add=$_POST['Psnt_add'];
    $Prof=$_POST['Prof'];
    $Amount_Depo=$_POST['Amount_Depo'];
    $Cabin=$_POST['Cabin'];
    $Relative_P=$_POST['Relative_P'];
    $RWP=$_POST['RWP'];
    $docapp=$_POST['docapp'];
    $query= "insert into doctorapp(DOA,F_name,M_name,L_name,Prmt_add,Psnt_add,Prof,Amount_Depo,Cabin,Relative_P,RWP,docapp)values('$DOA','$F_name',
      '$M_name','$L_name','$Prmt_add','$Psnt_add','$Prof','$Amount_Depo','$Cabin','$Relative_P','$RWP','$docapp')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
      echo"<script>alert('Thnak You , Your Course Has Been Registerd.')</script>";
      echo"<script>window.open('admin-panel.php','_self')</script>";
    }
     
    
     }

      function get_student_details(){
      
      global $conn;
  $query="select *from doctorapp";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($result)){  
    $DOA=$row['DOA'];
    $F_name=$row['F_name'];
    $M_name=$row['M_name'];
    $L_name=$row['L_name'];
    $Prmt_add=$row['Prmt_add'];
    $Psnt_add=$row['Psnt_add'];
    $Prof=$row['Prof'];
    $Amount_Depo=$row['Amount_Depo'];
    $Cabin=$row['Cabin'];
    $Relative_P=$row['Relative_P'];
    $RWP=$row['RWP'];
    $docapp=$row['docapp'];
        echo "<tr>
      <td>$DOA</td>
      <td>$F_name</td>
      <td>$M_name</td>
      <td>$L_name</td>
      <td>$Prmt_add</td>
      <td>$Psnt_add</td>
      <td>$Prof</td>
      <td>$Amount_Depo</td>
      <td>$Cabin</td>
      <td>$Relative_P</td>
      <td>$RWP</td>
      <td>$docapp</td>
     
    </tr>";

      }
      }
      

if(isset($_POST['pat_submit'])){
    $username=$_POST['Username']; 
  $password=$_POST['Password'];
  $query="select * from logindb where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
      {
        
    header("Location:cse115.php");
  }
}
if(isset($_POST['pat_submit'])){
    $username=$_POST['Username']; 
  $password=$_POST['Password'];
  $query="select * from logindb where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
      {
        
    header("Location:cse173.php");
  }
}
if(isset($_POST['pat_submit'])){
    $username=$_POST['Username']; 
  $password=$_POST['Password'];
  $query="select * from logindb where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
      {
        
    header("Location:cse215.php");
  }
}
if(isset($_POST['pat_submit'])){
    $username=$_POST['Username']; 
  $password=$_POST['Password'];
  $query="select * from logindb where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
      {
        
    header("Location:cse225.php");
  }
}
if(isset($_POST['pat_submit'])){
    $username=$_POST['Username']; 
  $password=$_POST['Password'];
  $query="select * from logindb where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
      {
        
    header("Location:practice.php");
  }
}

if(isset($_POST['pat_submit'])){
    $username=$_POST['Username']; 
  $password=$_POST['Password'];
  $query="select * from logindb where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
      {
        
    header("Location:discuss.php");
  }
}

?>