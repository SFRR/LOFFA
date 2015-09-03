
<?php
date_default_timezone_set("GMT");
$DATE_TIME_NOW  = new DateTime(); /* global scope constant */ 
$DATE_TIME_NOW = new DateTime( $DATE_TIME_NOW->format('d-m-Y'));
//$DATE_TIME_NOW = new DateTime( '23-02-2014' ); /*For testing*/


function getIniFileProperties($file, $sector, $var)
    {
        $file="../utils/props.ini";
        $is=array();
        $is= parse_ini_file($file, true);
        if(is_array($is) && file_exists($file))
        {
            return $is[$sector][$var];
        }else{
            return "error";
        }
       
    }

/* 
All the events occur after the first meeting and hence the offset represent the number of days 
between the event and the meeting.

@Parm $offsetInDays - Number of days between the meeting and said event.
*/
function getNextLoffaMeetingDate($offsetInDays){
	global $DATE_TIME_NOW;

	$tuesdayofThisMonth = new DateTime('first tuesday of this month');	
	$tuesdayofThisMonth = $tuesdayofThisMonth->modify('+' . $offsetInDays .'day');
	
	$tuesdayofNextMonth = new DateTime('first tuesday of next month');
	$tuesdayofNextMonth = $tuesdayofNextMonth->modify('+' . $offsetInDays .'day');
	
		if ($DATE_TIME_NOW->format('Ymd') <= $tuesdayofThisMonth->format('Ymd') ){
			return $tuesdayofThisMonth;
		}else{
			return $tuesdayofNextMonth;
		}
}
function getNextLoffaMeetingInformtion(){

global $DATE_TIME_NOW;
$meetingDate=getNextLoffaMeetingDate(0);


	/* If it is today it is nice to say it's today/tonight rather than zero days :)*/
	if(($DATE_TIME_NOW->diff($meetingDate)->days)==0){
		echo "<p>Meeting tonight"."</p>";
	}
	else{
		echo "<p>". ($DATE_TIME_NOW->diff($meetingDate)->days)." days until next LOFFA monthly meeting"."</p>";
	}
	
	/* Date of the meeting*/
	echo "<p><b>Date: </b>".$meetingDate->format( 'l, F jS, Y' )."</p>";	
	/* Location will either be Portloise or Tullamore depending on the month*/
	/*echo "<p><b>Time:</b> 8:15pm</p>";*/
	echo "<p><b>Next meeting location: </b>";
	if($meetingDate->format( 'm' ) % 2 == 0){
		echo " <a href='http://www.theheritagehotel.com/' target='_blank'>Portlaoise Heritage Hotel</a> "."</p>";
	}
	else{
		echo " <a href='http://www.tullamorecourthotel.ie/' target='_blank'>Tullamore Court Hotel</a> "."</p>";
	}	
	echo "<p>Location alternates between Portlaoise (Laois) and  Tullamore (Offaly)</p>";
}




function getTullamoreOrPortlaoisePlaydateAndBowlingInformtion(){
	
	global $DATE_TIME_NOW;
	
	$nextTullamoreOrPortlaoisePlaydateAndBowlingPlaydate = getNextLoffaMeetingDate(5);
	
	
	/* If it is today it is nice to say it's today/tonight rather than zero days :)*/
	if(($DATE_TIME_NOW->diff($nextTullamoreOrPortlaoisePlaydateAndBowlingPlaydate)->days)==0){
		echo "<p>"."Playdate & Bowling today</p>";
	}
	else{
		echo "<p>".($DATE_TIME_NOW->diff($nextTullamoreOrPortlaoisePlaydateAndBowlingPlaydate)->days)." days until next Playdate & Bowling</p>";
	}
	
	/* Date of the meeting*/
	echo "<p><b>Date: </b>".$nextTullamoreOrPortlaoisePlaydateAndBowlingPlaydate->format( 'l, F jS, Y' )."</p>";	
	echo "<p><b>Time:</b> 11.30am - 1pm</p>";
	echo "<p><b>Next play date location: </b>";
	/* Location will be Tullamore or Porlaoise :) */
	if($nextTullamoreOrPortlaoisePlaydateAndBowlingPlaydate->format( 'm' ) % 2 == 0){
		echo " <a href='http://www.jumpinjacks.ie/' target='_blank'>Jumpin' Jacks Fun Factory Tullamore</a> and <a href='http://www.jumpinjacks.ie/kids-activities/cosmic-bowl' target='_blank'> Cosmic Bowl, Tullamore</a> (followed by <a href='http://www.localmint.com/ie/mcdonalds-offaly-tullamore-opening-hours-41094' target='_blank'> McDonalds</a> optional)</p>";
		echo " <p><b>Cost:</b> &euro;4 per child</p>";
	}
	else{
		echo " <a href='http://www.bowlingireland.com/' target='_blank'>Roll N' Bowl Portlaoise</a></p>";
	}
	echo "<p>Location alternates between Portlaoise (Laois) and  Tullamore (Offaly)</p>";
}




function getEdenderryPlaydateInformtion(){
	
	global $DATE_TIME_NOW;
	$nextEdenderryPlaydateDate = getNextLoffaMeetingDate(5);




	/* If it is today it is nice to say it's today/tonight rather than zero days :)*/
	if(($DATE_TIME_NOW->diff($nextEdenderryPlaydateDate)->days)==0){
		echo "<p>"."Playdate today<\p>";
	}
	else{
		echo "<p>".($DATE_TIME_NOW->diff($nextEdenderryPlaydateDate)->days)." days until next Playdate in Edenderry</p>";
	}
	
	/* Date of the meeting*/
	echo "<p><b>Date: </b>".$nextEdenderryPlaydateDate->format( 'l, F jS, Y' )."</p>";	
	echo "<p><b>Time: </b>11.30am</p>";
	/* Location will always be Edenderry :) */
	echo "<p><b>Location:</b> <a href='http://tomstonzoffun.com/' target='_blank'>Tons of Fun Edenderry </a></p>";
}



function getCinemaInformtion(){
	
	global $DATE_TIME_NOW;
	$nextCinemaDate = getNextLoffaMeetingDate(19);
	
	/* If it is today it is nice to say it's today/tonight rather than zero days :) */
	if(($DATE_TIME_NOW->diff($nextCinemaDate)->days)==0){
		echo ""."Cinema today";
	}
	else{
		echo "".($DATE_TIME_NOW->diff($nextCinemaDate)->days)." days until next Cinema";
	}
	
	/* Date of the cinema*/
	echo "<p><b>Date:</b> ".$nextCinemaDate->format( 'l, F jS, Y' )."</p>";

	
	$movie_name=getIniFileProperties("ini", "cinema", "movie_name");
	$movie_trailer=getIniFileProperties("ini", "cinema", "movie_trailer");
	$movie_time=getIniFileProperties("ini", "cinema", "movie_time");

	
	if( strlen($movie_name)>0 &&  strlen($movie_trailer)>0 && strlen($movie_time)>0){
		echo "<p><b>Film: </b><a target='_blank' href='http://www.youtube.com/watch?v=".$movie_trailer."'>".$movie_name."</a></p>";
		echo "<p><b>Time: </b>".$movie_time."</p>";
	}else{
		echo "<p><b>Film:</b> TBA</p>";
		echo "<p><b>Time:</b> TBA</p>";
	}
	

	echo "<p><b>Next cinema location:</b>";
	if($nextCinemaDate->format( 'm' ) % 2 == 0){
		echo " Odeon Cinema, Portlaoise <a target='_blank' href='http://www.odeoncinemas.ie/cinemas/portlaoise/203/'>Website</a></p>";
		/*echo "<p><b>Cost:</b> &euro;4 per person  (1 adult free with every child)</p> ";*/
		echo "<p><b>Cost:</b> &euro;4 per person</p> ";
		}
	else{
		echo " Tullamore IMC (formally Omniplex) <a target='_blank' href='http://www.imccinemas.ie/home.asp?idcinema=23'>Website</a></p>";
		echo "<p><b>Cost:</b> &euro;3.00 per person  (1 adult free with every child)</p> ";
	}	
	
	echo "<p>Families with special needs children VERY welcome</p> ";	
}




/********************************************************/

function getBannerTullamoreOrPortlaoisePlaydateAndBowlingInformtion(){
	
	global $DATE_TIME_NOW;
	
	$nextTullamoreOrPortlaoisePlaydateAndBowlingPlaydate = getNextLoffaMeetingDate(5);
	
	
	/* If it is today it is nice to say it's today/tonight rather than zero days :)*/
	if(($DATE_TIME_NOW->diff($nextTullamoreOrPortlaoisePlaydateAndBowlingPlaydate)->days)==0){
		$result=""."Playdate & Bowling today!!!";
	}
	else{
		echo "Next Playdate & Bowling in " . ($DATE_TIME_NOW->diff($nextTullamoreOrPortlaoisePlaydateAndBowlingPlaydate)->days) . " days!!! Please see events for more information.";
	}
}

?>






