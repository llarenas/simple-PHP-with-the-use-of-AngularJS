<!DOCTYPE html>
<html ng-app="listpp" lang="en">
<head>
    <meta charset="utf-8">
    <title>Angular With PHP</title>
    <script src="angular.min.js"></script>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <script src="controller.js"></script>

<link href="assets/css/custom.css" rel="stylesheet">
 
</head>
<body>
<?php  include "templates/header.php"; ?>


<div ng-controller="maincontroller">
<div class="wrapper">
    <div class="row">
        <div class="col-md-2">PageSize:
            <select ng-model="entryLimit" class="form-control">
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>


    <div class="col-md-3">Filter:
     <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" />
    </div>

        <div class="col-md-4">
            <h5>Filtered {{ filtered.length }} of {{ totalItems}} total products</h5>
        </div>
    </div>
    <hr class="hr" />
   <form name="add_product" class="update_entry">
      <input type="hidden" name="prod_id" ng-model="prod_id">
      Update Area <img src="assets/imgs/arrow.png" alt="arrow" style="width:12px;height:12px">
      <input type="text" name="prod_name" ng-model="prod_name" class="btn-default font-color">
      <input type="text"  name="prod_desc" ng-model="prod_desc"  class="btn-default font-color">
      <input type="text"  name="prod_price" ng-model="prod_price" class="btn-default font-color">
      <input type="text"  name="prod_quantity" ng-model="prod_quantity"  class="btn-default font-color">
      <input type="button" name="update_product" ng-show='update_prod' value="Update" ng-click="update_product()" class=" btn btn-primary btn-xs">
     <a href="http://localhost/angular_php/view_entries.php"> <img src="assets/imgs/cancle.png" alt="cancle" style="width:12px;height:12px"></a>
    </form>
  
<hr class="hr"  />
    <div class="row">
        <div class="col-md-8" ng-show="filteredItems > 0">
            <table class="table table-hover">
            <thead>
                <tr>
            <th>ID<a ng-click="sort_by('id');"></a></th>
            <th>Product Name <a ng-click="sort_by('prod_name');"></a></th>
            <th>Product Description <a ng-click="sort_by('prod_desc');"></a></th>
            <th>Product Price <a ng-click="sort_by('prod_price');"></a></th>
            <th>Product Quantity <a ng-click="sort_by('prod_quantity');"></a></th>  
            <th>Action</th> 
            </tr>        
            </thead>


            <tbody ng-init="get_product()">
                <tr ng-repeat="product in filtered = (pagedItems | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                    <td>{{ product.id }}</td>
                    <td>{{ product.prod_name | uppercase }}</td>
                    <td>{{ product.prod_desc }}</td>
                    <td>{{ product.prod_price }}</td>
                    <td>{{ product.prod_quantity }}</td>    
                    <td><a href="" ng-click="prod_edit(product.id)">Edit</a> | <a href="" ng-click="prod_delete(product.id)">Delete</a></td>
                </tr>
            </tbody>
          </table>
          
        <div class="col-md-12" ng-show="filteredItems == 0">
            <div class="col-md-12">
                <h4>No Record found</h4>
            </div>
        </div>
        <div class="col-md-12" ng-show="filteredItems > 0">    
            <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
        </div>
    </div>
</div>
</div>
</div>

<script src="assets/js/ui-bootstrap-tpls-0.10.0.min.js"></script>

    </body>
</html>