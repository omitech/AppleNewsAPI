<?php
namespace ChapterThree\AppleNewsAPI\Document\Components;

use ChapterThree\AppleNewsAPI\Document\Anchor;
use ChapterThree\AppleNewsAPI\Document\ComponentLink;
use ChapterThree\AppleNewsAPI\Document\Animations\ComponentAnimations\ComponentAnimation;
use ChapterThree\AppleNewsAPI\Document\Behaviors\Behavior;
use ChapterThree\AppleNewsAPI\Document\ConditionalContainer;
use ChapterThree\AppleNewsAPI\Document\ContentDisplay\ContentDisplay;
use ChapterThree\AppleNewsAPI\Document\Layouts\ComponentLayout;
use ChapterThree\AppleNewsAPI\Document\Styles\ComponentStyle;

class Aside extends ComponentNested
{
    protected $additions;
    protected $anchor;
    protected $animation;
    protected $behavior;
    protected $conditional;
    protected $contentDisplay;
    protected $hidden;
    protected $layout;
    protected $style;

    public function __construct($identifier = null)
    {
        return parent::__construct('aside', $identifier);
    }

    /**
     * Define optional properties.
     */
    protected function optional()
    {
        return array_merge(parent::optional(), array(
            'additions',
            'anchor',
            'animation',
            'behavior',
            'conditional',
            'contentDisplay',
            'hidden',
            'layout',
            'style',
        ));
    }

    public function getAdditions()
    {
        return $this->additions;
    }

    public function setAdditions($additions)
    {
        if ($additions instanceof ComponentLink) {
            $this->additions = $additions;
        } elseif (is_array($additions)) {
            foreach ($additions as $item) {
                if (!($item instanceof ComponentLink)) {
                    $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());

                    return $this;
                }
            }

            $this->additions = $additions;
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

    public function getConditional()
    {
        return $this->conditional;
    }

    public function setConditional($conditional)
    {
        if ($conditional instanceof ConditionalContainer) {
            $this->conditional = $conditional;
        } elseif (is_array($conditional)) {
            foreach ($conditional as $item) {
                if (!($item instanceof ConditionalContainer)) {
                    $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());

                    return $this;
                }
            }

            $this->conditional = $conditional;
        }

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


    public function getLayout()
    {
        return $this->layout;
    }

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
