<?php
namespace ChapterThree\AppleNewsAPI\Document\ContentDisplay;

use ChapterThree\AppleNewsAPI\Document\Base;

class HorizontalStackDisplay extends Base
{
    public function __construct()
    {
        return parent::__construct(static::TYPE_HORIZONTAL_STACK);
    }
}
