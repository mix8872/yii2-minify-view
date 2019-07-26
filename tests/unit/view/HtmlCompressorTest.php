<?php
/**
 * HtmlCompressorTest.php
 * @author Revin Roman
 * @link https://mix8872.ru
 */

namespace mix8872\yii\minify\tests\unit\view;

use mix8872\yii\minify\HtmlCompressor;
use mix8872\yii\minify\tests\unit\TestCase;

/**
 * Class HtmlCompressorTest
 * @package mix8872\yii\minify\tests\unit\view
 */
class HtmlCompressorTest extends TestCase
{

    public function testMain()
    {
        $str = "<div class=\"                   test\"                  data>
            <p>Inside text</p>
            <!-- comment -->
            <pre>    Inside pre\n    <span>test</span></pre>
        </div>";

        $result = '<div
class="                   test"                  data><p>Inside text</p><pre>    Inside pre
    <span>test</span></pre></div>';

        $this->assertEquals($result, HtmlCompressor::compress($str));
        $this->assertEquals($result, \Minify_HTML::minify($str));
    }
}
