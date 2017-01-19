<?php

/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 19.01.17
 * Time: 14:12
 */

class PageRendererTest extends PHPUnit_Framework_TestCase
{
    public $object;

    public function setUp()
    {
        $this->object = new \Byskr\CssInlineStyle\XClass\PageRenderer();
    }

    public function testAddCssInlineBlock() {
        var_dump($this->object);
    }
}