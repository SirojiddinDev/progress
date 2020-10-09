<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%stock}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%product}}`
 */
class m201009_105010_create_stock_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stock}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'action' => $this->string()->notNull(),
            'date' => $this->dateTime()->defaultExpression('NOW()'),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-stock-product_id}}',
            '{{%stock}}',
            'product_id'
        );

        // add foreign key for table `{{%product}}`
        $this->addForeignKey(
            '{{%fk-stock-product_id}}',
            '{{%stock}}',
            'product_id',
            '{{%product}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%product}}`
        $this->dropForeignKey(
            '{{%fk-stock-product_id}}',
            '{{%stock}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-stock-product_id}}',
            '{{%stock}}'
        );

        $this->dropTable('{{%stock}}');
    }
}
