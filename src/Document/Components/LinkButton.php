<?php
namespace ChapterThree\AppleNewsAPI\Document\Components;

use ChapterThree\AppleNewsAPI\Document;
use ChapterThree\AppleNewsAPI\Document\Anchor;
use ChapterThree\AppleNewsAPI\Document\Animations\ComponentAnimations\ComponentAnimation;
use ChapterThree\AppleNewsAPI\Document\Behaviors\Behavior;
use ChapterThree\AppleNewsAPI\Document\ConditionalButton;
use ChapterThree\AppleNewsAPI\Document\Layouts\ComponentLayout;
use ChapterThree\AppleNewsAPI\Document\Styles\ComponentStyle;
use ChapterThree\AppleNewsAPI\Document\Styles\ComponentTextStyle;

class LinkButton extends Component
{
    protected $URL;
    protected $text;
    protected $accessibilityLabel;
    protected $anchor;
    protected $animation;
    protected $behavior;
    protected $conditional;
    protected $hidden;
    protected $identifier;
    protected $layout;
    protected $style;
    protected $textStyle;

    public function __construct($url, $text)
    {
        $this->setUrl($url);
        $this->setText($text);

        return parent::__construct('link_button');
    }

    /**
     * Define optional properties.
     */
    protected function optional()
    {
        return array_merge(parent::optional(), array(
            'accessibilityLabel',
            'anchor',
            'animation',
            'behavior',
            'conditional',
            'hidden',
            'identifier',
            'layout',
            'style',
            'textStyle'
        ));
    }

    public function getUrl()
    {
        return $this->URL;
    }

    public function setUrl($url)
    {
        $this->URL = (string)$url;

        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = (string)$text;

        return $this;
    }

    public function getAccessibilityLabel()
    {
        return $this->accessibilityLabel;
    }

    public function setAccessibilityLabel($accessibilityLabel)
    {
        $this->accessibilityLabel = (string)$accessibilityLabel;

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

    public function setConditional(ConditionalButton $conditional)
    {
        $this->conditional = $conditional;

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

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function setIdentifier($identifier)
    {
        $this->identifier = (string)$identifier;

        return $this;
    }

    public function getLayout()
    {
        return $this->layout;
    }

    public function setLayout($layout, Document $document = NULL)
    {
        $this->layout = $layout;
        return $this;
    }

    public function getStyle()
    {
        return $this->style;
    }

    public function setStyle($style, Document $document = NULL) 
    {
        $this->style = $style;
        return $this;
    }

    public function getTextStyle()
    {
        return $this->textStyle;
    }

    public function setTextStyle(ComponentTextStyle $textStyle)
    {
        $this->textStyle = $textStyle;
        return $this;
    }
}
