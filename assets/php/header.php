<?php
require_once(dirname(dirname(__DIR__)) . "/root-path.php");
/**
 * Get the relative path
 *
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/header.php FarmToYou Header
 **/
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>
<!DOCTYPE html>
<html ng-app="AngularMVC">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<link type="text/css" href="<?php echo $PREFIX; ?>assets/css/datetimepicker.css" rel="stylesheet" />
		<link type="text/css" href="<?php echo $PREFIX; ?>assets/css/angular-mvc.css" rel="stylesheet" />
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-route.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular-sanitize.min.js"></script>
		<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.10.0.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
		<script type="text/javascript" src="<?php echo $PREFIX; ?>assets/js/datetimepicker.js"></script>
		<title><?php echo $PAGE_TITLE; ?></title>
	</head>
	<body>
