<?php

namespace yii2fullcalendar;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net>
 * @author akorinek <https://github.com/akorinek>
 */

class SchedulerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/encryptedroot/yii2fullcalendar3/dependencies/fullcalendar-scheduler';
    
    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'scheduler.js',
    ];
    
    public $css = [
        'scheduler.css'
    ];
}
