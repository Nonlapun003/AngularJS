<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Angular JS - Insert Data</title>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container" style="width:500px">
      <h3 align = "center" >Insert Data - Angularjs</h3>
      <br>
      <div ng-app="myApp" ng-controller="usercontroller" ng-init="displayData()">
        <label>Firstname</label>
        <input type="text" name="fName" ng-model="fName" class="form-control"/>
        <label>Lastname</label>
        <input type="text" name="lName" ng-model="lName" class="form-control"/>
        <br>
        <input type="submit" name="btnInsert" ng-click="insertData()" class="btn btn-info" value="Insert"/>
        <br><br>
        <table class="table table-bordered">
          <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
          </tr>
          <tr ng-repeat = "x in names">
              <td>{{x.id}}</td>
              <td>{{x.fname}}</td>
              <td>{{x.lname}}</td>
          </tr>
        </table>




      </div>
    </div>
  </body>
  <script src="app.js"></script>
  <script src="dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</html>
