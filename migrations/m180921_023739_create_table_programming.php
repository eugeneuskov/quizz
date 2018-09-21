<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%programming}}`.
 */
class m180921_023739_create_table_programming extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%programming}}', [

            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(255)->notNull(),

        ]);
     }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%programming}}');
    }
}
