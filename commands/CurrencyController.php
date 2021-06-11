<?php

namespace app\commands;

use app\services\ValuteService;
use yii\console\Controller;
use yii\console\ExitCode;

class CurrencyController extends Controller
{
    /**
     * @var ValuteService
     */
    private $valuteService;

    /**
     * CurrencyController constructor.
     * @param $id
     * @param $module
     * @param $config
     * @param ValuteService $valuteService
     */
    public function __construct($id, $module, $config, ValuteService $valuteService)
    {
        $this->valuteService = $valuteService;

        parent::__construct($id, $module, $config);
    }

    /**
     * @return int
     */
    public function actionParse()
    {
        $this->valuteService->parseXmlDaily();

        return ExitCode::OK;
    }
}
