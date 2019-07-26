<?php
/**
 * TestAssetBundle.php
 * @author Revin Roman
 * @link https://mix8872.ru
 */

namespace mix8872\yii\minify\tests\unit\data;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class TestAssetBundle
 * @package mix8872\yii\minify\tests\unit\data
 */
class TestAssetBundle extends AssetBundle
{

    public $js = [
        'test.js',
    ];

    public $css = [
        'test.css',
    ];

    public $jsOptions = [
        'position' => View::POS_READY,
    ];

    public $cssOptions = [
        'media' => 'all',
    ];

    public $depends = [
        'mix8872\yii\minify\tests\unit\data\DependAssetBundle',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/source';

        parent::init();
    }
}
