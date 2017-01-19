<?php

namespace Byskr\CssInlineStyle\XClass;

use TYPO3\CMS\Core\Resource\Exception\FileDoesNotExistException;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class PageRenderer extends \TYPO3\CMS\Core\Page\PageRenderer
{
    public function addCssInlineBlock($name, $block, $compress = false, $forceOnTop = false)
    {
        if (strpos($block, 'EXT:') === 0) {
            $block = $this->replaceCssFilePathWithContent($block);
        }

        parent::addCssInlineBlock($name, $block, $compress, $forceOnTop);
    }

    protected function replaceCssFilePathWithContent($path)
    {
        $path = GeneralUtility::getFileAbsFileName(trim($path));
        if (!file_exists($path)) {
            throw new FileDoesNotExistException('CSS File: ' . $path . ' not found');
        }

        return file_get_contents($path);
    }
}