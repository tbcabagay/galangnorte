<?php

use yii\db\Migration;

class m161121_062340_init extends Migration
{
    public function up()
    {
        $this->createTable('{{%testimonial}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(255)->notNull(),
            'name' => $this->string(150)->notNull(),
            'organization' => $this->string(100)->notNull(),
            'content' => $this->text()->notNull(),
            'status' => $this->smallInteger()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
         ]);

        $this->createTable('{{%reservation}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(150)->notNull(),
            'email' => $this->string(150)->notNull(),
            'phone' => $this->string(50)->notNull(),
            'company' => $this->string(100)->notNull(),
            'when_date' => $this->date()->notNull(),
            'when_time' => $this->char(8)->notNull(),
            'where_pickup' => $this->string(150)->notNull(),
            'where_destination' => $this->string(150)->notNull(),
            'duration' => $this->smallInteger()->notNull(),
            'status' => $this->smallInteger()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%testimonial}}');
        $this->dropTable('{{%reservation}}');
    }
}
