<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payment}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%order}}`
 */
class m201009_113356_create_payment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%payment}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'type' => $this->string()->notNull(),
            'amount' => $this->integer()->notNull(),
        ]);

        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-payment-order_id}}',
            '{{%payment}}',
            'order_id'
        );

        // add foreign key for table `{{%order}}`
        $this->addForeignKey(
            '{{%fk-payment-order_id}}',
            '{{%payment}}',
            'order_id',
            '{{%order}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%order}}`
        $this->dropForeignKey(
            '{{%fk-payment-order_id}}',
            '{{%payment}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-payment-order_id}}',
            '{{%payment}}'
        );

        $this->dropTable('{{%payment}}');
    }
}
