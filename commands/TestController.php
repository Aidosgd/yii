<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;

class TestController extends Controller
{
    public $number;
    public $step;

    public function options($actionID)
    {
        return ['number', 'step'];
    }

    public function optionAliases()
    {
        return ['n' => 'number', 's' => 'step'];
    }

    public function actionIndex()
    {
        $n = $this->number;
        $s = $this->step ?: 5;
        $steps = 0;
        $remainder = $n%$s;

        $result = ($n - $remainder) / $s + ($remainder == 0 ? 0 : 1);

        echo $result . "\n";
    }
}
