<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ariza}}`.
 */
class m210218_203342_create_ariza_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('ariza', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'familyname' => $this->string(50)->notNull(),
            'address' => $this->string(70)->notNull(),
            'countryoforigin' => $this->string(100)->notNull(),
            'email' => $this->string(50)->notNull(),
            'phonenumber' => $this->string(13)->notNull(),
            'age' => $this->integer(11)->notNull(),
            'hired' => $this->string(50),
            'status' => $this->string(50),
            'suhbatvaqti_note' => $this->string(200)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ariza}}');
    }
}
