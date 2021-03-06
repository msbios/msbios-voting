<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class IndexController
 * @package MSBios\Voting\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * @return \Zend\Http\Response|\Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        if ($this->getRequest()->isPost()) {
            if ($this->poll()->setData($this->params()->fromPost())->vote()) {
                $this->flashMessenger()->addMessage('Your voice has been accepted and processed.');
                return $this->redirect()->toRoute('home');
            }
        }

        return parent::indexAction();
    }
}
