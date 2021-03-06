<?php

namespace app\modules\parser;

/**
 * parser module definition class
 */
class ParserModule extends \yii\base\Module {
    public static $config;
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\parser\controllers';
    public $layout = '/admin';
    /**
     * @inheritdoc
     */
    public function init() {
        parent::init();
        self::$config = require(__DIR__ . '/config/config.php');        
    }
    
}
