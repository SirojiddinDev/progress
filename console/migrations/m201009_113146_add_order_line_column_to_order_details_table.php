<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%order_details}}`.
 */
class m201009_113146_add_order_line_column_to_order_details_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order_details}}', 'order_line', $this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%order_details}}', 'order_line');
    }
}
