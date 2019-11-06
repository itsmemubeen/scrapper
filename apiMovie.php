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


$arrayMovieName = array("Les Misérables","Mom","Black Lightning","Arrow","Marvel's Runaways","Mom","Doom Patrol","A Million Little Things","Van Helsing","S.W.A.T.","The Flash","Black Lightning","Riverdale","Black Lightning","Criminal Minds4","A Million Little Things","Sex Education","DC's Legends of Tomorrow","MacGyver","Marvel's Runaways","The Blacklist","Doom Patrol","Les Misérables","Outlander","The Flash","Marvel's The Punisher","Hawaii Five-0","Doctor Who1","Doctor Who1","Criminal Minds4","Marvel's Runaways","Russian Doll","Last Man Standing","Supergirl","A Million Little Things","The Blacklist","Ray Donovan","The Flash","DC's Legends of Tomorrow","Ray Donovan","Marvel's The Punisher","Riverdale","Marvel's Daredevil","Hawaii Five-0","Doctor Who1","Criminal Minds4","Legacies","This Is Us","Outlander","Doctor Who1","Siren","The Oath","Doctor Who1","Mom","DC's Legends of Tomorrow","Hawaii Five-0","Outlander","Supernatural4","Siren","Single Parents","Single Parents","Mom","Marvel's Daredevil","StartUp","Supergirl","Titans","Van Helsing","Supernatural4","The Oath","The Umbrella Academy","Titans","The Umbrella Academy","Marvel's Runaways","Supernatural4","Gotham","Supernatural4","Marvel's Daredevil","Marvel's The Punisher","This Is Us","The Umbrella Academy","The Blacklist","Criminal Minds4","Supergirl","Doom Patrol","Marvel's The Punisher","Sex Education","Last Man Standing","Supergirl","House of Cards","Siren","Outlander","Supergirl","DC's Legends of Tomorrow","Arrow","Legacies","Mom","Van Helsing","Russian Doll","Marvel's The Punisher","Single Parents","Les Misérables","DC's Legends of Tomorrow","S.W.A.T.","Mom","Les Misérables","Siren","The Blacklist","S.W.A.T.","House of Cards","Doctor Who1","Supernatural4","Arrow","Les Misérables","Ray Donovan","Doom Patrol","Marvel's Daredevil","Hawaii Five-0","StartUp","Marvel's Daredevil","House of Cards","A Million Little Things","Siren","S.W.A.T.","Supernatural4","The Grand Tour","Ray Donovan","Marvel's Runaways","Supernatural4","Black Lightning","Russian Doll","Sex Education","The Blacklist","Marvel's Daredevil","The Umbrella Academy","Gotham","Doom Patrol","The Umbrella Academy","MacGyver","This Is Us","MacGyver","S.W.A.T.","Marvel's Daredevil","Van Helsing","Last Man Standing","Riverdale","Ray Donovan","Marvel's Daredevil","Les Misérables","MacGyver","Arrow","Riverdale","StartUp","Last Man Standing","Law & Order: Special Victims Unit0","The Umbrella Academy","The Cool Kids","This Is Us","Arrow","The Walking Dead","The Oath","Mom","Gotham","Law & Order: Special Victims Unit0","House of Cards","The Cool Kids","Titans","StartUp","Supergirl","Legacies","Criminal Minds4","Siren","Criminal Minds4","The Blacklist","Single Parents","The Cool Kids","DC's Legends of Tomorrow","The Grand Tour","Gotham","MacGyver","Last Man Standing","Marvel's The Punisher","The Cool Kids","A Million Little Things","The Cool Kids","Last Man Standing","Van Helsing","The Flash","The Walking Dead","House of Cards","House of Cards","Marvel's Runaways","Titans","This Is Us","Outlander","Marvel's Runaways","S.W.A.T.","The Flash","Riverdale","A Million Little Things","StartUp","Ray Donovan","The Oath","Single Parents","Russian Doll","Russian Doll","Doctor Who1","Titans","Single Parents","Single Parents","The Blacklist","Van Helsing","Hawaii Five-0","Gotham","Ray Donovan","The Grand Tour","Single Parents","Ray Donovan","A Million Little Things","Black Lightning","Outlander","Law & Order: Special Victims Unit0","The Cool Kids","Les Misérables","Russian Doll","Law & Order: Special Victims Unit0","S.W.A.T.","Legacies","MacGyver","StartUp","Titans","House of Cards","A Million Little Things","Riverdale","Sex Education","Legacies","The Grand Tour","DC's Legends of Tomorrow","The Blacklist","The Oath","Black Lightning","Sex Education","The Walking Dead","Hawaii Five-0","Supernatural4","Mom","The Oath","The Oath","Arrow","Supergirl","Law & Order: Special Victims Unit0","The Grand Tour","Siren","Riverdale","Van Helsing","Gotham","Black Lightning","Gotham","Marvel's The Punisher","Gotham","Marvel's Runaways","Law & Order: Special Victims Unit0","MacGyver","This Is Us","The Walking Dead","Legacies","Doom Patrol","DC's Legends of Tomorrow","Legacies","Mom","The Flash","The Flash","The Umbrella Academy","Doom Patrol","StartUp","The Grand Tour","Law & Order: Special Victims Unit0","Hawaii Five-0","Sex Education","MacGyver","The Cool Kids","The Walking Dead","Titans","S.W.A.T.","Russian Doll","Hawaii Five-0","Outlander","Criminal Minds4","Arrow","Doom Patrol","Riverdale","Siren","The Cool Kids","Legacies","The Walking Dead","This Is Us","Russian Doll","Outlander","Last Man Standing","Black Lightning","Marvel's The Punisher","The Oath","The Umbrella Academy","Sex Education","Titans","StartUp","Law & Order: Special Victims Unit0","Arrow","Criminal Minds4","Doctor Who1","The Walking Dead","The Grand Tour","The Flash","The Grand Tour","Supergirl","House of Cards","Van Helsing","Last Man Standing","Sex Education","The Walking Dead");
$videoID = 6629;
for($i=0;$i<=317;$i++){

$sql = "SELECT * FROM `videos` WHERE title = '$arrayMovieName[$i]'";
// echo $sql;
$query = mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($query);
// echo $rowcount;

if($rowcount < 1){

$titleFix = str_replace(" ", "+", $arrayMovieName[$i]);

$url = "http://www.omdbapi.com/?t=$titleFix&apikey=fa42fd34";

$api = file_get_contents($url);

$movie = json_decode($api,true);

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
	if($country == "India"){
		$genre3 = $genre3.",26";
	}
		elseif ($country == "Pakistan") {
			$genre3 = $genre3.",27";
		}
		else{
			$genre3 = $genre3.",25";
		}
	if($poster == ""){
	        $poster = "http://moxols.com/spider/image/image.png";
	        }
	if($plot == ""){
	        $plot = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s";
	     }
$sql = "INSERT INTO `videos` (`videos_id`, `imdbid`, `title`, `image`, `seo_title`, `slug`, `description`, `stars`, `director`, `writer`, `rating`, `release`, `country`, `genre`, `video_type`, `runtime`, `video_quality`, `publication`, `trailer`, `enable_download`, `focus_keyword`, `meta_description`, `tags`, `imdb_rating`, `is_tvseries`, `total_rating`, `today_view`, `weekly_view`, `monthly_view`, `total_view`) VALUES ($videoID, '$movieId', '$title', '$poster', '$seo_title', '$slug', '$plotFixed', NULL, NULL, NULL, '$rating', '$year', '$country3', '$genre3', '', '$runtime', 'HD', '1', '0', '0', '$focus_keyword', '$plotFixed', '$tags', '$rating', '1', '1', '0', '0', '0', '1');";
// echo $sql;
mysqli_query($con,$sql);
echo "Inserted - ".$arrayMovieName[$i];
echo "<br>";
$videoID++; 
  }
  else{
  echo "<br>";
  echo "<br>";
 	echo $arrayMovieName[$i]. " - Duplicate";
  echo "<br>";
  echo "<br>";
}
}


}
?>