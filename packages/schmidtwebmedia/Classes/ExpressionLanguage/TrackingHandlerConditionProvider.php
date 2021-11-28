<?php

namespace MarcoSchmidtWebmedia\Schmidtwebmedia\ExpressionLanguage;

use MarcoSchmidtWebmedia\Schmidtwebmedia\TypoScript\ConditionFunctionProvider;
use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class TrackingHandlerConditionProvider extends AbstractProvider
{
    /**
     * ConditionProvider constructor.
     */
    public function __construct()
    {
        $this->expressionLanguageVariables = [
            'tracking' => GeneralUtility::makeInstance(ConditionFunctionProvider::class)
        ];
    }
}
