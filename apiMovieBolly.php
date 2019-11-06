<?php
$con = mysqli_connect("localhost","root","","fungama");
include ('simple_html_dom.php');
set_time_limit(0);

	function generate_random_string($length=12) {
	        $str                  = "";
	        $characters         = array_merge(range('a','z'), range('0','9'));
	        $max                = count($characters) - 1;
	        for ($i = 0; $i < $length; $i++) {
	            $rand = mt_rand(0, $max);
	            $str .= $characters[$rand];
	        }
	        return $str;
	    }


$arrayMovieName = array("Ek Rishtaa: The Bond of Love (2001)","Deewaanapan (2001)","Aks (2001)","Yeh Raaste Hain Pyaar Ke (2001)","Kyo Kii Main Jhuth Nahin Bolta (2001)","Tum Bin: Love Will Find a Way (2001)","Gadar: Ek Prem Katha (2001)","Asoka (2001)","Monsoon Wedding (2001)","Lagaan: Once Upon a Time in India (2001)","Hum Ho Gaye Aap Ke (2001)","Ajnabee (2001)","Bas Itna Sa Khwaab Hai (2001)","One 2 Ka 4 (2001)","Jodi No1 (2001)","Dil Chahta Hai (2001)","Kuch Khatti Kuch Meethi (2001)","Lajja (2001)","Pyaar Ishq Aur Mohabbat (2001)","Albela (2001)","Nayak: The Real Hero (2001)","Chandni Bar (2001)","Rehnaa Hai Terre Dil Mein (2001)","Yaadein (2001)","Mujhe Kucch Kehna Hai (2001)");

$arrayMovieOMDB = array("Ek Rishtaa: The Bond of Love","Deewaanapan","Aks","Yeh Raaste Hain Pyaar Ke","Kyo Kii Main Jhuth Nahin Bolta","Tum Bin: Love Will Find a Way","Gadar: Ek Prem Katha","Asoka","Monsoon Wedding","Lagaan: Once Upon a Time in India","Hum Ho Gaye Aap Ke","Ajnabee","Bas Itna Sa Khwaab Hai","One 2 Ka 4","Jodi No1","Dil Chahta Hai","Kuch Khatti Kuch Meethi","Lajja","Pyaar Ishq Aur Mohabbat","Albela","Nayak: The Real Hero","Chandni Bar","Rehnaa Hai Terre Dil Mein","Yaadein","Mujhe Kucch Kehna Hai");


$year = 2001;
$videoID = 6682;
for($i=1;$i<=200;$i++){


$titleFix = str_replace(" ", "+", $arrayMovieOMDB[$i]);

$url = "http://www.omdbapi.com/?t=$titleFix&y=$year&apikey=44d6a05e";

$api = file_get_contents($url);

$movie = json_decode($api,true);

// print_r($movie);

if($movie["Response"] == "True"){

$title = $movie["Title"];
$year = $movie["Year"];
$rated = $movie["Rated"];
$released = $movie["Released"];
$runtime = $movie["Runtime"];
$genre = $movie["Genre"];
$director = $movie["Director"];
$writer = $movie["Writer"];
$actor = $movie["Actors"];
$plot = $movie["Plot"];
$language = $movie["Language"];
$country = $movie["Country"];
$poster = $movie["Poster"];
$rating = $movie["imdbRating"];
$movieId = $movie["imdbID"];
$randString = generate_random_string();
$title = str_replace("'", " ", $title);
$genreText = ["Action","Adventure","Animation","Biography","Comedy","Crime","Documentary","Drama","Family","Fantasy","Film Noir","History","Horror","Music","Musical","Mystery","Romance","Sci-Fi","Short Film","Sport","Superhero","Thriller","War","Western","Hollywood","Bollywood","Pakisani","Adventure","Sci-Fi","Crime","Drama","Thriller","Family"];
$genreID = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33"];
$genre = str_replace($genreText, $genreID, $genre);
$genre2 = ltrim($genre);
$genre3 = str_replace(" ", "", $genre2);
$countryText = ["International","Asia","USA","China","Japan","Korean","Nepal","Thailand","Tamil","India","France","Italy","German","London","Canada","Denmark","UK","Hong kong","UAE","Australia","South Korea","Russia","Sweden","Spain","Brazil","Iran","Israel","Indonesia","Philippines","Peru","Canada","Japan","USA","Hong Kong","Mexico","New Zealand","UK","Denmark","Australia","Germany","Hungary","India","Hungary","France","China","Chile","Argentina","Egypt","New Zealand","Croatia","Switzerland","Tunisia","Belgium","United States of America","Bangladesh","United Kingdom","Malaysia","South Africa","Switzerland","Germany","Sweden","Bulgaria","Soviet Union","Netherlands","Malta","Taiwan","Argentina","Iceland","CA","US","GB","Norway","N/A","Belgium","Pakistan","Ireland","Italy","Brazil","Turkey","South Africa","Israel","Colombia","Russia","United Arab Emirates","Romania","Morocco","Serbia","Turkey","Greece","Poland","Serbia","Mexico","Ireland","Kenya","Netherlands","Lebanon","Netherlands Antilles","Norway","United Arab Emirates","Lebanon","Jordan","Singapore","Palestine","Austria","Bangladesh","Fiji","West Germany","Pakistan","Yugoslavia"];
$countryID = ["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52","53","68","69","70","71","72","73","74","75","76","77","78","80","81","82","83","84","85","86","87","88","89","90","91","92","93","94","95","96","97","98","99","100","101","102","103","104","105","106","107","108","109","110","111","112","113","114","115","116","117","118","119","120","121","122","123","124"];
$country = str_replace($countryText, $countryID, $country);
$country2 = ltrim($country);
$country3 = str_replace(" ", "", $country2);
$seo_title = strtolower($title." ".$year." watch on fungama");
$slug = lcfirst(str_replace(" ", "-", $title));
$focus_keyword = str_replace(",", " ", $genre);
$tags = str_replace(" ", "", $genre);
$plotFixed = str_replace("'","",$plot);
$epL = strtolower($title);
$ep = str_replace(" ", "-", $epL);

	if($country == "10"){
		$genre3 = $genre3.",26";
	}
		elseif ($country == "Pakistan") {
			$genre3 = $genre3.",27";
		}
		else{
			$genre3 = $genre3.",25";
		}
	if($poster == 
		""){
	        $poster = "http://moxols.com/spider/image/image.png";
	        }
	if($plot == ""){
	        $plot = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s";
	     }


	     $lower = strtolower($arrayMovieName[$i]);

$removeLeftBracket = str_replace("(", "", $lower);

$removeLeftBracket = str_replace(")", "", $removeLeftBracket);

$movieNameForLink = str_replace(" ","-",$removeLeftBracket);

// echo "https://dwatchmovies.com/srvlnk/bollymovsr1?search=".$movieNameForLink;

$html = file_get_html("https://dwatchmovies.com/srvlnk/bollymovsr1?search=".$movieNameForLink);



    foreach ($html->find('.embed') as $key) {
    	
    	foreach ($key->find('iframe') as $a) {
    		$movieLink = $a->attr['src'];
    		// echo $movieLink;
    	}
    
    }


$html2 = file_get_html("http://gdriveplayer.us/embed2.php?link=$movieLink&subtitle=&poster=&button=no&encrypt=yes");


    	
    	foreach ($html2->find('iframe') as $a) {
    		$movieLink2 = $a->attr['src'];
    		 //echo $movieLink2;
    	}
    
    

 $linkembed = str_replace("//", "http://", $movieLink2);

$sql = "INSERT INTO `videos` (`videos_id`, `imdbid`, `title`, `image`, `seo_title`, `slug`, `description`, `stars`, `director`, `writer`, `rating`, `release`, `country`, `genre`, `video_type`, `runtime`, `video_quality`, `publication`, `trailer`, `enable_download`, `focus_keyword`, `meta_description`, `tags`, `imdb_rating`, `is_tvseries`, `total_rating`, `today_view`, `weekly_view`, `monthly_view`, `total_view`) VALUES ($videoID, '$movieId', '$title', '$poster', '$seo_title', '$slug', '$plotFixed', NULL, NULL, NULL, '$rating', '$year', '$country3', '$genre3', '', '$runtime', 'HD', '1', '0', '0', '$focus_keyword', '$plotFixed', '$tags', '$rating', '0', '1', '0', '0', '0', '1');";
 echo $sql;

 echo "<br>";

 echo "INSERT INTO `video_file` (`video_file_id`, `stream_key`, `videos_id`, `file_source`, `file_Name`, `source_type`, `file_url`) VALUES (NULL, '$randString', '$videoID', 'embed', 'Play Movie', 'link', '$linkembed');";

// //mysqli_query($con,$sql);
// //echo "Inserted - ".$arrayMovieName[$i];
// echo "<br>";
$videoID++; 
  
}

}
?>