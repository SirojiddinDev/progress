<?php

use yii\db\Migration;

/**
 * Class m201120_062201_category_banner
 */
class m201120_062201_category_banner extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category', 'banner', $this->boolean()->defaultValue('0'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201120_062201_category_banner cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201120_062201_category_banner cannot be reverted.\n";

        return false;
    }
    */
}
