<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as UserBase;
/**
 * User
 */
class User extends  UserBase
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $traces;


    /**
     * Add trace
     *
     * @param \AppBundle\Entity\Trace $trace
     *
     * @return User
     */
    public function addTrace(\AppBundle\Entity\Trace $trace)
    {
        $this->traces[] = $trace;

        return $this;
    }

    /**
     * Remove trace
     *
     * @param \AppBundle\Entity\Trace $trace
     */
    public function removeTrace(\AppBundle\Entity\Trace $trace)
    {
        $this->traces->removeElement($trace);
    }

    /**
     * Get traces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraces()
    {
        return $this->traces;
    }
}
