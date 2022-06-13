<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%operator}}`.
 */
class m220401_050135_create_operator_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%operator}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->defaultValue(null),
            'name' => $this->string(80)->defaultValue(null),
            'logo_image' => $this->string(80)->defaultValue(null),
            'website' => $this->string(256)->defaultValue(null),
            'v_card_image' => $this->string(80)->defaultValue(null),
            'country_id' => $this->integer(11)->defaultValue(null),
            'location_id' => $this->integer(11)->defaultValue(null),
            'destination_id' => $this->integer(11)->defaultValue(null),
            'address' => $this->string(256)->defaultValue(null),
            'postal_code' => $this->string(80)->defaultValue(null),
            'locality' => $this->string(80)->defaultValue(null),
            'legal_status_id' => $this->integer(11)->defaultValue(null),
            'pan_number' => $this->string(80)->defaultValue(null),
            'pan_image' => $this->string(80)->defaultValue(null),
            'gst_number' => $this->string(80)->defaultValue(null),
            'gst_image' => $this->string(80)->defaultValue(null),
            'bank_account_number' => $this->string(80)->defaultValue(null),
            'bank_account_name' => $this->string(80)->defaultValue(null),
            'bank_name' => $this->string(80)->defaultValue(null),
            'ifsc_code' => $this->string(80)->defaultValue(null),
            'swift_code' => $this->string(80)->defaultValue(null),
            'cheque_image' => $this->string(80)->defaultValue(null),
            'terms_and_conditons' => $this->boolean()->defaultValue(null),
            'owner_id' => $this->integer(11)->defaultValue(null)
        ]);

        $this->addForeignKey('fk_operator_user','operator','user_id','user','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_operator_owner_user','operator','owner_id','user','id','CASCADE','CASCADE');
        
        $this->addForeignKey('fk_operator_country','operator','country_id','country','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_operator_location','operator','location_id','location','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_operator_destination','operator','destination_id','destination','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_operator_user','operator');
        $this->dropForeignKey('fk_operator_owner_user','operator');        
        
        $this->dropForeignKey('fk_operator_country','property');
        $this->dropForeignKey('fk_operator_location','property');
        $this->dropForeignKey('fk_operator_destination','property');

        $this->dropTable('{{%operator}}');
    }
}
