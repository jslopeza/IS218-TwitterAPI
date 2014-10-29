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
			<h1>Twitter App</h1>
			<p>Click on the title to expand each section</p>
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
							<?php 
								require 'autoload.php';
								
								$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
								$getfield = '?screen_name=binoypatel14';
								$requestMethod = 'GET';
								$json = \Classes\TwitterFunctionality::getField($getfield, $url, $requestMethod);
								Classes\HtmlPrint::printStatuses($json);
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
							<?php 
								$url = 'https://api.twitter.com/1.1/friends/ids.json';
								$getfield = '?screen_name=binoypatel14';
								$requestMethod = 'GET';
								$json = \Classes\TwitterFunctionality::getField($getfield, $url, $requestMethod);
								Classes\HtmlPrint::printFriends($json);
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
							<?php 
								$url = 'https://api.twitter.com/1.1/followers/ids.json';
								$getfield = '?screen_name=binoypatel14';
								$requestMethod = 'GET';
								$json = \Classes\TwitterFunctionality::getField($getfield, $url, $requestMethod);
								Classes\HtmlPrint::printFriends($json);
							?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
								Update Status
							</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse">
						<div class="panel-body">
							<?php 
								$url = 'https://api.twitter.com/1.1/statuses/update.json';								
								$requestMethod = 'POST';
								$postfield = array(
									'status' => "Updating Status using #TwitterAPI"
								);
								$json = \Classes\TwitterFunctionality::postField($postfield, $url, $requestMethod);
								Classes\HtmlPrint::printSuccess($json);
							?>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
								Twitter Timeline
							</a>
						</h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse">
						<div class="panel-body">
							<?php 
								$url = 'https://api.twitter.com/1.1/statuses/home_timeline.json';								
								$requestMethod = 'GET';
								$getfield = '?screen_name=binoypatel14';
								$json = \Classes\TwitterFunctionality::getField($getfield, $url, $requestMethod);
								Classes\HtmlPrint::printTimeline($json);
							?>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>
