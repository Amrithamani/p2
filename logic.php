<?php

# Defining defaults
$words = ['wordone','wordtwo'];
$count =3;
$uppercase = false;
$password = '';
$symbol = false;
$number = false;

$words = array();

if (isset($_POST['count'])) 
{
	$count = $_POST['count'];
	
	if(! is_numeric($count)) 
	{
	  return 'sorry, there was an error with your amount of words.';
	}
    
}

if (isset($_POST['uppercase'])) 
{
	$uppercase = true;
}else 
{
	$uppercase = false;
}

if (isset($_POST['symbol'])) 
{
	$symbol = true;
}else 
{
	$symbol = false;
}

if (isset($_POST['number'])) 
{
	$number = true;
} else 
{
	$number = false;
}

if($words = file('words.txt')) 
{

	$selected_words = [];
	
	$symbols = ['!','@','#', '&', '%', '~'];
	$numbers = [0,1,2,3,4,5,6,7,8,9];
	
	for($i=0; $i <$count; $i++) 
	{
		// generate random mumber from 0 to dictionary size
		$max = count($words) -1;
		$rand = rand(0,$max);
		
		$word = $words[$rand];
		
		//echo $word . '<br />';
		
		array_push($selected_words, trim($word));
	}
	if($uppercase) 
	{
	
		foreach($selected_words as $index => $word)
		{
			$selected_words[$index] = ucfirst($word);
		}
	}
	
	$password = implode("-", $selected_words);
	
	if($number)
	{
		$rand_num = rand(0,count($numbers) -1);

		$password = $password.$numbers[$rand_num];	
	}	
	
	if($symbol)
	{
		$rand_sym = rand(0,count($symbols) -1);

		$password = $password.$symbols[$rand_sym];
	}
	
	
}
	
	
	
	
	

