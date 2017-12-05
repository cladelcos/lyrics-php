<?php
	function cover($band, $album) {
		if ($band == "lp") {
			$band = "linkin-park-";
			if($album == "brwmi") {
				$band .= "ft-busta-rhymes-we-made-it.png";
			}
			if($album == "ht") {
				$band .= "hybrid-theory.png";
			}
			if($album == "blackbirds") {
				$band .= "blackbirds-single.png";
			}
			if($album == "htep") {
				$band .= "hybrid-theory-ep.png";
			}
			if($album == "mtm") {
				$band .= "minutes-to-midnight.png";
			}
			if($album == "ats") {
				$band .= "a-thousand-suns.png";
			}
			if($album == "meteora") {
				$band .= "meteora.png";
			}
			if($album == "lt") {
				$band .= "living-things.png";
			}
			if($album == "oml") {
				$band .= "one-more-light.png";
			}
			if($album == "thp") {
				$band .= "the-hunting-party.png";
			}
		}
		if ($band == "audioslave") {
			$band = "audioslave";
			if($album == "audioslave") {
				$band .= ".png";
			}
		}
		if ($band == "fm") {
			$band = "fort-minor-";
			if($album == "trt") {
				$band .= "the-rising-tied.png";
			}
		}
		if ($band == "na") {
			$band = "na.png";
		}
		return $band;
	}
?>