<?php
namespace src\class\model;
class MemberModel extends BaseModel{
    protected ?int $id=null;
    protected ?string $Name= null;
    protected ?string $FirstName= null;
    protected ?string $Compagny = null;
    protected ?string $Mail= null;
    protected ?string $PassWord= null;
    protected ?string $RegistrationDate= null;
    protected ?string $AccountValidated= null;
    protected ?string $Key = null;
    protected ?int $accesId = null;

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
     * Get the value of Name
     */ 
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set the value of Name
     *
     * @return  self
     */ 
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Get the value of FirstName
     */ 
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set the value of FirstName
     *
     * @return  self
     */ 
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    /**
     * Get the value of Compagny
     */ 
    public function getCompagny()
    {
        return $this->Compagny;
    }

    /**
     * Set the value of Compagny
     *
     * @return  self
     */ 
    public function setCompagny($Compagny)
    {
        $this->Compagny = $Compagny;

        return $this;
    }

    /**
     * Get the value of Mail
     */ 
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * Set the value of Mail
     *
     * @return  self
     */ 
    public function setMail($Mail)
    {
        $this->Mail = $Mail;

        return $this;
    }

    /**
     * Get the value of PassWord
     */ 
    public function getPassWord()
    {
        return $this->PassWord;
    }

    /**
     * Set the value of PassWord
     *
     * @return  self
     */ 
    public function setPassWord($PassWord)
    {
        $this->PassWord = $PassWord;

        return $this;
    }

    /**
     * Get the value of RegistrationDate
     */ 
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }

    /**
     * Set the value of RegistrationDate
     *
     * @return  self
     */ 
    public function setRegistrationDate($RegistrationDate)
    {
        $this->RegistrationDate = $RegistrationDate;

        return $this;
    }

    /**
     * Get the value of AccountValidated
     */ 
    public function getAccountValidated()
    {
        return $this->AccountValidated;
    }

    /**
     * Set the value of AccountValidated
     *
     * @return  self
     */ 
    public function setAccountValidated($AccountValidated)
    {
        $this->AccountValidated = $AccountValidated;

        return $this;
    }

    /**
     * Get the value of Key
     *
     * @return ?string
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }

    /**
     * Set the value of Key
     *
     * @param ?string $Key
     *
     * @return self
     */
    public function setKey(?string $Key): self
    {
        $this->Key = $Key;

        return $this;
    }

    /**
     * Get the value of accesId
     */ 
    public function getAccesId()
    {
        return $this->accesId;
    }

    /**
     * Set the value of accesId
     *
     * @return  self
     */ 
    public function setAccesId($accesId)
    {
        $this->accesId = $accesId;

        return $this;
    }
}