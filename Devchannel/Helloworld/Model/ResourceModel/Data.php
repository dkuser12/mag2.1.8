<?php
	 
namespace Devchannel\Helloworld\Model\ResourceModel;


use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
	 
class Data extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('tutorial_simplenews', '01');
    }
}