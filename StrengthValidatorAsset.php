<?php

/**
 * @package   yii2-password
 * @author    Kartik Visweswaran <kartikv2@gmail.com>
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015
 * @version   1.5.3
 */

namespace tondakal\password;

/**
 * Asset bundle for StrengthValidator
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class StrengthValidatorAsset extends \tondakal\base\AssetBundle
{
    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/strength-validation']);
        parent::init();
    }
}