<?php
namespace ChapterThree\AppleNewsAPI;

class ReflectionHelper
{
    /**
     * return constants array
     * @param $prefix string
     * @param $class string
     * @return array
     * @throws \Exception
     */
    public static function getConstantsByPrefix($prefix, $class)
    {
        $rc = new \ReflectionClass($class);
        $constants = $rc->getConstants();

        $result = [];
        foreach ($constants as $name => $value) {
            if (preg_match('#^' . $prefix . '#', $name)) {
                $result[] = $value;
            }
        }

        return $result;
    }
}
