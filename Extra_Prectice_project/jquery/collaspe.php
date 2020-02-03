<!DOCTYPE html>
<html lang="en">
<head>
	<title>HowToCreate Series | Menu | Animated Accordion</title>
	<meta charset="utf-8">

	<!-- To ensure proper rendering and touch zooming in Mobile Phones -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		/* Style the buttons that are used to open and close the accordion panel */
		.accordion {
		    background-color: #8fb7a5;
		    color: #FFF;
		    cursor: pointer;
		    padding: 18px;
		    width: 100%;
		    text-align: left;
		    border: 1px solid white;
		    outline: none;
		    transition: 0.4s;
		    font: 20px Lato, sans-serif;
		}

		/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
		.active, .accordion:hover {
		    background-color: #527e6a;
		}

		/* Style the accordion panel. Note: hidden by default */
		.panel {
		    padding: 0 18px;
		    background-color: white;
		    max-height: 0;
		    overflow: hidden;
		    transition: max-height 0.2s ease-out;
		}

		p{
			font: 16px Lato, sans-serif; 
		}

		.accordion:after {
		    content: '\02795'; /* Unicode character for "plus" sign (+) */
		    font-size: 13px;
		    float: right;
		    margin-left: 5px;
		}

		.active:after {
		    content: "\2796"; /* Unicode character for "minus" sign (-) */
		}
	</style>
</head>
<body>
	<button class="accordion">Section 1</button>
	<div class="panel">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<button class="accordion">Section 2</button>
	<div class="panel">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<button class="accordion">Section 3</button>
	<div class="panel">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

	<script type="text/javascript">
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var panel = this.nextElementSibling;
		    if (panel.style.maxHeight){
		      panel.style.maxHeight = null;
		    } else {
		      panel.style.maxHeight = panel.scrollHeight + "px";
		    } 
		  });
		}
</script>
	</script>
</body>
</html>