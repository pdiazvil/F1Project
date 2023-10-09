<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <title>F1 Table</title>
	<link rel="icon" type="image/x-icon"
		href="images/favicon.png">
	<link rel="stylesheet" href="f1styles.css">
  </head>
  <body>	
	<?php
		$connect = mysqli_connect('localhost', 'root', '', 'f1_connect');
		if (!$connect) {
			die('Could not connect: ' . mysql_error());
		}
		echo 'Connected successfully';
		mysql_close($connect);
	/?>
	
	<img src="images/f1-logo.avif" alt="F1 Logo" width="200" height="150">
	<h1>F1 Historical Standings</h1>
	<ul class="nav">
		<li><a href="index.html">Home</a></li>
		<li><a href="drivers.html">Drivers</a></li>
		<li><a href="#teams.html">Teams</a></li>
		<li><a href="#tracks.html">Tracks</a></li>
		<li><a href="#season.html">Season</a></li>
		<li><a href="#qualifying.html">Qualifying</a></li>
		<li><a href="#results.html">Results</a></li>
		<li><a href="#wdcstandings.html">WDC</a></li>
		<li><a href="#wccstandings.html">WCC</a></li>
		<li class="right"><a href="#about.html">About</a></li>
	</ul>
    <h2>F1 Drivers</h2>
    <table>
		<tr>
			<th>Name</th>
			<th>Nationality</th>
			<th>DOB</th>
			<th>Current Team</th>
			<th>First Entry</th>
		</tr>
		<tr>
			<td>Albon, Alexander</td>
			<td>THA</td>
			<td>23-Mar-96</td>
			<td>Williams</td>
			<td>2019</td>
		</tr>
	</table>
  </body>
</html>