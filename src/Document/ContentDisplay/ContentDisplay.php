<?php
namespace ChapterThree\AppleNewsAPI\Document\ContentDisplay;

use ChapterThree\AppleNewsAPI\Document\Base;
use ChapterThree\AppleNewsAPI\ReflectionHelper;

abstract class ContentDisplay extends Base
{
    const TYPE_COLLECTION = 'collection';
    const TYPE_HORIZONTAL_STACK = 'horizontal_stack';

    protected $type;

    public function __construct($type)
    {
        $this->setType($text);
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        if (!in_array($type, ReflectionHelper::getConstantsByPrefix('TYPE_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->type = $type;
        }

        return $this;
    }
}
