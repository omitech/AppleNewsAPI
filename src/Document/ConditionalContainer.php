<?php
namespace ChapterThree\AppleNewsAPI\Document;

use ChapterThree\AppleNewsAPI\Document\Animations\ComponentAnimations\ComponentAnimation;
use ChapterThree\AppleNewsAPI\Document\Behaviors\Behavior;
use ChapterThree\AppleNewsAPI\Document\Layouts\ComponentLayout;
use ChapterThree\AppleNewsAPI\Document\Styles\ComponentStyle;
use ChapterThree\AppleNewsAPI\Document\ContentDisplay\ContentDisplay;

class ConditionalContainer extends Base
{
    protected $conditions;
    protected $anchor;
    protected $animation;
    protected $behavior;
    protected $contentDisplay;
    protected $hidden;
    protected $layout;
    protected $style;

    /**
     * Define optional properties.
     */
    protected function optional()
    {
        return array_merge(parent::optional(), array(
            'anchor',
            'animation',
            'behavior',
            'contentDisplay',
            'hidden',
            'layout',
            'style',
        ));
    }

    public function getConditions()
    {
        return $this->conditions;
    }

    public function setConditions($conditions)
    {
        if ($conditions instanceof Condition) {
            $this->conditions = $conditions;
        } elseif (is_array($conditions)) {
            foreach ($conditions as $item) {
                if (!($item instanceof Condition)) {
                    $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());

                    return $this;
                }
            }

            $this->conditions = $conditions;
        }

        return $this;
    }

    public function getAnchor()
    {
        return $this->anchor;
    }

    public function setAnchor(Anchor $anchor)
    {
        $this->anchor = $anchor;

        return $this;
    }

    public function getAnimation()
    {
        return $this->animation;
    }

    public function setAnimation(ComponentAnimation $animation)
    {
        $this->animation = $animation;

        return $this;
    }

    public function getBehavior()
    {
        return $this->behavior;
    }

    public function setBehavior(Behavior $behavior)
    {
        $this->behavior = $behavior;

        return $this;
    }

    public function getContentDisplay()
    {
        return $this->contentDisplay;
    }

    public function setContentDisplay(ContentDisplay $contentDisplay)
    {
        $this->contentDisplay = $contentDisplay;

        return $this;
    }

    public function getHidden()
    {
        return $this->hidden;
    }

    public function setHidden($hidden)
    {
        if (is_bool($hidden)) {
            $this->hidden = $hidden;
        } else {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }

        return $this;
    }

    /**
     * Getter for layout.
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Setter for layout.
     *
     * @param ComponentLayout $layout
     *   Layout object that currently supports only margin.
     *
     * @return $this
     */
    public function setLayout(ComponentLayout $layout)
    {
        $this->layout = $layout;
        return $this;
    }

 
    public function getStyle()
    {
        return $this->style;
    }

    public function setStyle(ComponentStyle $style)
    {
        $this->style = $style;
        return $this;
    }
}
