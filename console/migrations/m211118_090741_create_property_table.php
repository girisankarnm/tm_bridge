<?php

use app\components\Migration;

/**
 * Handles the creation of table `{{%property}}`.
 */
class m211118_090741_create_property_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->defaultValue(null),
            'country_id' => $this->integer(11)->defaultValue(null),
            'location_id' => $this->integer(11)->defaultValue(null),
            'destination_id' => $this->integer(11)->defaultValue(null),   
            'address' => $this->string(256)->defaultValue(null),
            'postal_code' => $this->string(80)->defaultValue(null),
            'locality' => $this->string(80)->defaultValue(null),
            'property_type_id' => $this->integer(11)->defaultValue(null),
            'property_category_id' => $this->integer(11)->defaultValue(null),
            'website' => $this->string(256)->defaultValue(null),
            'image' => $this->string(256)->defaultValue(null),
            'logo' => $this->string(256)->defaultValue(null),
            'legal_status_id' => $this->integer(11)->defaultValue(null),
            'pan_number' => $this->string(80)->defaultValue(null),
            'pan_image' => $this->string(80)->defaultValue(null),
            'business_licence_number' => $this->string(80)->defaultValue(null), 
            'business_licence_image' => $this->string(80)->defaultValue(null), 
            'gst_number' => $this->string(80)->defaultValue(null), 
            'gst_image' => $this->string(80)->defaultValue(null), 
            'bank_account_number' => $this->string(80)->defaultValue(null), 
            'bank_account_name' => $this->string(80)->defaultValue(null), 
            'bank_name' => $this->string(80)->defaultValue(null), 
            'ifsc_code' => $this->string(80)->defaultValue(null), 
            'swift_code' => $this->string(80)->defaultValue(null), 
            'cheque_image' => $this->string(80)->defaultValue(null), 
            'terms_and_conditons1' => $this->boolean()->defaultValue(null), 
            'terms_and_conditons2' => $this->boolean()->defaultValue(null), 
            'terms_and_conditons3' => $this->boolean()->defaultValue(null), 
           
            'twenty_four_hours_check_in' => $this->boolean()->defaultValue(1), 
            'check_in_time' => $this->smallInteger(3)->defaultValue(12), 
            'check_out_time' => $this->smallInteger(3)->defaultValue(11),
            'smoking_policy_id' => $this->integer(11)->defaultValue(1),
            'pets_policy_id' => $this->integer(11)->defaultValue(3),

            'cancellation_has_period_charge' => $this->boolean()->defaultValue(0),
            'cancellation_has_admin_charge' => $this->boolean()->defaultValue(1),
            'admin_cancellation_type' => $this->tinyInteger()->defaultValue(1), 
            'cancellation_lumsum_amount' => $this->decimal(7, 2)->defaultValue(250), 
            'cancellation_percentage_rate' => $this->smallInteger(3)->defaultValue(null),
            'cancellation_per_adult_amount' => $this->decimal(7, 2)->defaultValue(null), 
            'cancellation_per_kids_amount' => $this->decimal(7, 2)->defaultValue(null), 
            'cancellation_full_refund_days'=> $this->smallInteger(3)->defaultValue(null),
            'cancellation_no_refund_days'=> $this->smallInteger(3)->defaultValue(null),
          
            'allow_child_of_all_ages' => $this->boolean()->defaultValue(true), 
            'restricted_for_child' => $this->boolean()->defaultValue(false), 
            'restricted_for_child_below_age' => $this->smallInteger(2)->defaultValue(0), 
            'allow_complimentary' => $this->boolean()->defaultValue(true), 
            'complimentary_from_age' => $this->smallInteger(2)->defaultValue(0), 
            'complimentary_to_age' => $this->smallInteger(2)->defaultValue(7), 
            'allow_child_rate' => $this->boolean()->defaultValue(true), 
            'child_rate_from_age' => $this->smallInteger(2)->defaultValue(8), 
            'child_rate_to_age' => $this->smallInteger(2)->defaultValue(15), 
            'allow_adult_rate' => $this->boolean()->defaultValue(true), 
            'adult_rate_age' => $this->smallInteger(2)->defaultValue(16),

            'have_weekday_hike' => $this->boolean()->defaultValue(false), 
            'provide_extra_meals' => $this->boolean()->defaultValue(false), 
            'provide_honeymoon_inclusions' => $this->boolean()->defaultValue(false), 
            'provide_compulsory_inclusions' => $this->boolean()->defaultValue(false),
            'have_complimentary_services' => $this->boolean()->defaultValue(false),
            'have_swimming_pool' => $this->boolean()->defaultValue(false),
            'have_restaurant' => $this->boolean()->defaultValue(false),
            'have_parking' => $this->boolean()->defaultValue(false),

            'room_tariff_same_for_all' => $this->tinyInteger()->defaultValue(1),
            'status' => $this->smallInteger()->defaultValue(10),
            'owner_id' => $this->integer(11)->defaultValue(null)
        ]);

        $this->timestamps('{{%property}}');

        $this->addForeignKey('fk_property_smoking_policy','property','smoking_policy_id','property_smoking_policy','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_pets_policy','property','pets_policy_id','property_pets_policy','id','CASCADE','CASCADE');

        $this->addForeignKey('fk_property_country','property','country_id','country','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_location','property','location_id','location','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_destination','property','destination_id','destination','id','CASCADE','CASCADE');
        
        $this->addForeignKey('fk_property_property_type','property','property_type_id','property_type','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_category','property','property_category_id','property_category','id','CASCADE','CASCADE');
        $this->addForeignKey('fk_property_user','property','owner_id','user','id','CASCADE','CASCADE');
                
        $this->insert('property',[            
            'name' => 'Abc Hotels Private Limited',
            'country_id' => 1,
            'location_id' => 1,
            'destination_id' => 1,
            'property_type_id' => 1,
            'property_category_id' => 1,
            'owner_id' => 1
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_property_smoking_policy','property');
        $this->dropForeignKey('fk_property_pets_policy','property');
        
        $this->dropForeignKey('fk_property_country','property');
        $this->dropForeignKey('fk_property_location','property');
        $this->dropForeignKey('fk_property_destination','property');
        $this->dropForeignKey('fk_property_property_type','property');
        $this->dropForeignKey('fk_property_category','property');
        $this->dropForeignKey('fk_property_user','property');
        
        $this->dropTable('{{%property}}');
    }
}

