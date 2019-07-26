<?php
/**
 * ExcludedAssetBundle.php
 * @author Revin Roman
 * @link https://mix8872.com
 */

namespace mix8872\yii\minify\tests\unit\data;

use yii\web\AssetBundle;

/**
 * Class ExcludedAssetBundle
 * @package mix8872\yii\minify\tests\unit\data
 */
class ExcludedAssetBundle extends AssetBundle
{

    public $css = [
        'excluded.css',
    ];

    public $js = [
        'excluded.js',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/source';

        parent::init();
    }
}
