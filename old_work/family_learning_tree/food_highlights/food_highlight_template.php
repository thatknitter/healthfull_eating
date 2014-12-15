<html>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
		<style type="text/css">
			.food-tab {
				background: -moz-linear-gradient(left, rgba(150,0,102,1) 0%, rgba(150,0,102,0.8) 50%, rgba(150,0,102,0.8) 51%, rgba(150,0,102,0.59) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(150,0,102,1)), color-stop(50%,rgba(150,0,102,0.8)), color-stop(51%,rgba(150,0,102,0.8)), color-stop(100%,rgba(150,0,102,0.59))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(left, rgba(150,0,102,1) 0%,rgba(150,0,102,0.8) 50%,rgba(150,0,102,0.8) 51%,rgba(150,0,102,0.59) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(left, rgba(150,0,102,1) 0%,rgba(150,0,102,0.8) 50%,rgba(150,0,102,0.8) 51%,rgba(150,0,102,0.59) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(left, rgba(150,0,102,1) 0%,rgba(150,0,102,0.8) 50%,rgba(150,0,102,0.8) 51%,rgba(150,0,102,0.59) 100%); /* IE10+ */
				background: linear-gradient(to right, rgba(150,0,102,1) 0%,rgba(150,0,102,0.8) 50%,rgba(150,0,102,0.8) 51%,rgba(150,0,102,0.59) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960066', endColorstr='#96960066',GradientType=1 ); /* IE6-9 */
				-moz-box-shadow: 5px 5px 5px #B75D99;
				-webkit-box-shadow: 5px 5px 5px #B75D99;
				box-shadow: inset 5px 5px 5px #B75D99;
				height: 60px;
				margin-top: -80px;
				padding-top: 10px;
				padding-bottom: 10px;
			}
			.food-tab:hover {
				background: -moz-linear-gradient(left, rgba(150,0,102,1) 0%, rgba(150,0,102,0.8) 50%, rgba(150,0,102,0.8) 51%, rgba(150,0,102,0.59) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(150,0,102,1)), color-stop(50%,rgba(150,0,102,0.8)), color-stop(51%,rgba(150,0,102,0.8)), color-stop(100%,rgba(150,0,102,0.59))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(left, rgba(150,0,102,1) 0%,rgba(150,0,102,0.8) 50%,rgba(150,0,102,0.8) 51%,rgba(150,0,102,0.59) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(left, rgba(150,0,102,1) 0%,rgba(150,0,102,0.8) 50%,rgba(150,0,102,0.8) 51%,rgba(150,0,102,0.59) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(left, rgba(150,0,102,1) 0%,rgba(150,0,102,0.8) 50%,rgba(150,0,102,0.8) 51%,rgba(150,0,102,0.59) 100%); /* IE10+ */
				background: linear-gradient(to right, rgba(150,0,102,1) 0%,rgba(150,0,102,0.8) 50%,rgba(150,0,102,0.8) 51%,rgba(150,0,102,0.59) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960066', endColorstr='#96960066',GradientType=1 ); /* IE6-9 */
				-moz-box-shadow: 5px 5px 5px #B75D99;
				-webkit-box-shadow: 5px 5px 5px #B75D99;
				box-shadow: inset 5px 5px 5px #B75D99;
				height: 60px;
				margin-top: -80px;
				padding-top: 10px;
				padding-bottom: 10px;
			}
			.recipe-ideas {
				width: 268.8px;
				height: 303px;
				border-style: solid;
				border-width: 2pt;
				font-family: arial;
				font-size: 10pt;
				margin-top: 10px;
				margin-left: 12px;
			}
			.image {
				width: 325px;
				height: 200px;
				margin-left: 306px;
				margin-top: -309px;
				border-style: solid; /*this will go away when we have real images*/
				border-width: 2pt;
			}
			.food-bar {
				width: 559px;
				height: 38px;
				background-color: #960066;
				font-family: Arial, Helvetica, sans-serif;
				color: #FFFFFF;
				text-align: center;
				margin-left: 634px;
				margin-top: -236px;
				-moz-box-shadow: 5px 3px 5px #B75D99, -3px -3px 5px #333333;
				-webkit-box-shadow: 5px 3px 5px #B75D99, -3px -3px 5px #333333;
				box-shadow: inset 5px 3px 5px #B75D99, inset -3px -3px 5px #333333;
			}
			.desc {
				height: 164px;
				width: 554.4px;
				border-style: solid;
				border-width: 2pt;
				margin-left: 630px;
				font-family: Arial, Helvetica, sans-serif;
				padding-left: 5px;
			}
			#varieties-bar {
				width: 420px;
				height: 25px;
				background: -moz-linear-gradient(left, rgba(178,175,175,1) 0%, rgba(178,175,175,0.73) 50%, rgba(178,175,175,0.72) 51%, rgba(178,175,175,0.46) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(178,175,175,1)), color-stop(50%,rgba(178,175,175,0.73)), color-stop(51%,rgba(178,175,175,0.72)), color-stop(100%,rgba(178,175,175,0.46))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* IE10+ */
				background: linear-gradient(to right, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b2afaf', endColorstr='#75b2afaf',GradientType=1 ); /* IE6-9 */
				margin-top: 10px;
				margin-left: 300px;
				font-family: arial, helvetica, sans-serif;
				color: #FFFFFF;
				font-size: 12pt;
				padding-left: 10px;
				padding-top: 7px;
				-moz-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				-webkit-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				box-shadow: inset 5px 3px 5px #f2f2f2, inset -3px -3px 5px #333333;
				margin-bottom: 165px;
			}
			#cook-bar {
				width: 420px;
				height: 25px;
				background: -moz-linear-gradient(left, rgba(178,175,175,1) 0%, rgba(178,175,175,0.73) 50%, rgba(178,175,175,0.72) 51%, rgba(178,175,175,0.46) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(178,175,175,1)), color-stop(50%,rgba(178,175,175,0.73)), color-stop(51%,rgba(178,175,175,0.72)), color-stop(100%,rgba(178,175,175,0.46))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* IE10+ */
				background: linear-gradient(to right, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b2afaf', endColorstr='#75b2afaf',GradientType=1 ); /* IE6-9 */
				margin-top: -197px;
				margin-left: 760px;
				font-family: arial, helvetica, sans-serif;
				color: #FFFFFF;
				font-size: 12pt;
				padding-left: 10px;
				padding-top: 7px;
				-moz-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				-webkit-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				box-shadow: inset 5px 3px 5px #f2f2f2, inset -3px -3px 5px #333333;
				margin-bottom: 140px;
			}
			#store-bar {
				width: 420px;
				height: 25px;
				background: -moz-linear-gradient(left, rgba(178,175,175,1) 0%, rgba(178,175,175,0.73) 50%, rgba(178,175,175,0.72) 51%, rgba(178,175,175,0.46) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(178,175,175,1)), color-stop(50%,rgba(178,175,175,0.73)), color-stop(51%,rgba(178,175,175,0.72)), color-stop(100%,rgba(178,175,175,0.46))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* IE10+ */
				background: linear-gradient(to right, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b2afaf', endColorstr='#75b2afaf',GradientType=1 ); /* IE6-9 */
				margin-top: 30px;
				margin-left: 300px;
				font-family: arial, helvetica, sans-serif;
				color: #FFFFFF;
				font-size: 12pt;
				padding-left: 10px;
				padding-top: 7px;
				-moz-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				-webkit-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				box-shadow: inset 5px 3px 5px #f2f2f2, inset -3px -3px 5px #333333;
				margin-bottom: 165px;
			}
			#theme-bar {
				width: 420px;
				height: 25px;
				background: -moz-linear-gradient(left, rgba(178,175,175,1) 0%, rgba(178,175,175,0.73) 50%, rgba(178,175,175,0.72) 51%, rgba(178,175,175,0.46) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(178,175,175,1)), color-stop(50%,rgba(178,175,175,0.73)), color-stop(51%,rgba(178,175,175,0.72)), color-stop(100%,rgba(178,175,175,0.46))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* IE10+ */
				background: linear-gradient(to right, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b2afaf', endColorstr='#75b2afaf',GradientType=1 ); /* IE6-9 */
				margin-top: -197px;
				margin-left: 760px;
				font-family: arial, helvetica, sans-serif;
				color: #FFFFFF;
				font-size: 12pt;
				padding-left: 10px;
				padding-top: 7px;
				-moz-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				-webkit-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				box-shadow: inset 5px 3px 5px #f2f2f2, inset -3px -3px 5px #333333;
				margin-bottom: 140px;
			}
			#health-bar {
				width: 420px;
				height: 25px;
				background: -moz-linear-gradient(left, rgba(178,175,175,1) 0%, rgba(178,175,175,0.73) 50%, rgba(178,175,175,0.72) 51%, rgba(178,175,175,0.46) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(178,175,175,1)), color-stop(50%,rgba(178,175,175,0.73)), color-stop(51%,rgba(178,175,175,0.72)), color-stop(100%,rgba(178,175,175,0.46))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* IE10+ */
				background: linear-gradient(to right, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b2afaf', endColorstr='#75b2afaf',GradientType=1 ); /* IE6-9 */
				margin-top: 30px;
				margin-left: 300px;
				font-family: arial, helvetica, sans-serif;
				color: #FFFFFF;
				font-size: 12pt;
				padding-left: 10px;
				padding-top: 7px;
				-moz-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				-webkit-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				box-shadow: inset 5px 3px 5px #f2f2f2, inset -3px -3px 5px #333333;
				margin-bottom: 165px;
			}
			#science-bar {
				width: 420px;
				height: 25px;
				background: -moz-linear-gradient(left, rgba(178,175,175,1) 0%, rgba(178,175,175,0.73) 50%, rgba(178,175,175,0.72) 51%, rgba(178,175,175,0.46) 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(178,175,175,1)), color-stop(50%,rgba(178,175,175,0.73)), color-stop(51%,rgba(178,175,175,0.72)), color-stop(100%,rgba(178,175,175,0.46))); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(left, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* IE10+ */
				background: linear-gradient(to right, rgba(178,175,175,1) 0%,rgba(178,175,175,0.73) 50%,rgba(178,175,175,0.72) 51%,rgba(178,175,175,0.46) 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b2afaf', endColorstr='#75b2afaf',GradientType=1 ); /* IE6-9 */
				margin-top: -197px;
				margin-left: 760px;
				margin-bottom: 200px;
				font-family: arial, helvetica, sans-serif;
				color: #FFFFFF;
				font-size: 12pt;
				padding-left: 10px;
				padding-top: 7px;
				-moz-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				-webkit-box-shadow: 5px 3px 5px #f2f2f2, -3px -3px 5px #333333;
				box-shadow: inset 5px 3px 5px #f2f2f2, inset -3px -3px 5px #333333;
				
			}
			p.bar {
				color: black;
				font-size: 10pt;
			}
			a.more {
				color: #91B428;
				font-size: 8pt;
				text-decoration: none;
			}
			a.more:hover {
				text-decoration: underline;
			}
		</style>
	</head>
	<body>
		<div class="centerbox">
			<div class="search-bar">
				<strong>Search</strong>
			</div>
			<img class="logo" src="images/logohires.jpg">
			<div class="topbox">
				<h3>Online Nutrition and Health Eating Community - <em class="tagline">Where Questions Get Answers</em></h3>
			</div>
			<a href="" style="text-decoration: none;">
			<div class="Home-tab">
				<strong>Home</strong>
			</div>
			</a>
			<a href="" style="text-decoration: none;">
			<div class="food-tab">
				<strong>Seasonal <br/>Foods</strong>
			</div>
			</a>
			<a href="" style="text-decoration: none;">
			<div class="cooking-tab">
				<strong>Cooking <br/>School</strong>
			</div>
			</a>
			<a href="" style="text-decoration: none;">
			<div class="nutrition-tab">
				<strong>Nutrition <br/>Science</strong>
			</div>
			</a>
			<a href="" style="text-decoration: none;">
			<div class="recipe-tab">
				<strong>Recipes</strong>
			</div>
			</a>
			<a href="" style="text-decoration: none;">
			<div class="gizmo-tab">
				<strong>Gizmos &amp; <br/>Gadgets</strong>
			</div>
			</a>
			<a href="" style="text-decoration: none;">
			<div class="pantry-tab">
				<strong>Self-Reliant </br> Pantry</strong>
			</div>
			</a>
			<a href="" style="text-decoration: none;">
			<div class="org-tab">
				<strong>The <br/>Organized Cook</strong>
			</div>
			</a>
			<a href="" style="text-decoration: none;">
			<div class="forums-tab">
				<strong>Forums &amp; <br/>Groups</strong>
			</div>
			</a>
			<a href="" style="text-decoration: none;">
			<div class="mystuff-tab">
				<strong>My Stuff</strong>
			</div>
			</a>
			<div class="recipe-ideas">
				<span style="font-family: arial; text-align: center; font-style: italic; font-size: 16pt;"><h4>Recipes We Know &amp; Love</h4></span>
				<p>recipe with link </br>
					recipe with link
				</p>
			</div>
			<div class="image">
				<img src="images/placeholder.jpg">
			</div>
			<div class="food-bar">
				<h3>Food Thing Here</h3>
			</div>
			<div class="desc">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus odio in fermentum posuere. Curabitur mattis vulputate lectus, 
					vel fringilla urna sagittis non. Donec id nunc quam. Ut volutpat ligula et mi euismod, a rhoncus sem tempus. Sed vestibulum metus 
					pellentesque libero congue, et scelerisque turpis semper. Aliquam nec condimentum elit, quis eleifend odio. Cras dictum fringilla felis, 
					eu laoreet ipsum tempor non. Phasellus eu pulvinar tellus, id varius nisi. Nullam vel dui consequat, mattis velit vel, tincidunt est.</p>
			</div>
			<div id="varieties-bar">
				Varieties
					<p class="bar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus odio in fermentum posuere. Curabitur mattis vulputate lectus, 
					vel fringilla urna sagittis non. Donec id nunc quam. Ut volutpat ligula et mi euismod, a rhoncus sem tempus. Sed vestibulum metus 
					pellentesque libero congue, et scelerisque turpis semper. Aliquam nec condimentum elit, quis eleifend odio. Cras dictum fringilla felis, 
					eu laoreet ipsum tempor non. Phasellus eu pulvinar tellus, id varius nisi. Nullam vel dui consequat, mattis velit vel, tincidunt est. <a href="" class="more">more</a></p>
			</div>
			<div id="cook-bar">
				Basic Cooking Methods
					<p class="bar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus odio in fermentum posuere. Curabitur mattis vulputate lectus, 
					vel fringilla urna sagittis non. Donec id nunc quam. Ut volutpat ligula et mi euismod, a rhoncus sem tempus. Sed vestibulum metus 
					pellentesque libero congue, et scelerisque turpis semper. Aliquam nec condimentum elit, quis eleifend odio. Cras dictum fringilla felis, 
					eu laoreet ipsum tempor non. Phasellus eu pulvinar tellus, id varius nisi. Nullam vel dui consequat, mattis velit vel, tincidunt est. <a href="" class="more">more</a></p>
			</div>
			<div id="store-bar">
				Buying &amp; Storing
					<p class="bar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus odio in fermentum posuere. Curabitur mattis vulputate lectus, 
					vel fringilla urna sagittis non. Donec id nunc quam. Ut volutpat ligula et mi euismod, a rhoncus sem tempus. Sed vestibulum metus 
					pellentesque libero congue, et scelerisque turpis semper. Aliquam nec condimentum elit, quis eleifend odio. Cras dictum fringilla felis, 
					eu laoreet ipsum tempor non. Phasellus eu pulvinar tellus, id varius nisi. Nullam vel dui consequat, mattis velit vel, tincidunt est. <a href="" class="more">more</a></p>
			</div>
			<div id="theme-bar">
				Variations on a Theme
					<p class="bar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus odio in fermentum posuere. Curabitur mattis vulputate lectus, 
					vel fringilla urna sagittis non. Donec id nunc quam. Ut volutpat ligula et mi euismod, a rhoncus sem tempus. Sed vestibulum metus 
					pellentesque libero congue, et scelerisque turpis semper. Aliquam nec condimentum elit, quis eleifend odio. Cras dictum fringilla felis, 
					eu laoreet ipsum tempor non. Phasellus eu pulvinar tellus, id varius nisi. Nullam vel dui consequat, mattis velit vel, tincidunt est. <a href="" class="more">more</a></p>
			</div>
			<div id="health-bar">
				Health Benefits
					<p class="bar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus odio in fermentum posuere. Curabitur mattis vulputate lectus, 
					vel fringilla urna sagittis non. Donec id nunc quam. Ut volutpat ligula et mi euismod, a rhoncus sem tempus. Sed vestibulum metus 
					pellentesque libero congue, et scelerisque turpis semper. Aliquam nec condimentum elit, quis eleifend odio. Cras dictum fringilla felis, 
					eu laoreet ipsum tempor non. Phasellus eu pulvinar tellus, id varius nisi. Nullam vel dui consequat, mattis velit vel, tincidunt est. <a href="" class="more">more</a></p>
			</div>
			<div id="science-bar">
				Food Body Connection
					<p class="bar">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus odio in fermentum posuere. Curabitur mattis vulputate lectus, 
					vel fringilla urna sagittis non. Donec id nunc quam. Ut volutpat ligula et mi euismod, a rhoncus sem tempus. Sed vestibulum metus 
					pellentesque libero congue, et scelerisque turpis semper. Aliquam nec condimentum elit, quis eleifend odio. Cras dictum fringilla felis, 
					eu laoreet ipsum tempor non. Phasellus eu pulvinar tellus, id varius nisi. Nullam vel dui consequat, mattis velit vel, tincidunt est. <a href="" class="more">more</a></p>
			</div>
			<div class="footerbar">
			</div>
			<img class="twitter" src="images/twitter_logo_footer2.jpg">
			<img class="facebook" src="images/fb_logo_footer2.jpg">
			<div class="footer-links">
				<ul class="foot-links">
				<li class="foot-links"><a class="foot" href="">About Us</a></li> 
				<li class="foot-links"><a class="foot" href="">Advertising</a></li> 
				<li class="foot-links"><a class="foot" href="">We Do Donate</a></li> 
				<li class="foot-links"><a class="foot" href="">Media</a></li> 
				<li class="foot-links"><a class="foot" href="">Contact Us</a></li> 
				<li class="foot-links"><a class="foot" href="">FAQs</a></li> 
				<li class="foot-links"><a class="foot" href="">Terms &amp; Conditions</a></li> 
				<li class="foot-links"><a class="foot" href="">Privacy</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>