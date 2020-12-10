<?php

use yii\db\Migration;

/**
 * Class m201016_120313_add_token
 */
class m201016_120313_add_token extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'email_confirm_token', $this->string()->unique()->after('email'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201016_120313_add_token cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201016_120313_add_token cannot be reverted.\n";

        return false;
    }
    */
}
