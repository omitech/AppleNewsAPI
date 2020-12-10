<?php
namespace ChapterThree\AppleNewsAPI\Document;

class AutoPlacement extends Base
{
    protected $advertisement;
 
    /**
     * Define optional properties.
     */
    protected function optional()
    {
        return array_merge(parent::optional(), array(
            'advertisement',
        ));
    }

    /**
     * Getter for advertisement.
     */
    public function getAdvertisement()
    {
        return $this->advertisement;
    }

    /**
     * Setter for advertisement.
     *
     * @param AdvertisementAutoPlacement $advertisement
     *
     * @return $this
     */
    public function setAdvertisement(AdvertisementAutoPlacement $advertisement)
    {
        $this->advertisement = $advertisement;
        return $this;
    }
}
