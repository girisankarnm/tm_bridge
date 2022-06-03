<?php
namespace app\components;

use \yii\db\Migration as YiiMigration;

class Migration extends YiiMigration
{
    public function timestamps($tableName)
    {
        $this->addColumn(
            $tableName,
            'created_at',
            $this->timestamp()->null()->defaultExpression('CURRENT_TIMESTAMP')
        );
        $this->addColumn(
            $tableName,
            'created_by',
            $this->integer()
        );

        $this->addColumn(
            $tableName,
            'updated_at',
            $this->timestamp()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP')
        );
        $this->addColumn(
            $tableName,
            'updated_by',
            $this->integer()
        );
        
        $this->addColumn(
            $tableName,
            'deleted_at',
            $this->timestamp()->null()->defaultExpression('NULL')
        );
        $this->addColumn(
            $tableName,
            'deleted_by',
            $this->integer()
        );
    }

    public function ipAddress($tableName)
    {
        $this->addColumn(
            $tableName,
            'created_ip',            
            $this->text()->defaultValue(null)
        );

        $this->addColumn(
            $tableName,
            'modified_ip',            
            $this->text()->defaultValue(null)
        );

        $this->addColumn(
            $tableName,
            'deleted_ip',            
            $this->text()->defaultValue(null)
        );
    }
}
