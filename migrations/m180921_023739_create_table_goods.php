<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%goods}}`.
 */
class m180921_023739_create_table_goods extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%goods}}', [

            'id' => $this->primaryKey()->unsigned()->notNull(),
            'name' => $this->string(64)->notNull(),

        ]);
     }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%goods}}');
    }
}
