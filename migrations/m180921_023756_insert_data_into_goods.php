<?php

use yii\db\Migration;

/**
 * Handles the data insertion for table `{{%goods}}`.
 */
class m180921_023756_insert_data_into_goods extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->batchInsert('{{%goods}}', ['id','name'], [
			['1','Яблоки'],
			['2','Яблоки'],
			['3','Груши'],
			['4','Яблоки'],
			['5','Апельсины'],
			['6','Груши']
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->truncateTable('{{%goods}}');
    }
}
