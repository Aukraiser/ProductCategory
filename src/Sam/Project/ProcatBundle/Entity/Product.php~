<?php

namespace Sam\Project\ProcatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sam\Project\ProcatBundle\Entity\Category;

/**
 * Product
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="Sam\Project\ProcatBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var name
     *
     * @ORM\Column(name="product_name", type="string", length=50)
     */
    private $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;
    
    /**
     * @var like
     * 
     * @ORM\Column(name="product_likes", type="integer", options={"unsigned":true, "default":0})
     */
    private $likes;


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
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set likes
     *
     * @param integer $likes
     *
     * @return Product
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get likes
     *
     * @return integer
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set category
     *
     * @param \Sam\Project\ProcatBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Sam\Project\ProcatBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    public function __toString()
    {
        return $this->getName();
    }
}
