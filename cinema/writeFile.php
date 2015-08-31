<?php
function write_php_ini($array)
{

    $res = array();
    foreach($array as $key => $val)
    {
        if(is_array($val))
        {
            $res[] = "[$key]";
            foreach($val as $skey => $sval) $res[] = (is_numeric($sval) ? $sval : ''.$sval.'');
        }
        else $res[] = (is_numeric($val) ? $val : ''.$val.'');
    }
    safefilerewrite(implode(" ", $res));
}

function safefilerewrite($dataToSave)
{    
	include './constants.php';
if ($fp = fopen($FILE_NAME, 'w'))
    {
        $startTime = microtime(TRUE);
        do
        {            $canWrite = flock($fp, LOCK_EX);
           // If lock not obtained sleep for 0 - 100 milliseconds, to avoid collision and CPU load
           if(!$canWrite) usleep(round(rand(0, 100)*1000));
        } while ((!$canWrite)and((microtime(TRUE)-$startTime) < 5));

        //file was locked so now we can store information
        if ($canWrite)
        {            
			fwrite($fp, $dataToSave);
            flock($fp, LOCK_UN);
        }
        fclose($fp);
    }

}



function getIniFileProperties($sector, $var)
    {
		include './constants.php';
		$result="";
        $is=array();
        $is= parse_ini_file($FILE_NAME, true);
        if(is_array($is) && file_exists($FILE_NAME))
        {
			if($var=="movie_trailer" && $is[$sector][$var]!=""){
					$result = "https://www.youtube.com/watch?v=".$is[$sector][$var];
				}
			else{
					$result = $is[$sector][$var];
			}  
        }else{
            $result = "error";
        }
		return $result;
       
    }

//
?>






