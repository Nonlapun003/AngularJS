//get data from txt
var app = angular.module("myApp",[]);
app.controller("usercontroller",function($scope,$http) {
//using php for insert data into db
//ประกาศ function ให้ตรงกับที่ประกาศใน index.php
  $scope.insertData=function(){
   //ให่้ http ส่งค่าไปเป็น jsonส่งไปที่ insert.php ทำงานร่วมกับ sql ส่งค่า key รูปแบบ json คือ
   //'fname' :$scope.fname คือ fname เป็นตัวแปร ตามด้วยค่าที่ไปดึงมาจาก model ที่อยู่ใน textbox มากำหนดตรง scope แล้วส่งค่าไป
   //ถ้าส่งไปจะทำงานต่อที่ then กรณีที่  insert data จะมีการ clear ค่าที่ textbox
   $http.post("insert.php",
   {'fName' :$scope.fName,'lName': $scope.lName})
   .then(function(data){
     sweetAlert("Data Complete", "Insert Complete","success");
     $scope.lName = null;
     $scope.fName = null;
     $scope.displayData();
     });
   }
   $scope.displayData=function(){
      $http.get("select.php").then(function(response){
        $scope.names = response.data.records;
      });
    }
});
