<?php

use yii\db\Migration;

/**
 * Class m130524_201435_init_rbac
 */

class m130524_201435_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        
        //Hotel Roles
        $hotel_owner = $auth->createRole('HotelOwner');
        $hotel_owner->description = 'Owner';
        $auth->add($hotel_owner);

        $hotel_super_admin = $auth->createRole('HotelSuperAdmin');
        $hotel_super_admin->description = 'Super Admin';
        $auth->add($hotel_super_admin);

        $tariff_manager = $auth->createRole('HotelTariffManager');
        $tariff_manager->description = 'Tariff Manager';
        $auth->add($tariff_manager);
        
        $operations_manager = $auth->createRole('HotelOperationsManager');
        $operations_manager->description = 'Operations Manager';
        $auth->add($operations_manager);
        
        //Hotel permissions
        $createProperty = $auth->createPermission('createProperty');
        $createProperty->description = 'Create a Property';
        $auth->add($createProperty);
        
        $updateProperty = $auth->createPermission('updateProperty');
        $updateProperty->description = 'Update a Property';
        $auth->add($updateProperty);

        $defineTariff = $auth->createPermission('defineTariff');
        $defineTariff->description = 'Define new Tariff';
        $auth->add($defineTariff);

        $updateTariff = $auth->createPermission('updateTariff');
        $updateTariff->description = 'Update existing Tariff';
        $auth->add($updateTariff);
                
        //Assign permissions to role
        $auth->addChild($hotel_owner, $createProperty);
        $auth->addChild($hotel_owner, $updateProperty);        
        $auth->addChild($tariff_manager, $defineTariff);
        $auth->addChild($tariff_manager, $updateTariff);
        
        //Role of operators
        $operator_owner = $auth->createRole('OperatorOwner');
        $operator_owner->description = 'Owner';
        $auth->add($operator_owner);

        $operator_super_admin = $auth->createRole('OperatorSuperAdmin');
        $operator_super_admin->description = 'Super Admin';
        $auth->add($operator_super_admin);

        $operator_manager = $auth->createRole('OperatorManager');
        $operator_manager->description = 'Operations Manager';
        $auth->add($operator_manager);

        $createEnquiry = $auth->createPermission('createEnquiry');
        $createEnquiry->description = 'Create an Enquiry';
        $auth->add($createEnquiry);

        $updateEnquiry = $auth->createPermission('updateEnquiry');
        $updateEnquiry->description = 'Update an Enquiry';
        $auth->add($updateEnquiry);        
        
        //Assign permissions to role
        $auth->addChild($operator_owner, $createEnquiry);
        $auth->addChild($operator_owner, $updateEnquiry);

        $auth->addChild($operator_super_admin, $createEnquiry);
        $auth->addChild($operator_super_admin, $updateEnquiry);

 /*        hotelier 
        - super admin
        - Tariff Manager
        - Operation Manager
        operator
        - super admin
        - Operation Manager
 */
        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        //$auth->assign($author, 2);
        //$auth->assign($admin, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       // $auth = Yii::$app->authManager;

       // $auth->removeAll();
    }
   
}
