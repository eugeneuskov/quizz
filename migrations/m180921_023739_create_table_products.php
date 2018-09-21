<?php

use yii\db\Migration;

/**
 * Handles the creation for table `{{%products}}`.
 */
class m180921_023739_create_table_products extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [

            'id' => $this->primaryKey()->notNull(),
            'id_category' => $this->integer(11)->notNull(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->double(10)->notNull(),

        ]);
 
        // creates index for column `id_category`
        $this->createIndex(
            'products_ibfk_1',
            '{{%products}}',
            'id_category'
        );

        // add foreign key for table `categories`
        $this->addForeignKey(
            'products_ibfk_1',
            '{{%products}}',
            'id_category',
            '{{%categories}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        // drops foreign key for table `categories`
        $this->dropForeignKey(
            'products_ibfk_1',
            '{{%products}}'
        );

        // drops index for column `id_category`
        $this->dropIndex(
            'products_ibfk_1',
            '{{%products}}'
        );

        $this->dropTable('{{%products}}');
    }
}
