<?php

namespace app\models;

use yii\db\ActiveRecord;
use Exception;

class Currency extends ActiveRecord
{
    public static function create($item)
    {
        try {
            $currency = new Currency();
            $currency->name = $item->CharCode;

            $item->Value = str_replace(',', '.', $item->Value);
            $currency->rate = (double)$item->Value;
            $currency->insert_dt = date('Y-m-d H:i:s');
            $currency->save();
        } catch (Exception $e) {
            return null;
        }

        return $currency;
    }
}
