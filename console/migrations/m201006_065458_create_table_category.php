<?php

use yii\db\Migration;

/**
 * Class m201006_065458_create_table_category
 */
class m201006_065458_create_table_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()

    {
        $this->createTable('category',[
        'id' => $this->primaryKey(),
                'name' => $this->string(50),
                'parent_id' => $this->integer(),
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201006_065458_create_table_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201006_065458_create_table_category cannot be reverted.\n";

        return false;
    }
    */
}
