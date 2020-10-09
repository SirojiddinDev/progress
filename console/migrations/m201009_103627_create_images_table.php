<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%images}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%product}}`
 */
class m201009_103627_create_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%images}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'size' => $this->string(),
            'main' => $this->boolean(),
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            '{{%idx-images-product_id}}',
            '{{%images}}',
            'product_id'
        );

        // add foreign key for table `{{%product}}`
        $this->addForeignKey(
            '{{%fk-images-product_id}}',
            '{{%images}}',
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
            '{{%fk-images-product_id}}',
            '{{%images}}'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            '{{%idx-images-product_id}}',
            '{{%images}}'
        );

        $this->dropTable('{{%images}}');
    }
}
