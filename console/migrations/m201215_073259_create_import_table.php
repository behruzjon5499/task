<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%import}}`.
 */
class m201215_073259_create_import_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%import}}', [
            'id' => $this->primaryKey(),
            'product_id'=> $this->integer(),
            'price'=> $this->string()->notNull(),
            'size'=> $this->string()->notNull(),
            'now_size'=> $this->string()->notNull(),
            'date'=> $this->integer()->notNull(),
            'type'=> $this->integer()->notNull(),
            'party'=> $this->string(),
            'status'=> $this->integer()->defaultValue(0),
        ], $tableOptions);
        $this->createIndex('index-import-product_id', 'import', 'product_id');
        $this->addForeignKey('fkey-import-product_id', 'import', 'product_id', 'products', 'id', 'RESTRICT', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%import}}');
    }
}
