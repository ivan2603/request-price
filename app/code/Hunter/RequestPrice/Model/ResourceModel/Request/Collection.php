<?php

namespace Hunter\RequestPrice\Model\ResourceModel\Request;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Hunter\RequestPrice\Model\Request as Model;
use Hunter\RequestPrice\Model\ResourceModel\Request as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = Model::KEY_ID;

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}