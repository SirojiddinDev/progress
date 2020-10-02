<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_info}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m201002_063900_create_user_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_info}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'l_name' => $this->string()->notNull(),
            'f_name' => $this->string()->notNull(),
            'birth_day' => $this->date()->notNull(),
            'phone' => $this->string()->notNull(),
            'adress' => $this->string()->notNull(),
            'gender' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'passport' => $this->string()->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-user_info-user_id}}',
            '{{%user_info}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-user_info-user_id}}',
            '{{%user_info}}',
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
            '{{%fk-user_info-user_id}}',
            '{{%user_info}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-user_info-user_id}}',
            '{{%user_info}}'
        );

        $this->dropTable('{{%user_info}}');
    }
}
