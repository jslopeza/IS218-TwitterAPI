<!DOCTYPE html>
<html lang="en">
	<head>
		<title>College Records</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								Twitter Statuses
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in">
						<div class="panel-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis assumenda debitis aliquid vel inventore cupiditate voluptatibus nulla voluptate sapiente earum eum, beatae suscipit quis ex excepturi omnis, iusto repudiandae. Velit.
							<?php 
								require 'autoload.php';
								/*
								$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
								$getfield = '?screen_name=binoypatel14';
								$requestMethod = 'GET';
								$json = \Classes\TwitterFunctionality::getField($getfield, $url, $requestMethod);
								Classes\HtmlPrint::printStatuses($json);*/
							?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								Twitter Friends
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse">
						<div class="panel-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eligendi quos incidunt error, doloremque cum iusto quia quaerat quam nesciunt ad harum a alias reprehenderit nihil, perspiciatis quisquam veritatis magni?
							<?php 
								/*$url = 'https://api.twitter.com/1.1/friends/ids.json';
								$getfield = '?screen_name=binoypatel14';
								$requestMethod = 'GET';
								$json = \Classes\TwitterFunctionality::getField($getfield, $url, $requestMethod);
								Classes\HtmlPrint::printFriends($json);*/
							?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								Twitter Followers
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse">
						<div class="panel-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eligendi quos incidunt error, doloremque cum iusto quia quaerat quam nesciunt ad harum a alias reprehenderit nihil, perspiciatis quisquam veritatis magni?
							<?php 
								/*$url = 'https://api.twitter.com/1.1/followers/ids.json';
								$getfield = '?screen_name=binoypatel14';
								$requestMethod = 'GET';
								$json = \Classes\TwitterFunctionality::getField($getfield, $url, $requestMethod);
								Classes\HtmlPrint::printFriends($json);*/
							?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
								Twitter Friends
							</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse in">
						<div class="panel-body">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eligendi quos incidunt error, doloremque cum iusto quia quaerat quam nesciunt ad harum a alias reprehenderit nihil, perspiciatis quisquam veritatis magni?

							<?php 
								/*$url = 'https://api.twitter.com/1.1/statuses/update.json';								
								$requestMethod = 'POST';
								$postfield = array(
									'status' => "Updating Status using #TwitterAPI"
								);
								$json = \Classes\TwitterFunctionality::postField($postfield, $url, $requestMethod);
								Classes\HtmlPrint::printSuccess($json);*/
							?>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>