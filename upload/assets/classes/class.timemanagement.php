<?php

/*
 * Core Time Management Class
 */
class time {

	public function secToTime($init){
	
		$years = floor($init / 31536000);
		$init = $init-($years*31536000);
		$months = floor($init / 2628000);
		$init = $init-($months*2628000);
		$weeks = floor($init / 604800);
		$init = $init-($weeks*604800);
		$days = floor($init / 86400);
		$init = $init-($days*86400);
		$hours = floor($init / 3600);
		$init = $init-($hours*3600);
		$minutes = floor($init / 60);
		$init = $init-($minutes*60);
		$seconds = $init;
		if($years>1){ $out = $years." years, ";}
		if($years==1){ $out = $years." year, ";}
		if($months>1){ $out = $out.$months." months, ";}
		if($months==1){ $out = $out.$months." month, ";}
		if($weeks>1){ $out = $out.$weeks." weeks, ";}
		if($weeks==1){ $out = $out.$weeks." week, ";}
		if($days>1){ $out = $out.$days." days, ";}
		if($days==1){ $out = $out.$days." day, ";}
		if($hours>1){ $out = $out.$hours." hours, ";}
		if($hours==1){ $out = $out.$hours." hour, ";}
		if($minutes>1){ $out = $out.$minutes." minutes, ";}
		if($minutes==1){ $out = $out.$minutes." minute, ";}
		if($seconds>1){ $out = $out.$seconds." seconds ";}
		if($seconds==1){ $out = $out.$seconds." second ";}
		return $out;
	
	}

}

?>