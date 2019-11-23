<?php
class AdRegra{
    private $id;
    private $menu;
    private $acao;
    private $stauts;
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
     * Get the value of menu
     */ 
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set the value of menu
     *
     * @return  self
     */ 
    public function setMenu($menu)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get the value of acao
     */ 
    public function getAcao()
    {
        return $this->acao;
    }

    /**
     * Set the value of acao
     *
     * @return  self
     */ 
    public function setAcao($acao)
    {
        $this->acao = $acao;

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

    /**
     * Get the value of stauts
     */ 
    public function getStauts()
    {
        return $this->stauts;
    }

    /**
     * Set the value of stauts
     *
     * @return  self
     */ 
    public function setStauts($stauts)
    {
        $this->stauts = $stauts;

        return $this;
    }
}
?>