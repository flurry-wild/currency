<?php

namespace app\services;

use SimpleXMLElement;
use app\models\Currency;
use Exception;

class ValuteService
{
    const LINK = 'http://www.cbr.ru/scripts/XML_daily.asp';

    /**
     *  @return void
     */
    public function parseXmlDaily()
    {
        try {
            $source = file_get_contents(self::LINK);
            $xml = new SimpleXMLElement($source);

            foreach ($xml as $item) {
                Currency::create($item);
            }
        } catch (Exception $e) {
            ;
        }
    }
}
