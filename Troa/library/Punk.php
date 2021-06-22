<?php
// PUNK Client

Class Punk {

  public function __construct()
  {
    // What I've to do ?
  }

  public function getBeers()
  {
    $url = 'https://api.punkapi.com/v2/beers';
	$timeout = 10;

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

	if (preg_match('`^https://`i', $url))
	{
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	}

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// Récupération du contenu retourné par la requête
	$page_content = curl_exec($ch);

	curl_close($ch);



	$result = file_get_contents($url);
	$array = json_decode($result, true);
	return $array;
  }

  public function getBeer($id)
  {
    $url = 'https://api.punkapi.com/v2/beers/'.$id;
	$timeout = 10;

	$ch = curl_init($url);

	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

	if (preg_match('`^https://`i', $url))
	{
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	}

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// Récupération du contenu retourné par la requête
	$page_content = curl_exec($ch);

	curl_close($ch);



	$result = file_get_contents($url);
	$array = json_decode($result, true);
	return $array;
  }
}

