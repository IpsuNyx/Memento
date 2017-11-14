<?php

namespace AppBundle\Entity;

/**
 * Trace
 */
class Trace
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $trace_type;

    /**
     * @var \DateTime
     */
    private $createAt;

    /**
     * @var \AppBundle\Entity\User
     */
    private $users;

    /**
     * @var \AppBundle\Entity\Step
     */
    private $steps;


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
     * Set traceType
     *
     * @param integer $traceType
     *
     * @return Trace
     */
    public function setTraceType($traceType)
    {
        $this->trace_type = $traceType;

        return $this;
    }

    /**
     * Get traceType
     *
     * @return integer
     */
    public function getTraceType()
    {
        return $this->trace_type;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return Trace
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set users
     *
     * @param \AppBundle\Entity\User $users
     *
     * @return Trace
     */
    public function setUsers(\AppBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \AppBundle\Entity\User
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set steps
     *
     * @param \AppBundle\Entity\Step $steps
     *
     * @return Trace
     */
    public function setSteps(\AppBundle\Entity\Step $steps = null)
    {
        $this->steps = $steps;

        return $this;
    }

    /**
     * Get steps
     *
     * @return \AppBundle\Entity\Step
     */
    public function getSteps()
    {
        return $this->steps;
    }
}
