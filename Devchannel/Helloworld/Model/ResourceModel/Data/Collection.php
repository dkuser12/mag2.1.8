<?php


namespace Devchannel\Helloworld\Model\ResourceModel\Data;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
	    'Devchannel\Helloworld\Model\Data',
	    'Devchannel\Helloworld\Model\ResourceModel\Data'
	);
    }
}