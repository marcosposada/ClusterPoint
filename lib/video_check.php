<?php
class videoCheck {	
	# Check type of video
	public function videoType($url) {
	    if (strpos($url, 'youtube') > 0) {
	        return 'youtube';
	    } elseif (strpos($url, 'vimeo') > 0) {
	        return 'vimeo';
	    } else {
	        return 'unknown';
	    }
    }
	/**
	 * Get Youtube video ID from URL
	 *
	 * @param string $url
	 * @return mixed Correct Youtube url or FALSE if not found
	 */
    public function prepareYoutubeUrl($url) {
	    $parts = parse_url($url);
	    $base_part = 'http://www.youtube.com/watch?v=';
	    if(isset($parts['query'])){
	        parse_str($parts['query'], $qs);
	        if(isset($qs['v'])){
	            return  $base_part.$qs['v'];
	        }else if(isset($qs['vi'])){
	            return  $base_part.$qs['vi'];
	        }
	    }
	    if(isset($parts['path'])) {
	        $path = explode('/', trim($parts['path'], '/'));
	        return  $base_part.$path[count($path)-1];
	    }
	    return false;
    }
	/**
	 * Get Vimeo video ID from URL
	 *
	 * @param string $url
	 * @return mixed Correct Vimeo url or FALSE if not found
	 */
    public function prepareVimeoUrl($url) {
		$base_part = 'http://vimeo.com/';
		$urlParts  = explode("/", parse_url($url, PHP_URL_PATH));
		$videoId   = (int)$urlParts[count($urlParts)-1];
	    return $base_part.$videoId;
    }
}
?>