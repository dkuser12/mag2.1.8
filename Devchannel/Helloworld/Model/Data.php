<?php


namespace Devchannel\Helloworld\Model;
	 
use Magento\Framework\Model\AbstractModel;
	 
	class Data extends AbstractModel
	{	
	    protected function _construct()
	    {
	        $this->_init('Devchannel\Helloworld\Model\ResourceModel\Data');
	    }
	}