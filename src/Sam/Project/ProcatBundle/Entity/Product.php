<?php

namespace Sam\Project\ProcatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
}

