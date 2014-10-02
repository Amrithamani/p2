

<div class="container">
	
	<h1>xkcd Password Generator</h1>
	
	
	<p class='password'>Your password is: <?php echo ($password) ? $password : ''; ?></p>
	
	<p class='options'>
	
	<form method="POST" action="./index.php">
	
	<label name="count">Number of words</label>
	<input type="text" id ="count" name="count"/><br />
	
	<label name="uppercase">Uppercase first letter?</label>
	<input type="checkbox" name="uppercase" value="checkbox" <?php echo ($uppercase) ? 'checked="checked"': '' ; ?> /><br />
	
	<label name="symbol">Add a symbol</label>
	<input type="checkbox" name="symbol" value="checkbox" <?php echo ($symbol) ? 'checked="checked"': '' ; ?> /><br />

	<label name="number">Add a number</label>
	<input type="checkbox" name="number" value="checkbox" <?php echo ($number) ? 'checked="checked"': '' ; ?> /><br />	
	
	</p>
	
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