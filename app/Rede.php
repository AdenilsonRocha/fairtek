<?php 
class Rede{
    private $id;
    private $status;
    private $id_rede;
    private $id_baia;

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
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of id_rede
     */ 
    public function getId_rede()
    {
        return $this->id_rede;
    }

    /**
     * Set the value of id_rede
     *
     * @return  self
     */ 
    public function setId_rede($id_rede)
    {
        $this->id_rede = $id_rede;

        return $this;
    }

    /**
     * Get the value of id_baia
     */ 
    public function getId_baia()
    {
        return $this->id_baia;
    }

    /**
     * Set the value of id_baia
     *
     * @return  self
     */ 
    public function setId_baia($id_baia)
    {
        $this->id_baia = $id_baia;

        return $this;
    }
}
?>