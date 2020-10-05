<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_details}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%order}}`
 */
class m201005_063452_create_order_details_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_details}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'quantyti' => $this->smallInteger()->notNull(),
        ]);

        // creates index for column `order_id`
        $this->createIndex(
            '{{%idx-order_details-order_id}}',
            '{{%order_details}}',
            'order_id'
        );

        // add foreign key for table `{{%order}}`
        $this->addForeignKey(
            '{{%fk-order_details-order_id}}',
            '{{%order_details}}',
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
            '{{%fk-order_details-order_id}}',
            '{{%order_details}}'
        );

        // drops index for column `order_id`
        $this->dropIndex(
            '{{%idx-order_details-order_id}}',
            '{{%order_details}}'
        );

        $this->dropTable('{{%order_details}}');
    }
}
