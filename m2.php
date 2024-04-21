<!DOCTYPE html>
<html>

<head>
	<title>Mobile Navigation Bar</title>
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
<style>

		/* Navigation bar styling */
		.menu-list {
			max-width: 300px;
			margin: auto;
			height: 500px;
			color: white;
			background-color: green;
			border-radius: 10px;
		}
		
		/* Logo, navigation menu styling */
		.geeks {
			overflow: hidden;
			background-color: #111;
			position: relative;
		}
		
		/* styling navigation menu */
		.geeks #menus {
			display: none;
		}
		
		/* Link specific styling */
		.geeks a {
			text-decoration: none;
			color: white;
			padding: 14px 16px;
			font-size: 16px;
			display: block;
		}
		
		/* Navigation toggle menu styling */
		.geeks a.icon {
			display: block;
			position: absolute;
			right: 0;
			top: 0;
		}
		
		/* hover effect on navigation logo and menu */
		.geeks a:hover {
			background-color: #ddd;
			color: black;
		}
	</style>

</head>

<body>

	<div class="menu-list">

		<!-- Logo and navigation menu -->
		<div class="geeks">
			<a href="#" class="">GeeksforGeeks</a>
			<div id="menus">
				<a href="#">Language</a>
				<a href="#">Practice</a>
				<a href="#">Interview</a>
				<a href="#">Puzzle</a>

			</div>
			
			<!-- Bar icon for navigation -->
			<a href="javascript:void(0);" class="icon"
			onclick="geeksforgeeks()">
			<i onclick="myFunction(this)"
						class="fa fa-plus-circle">
			</i>
			</a>
		</div>
	</div>
</body>
<script>

	// Function to toggle the bar
	function geeksforgeeks() {
		var x = document.getElementById("menus");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
	}
</script>

<script>

	// Function to toggle the plus menu into minus
	function myFunction(x) {
		x.classList.toggle("fa-minus-circle");
	}
</script>

</html>
