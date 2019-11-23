<?php 
class AnimaisTransferencia{
    private $id;
    private $tb_animail_id;
    private $brinco;
    private $chip;
    private $antiga_baia;
    private $nova_baia;
    private $usuario;
    private $usuario_email;
    private $crated;

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
     * Get the value of tb_animail_id
     */ 
    public function getTb_animail_id()
    {
        return $this->tb_animail_id;
    }

    /**
     * Set the value of tb_animail_id
     *
     * @return  self
     */ 
    public function setTb_animail_id($tb_animail_id)
    {
        $this->tb_animail_id = $tb_animail_id;

        return $this;
    }

    /**
     * Get the value of brinco
     */ 
    public function getBrinco()
    {
        return $this->brinco;
    }

    /**
     * Set the value of brinco
     *
     * @return  self
     */ 
    public function setBrinco($brinco)
    {
        $this->brinco = $brinco;

        return $this;
    }

    /**
     * Get the value of chip
     */ 
    public function getChip()
    {
        return $this->chip;
    }

    /**
     * Set the value of chip
     *
     * @return  self
     */ 
    public function setChip($chip)
    {
        $this->chip = $chip;

        return $this;
    }

    /**
     * Get the value of antiga_baia
     */ 
    public function getAntiga_baia()
    {
        return $this->antiga_baia;
    }

    /**
     * Set the value of antiga_baia
     *
     * @return  self
     */ 
    public function setAntiga_baia($antiga_baia)
    {
        $this->antiga_baia = $antiga_baia;

        return $this;
    }

    /**
     * Get the value of nova_baia
     */ 
    public function getNova_baia()
    {
        return $this->nova_baia;
    }

    /**
     * Set the value of nova_baia
     *
     * @return  self
     */ 
    public function setNova_baia($nova_baia)
    {
        $this->nova_baia = $nova_baia;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of usuario_email
     */ 
    public function getUsuario_email()
    {
        return $this->usuario_email;
    }

    /**
     * Set the value of usuario_email
     *
     * @return  self
     */ 
    public function setUsuario_email($usuario_email)
    {
        $this->usuario_email = $usuario_email;

        return $this;
    }

    /**
     * Get the value of crated
     */ 
    public function getCrated()
    {
        return $this->crated;
    }

    /**
     * Set the value of crated
     *
     * @return  self
     */ 
    public function setCrated($crated)
    {
        $this->crated = $crated;

        return $this;
    }
}

?>