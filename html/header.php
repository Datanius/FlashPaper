<?php defined('_DIRECT_ACCESS_CHECK') or exit(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- 
		######################################################################################
		# Copyright (c) 2017-2019 Andrew Paglusch                                            #
		# https://raw.githubusercontent.com/AndrewPaglusch/FlashPaper/master/LICENSE         #
		######################################################################################
		-->
		<title><?php echo $settings['site_title'] ?></title>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./css/bootstrap_5.1.3.min.css" integrity="sha256-YvdLHPgkqJ8DVUxjjnGVlMMJtNimJ6dYkowFFvp4kKs=" crossorigin="anonymous">
		<style>
            body {
                background-color: #EFEFEF;
            }
			#form-div {
				background-color: #FFFFFF;
				padding-left:35px;
				padding-right:35px;
				padding-top:35px;
				padding-bottom:50px;

				margin:30px;
				border-radius: 7px;
				-moz-border-radius: 7px;
				-webkit-border-radius: 7px;

                -moz-box-shadow: 0 0 30px rgb(0 0 0 / 20%);
                -webkit-box-shadow: 0 0 30px rgb(0 0 0 / 20%);
                box-shadow: 0 0 30px rgb(0 0 0 / 20%);
			}
			.form-control[readonly] {
				background-color:#ffffff !important;
				opacity: 1;
			}
            input.form-control[readonly] {
                width: calc(100% - 40px);
                -webkit-border-top-right-radius: 0;
                -moz-border-radius-topright: 0;
                border-top-right-radius: 0;

                -webkit-border-bottom-right-radius: 0;
                -moz-border-radius-bottomright: 0;
                border-bottom-right-radius: 0;
            }
            .form-select {
                cursor: pointer;
            }
            .btn.btn-copy {
                margin: 0;
                padding: 0;
                cursor: pointer;
                text-align: center;
                line-height: 0;
                height: 38px;
                width: 40px;

                -webkit-border-top-left-radius: 0;
                -moz-border-radius-topleft: 0;
                border-top-left-radius: 0;

                -webkit-border-bottom-left-radius: 0;
                -moz-border-radius-bottomleft: 0;
                border-bottom-left-radius: 0;
            }
			textarea {
				width: 100%;
				height: 200px;
				padding: 12px 20px;
				box-sizing: border-box;
				border: 2px solid #ccc;
				border-radius: 4px;
				background-color: #f8f8f8;
				resize: none;
			}
			fieldset {
				margin:10px;
				border: 0;
			}
            .btn-primary {
				background-color: #4ca2ae;
				border: none;
				color: white;
				padding: 12px 28px;
				text-decoration: none;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;

				-webkit-transition-duration: 0.4s; /* Safari */
				transition-duration: 0.4s;
			}
            .btn-primary:hover {
				background-color: #67b2bc;
				color: white;
			}
			.col-8 {
				width: 320px !important;
			}
			.col-4 {
				width: 100% !important;
			}
		</style>
	</head>
	<body onUnload="document.getElementById('secret').value = ''">
		<script>
			if (location.protocol !== 'https:') {
				document.write('<div style="padding-top: 1%" class="container"><div class="alert alert-danger"><strong>Danger!</strong> This site is not being accessed over an encrypted connection. Do NOT input any sensitive information!</div></div>');
			}
		</script>
