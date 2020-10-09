<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%order}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%del_adress}}`
 */
class m201009_121536_add_del_adress_id_column_to_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%order}}', 'del_adress_id', $this->integer());

        // creates index for column `del_adress_id`
        $this->createIndex(
            '{{%idx-order-del_adress_id}}',
            '{{%order}}',
            'del_adress_id'
        );

        // add foreign key for table `{{%del_adress}}`
        $this->addForeignKey(
            '{{%fk-order-del_adress_id}}',
            '{{%order}}',
            'del_adress_id',
            '{{%del_adress}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%del_adress}}`
        $this->dropForeignKey(
            '{{%fk-order-del_adress_id}}',
            '{{%order}}'
        );

        // drops index for column `del_adress_id`
        $this->dropIndex(
            '{{%idx-order-del_adress_id}}',
            '{{%order}}'
        );

        $this->dropColumn('{{%order}}', 'del_adress_id');
    }
}
