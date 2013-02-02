<?PHP
class AppError extends ErrorHandler {
 	var $helpers = array('Html', 'Session','Javascript', 'Ajax');
    function oopsError($params) {
		$this->controller->set('page', $params['page']);
		$this->controller->set('archTypeDBList',$params['archTypeDBList']);
		$this->_outputMessage('oopsError');
    }
    function error404($params){
		$this->controller->set('url', $params['url']);
		$this->controller->set('base', $params['base']);
		# archTypeDb bs here is not working ignoring for now
		$this->controller->set('archTypeDBList',$params['archTypeDBList']);
		$this->_outputMessage('oopsError');
	}
}
?>

