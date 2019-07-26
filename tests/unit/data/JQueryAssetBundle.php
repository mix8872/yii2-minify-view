<?php
/**
 * JQueryAssetBundle.php
 * @author Revin Roman
 * @link https://mix8872.ru
 */

namespace mix8872\yii\minify\tests\unit\data;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class JQueryAssetBundle
 * @package mix8872\yii\minify\tests\unit\data
 */
class JQueryAssetBundle extends AssetBundle
{

    public $js = [
        '//code.jquery.com/jquery-1.11.2.min.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/source';

        parent::init();
    }
}
