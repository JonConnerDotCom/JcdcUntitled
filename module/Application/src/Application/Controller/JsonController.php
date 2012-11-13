<?php
namespace Application\Controller;
use Zend\View\Helper\ViewModel;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * @author Jon Conner
 *
 */
class JsonController extends AbstractActionController
{
    public function indexAction(){
    	return new ViewModel();
    }
}
