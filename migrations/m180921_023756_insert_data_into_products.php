<?php

use yii\db\Migration;

/**
 * Handles the data insertion for table `{{%products}}`.
 */
class m180921_023756_insert_data_into_products extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->batchInsert('{{%products}}', ['id','id_category','name','price'], [
			['6','1','Note','16.05'],
			['7','1','Pencil','5.50'],
			['8','1','Bag','120.00'],
			['9','2','Golang','50.00'],
			['10','2','Deep inside travels','39.99']
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->truncateTable('{{%products}}');
    }
}
