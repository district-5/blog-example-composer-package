<?php
namespace MyLibraryExample;

/**
 * @class MySuperClass
 * @package MyLibraryExample
 */
class MySuperClass
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function hello(): string
    {
        // Maybe just pretend this is more complicated than it actually is.
        return $this->name;
    }
}
