<?php require_once "conn.php"?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>MyBank Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body ng-app='yapp'>

	<div class="wrapper" ng-controller='SocketCtrl'>

	    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					My Bank
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="dashboard.html">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.html">
	                        <i class="material-icons">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>

	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
<!--						<a class="navbar-brand" href="#">Material Dashboard</a>-->
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
		 						</a>
                                <ul class="dropdown-menu">
									<li><a href="#">Log out</a></li>
								</ul>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">info_outline</i>
								</div>
								<div class="card-content">
									<p class="category">Uncompleted Signups</p>
									<h3 class="title">145</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons text-danger">warning</i> <a href="#" target="_blank">Success rate should not be less than 70%</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">content_copy</i>
								</div>
								<div class="card-content">
									<p class="category">Completed Registration</p>
									<h3 class="title">25</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> Just Updated
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="fa fa-merchant"></i>
								</div>
								<div class="card-content">
									<p class="category">Agents</p>
									<h3 class="title">245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Just Updated
									</div>
								</div>
							</div>
						</div>
					</div>

					

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">New Signups</h4>
	                                <p class="category">For Today - 26th March, 2017</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
	                                        <th>ID</th>
	                                    	<th>Phone Number</th>
	                                    	<th></th>
	                                    
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>1</td>
	                                        	<td>08029059277</td>
	                                        	<td><button type="button" rel="tooltip" title="Send Confirmation" class="btn btn-primary btn-simple btn-xs">
																<i class="material-icons">save</i>
															</button></td>
	                                        </tr>
	                                        
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
				<div class="container-fluid">
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="#">MyBank</a>, made with love for a better web
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>


	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>


	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>
	
	<script type="text/javascript">
		var app = angular.module('yapp', []);
		app.factory('socket', ['$rootScope', function($rootScope) {
	        var socket = io.connect();
	        return {
	          on: function(eventName, callback){
	            socket.on(eventName, callback);
	          },
	          emit: function(eventName, data) {
	            socket.emit(eventName, data);
	          }
	        };
	      }]);
		app.controller('SocketCtrl', function($scope, socket, $http) {
			$scope.saved = [];
	        $scope.tweets = [];
	        $scope.savedTweets = [];
	        $scope.currentTweet = {};

	        $scope.loadData = function(){
	          $http.get('/report')
	                .then(function(res) {
	                    if (res.data.status == '00') {
	                            console.log(res.data.data);
	                            $scope.savedTweets = res.data.data;
	                    }     
	                }, function(err) {
	                    console.log(err);
	            })
	         };

             //call loadData when controller initialized
            $scope.loadData();
	        
	        $scope.save_report = function(id) {
	        	new_tweet = $scope.tweets[id];
	        	var send_data = {'source': 'tweet', initial_report: {source: 'tweet', text: new_tweet.text, user: new_tweet.user.screen_name, source_id: new_tweet, embed_link: "", date: Date.now(), userObj: new_tweet.user}};
	        	$http.post('/report/new', send_data)
	        		.then(function(res) {
	        			$scope.formMsg = res.data.msg;
	        			console.log(res.data);
	        			if (res.data.status == '00') {
	        				alert('Report Saved and Follow-up tweet sent');
	        				$scope.tweets.splice(id, 1);     
	        				$scope.success = true;
	        			}
	        		}, function(err) {
	        			console.log(err);
	        		})
	        };

	        socket.on('newnotification', function(data) {
              $scope.$apply(function () {
                console.log(data);
                $scope.savedTweets.push(data.tweet);
              });
            });

	        socket.on('notification', function(data) {
	          $scope.$apply(function () {
	            console.log(data);
	            $scope.tweets.push(data.tweet);
	          });
	        });

	      });

	</script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets2/js/demos.js
        	//demo.initDashboardPageCharts();

    	});
	</script>

</html>
