<?php
/**
 * Created by PhpStorm.
 * User: gogl92
 * Date: 19/10/18
 * Time: 11:07 AM
 */

namespace inquid\howlerjs;


use yii\web\AssetBundle;

class HowlerJsAssets extends AssetBundle
{
    public $sourcePath = '@vendor/inquid/yii2-howler-js/src/assets';
    public $css = ['css/player.css'];

    public $js = ['https://cdnjs.cloudflare.com/ajax/libs/howler/2.0.15/howler.min.js','js/siriwave.js'];
    public $depends = ['yii\web\JqueryAsset'];
}
