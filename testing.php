<?php
//$con = mysqli_connect("localhost","root","","fungama");

// $genre = "Action, Adventure, Sci-Fi";
// $genreText = ["Action","Adventure","Animation","Biography","Comedy","Crime","Documentary","Drama","Family","Fantasy","Film Noir","History ","Horror","Music","Musical","Mystery","Romance","Sci-Fi","Short Film","Sport","Superhero","Thriller","War","Western","Hollywood","Bollywood","Pakisani","Adventure","Sci-Fi","Crime","Drama","Thriller","Family"];
// $genreID = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33"];
// $genre = str_replace($genreText, $genreID, $genre);

// $exploded = explode(',', $genre);
// $totalValues = count($exploded);

// for($i=0;$i<=$totalValues;$i++){

// $genreSlug = strtolower($genere[$i]);

// 	echo "SELECT * FROM videos where genere ";
// 	echo "<br>";
// }


//  $title = "ABC";
//  $year = "2018";
// // $rated = $movie["Rated"];
// // $released = $movie["Released"];
// // $runtime = $movie["Runtime"];
// $genre = "Action, Adventure, Sci-Fi";
// // $director = $movie["Director"];
// // $writer = $movie["Writer"];
// // $actor = $movie["Actors"];
// // $plot = $movie["Plot"];
// // $language = $movie["Language"];
//  $country = "USA";
// // $poster = $movie["Poster"];
// // $rating = $movie["imdbRating"];
// // $movieId = $movie["imdbID"];
// // $title = $movie["title"];


// $genreText = ["Action","TV Show","Si-Fi","Adventure","Animation","Biography","Comedy","Crime","Documentry","Drama","Family","Fantasy","History","Horror","Music","Musical","Mystery","Thriller","War","Wastern","TV Series","Romance","Adventure","Short","Action & Adventure","Sci-Fi","Science Fiction","News","Sport","Game-Show","Reality-TV","Film-Noir","Adult"];
// $genreID = ["70","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","31","40","41","42","45","48","57","58","59","60"];
// $genre = str_replace($genreText, $genreID, $genre);
    
// if($country == "India"){
// 	$genre = $genre.", 73";
// }
// elseif ($country == "Pakistan") {
// 	$genre = $genre.", 74";
// }
// else{
// 	$genre = $genre.", 63";
// }
// $seo_title = strtolower($title." ".$year." watch on fungama");

// $sql = "INSERT INTO `videos` (`genere`) VALUES ('$seo_title');";

// echo $sql;
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

echo get_client_ip();


// explode(delimiter, string)
 
?>