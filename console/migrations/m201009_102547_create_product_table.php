<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m201009_102547_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'code' => $this->integer()->notNull()->unique(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'characteristic' => $this->text(),
            'status' => $this->smallInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
