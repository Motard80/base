<?php
namespace src\class\model;
class PressArticleModel extends BaseModel{
    protected ?int $id=null;
    protected ?string $Title= null;
    protected ?string $Link= null;
    protected ?string $RelaseDate= null;
    protected ?int $id_Press_Article_Category= null;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Title
     */ 
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Set the value of Title
     *
     * @return  self
     */ 
    public function setTitle($Title)
    {
        $this->Title = $Title;

        return $this;
    }

    /**
     * Get the value of Link
     */ 
    public function getLink()
    {
        return $this->Link;
    }

    /**
     * Set the value of Link
     *
     * @return  self
     */ 
    public function setLink($Link)
    {
        $this->Link = $Link;

        return $this;
    }

    /**
     * Get the value of RelaseDate
     */ 
    public function getRelaseDate()
    {
        return $this->RelaseDate;
    }

    /**
     * Set the value of RelaseDate
     *
     * @return  self
     */ 
    public function setRelaseDate($RelaseDate)
    {
        $this->RelaseDate = $RelaseDate;

        return $this;
    }

    /**
     * Get the value of id_Press_Article_Category
     */ 
    public function getId_Press_Article_Category()
    {
        return $this->id_Press_Article_Category;
    }

    /**
     * Set the value of id_Press_Article_Category
     *
     * @return  self
     */ 
    public function setId_Press_Article_Category($id_Press_Article_Category)
    {
        $this->id_Press_Article_Category = $id_Press_Article_Category;

        return $this;
    }
}