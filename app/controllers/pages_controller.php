<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @link http://book.cakephp.org/view/958/The-Pages-Controller
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Pages';
/**
 * Default helper
 *
 * @var array
 * @access public
 */
	var $helpers = array('Html', 'Session','Javascript', 'Ajax');

/**
 * This controller does not use a model
 *
 * @var array
 * @access public
 */
	var $uses = array('Software','Softbundle','Catorder');

	

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @access public
 */
	function display() {
		//$this->loadModel('Software');
		$order = $this->Catorder->find('all',array('conditions'=>"Catorder.CatName!='Software_Packages'",'order'=>'Catorder.PriorityNo'));
		$data = $this->Software->find('all',array('conditions'=>"Software.softCat!='Software_Packages'",'fields' => array('DISTINCT Software.softCat')));
		$softBundle = $this->Softbundle->find('all',array('fields' => array('Softbundle.bundleName','Softbundle.id','Softbundle.bundleShrtDesc')));
		$softPackages = $this->Software->find('all',array('conditions'=>"Software.softCat='Software_Packages'",'fields' => array('Software.softName','Software.softCat')));
		$archTypeDBList = $archTypeDBList = $this->Software->find('all',array('fields'=>'DISTINCT arch'));
		$data= Set::extract($data, '/Software/softCat');
		$i=0;
		foreach($data as $var)
		{
			$tmp1 = $this->Software->find('all',array('conditions'=>'Software.softCat='."'".$var."' and Software.softCat!='Software_Packages' and Software.arch='i386'",'fields' => array('DISTINCT Software.softSubCat','Software.softCat')));
			$this->set("w00t".$i,$tmp1);
			$i++;
		}
		#create ordering 
		$temp=array();
		foreach($order as $item)
		{
			array_push($temp,trim($item['Catorder']['catName']));	
		}
		foreach($temp as $input)
		{		
			while (($index = array_search($input, $data)) !== false) {
		 	   unset($data[$index]);
			}
		}
		$data=array_merge($temp,$data);
		$this->set('softPackages',$softPackages);
		$this->set('software', $data);
		$this->set('softbundle', $softBundle);
		$this->set('softcount', $i);
		$this->set('archTypeDBList',$archTypeDBList);
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}
}
