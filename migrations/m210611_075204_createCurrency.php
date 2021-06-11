<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210611_075204_createCurrency
 */
class m210611_075204_createCurrency extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('currency', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'rate' => Schema::TYPE_DOUBLE,
            'insert_dt' => Schema::TYPE_DATETIME
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('currency');
    }
}
