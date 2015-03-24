<?php

use yii\db\Schema;
use yii\db\Migration;

class m150324_034014_create_state_table extends Migration
{
    public $tableName="state";
    public function up()
    {
        $this->createTable($this->tableName, [
            'id'=>Schema::TYPE_PK,
            'name'=>Schema::TYPE_STRING. ' NOT NULL',
            'code'=>Schema::TYPE_STRING. '(10) NOT NULL',
        ]);
    }

    public function down()
    {
        // echo "m150324_034014_create_state_table cannot be reverted.\n";
        $this->dropTable($this->tableName);
        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
