<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%statistika}}`.
 */
class m201215_102303_create_statistika_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%statistika}}', [
            'id' => $this->primaryKey(),
            'product_id'=> $this->integer()->notNull(),
            'check'=> $this->string(),
            'start_date'=> $this->integer()->notNull(),
            'end_date'=> $this->integer()->notNull(),
        ], $tableOptions);
        $this->createIndex('index-statistika-product_id', 'statistika', 'product_id');
        $this->addForeignKey('fkey-statistika-product_id', 'statistika', 'product_id', 'products', 'id', 'RESTRICT', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%statistika}}');
    }
}
