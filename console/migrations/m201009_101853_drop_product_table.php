<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%product}}`.
 */
class m201009_101853_drop_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%product}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
        ]);
    }
}
