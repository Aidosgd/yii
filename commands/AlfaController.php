<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use Sunra\PhpSimple\HtmlDomParser;
use yii\console\Controller;

class AlfaController extends Controller
{
    public $brand;

    public function options($actionID)
    {
        return ['brand'];
    }

    public function optionAliases()
    {
        return ['b' => 'brand'];
    }

    public function actionIndex()
    {
        $html = HtmlDomParser::file_get_html('http://alfa.kz/pc/notebooks/all/' . $this->brand);

        $res = $html->find('div[id=squeeze]');

        return $res;
    }
}
