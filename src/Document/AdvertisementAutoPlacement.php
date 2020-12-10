<?php
namespace ChapterThree\AppleNewsAPI\Document;

use ChapterThree\AppleNewsAPI\Document\Layouts\AutoPlacementLayout;
use ChapterThree\AppleNewsAPI\ReflectionHelper;

class AdvertisementAutoPlacement extends Base
{
    protected $bannerType;
    protected $frequency;
    protected $layout;
    protected $conditional;
    protected $distanceFromMedia;
    protected $enabled;

    const BANNER_TYPE_ANY = 'any';
    const BANNER_TYPE_STANDARD = 'standard';
    const BANNER_TYPE_DOUBLE = 'double_height';
    const BANNER_TYPE_LARGE = 'large';

    /**
     * Define optional properties.
     */
    protected function optional()
    {
        return array_merge(parent::optional(), array(
            'bannerType',
            'frequency',
            'layout',
            'conditional',
            'distanceFromMedia',
            'enabled'
        ));
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        if (is_bool($enabled)) {
            $this->enabled = $enabled;
        } else {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }

        return $this;
    }

    public function getDistanceFromMedia()
    {
        return $this->distanceFromMedia;
    }

    public function setDistanceFromMedia($distanceFromMedia)
    {
        if (!preg_match('/^[0-9\.]+(vw|vmin|vmax|vh|dg|dm|cw|gut|pt)?$/', $distanceFromMedia)) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->distanceFromMedia = $distanceFromMedia;
        }

        return $this;
    }

    /**
     * Getter for bannerType.
     */
    public function getBannerType()
    {
        return $this->bannerType;
    }

    /**
     * Setting for bannerType.
     *
     * @param string $bannerType
     *   The banner type that should be shown. One of 'any', 'standard',
     *   'double_height', and 'large'.
     *
     * @return $this
     */
    public function setBannerType($bannerType)
    {
        if (!in_array($bannerType, ReflectionHelper::getConstantsByPrefix('BANNER_TYPE_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        } else {
            $this->bannerType = $bannerType;
        }

        return $this;
    }

    /**
     * Getter for frequency.
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Setter for frequency.
     *
     * @param int $frequency
     *   A number between 0 and 10 defining the frequency for automatically
     *   inserting advertising components into articles.
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        if ($frequency >= 0 && $frequency <= 10) {
            $this->frequency = $frequency;
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
     * @param AutoPlacementLayout $layout
     *   Layout object that currently supports only margin.
     *
     * @return $this
     */
    public function setLayout(AutoPlacementLayout $layout)
    {
        $this->layout = $layout;
        return $this;
    }

    public function getConditional()
    {
        return $this->conditional;
    }

    public function setConditional($conditional)
    {
        if ($conditional instanceof ConditionalAutoPlacement) {
            $this->conditional = $conditional;
        } elseif (is_array($conditional)) {
            foreach ($conditional as $item) {
                if (!($item instanceof ConditionalAutoPlacement)) {
                    $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());

                    return $this;
                }
            }

            $this->conditional = $conditional;
        }

        return $this;
    }
}
