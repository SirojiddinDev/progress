<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%del_adress}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m201009_104335_create_del_adress_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%del_adress}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'del_adress' => $this->text()->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-del_adress-user_id}}',
            '{{%del_adress}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-del_adress-user_id}}',
            '{{%del_adress}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-del_adress-user_id}}',
            '{{%del_adress}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-del_adress-user_id}}',
            '{{%del_adress}}'
        );

        $this->dropTable('{{%del_adress}}');
    }
}
