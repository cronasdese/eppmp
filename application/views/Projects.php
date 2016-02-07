<!DOCTYPE html>
<html>
      <head>
            <title>Create Project</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
            <link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
            <link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
            <script src ="assets/js/jquery-2.1.4.min.js"></script>
            <script src ="assets/js/bootstrap.min.js"></script>

      </head>
      <body class="createstyle">
            <!-- WHOLE NAVBAR -->
            <div>
                  <nav class="navbar  navbar-default">
                        <div class="container">

                              <!-- NAVBAR HEADER LEFT -->
                        <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">E-PPMP</a>
                        </div>

                        <!-- NAVBAR HEADER RIGHT -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Notifications <span class="caret"></span></a>
                                          <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                          </ul>
                                    </li>
                                    <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sammera Alim <span class="caret"></span></a>
                                          <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Profile</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Logout</a></li>
                                          </ul>
                                    </li>
                                    </ul>
                            </div>
                        </div>
                  </nav>
            </div>
            <!-- Sidebar -->
            <div id="wrapper" class="active">
     
            <!-- Sidebar -->
                <div id="sidebar-wrapper">
                      <ul id="sidebar_menu" class="sidebar-nav">
                          <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
                      </ul>
                      <ul class="sidebar-nav" id="sidebar">     
                          <li><a href="#">Home<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                          <li><a href="#">Create <span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                          <li><a href="#">Projects<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                          <li><a href="#">Drafts<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                          <li><a href="#">History<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                        <!--SPACE DAPAT TO OR DIVIDER-->
                          <li><a href="#">Approve PPMP<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                      </ul>
                </div>
                <script type="text/javascript">
                        $("#menu-toggle").click(function(e) {
                          e.preventDefault();
                          $("#wrapper").toggleClass("active");
                              });
                        });
                  </script>
                
            <!-- Page content -->
                    <div id="page-content-wrapper">
                    <!-- Keep all page content within the page-content inset div! -->
                        <div class="page-content inset">
                            <div class="row">
                                <div class="container">
                                    <div class="col-md-12">
                                        <h3>Projects</h3>
                                        <hr/>
                                    </div>
                                    <!--CONTENT x TABLE-->
                                    <div class="container" ng-app="">
                                        <div ng-controller="initApp">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-group input-group-sm add-on">
                                                        <input type="text" class="form-control search-query" ng-model="query" ng-change="search()" placeholder="Search">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-md-offset-6">
                                                    <select class="form-control input-sm pull-right" ng-model="itemsPerPage" ng-change="perPage()" ng-options="('show '+size+' per page') for size in pageSizes"></select>
                                                </div>
                                            </div>
                                            
                                            <br />  
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                    <tr>
                                                <!--id--> <th class="id"><a ng-click="sort_by('id')">ProjectID <span class="fa fa-sort"></span></a></th>
                                                <!--field3--> <th class="project"><a ng-click="sort_by('project')">Project/Program(Link) <span class="fa fa-sort"></span></a></th>
                                                <!--name--> <th class="office"><a ng-click="sort_by('office')">Office(Name)<span class="fa fa-sort"></span></a></th>
                                                <!--field4--> <th class="date"><a ng-click="sort_by('date')">Date Submitted(Field 4) <span class="fa fa-sort"></span></a></th>
                                                <!--field5--> <th class="field5"><a ng-click="sort_by('field5')">Field 5 <span class="fa fa-sort"></span></a></th>    
                                                <!--description--> <th class="status" title="non-sortable">Status</th>
                                                <!----> <th></th>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="9">{{sizes}}
                                                            <div class="text-center">
                                                                <ul class="pagination">
                                                                    <li ng-class="{disabled: currentPage == 0}">
                                                                        <a href="javascript:;" ng-click="prevPage()">« Prev</a>
                                                                    </li>
                                                                    <li ng-repeat="n in range(pagedItems.length)" ng-class="{active: n == currentPage}" ng-click="setPage()">
                                                                        <a href="javascript:;" ng-bind="n + 1">1</a>
                                                                    </li>
                                                                    <li ng-class="{disabled: currentPage == pagedItems.length - 1}">
                                                                        <a href="javascript:;" ng-click="nextPage()">Next »</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr ng-repeat="item in pagedItems[currentPage] | orderBy:sortingOrder:reverse">
                                                        <td>{{item.id}}</td>
                                                        <td><a href="#">{{item.project}}</a></td>
                                                        <td>{{item.office}}</td>
                                                        <td>{{item.date}}</td>
                                                        <td>{{item.field5}}</td>
                                                        <td>{{item.status}}</td>
                                                        <td><a href="#" ng-click="deleteItem($index)">x</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                   </div> 
                   <script type="text/javascript">
                             var generateData = function(){
                                var arr = [];
                                var letterWords = ["alpha","bravo","charlie","daniel","earl","fish","grace","henry","ian","jack","karen","mike","delta","alex","larry","bob","zelda"]
                                for (var i=1;i<60;i++){
                                  var id = letterWords[Math.floor(Math.random()*letterWords.length)];
                                  arr.push({"id":id+i,"office":"office "+i,"status":"Status of the project"+i,"project":id,"date":"Some stuff about rec: "+i,"field5":"field"+i});
                                }
                                return arr;
                              }

                              var sortingOrder = 'office'; //default sort

                              function initApp($scope, $filter) {
                               
                                // init
                                $scope.sortingOrder = sortingOrder;
                                $scope.pageSizes = [5,10,25,50];
                                $scope.reverse = false;
                                $scope.filteredItems = [];
                                $scope.groupedItems = [];
                                $scope.itemsPerPage = 10;
                                $scope.pagedItems = [];
                                $scope.currentPage = 0;
                                $scope.items = generateData();

                                var searchMatch = function (haystack, needle) {
                                  if (!needle) {
                                    return true;
                                  }
                                  return haystack.toLowerCase().indexOf(needle.toLowerCase()) !== -1;
                                };
                                
                                // init the filtered items
                                $scope.search = function () {
                                  $scope.filteredItems = $filter('filter')($scope.items, function (item) {
                                    for(var attr in item) {
                                      if (searchMatch(item[attr], $scope.query))
                                        return true;
                                    }
                                    return false;
                                  });
                                  // take care of the sorting order
                                  if ($scope.sortingOrder !== '') {
                                    $scope.filteredItems = $filter('orderBy')($scope.filteredItems, $scope.sortingOrder, $scope.reverse);
                                  }
                                  $scope.currentPage = 0;
                                  // now group by pages
                                  $scope.groupToPages();
                                };
                                
                                // show items per page
                                $scope.perPage = function () {
                                  $scope.groupToPages();
                                };
                                
                                // calculate page in place
                                $scope.groupToPages = function () {
                                  $scope.pagedItems = [];
                                  
                                  for (var i = 0; i < $scope.filteredItems.length; i++) {
                                    if (i % $scope.itemsPerPage === 0) {
                                      $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)] = [ $scope.filteredItems[i] ];
                                    } else {
                                      $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)].push($scope.filteredItems[i]);
                                    }
                                  }
                                };
                                
                                 $scope.deleteItem = function (idx) {
                                      var itemToDelete = $scope.pagedItems[$scope.currentPage][idx];
                                      var idxInItems = $scope.items.indexOf(itemToDelete);
                                      $scope.items.splice(idxInItems,1);
                                      $scope.search();
                                      
                                      return false;
                                  };
                                
                                $scope.range = function (start, end) {
                                  var ret = [];
                                  if (!end) {
                                    end = start;
                                    start = 0;
                                  }
                                  for (var i = start; i < end; i++) {
                                    ret.push(i);
                                  }
                                  return ret;
                                };
                                
                                $scope.prevPage = function () {
                                  if ($scope.currentPage > 0) {
                                    $scope.currentPage--;
                                  }
                                };
                                
                                $scope.nextPage = function () {
                                  if ($scope.currentPage < $scope.pagedItems.length - 1) {
                                    $scope.currentPage++;
                                  }
                                };
                                
                                $scope.setPage = function () {
                                  $scope.currentPage = this.n;
                                };
                                
                                // functions have been describe process the data for display
                                $scope.search();
                               
                                
                                // change sorting order
                                $scope.sort_by = function(newSortingOrder) {
                                  if ($scope.sortingOrder == newSortingOrder)
                                    $scope.reverse = !$scope.reverse;
                                  
                                  $scope.sortingOrder = newSortingOrder;
                                };

                              };

                              initApp.$inject = ['$scope', '$filter'];

                              //$(document).ready(function() {}); 

                   </script>


      </body>
</html>