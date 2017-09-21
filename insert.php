<?php
$con=mysqli_connect("localhost","root","","dbstudent");
//ดึงค่าจากที่ส่งมาเก็ในตัวแปร data ดึงมาเป็น json แล้วมา decode
$data=json_decode(file_get_contents("php://input"));
//ถ้ามีข้อมูลเข้ามา
if(count($data)>0){
  $fname = mysqli_real_escape_string($con,$data->fName);
  $lname = mysqli_real_escape_string($con,$data->lName);
  $query = "insert into tableuser(fname,lname) values('$fname','$lname')";
  if(mysqli_query($con,$query)){
    echo "Data Insert";
  }else{
    echo "Error";
  }


}

 ?>
