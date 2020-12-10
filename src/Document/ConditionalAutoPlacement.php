<?php
namespace ChapterThree\AppleNewsAPI\Document;

use ChapterThree\AppleNewsAPI\Document\Layouts\AutoPlacementLayout;

class ConditionalAutoPlacement extends Base
{
    protected $conditions;
    protected $enabled;
    protected $layout;

    /**
     * Define optional properties.
     */
    protected function optional()
    {
        return array_merge(parent::optional(), array(
            'enabled',
            'layout',
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
}
