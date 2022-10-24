<?php

namespace models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pages")
 */

class Page
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;


    /** 
     * @ORM\Column(type="string")
     */
    private $pageName;

    /** 
     * @ORM\Column(type="string", length=2000, nullable=true)
     */
    private $pageContent;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of pageName
     */
    public function getpageName()
    {
        return $this->pageName;
    }

    /**
     * Set the value of pageName
     *
     * @return  self
     */
    public function setpageName($pageName)
    {
        return $this->pageName = $pageName;
    }

    /**
     * Get the value of pageContent
     */
    public function getpageContent()
    {
        return $this->pageContent;
    }

    /**
     * Set the value of pageContent
     *
     * @return  self
     */
    public function setpageContent($pageContent)
    {
        return $this->pageContent = $pageContent;
    }
}