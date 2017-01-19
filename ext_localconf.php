<?php

defined('TYPO3_MODE') || die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Page\PageRenderer::class] = ['className' => \Tourstream\CssInlineStyle\XClass\PageRenderer::class];
