<?php

use app\components\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m211117_094515_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(80)->notNull(),
            'nationality' => $this->string(80)->defaultValue(null),
            'country_code'=> $this->string(5)->defaultValue(null),
            'phone_code' => $this->string(5)->defaultValue(null),
            'currency_name' => $this->string(50)->defaultValue(null),
            'currency_symbol' => $this->string(3)->defaultValue(null),            
            'currency_code' => $this->string(3)->defaultValue(null),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)
        ]);

        $this->insert('country',[            
            'name' =>'India',
            'nationality' =>'Indian',
            'country_code' => "IN",
            'phone_code' =>'91',
            'currency_name' =>'Rupee',
            'currency_symbol' =>'INR',
            'currency_name' =>'INR',
            'currency_code' =>'633'
        ]);

        $this->insert('country',[            
            'name' =>'China',
            'nationality' =>'Chinese',
            'country_code' => "CN",
            'phone_code' =>'91',
            'currency_name' =>'Yuvan',
            'currency_symbol' =>'$',
            'currency_name' =>'CNY',
            'currency_code' =>'633'
        ]);

        $this->insert('country',[            
            'name' =>'Chile',
            'nationality' =>'Chilean',
            'country_code' => "CL",
            'phone_code' =>'91',
            'currency_name' =>'Yuvan',
            'currency_symbol' =>'$',
            'currency_name' =>'CNY',
            'currency_code' =>'633'
        ]);

        $this->insert('country',[            
            'name' =>'Pakisthan',
            'nationality' =>'Paki',
            'country_code' => "CN",
            'phone_code' =>'91',
            'currency_name' =>'Yuvan',
            'currency_symbol' =>'$',
            'currency_name' =>'CNY',
            'currency_code' =>'633'
        ]);

        $this->insert('country',[            
            'name' =>'Nepal',
            'nationality' =>'Nepalese',
            'country_code' => "CN",
            'phone_code' =>'91',
            'currency_name' =>'Yuvan',
            'currency_symbol' =>'$',
            'currency_name' =>'CNY',
            'currency_code' =>'633'
        ]);

        $this->insert('country',[            
            'name' =>'Srilanka',
            'nationality' =>'Lankan',
            'country_code' => "CN",
            'phone_code' =>'91',
            'currency_name' =>'Yuvan',
            'currency_symbol' =>'$',
            'currency_name' =>'CNY',
            'currency_code' =>'633'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}
