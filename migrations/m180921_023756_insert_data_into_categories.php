<?php

use yii\db\Migration;

/**
 * Handles the data insertion for table `{{%categories}}`.
 */
class m180921_023756_insert_data_into_categories extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->batchInsert('{{%categories}}', ['id','name'], [
			['1','School stuffs'],
			['2','Books']
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->truncateTable('{{%categories}}');
    }
}
