<?php

namespace Docker\API\Model;

class Registry
{
    /**
     * @var string[]
     */
    protected $mirrors;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $official;
    /**
     * @var bool
     */
    protected $secure;
    /**
     * @return string[]
     */
    public function getMirrors()
    {
        return $this->mirrors;
    }
    /**
     * @param string[] $mirrors
     *
     * @return self
     */
    public function setMirrors(array $mirrors = null)
    {
        $this->mirrors = $mirrors;
        return $this;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return bool
     */
    public function getOfficial()
    {
        return $this->official;
    }
    /**
     * @param bool $official
     *
     * @return self
     */
    public function setOfficial($official = null)
    {
        $this->official = $official;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure;
    }
    /**
     * @param bool $secure
     *
     * @return self
     */
    public function setSecure($secure = null)
    {
        $this->secure = $secure;
        return $this;
    }
}