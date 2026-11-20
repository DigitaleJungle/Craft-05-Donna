<?php
namespace modules\ckeditorcustomcolors;

use Craft;
use yii\base\Module;
use craft\helpers\App;

class CKEditorCustomColors extends Module
{
    public function init()
    {
        parent::init();

        // Register the script in the control panel
        if (Craft::$app->request->isCpRequest) {
            Craft::$app->view->registerJs($this->generateColorScript(), \yii\web\View::POS_HEAD);
        }
        
        
    }

    private function generateColorScript(): string
    {
        // Fetch the environment variables
        $color1 = App::env('COLOR1') ?: '#52cd26';
        $color2= App::env('COLOR2') ?: '#1f5fea';
        $color_white = App::env('COLOR_WHITE') ?: '#ffffff';
        $color_light = App::env('COLOR_LIGHT') ?: '#eaeaea';
        $color_dark = App::env('COLOR_DARK') ?: '#606060';
        $color_black = App::env('COLOR_BLACK') ?: '#000000';

        // Return the JavaScript snippet to expose the colors
        return <<<JS
            window.CKEditorConfig = window.CKEditorConfig || {};
            window.CKEditorConfig.COLOR1 = '{$color1}';
            window.CKEditorConfig.COLOR2 = '{$color2}';
            window.CKEditorConfig.COLOR_WHITE = '{$color_white}';
            window.CKEditorConfig.COLOR_LIGHT = '{$color_light}';
            window.CKEditorConfig.COLOR_DARK = '{$color_dark}';
            window.CKEditorConfig.COLOR_BLACK = '{$color_black}';
        JS;
    }
}

