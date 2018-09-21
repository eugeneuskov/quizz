<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%categories}}`.
 */
class m180921_023739_create_table_categories extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [

            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(255)->notNull(),

        ]);
     }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%categories}}');
    }
}
