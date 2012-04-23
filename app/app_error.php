<?PHP
class AppError extends ErrorHandler
{
	var $helpers = array('Html', 'Session','Javascript', 'Ajax');
	function oopsError($params)
	{
	$this->controller->set('page', $params['page']);
	$this->_outputMessage('oopsError');
	}
	function searchError($params)
	{
	$this->controller->set('query', $params['query']);
	$this->_outputMessage('searchError');
	}

}
?>

