<div class="container">
	
	<h1>xkcd Password Generator</h1>
	
	<p class='password'>Your password is: <?php echo ($password) ? $password : ''; ?></p>
	
	<form method="POST" action="./index.php">
	
	<label for="count">Number of words</label>
	<input type="text" id ="count" name="count"/><br />
	
	<label for="uppercase">Uppercase first letter?</label>
	<input type="checkbox" name="uppercase" id="uppercase" value="checkbox" <?php echo ($uppercase) ? 'checked="checked"': '' ; ?> /><br />
	
	<label for="symbol">Add a symbol</label>
	<input type="checkbox" name="symbol" id="symbol" value="checkbox" <?php echo ($symbol) ? 'checked="checked"': '' ; ?> /><br />

	<label for="number">Add a number</label>
	<input type="checkbox" name="number" id="number" value="checkbox" <?php echo ($number) ? 'checked="checked"': '' ; ?> /><br />	
	
	<input type="submit" class='btn btn-default' value="Generate password" />
	</form>
	
	<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
	</p>
</div>   