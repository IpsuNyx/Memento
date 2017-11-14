<?php

namespace AppBundle\Entity;

/**
 * Step
 */
class Step
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $traces;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $parents;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $childs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->traces = new \Doctrine\Common\Collections\ArrayCollection();
        $this->parents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->childs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     *
     * @return Step
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Step
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Add trace
     *
     * @param \AppBundle\Entity\Trace $trace
     *
     * @return Step
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

    /**
     * Add parent
     *
     * @param \AppBundle\Entity\Step $parent
     *
     * @return Step
     */
    public function addParent(\AppBundle\Entity\Step $parent)
    {
        $this->parents[] = $parent;

        return $this;
    }

    /**
     * Remove parent
     *
     * @param \AppBundle\Entity\Step $parent
     */
    public function removeParent(\AppBundle\Entity\Step $parent)
    {
        $this->parents->removeElement($parent);
    }

    /**
     * Get parents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Add child
     *
     * @param \AppBundle\Entity\Step $child
     *
     * @return Step
     */
    public function addChild(\AppBundle\Entity\Step $child)
    {
        $this->childs[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \AppBundle\Entity\Step $child
     */
    public function removeChild(\AppBundle\Entity\Step $child)
    {
        $this->childs->removeElement($child);
    }

    /**
     * Get childs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChilds()
    {
        return $this->childs;
    }
}
