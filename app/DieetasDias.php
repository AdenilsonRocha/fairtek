<?php
class DietasDias{
    private $id;
    private $tb_dietas_id;
    private $dia;
    private $qr;
    private $qtd;
    private $udadete;
    private $created;
    private $excluido;
    private $ativo;

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
     * Get the value of tb_dietas_id
     */ 
    public function getTb_dietas_id()
    {
        return $this->tb_dietas_id;
    }

    /**
     * Set the value of tb_dietas_id
     *
     * @return  self
     */ 
    public function setTb_dietas_id($tb_dietas_id)
    {
        $this->tb_dietas_id = $tb_dietas_id;

        return $this;
    }

    /**
     * Get the value of dia
     */ 
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set the value of dia
     *
     * @return  self
     */ 
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    /**
     * Get the value of qr
     */ 
    public function getQr()
    {
        return $this->qr;
    }

    /**
     * Set the value of qr
     *
     * @return  self
     */ 
    public function setQr($qr)
    {
        $this->qr = $qr;

        return $this;
    }

    /**
     * Get the value of qtd
     */ 
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * Set the value of qtd
     *
     * @return  self
     */ 
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;

        return $this;
    }

    /**
     * Get the value of udadete
     */ 
    public function getUdadete()
    {
        return $this->udadete;
    }

    /**
     * Set the value of udadete
     *
     * @return  self
     */ 
    public function setUdadete($udadete)
    {
        $this->udadete = $udadete;

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
     * Get the value of excluido
     */ 
    public function getExcluido()
    {
        return $this->excluido;
    }

    /**
     * Set the value of excluido
     *
     * @return  self
     */ 
    public function setExcluido($excluido)
    {
        $this->excluido = $excluido;

        return $this;
    }

    /**
     * Get the value of ativo
     */ 
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set the value of ativo
     *
     * @return  self
     */ 
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }
}
 ?>