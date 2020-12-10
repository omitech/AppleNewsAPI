<?php
namespace ChapterThree\AppleNewsAPI\Document\ContentDisplay;

use ChapterThree\AppleNewsAPI\ReflectionHelper;

class CollectionDisplay extends ContentDisplay
{
    const ALIGNMENT_LEFT = 'left';
    const ALIGNMENT_CENTER = 'center';
    const ALIGNMENT_RIGHT = 'right';

    const DISTRIBUTION_WIDE = 'wide';
    const DISTRIBUTION_NARROW = 'narrow';

    const WIDOWS_EQUALIZE = 'equalize';
    const WIDOWS_OPTIMIZE = 'optimize';

    protected $alignment;
    protected $distribution;
    protected $gutter;
    protected $maximumWidth;
    protected $minimumWidth;
    protected $rowSpacing;
    protected $variableSizing;
    protected $widows;

    protected function optional()
    {
        return array_merge(parent::optional(), array(
            'alignment',
            'distribution',
            'gutter',
            'maximumWidth',
            'minimumWidth',
            'rowSpacing',
            'variableSizing',
            'widows'
        ));
    }

    public function __construct()
    {
        return parent::__construct(static::TYPE_COLLECTION);
    }


    public function getAlignment()
    {
        return $this->alignment;
    }

    public function setAlignment($alignment)
    {
        if (!in_array($alignment, ReflectionHelper::getConstantsByPrefix('ALIGNMENT_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->alignment = $alignment;
        }

        return $this;
    }

    public function getDistribution()
    {
        return $this->distribution;
    }

    public function setDistribution($distribution)
    {
        if (!in_array($distribution, ReflectionHelper::getConstantsByPrefix('DISTRIBUTION_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->distribution = $distribution;
        }

        return $this;
    }

    public function getGutter()
    {
        return $this->gutter;
    }

    public function setGutter($gutter)
    {
        if (!preg_match('/^[0-9\.]+(vw|vmin|vmax|vh|dg|dm|cw|gut|pt)?$/', $gutter)) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->gutter = $gutter;
        }

        return $this;
    }

    public function getMaximumWidth()
    {
        return $this->maximumWidth;
    }

    public function setMaximumWidth($maximumWidth)
    {
        if (!preg_match('/^[0-9\.]+(vw|vmin|vmax|vh|dg|dm|cw|gut|pt)?$/', $maximumWidth)) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->maximumWidth = $maximumWidth;
        }

        return $this;
    }

    public function getMinimumWidth()
    {
        return $this->minimumWidth;
    }

    public function setMinimumWidth($minimumWidth)
    {
        if (!preg_match('/^[0-9\.]+(vw|vmin|vmax|vh|dg|dm|cw|gut|pt)?$/', $minimumWidth)) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->minimumWidth = $minimumWidth;
        }

        return $this;
    }

    public function getRowSpacing()
    {
        return $this->rowSpacing;
    }

    public function setRowSpacing($rowSpacing)
    {
        if (!preg_match('/^[0-9\.]+(vw|vmin|vmax|vh|dg|dm|cw|gut|pt)?$/', $rowSpacing)) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->rowSpacing = $rowSpacing;
        }

        return $this;
    }

    public function getVariableSizing()
    {
        return $this->variableSizing;
    }

    public function setVariableSizing($variableSizing)
    {
        if (is_bool($variableSizing)) {
            $this->variableSizing = $variableSizing;
        } else {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }

        return $this;
    }

    public function getWidows()
    {
        return $this->widows;
    }

    public function setWidows($widows)
    {
        if (!in_array($widows, ReflectionHelper::getConstantsByPrefix('WIDOWS_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->widows = $widows;
        }

        return $this;
    }
}
