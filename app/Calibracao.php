<?php 
class Calibracao{
    private $id;
    private $chip;
    private $peso;
    private $pta_antigo;
    private $pta_novo;
    private $tb_setor_tipo_id;
    private $exluido;
    private $createk;

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
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of pta_antigo
     */ 
    public function getPta_antigo()
    {
        return $this->pta_antigo;
    }

    /**
     * Set the value of pta_antigo
     *
     * @return  self
     */ 
    public function setPta_antigo($pta_antigo)
    {
        $this->pta_antigo = $pta_antigo;

        return $this;
    }

    /**
     * Get the value of pta_novo
     */ 
    public function getPta_novo()
    {
        return $this->pta_novo;
    }

    /**
     * Set the value of pta_novo
     *
     * @return  self
     */ 
    public function setPta_novo($pta_novo)
    {
        $this->pta_novo = $pta_novo;

        return $this;
    }

    /**
     * Get the value of tb_setor_tipo_id
     */ 
    public function getTb_setor_tipo_id()
    {
        return $this->tb_setor_tipo_id;
    }

    /**
     * Set the value of tb_setor_tipo_id
     *
     * @return  self
     */ 
    public function setTb_setor_tipo_id($tb_setor_tipo_id)
    {
        $this->tb_setor_tipo_id = $tb_setor_tipo_id;

        return $this;
    }

    /**
     * Get the value of exluido
     */ 
    public function getExluido()
    {
        return $this->exluido;
    }

    /**
     * Set the value of exluido
     *
     * @return  self
     */ 
    public function setExluido($exluido)
    {
        $this->exluido = $exluido;

        return $this;
    }

    /**
     * Get the value of createk
     */ 
    public function getCreatek()
    {
        return $this->createk;
    }

    /**
     * Set the value of createk
     *
     * @return  self
     */ 
    public function setCreatek($createk)
    {
        $this->createk = $createk;

        return $this;
    }
}
?>