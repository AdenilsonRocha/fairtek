<?php 
class AdPermissao{
    private $id;
    private $staus;
    private $created;

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
     * Get the value of staus
     */ 
    public function getStaus()
    {
        return $this->staus;
    }

    /**
     * Set the value of staus
     *
     * @return  self
     */ 
    public function setStaus($staus)
    {
        $this->staus = $staus;

        return $this;
    }

    /**
     * Get the value of created
     */ 
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @return  self
     */ 
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }
}
?>