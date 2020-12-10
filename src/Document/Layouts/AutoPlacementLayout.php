<?php
namespace ChapterThree\AppleNewsAPI\Document\Layouts;

use ChapterThree\AppleNewsAPI\Document\Base;
use ChapterThree\AppleNewsAPI\Document\Margin;

class AutoPlacementLayout extends Base
{
    protected $margin;

    /**
     * Define optional properties.
     */
    protected function optional()
    {
        return array_merge(parent::optional(), array(
            'margin'
        ));
    }

    /**
     * Getter for margin.
     */
    public function getMargin()
    {
        return $this->margin;
    }

    /**
     * Setter for margin.
     *
     * @param Margin $value
     *   Margin.
     *
     * @return $this
     */
    public function setMargin($value)
    {
        if (is_object($value) && !$value instanceof Margin) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->margin = $value;
        }
        
        return $this;
    }
}
