<?php
	var_dump($_GET);	
	var_dump($_POST);
?>
<!-- Separate languages. PHP code will not go within HTML -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
	</head>
	<body>
		<h4>User Login</h4>
		<form method="POST" action="/my_first_form.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Type Your Username">	
				<!--type="text" allows username to be seen as typed-->
			</p>
			<p>
				<label for="password">Password</label>	
				<input id="password" name="password" type="password" placeholder="Type Your Password">	
				<!--type="password" hides text as dots-->
			</p>
			<p>
				<button>Login</button>	<!--type="submit" creates submit button. Same as <button></button>-->
			</p>
		</form>

		<!-- Created form below that allows users to search using duckduckgo directly from my page -->

		<hr> <!-- <hr> creates dividing line between elements on page -->
		<form method="GET" action="https://duckduckgo.com/">	<!--GET sends query string to url-->
			<p>
				<label for="q">Search DuckDuckGo</label>	<!--for, id, and name set to 'q'-->
				<input id="q" name="q" type="text">			<!--'q' directs searched word into query string-->
			</p>	
			<p>
				<input type="submit">
			</p>	
		</form>
		<hr>
		<!-- Created new form for email composition. data must be returned to origin...action="/my_first_form.php" -->
		<h4>Compose An Email</h4>
		<form method="POST" action="/my_first_form.php"> 
			<p>
				<label for="to">To:</label>
				<input id="to" name="to" type="text">
			</p>
			<p>
				<label for="subject">Subject:</label>
				<input id="subject" name="subject" type="text">
			</p>
			<p>
				<label for="email_body">Body:</label><br>
				<textarea id="email_body" name="email_body" rows="25" cols="50"></textarea>
			</p>
			<p>
				<button type="submit">Submit</button>
			</p>
			<input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
			<label for="save_copy">Save Copy to Sent Folder</label>
		</form>
		
		<hr>

		<!-- Created anchor tag link that seaches Reddit for "javascript" and sorts by top -->
		<a href="https://www.reddit.com/search?q=javascript&sort=top" target="_blank">Search For JavaScript</a> 
		<!-- I copied the URL from a top-sorted javascript search and pasted it in my anchor tag. -->
		
		<!-- Created search bar that allows users to search Reddit and sort it by top -->
		<form method="GET" action="https://www.reddit.com/search" target="_blank">
			<!-- GET retrieves data from reddit search bar. -->
			<p>
				<label for="q">Search Reddit</label><!--creates search bar for reddit based on entered text-->
				<input id="q" name="q" type="text">
				<input id="sort" name="sort" value="top" type="hidden"><!--adds hidden search for top-->
			</p>
			<p>
				<button type="submit">Search</button>
			</p>
		</form>
		<hr>
		<h2>Multiple Choice Test</h2>
		<form method="POST" action="/my_first_form.php"> 
			<p>What is the Capital of the United States?</p>
			<label>
				<input type="radio" name="q1" value="Texas">
				Texas
			</label>
			<label>
				<input type="radio" name="q1" value="Washington DC">
				Washington DC
			</label>
			<label>
				<input type="radio" name="q1" value="Washington State">
				Washington State
			</label>
			<label>
				<input type="radio" name="q1" value="New Hampshire">
				New Hampshire
			</label>
			<p>Which of the following are states?</p>
			<label><input type="checkbox" id="b1" name="b[]" value="Maine">Maine</label>
			<label><input type="checkbox" id="b2" name="b[]" value="New Mexico">New Mexico</label>
			<label><input type="checkbox" id="b3" name="b[]" value="Boston">Boston</label>
			<label><input type="checkbox" id="b4" name="b[]" value="Seattle">Seattle</label>

			<p><label for="game_system">Select the gaming system(s) that you own</label></p>
			<select id="game_system" name="game_system[]" multiple>
				<option value="xbox">Xbox</option>
				<option value="ps4">PS4</option>
				<option value="pc">PC</option>
			</select>
			
			<p>
				<button type="submit">Submit</button>
			</p>
		</form>
		<hr>
		<h2>Select Testing</h2>
		<form method="POST" action="/my_first_form.php">
			<label for="tom_brady">Is Tom Brady the greatest quarterback to have ever existed?</label>
			<select id="tom_brady" name="tom_brady">
				<option value="0">No</option>
				<option value="1" selected>Yes</option>
			</select>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>
