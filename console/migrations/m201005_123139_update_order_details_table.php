<?php

use yii\db\Migration;

/**
 * Class m201005_123139_update_order_details_table
 */
class m201005_123139_update_order_details_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('order_details', 'quantyti', 'quantity');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201005_123139_update_order_details_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201005_123139_update_order_details_table cannot be reverted.\n";

        return false;
    }
    */
}
