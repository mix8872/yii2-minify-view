<?php
/**
 * DependAssetBundle.php
 * @author Revin Roman
 * @link https://mix8872.ru
 */

namespace mix8872\yii\minify\tests\unit\data;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class DependAssetBundle
 * @package mix8872\yii\minify\tests\unit\data
 */
class DependAssetBundle extends AssetBundle
{

    public $js = [
        'depend.js',
    ];

    public $css = [
        'depend.css',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $depends = [
        'mix8872\yii\minify\tests\unit\data\JQueryAssetBundle',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/source';

        parent::init();
    }
}
