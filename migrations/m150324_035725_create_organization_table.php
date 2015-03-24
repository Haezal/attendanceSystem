<?php

use yii\db\Schema;
use yii\db\Migration;

class m150324_035725_create_organization_table extends Migration
{
    public $tableName="organization";
    public function up()
    {
        $this->createTable($this->tableName, [
            'id'                =>Schema::TYPE_PK,
            'name'              =>Schema::TYPE_STRING. ' NOT NULL',
            'address'           =>Schema::TYPE_STRING. ' NULL',
            'address2'          =>Schema::TYPE_STRING. ' NULL',
            'postcode'          =>Schema::TYPE_STRING. '(10) NULL',
            'city'              =>Schema::TYPE_STRING. '(100) NULL',
            'state_id'          =>Schema::TYPE_INTEGER, 
            'contact_person'    =>Schema::TYPE_STRING. ' NULL',
            'contact_phone'     =>Schema::TYPE_STRING. '(15) NULL',
            'contact_email'     =>Schema::TYPE_STRING. '(100) NULL',
        ]);

        $this->addForeignKey('fk_state_id', $this->tableName ,'state_id', 'state', 'id', 'NO ACTION','NO ACTION');
    }

    public function down()
    {
        // echo "m150324_033335_create_organization_table cannot be reverted.\n";
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
