<?php
class RedirectController extends AppController {
    function addhttp($url) {
	    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
		$url = "http://" . $url;
	    }
	    return $url;
    }

    public function index(){
	if($this->params['pass'][0]!=''){
		$url = $this->addhttp($this->params['pass'][0]);
		$this->redirect($url);
	}
    }

}
?>
