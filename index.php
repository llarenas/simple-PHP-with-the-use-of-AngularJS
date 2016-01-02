<!-- Ronel B. Llarenas (Github.com/llarenas) -->

<!DOCTYPE html>
<html ng-app="listpp" ng-app lang="en">
<head>
<meta charset="utf-8">
<title>Angular With PHP</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/custom.css" rel="stylesheet">
<script src="angular.min.js"></script>
<script src="controller.js"></script>

</head>
<body>

<?php include "templates/header.php";?>
<br><br>

<div ng-controller="maincontroller">

<div class="wrapper">
	
  <div class="container col-sm-8 col-sm-offset-2">
    <div class="page-header">
    <h4>Add Product</h4>
    </div>
        



      <form class="form-horizontal" name="add_product" >
        <input type="hidden" name="prod_id" ng-model="prod_id">

  <div class="form-group">
  
      <div class="col-sm-4">
         <input type="text" class="form-control" name="prod_name" ng-model="prod_name"
          placeholder="Enter Product Name">
      </div>
  </div>



  <div class="form-group">
     
      <div class="col-sm-4">
         <input type="text" class="form-control" name="prod_desc" ng-model="prod_desc"
          placeholder="Enter Product Description">
      </div>
   </div>



   <div class="form-group">
     
      <div class="col-sm-4">
         <input type="text" class="form-control" name="prod_price" ng-model="prod_price" 
         placeholder="Enter Product Price">
      </div>
   </div>

 <div class="form-group">
     
      <div class="col-sm-4">
         <input type="text" class="form-control" name="prod_quantity" ng-model="prod_quantity" 
         placeholder="Enter Product Quantity">
      </div>
   </div>


  <div class="form-group">
      <div class="col-sm-offset-1 col-sm-14">
         <button type="submit" class="btn btn-primary"  name="submit_product" ng-show='add_prod' value="Submit" ng-click="product_submit()">Submit</button>
          <button type="submit" class="btn btn-default"  name="update_product" ng-show='update_prod' value="Update" ng-click="update_product()">Update</button>
      </div>
  </div>


 </div>
</form>



</div>
  <img src="assets/imgs/angularjs.png" alt="angular" style="width:400;height:400px">
</div>

<script src="assets/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
 
    </body>
</html>