<?php

use yii\db\Migration;

/**
 * Class m201106_043716_add_column_rule_user
 */
class m201106_043716_add_column_rule_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'rule', $this->integer()->defaultValue(null));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'rule');
//        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201106_043716_add_column_rule_user cannot be reverted.\n";

        return false;
    }
    */
}
