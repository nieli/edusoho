<?php

namespace Topxia\Service\Course\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Topxia\Service\Course\Dao\HomeworkItemDao;

class HomeworkItemDaoImpl extends BaseDao implements HomeworkItemDao
{
    protected $table = 'homework_item';

    public function getItem($id)
    {
        $sql = "SELECT * FROM {$this->table} Where id = ?";
        return  $this->getConnection()->fetchAssoc($sql,array($id)) ? : array();
    }

    public function addItem($items)
    {
        $affect = $this->getConnection()->insert($this->table,$items);
        if ($affect <= 0) {
            throw $this->createDaoException('insert homeworkItem error!');
        }
        return $this->getItem($this->getConnection()->lastInsertId());
    }

    public function updateItem($id, $fields)
    {

    }

    public function deleteItem($id)
    {

    }

    public function deleteItemsByParentId($id)
    {

    }

    public function deleteItemsByTestpaperId($id)
    {

    }

    public function findItemByIds(array $ids)
    {

    }

    public function findItemsByHomeworkId($homeworkId)
    {

    }

    public function getItemsCountByHomeworkId($homeworkId)
    {

    }

    public function getItemsCountByHomeworkIdAndQuestionType($homeworkId, $questionType)
    {

    }

    public function deleteItemByIds(array $ids)
    {

    }
}

