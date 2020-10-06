<?php

use yii\db\Migration;

/**
 * Class m201006_071556_create_table_product
 */
class m201006_071556_create_table_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product',[
            'id' => $this->primaryKey(),
            'productCode' => $this->string(15)->notNull(),
            'productName' => $this->string(70)->notNull(),
            'productLine' => $this->string(50)->notNull(),
            'productScale' => $this->string(10)->notNull(),
            'productVendor' => $this->string(50)->notNull(),
            'productDescription' => $this->text(65535)->notNull(),
            'quantityInStock' => $this->smallInteger(6)->notNull(),
            'buyPrice' => $this->decimal(10,2)->notNull(),
            'MSRP' => $this->decimal(10,2)->notNull(),

        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201006_071556_create_table_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201006_071556_create_table_product cannot be reverted.\n";

        return false;
    }
    */
}
