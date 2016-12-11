<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<?php include 'header.php';?>
</head>
<body>
	<?php include 'header_menu.php';?>
	<div id="body">
		<h1><span>Booking ticket</span></h1>
		<div>
			<ul>	
				
				<?php include 'book_db.php';?>
				<li>
                    		<div style="margin-left: 200px;">
                        	<h2 id = "demo"></h2>
                        	<input type="button" value="BOOK">
                    		</div>
                		</li>
			
			</ul>
		</div>
	</div>
	<?php include 'footer.php';?>
</body>
<script>
function showCheck(str) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "book_ajax.php?="+str,true);
  xhttp.send();
}
</script>
</html>
