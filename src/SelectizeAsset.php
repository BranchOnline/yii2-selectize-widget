<?php
/**
 * @link https://github.com/2amigos/yii2-selectize-widget
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\selectize;

use yii\web\AssetBundle;

/**
 * SelectizeAsset
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
class SelectizeAsset extends AssetBundle
{
    public $sourcePath = '@bower/selectize/dist';
    public $css = [
        '@src/css/selectize.default.css',
    ];
    public $js = [
        'js/standalone/selectize.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
