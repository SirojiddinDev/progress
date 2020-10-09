<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%price}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%product}}`
 */
class m201009_111443_create_price_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%price}}', [
            'product_id' => $this->primaryKey(),
            'price' => $this->integer(),
            'from_date' => $this->dateTime()->defaultExpression('NOW()'),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-price-product_id}}',
            '{{%price}}',
            'product_id'
        );

        // add foreign key for table `{{%product}}`
        $this->addForeignKey(
            '{{%fk-price-product_id}}',
            '{{%price}}',
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
            '{{%fk-price-product_id}}',
            '{{%price}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-price-product_id}}',
            '{{%price}}'
        );

        $this->dropTable('{{%price}}');
    }
}
