<?PHP
class AppError extends ErrorHandler {
 	var $helpers = array('Html', 'Session','Javascript', 'Ajax');
    function oopsError($params) {
    $this->controller->set('page', $params['page']);
    $this->controller->set('archTypeDBList',$params['archTypeDBList']);
    $this->_outputMessage('oopsError');
    }
 
}
?>

