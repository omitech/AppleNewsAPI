<?php
namespace ChapterThree\AppleNewsAPI\Document;

use ChapterThree\AppleNewsAPI\ReflectionHelper;

class Condition extends Base
{
    const HORIZONTAL_VERTICAL_SIZE_CLASS_ANY = 'any';
    const HORIZONTAL_VERTICAL_SIZE_CLASS_REGULAR = 'regular';
    const HORIZONTAL_VERTICAL_SIZE_CLASS_COMPACT = 'compact';

    const CONTENT_SIZE_XS = 'XS';
    const CONTENT_SIZE_S = 'S';
    const CONTENT_SIZE_M = 'M';
    const CONTENT_SIZE_L = 'L';
    const CONTENT_SIZE_XL = 'XL';
    const CONTENT_SIZE_XXL = 'XXL';
    const CONTENT_SIZE_XXXL = 'XXXL';
    const CONTENT_SIZE_AXM = 'AX-M';
    const CONTENT_SIZE_AXL = 'AX-L';
    const CONTENT_SIZE_AXXL = 'AX-XL';
    const CONTENT_SIZE_AXXXL = 'AX-XXL';
    const CONTENT_SIZE_AXXXXL = 'AX-XXXL';

    const PLATFORM_ANY = 'any';
    const PLATFORM_IOS = 'ios';
    const PLATFORM_MACOS = 'macos';
    const PLATFORM_WEB = 'web';

    const PREFERRED_COLOR_ANY = 'any';
    const PREFERRED_COLOR_LIGHT = 'light';
    const PREFERRED_COLOR_DARK = 'dark';

    const SUBSCRIPTION_STATUS_BUNDLE = 'bundle';
    const SUBSCRIPTION_STATUS_SUBSCRIBED = 'subscribed';
    const SUBSCRIPTION_STATUS_BUNDLE_TRIAL_ELIGIBLE = 'bundle_trial_eligible';

    const VIEW_LOCATION_ANY = 'any';
    const VIEW_LOCATION_ARTICLE = 'article';
    const VIEW_LOCATION_ISSUE_TABLE_OF_CONTENTS = 'issue_table_of_contents';
    const VIEW_LOCATION_ISSUE = 'issue';

    protected $horizontalSizeClass;
    protected $verticalSizeClass;
    protected $maxColumns;
    protected $minColumns;
    protected $maxContentSize;
    protected $minContentSize;
    protected $maxSpecVersion;
    protected $minSpecVersion;
    protected $maxViewportAspect;
    protected $minViewportAspect;
    protected $maxViewportWidth;
    protected $minViewportWidth;
    protected $platform;
    protected $preferredColor;
    protected $subscriptionStatus;
    protected $viewLocation;
    

    /**
     * Define optional properties.
     */
    protected function optional()
    {
        return array_merge(parent::optional(), array(
            'horizontalSizeClass',
            'verticalSizeClass',
            'maxColumns',
            'minColumns',
            'maxContentSize',
            'minContentSize',
            'maxSpecVersion',
            'minSpecVersion',
            'maxViewportAspect',
            'minViewportAspect',
            'maxViewportWidth',
            'minViewportWidth',
            'platform',
            'preferredColor',
            'subscriptionStatus',
            'viewLocation'
        ));
    }

    public function getViewLocation()
    {
        return $this->viewLocation;
    }

    public function setViewLocation($viewLocation)
    {
        if (!in_array($viewLocation, ReflectionHelper::getConstantsByPrefix('VIEW_LOCATION_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }
        
        $this->viewLocation = $viewLocation;

        return $this;
    }

    public function getVerticalSizeClass()
    {
        return $this->verticalSizeClass;
    }

    public function setVerticalSizeClass($verticalSizeClass)
    {
        if (!in_array($verticalSizeClass, ReflectionHelper::getConstantsByPrefix('HORIZONTAL_VERTICAL_SIZE_CLASS_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }
        
        $this->verticalSizeClass = $verticalSizeClass;

        return $this;
    }

    public function getSubscriptionStatus()
    {
        return $this->subscriptionStatus;
    }

    public function setSubscriptionStatus($subscriptionStatus)
    {
        if (!in_array($subscriptionStatus, ReflectionHelper::getConstantsByPrefix('SUBSCRIPTION_STATUS_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }
        
        $this->subscriptionStatus = $subscriptionStatus;

        return $this;
    }

    public function getPreferredColor()
    {
        return $this->preferredColor;
    }

    public function setPreferredColor($preferredColor)
    {
        if (!in_array($preferredColor, ReflectionHelper::getConstantsByPrefix('PREFERRED_COLOR_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }
        
        $this->preferredColor = $preferredColor;

        return $this;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    public function setPlatform($platform)
    {
        if (!in_array($platform, ReflectionHelper::getConstantsByPrefix('PLATFORM_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }
        
        $this->platform = $platform;

        return $this;
    }

    public function getHorizontalSizeClass()
    {
        return $this->horizontalSizeClass;
    }

    public function setHorizontalSizeClass($horizontalSizeClass)
    {
        if (!in_array($horizontalSizeClass, ReflectionHelper::getConstantsByPrefix('HORIZONTAL_VERTICAL_SIZE_CLASS_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }
        
        $this->horizontalSizeClass = $horizontalSizeClass;

        return $this;
    }

    public function getMaxColumns()
    {
        return $this->maxColumns;
    }

    public function setMaxColumns($maxColumns)
    {
        if (is_int($maxColumns) && $maxColumns >= 1) {
            $this->maxColumns = $maxColumns;
        } else {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }

        return $this;
    }

    public function getMinColumns()
    {
        return $this->minColumns;
    }

    public function setMinColumns($minColumns)
    {
        if (is_int($minColumns) && $minColumns >= 0) {
            $this->minColumns = $minColumns;
        } else {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }

        return $this;
    }

    public function getMaxContentSize()
    {
        return $this->maxContentSize;
    }

    public function setMaxContentSize($maxContentSize)
    {
        if (!in_array($maxContentSize, ReflectionHelper::getConstantsByPrefix('CONTENT_SIZE_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }
        
        $this->maxContentSize = $maxContentSize;

        return $this;
    }

    public function getMinContentSize()
    {
        return $this->minContentSize;
    }

    public function setMinContentSize($minContentSize)
    {
        if (!in_array($minContentSize, ReflectionHelper::getConstantsByPrefix('CONTENT_SIZE_', __CLASS__))) {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }
        
        $this->minContentSize = $minContentSize;

        return $this;
    }

    public function getMaxSpecVersion()
    {
        return $this->maxSpecVersion;
    }

    public function setMaxSpecVersion($maxSpecVersion)
    {
        $this->maxSpecVersion = $maxSpecVersion;

        return $this;
    }

    public function getMinSpecVersion()
    {
        return $this->minSpecVersion;
    }

    public function setMinSpecVersion($minSpecVersion)
    {
        $this->minSpecVersion = $minSpecVersion;

        return $this;
    }

    public function getMaxViewportAspect()
    {
        return $this->maxViewportAspect;
    }

    public function setMaxViewportAspect($maxViewportAspect)
    {
        if (is_numeric($maxViewportAspect) && $maxViewportAspect >= 0) {
            $this->maxViewportAspect = (float)$maxViewportAspect;
        } else {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }

        return $this;
    }

    public function getMinViewportAspect()
    {
        return $this->minViewportAspect;
    }

    public function setMinViewportAspect($minViewportAspect)
    {
        if (is_numeric($minViewportAspect) && $minViewportAspect >= 0) {
            $this->minViewportAspect = (float)$minViewportAspect;
        } else {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }

        return $this;
    }

    public function getMaxViewportWidth()
    {
        return $this->maxViewportWidth;
    }

    public function setMaxViewportWidth($maxViewportWidth)
    {
        if (is_int($maxViewportWidth)) {
            $this->maxViewportWidth = $maxViewportWidth;
        } else {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }

        return $this;
    }

    public function getMinViewportWidth()
    {
        return $this->minViewportWidth;
    }

    public function setMinViewportWidth($minViewportWidth)
    {
        if (is_int($minViewportWidth)) {
            $this->minViewportWidth = $minViewportWidth;
        } else {
            $this->triggerError('Invalid value for ' . __METHOD__ . ' ' . get_called_class());
        }

        return $this;
    }
}
