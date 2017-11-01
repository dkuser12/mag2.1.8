<?php 
	namespace Devchannel\Helloworld\Controller\Index;
use Magento\Framework\App\Action\Action;
	class Index extends Action
	{
		Public function execute()
		{
			 $this->_view->loadLayout();
             $this->_view->renderLayout();
		}
	}
?>