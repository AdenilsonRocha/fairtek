<?php 
class Dosador{
    private $id;
    private $baiasId;
    private $codigo;
    private $ativo;
    private $ativoRede;
    private $statusRacao;
    private $statusAntena;
    private $statusMotor;
    private $statusDosador;
    private $statusMemoria;
    private $statusRede;
    private $upDated;
    private $created;
    private $excluido;
    private $ag_update;
    private $sincronizado;
    


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
     * Get the value of baiasId
     */ 
    public function getBaiasId()
    {
        return $this->baiasId;
    }

    /**
     * Set the value of baiasId
     *
     * @return  self
     */ 
    public function setBaiasId($baiasId)
    {
        $this->baiasId = $baiasId;

        return $this;
    }

    /**
     * Get the value of codigo
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

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

    /**
     * Get the value of ativoRede
     */ 
    public function getAtivoRede()
    {
        return $this->ativoRede;
    }

    /**
     * Set the value of ativoRede
     *
     * @return  self
     */ 
    public function setAtivoRede($ativoRede)
    {
        $this->ativoRede = $ativoRede;

        return $this;
    }

    /**
     * Get the value of statusRacao
     */ 
    public function getStatusRacao()
    {
        return $this->statusRacao;
    }

    /**
     * Set the value of statusRacao
     *
     * @return  self
     */ 
    public function setStatusRacao($statusRacao)
    {
        $this->statusRacao = $statusRacao;

        return $this;
    }

    /**
     * Get the value of statusAntena
     */ 
    public function getStatusAntena()
    {
        return $this->statusAntena;
    }

    /**
     * Set the value of statusAntena
     *
     * @return  self
     */ 
    public function setStatusAntena($statusAntena)
    {
        $this->statusAntena = $statusAntena;

        return $this;
    }

    /**
     * Get the value of statusMotor
     */ 
    public function getStatusMotor()
    {
        return $this->statusMotor;
    }

    /**
     * Set the value of statusMotor
     *
     * @return  self
     */ 
    public function setStatusMotor($statusMotor)
    {
        $this->statusMotor = $statusMotor;

        return $this;
    }

    /**
     * Get the value of statusDosador
     */ 
    public function getStatusDosador()
    {
        return $this->statusDosador;
    }

    /**
     * Set the value of statusDosador
     *
     * @return  self
     */ 
    public function setStatusDosador($statusDosador)
    {
        $this->statusDosador = $statusDosador;

        return $this;
    }

    /**
     * Get the value of statusMemoria
     */ 
    public function getStatusMemoria()
    {
        return $this->statusMemoria;
    }

    /**
     * Set the value of statusMemoria
     *
     * @return  self
     */ 
    public function setStatusMemoria($statusMemoria)
    {
        $this->statusMemoria = $statusMemoria;

        return $this;
    }

    /**
     * Get the value of statusRede
     */ 
    public function getStatusRede()
    {
        return $this->statusRede;
    }

    /**
     * Set the value of statusRede
     *
     * @return  self
     */ 
    public function setStatusRede($statusRede)
    {
        $this->statusRede = $statusRede;

        return $this;
    }

    /**
     * Get the value of upDated
     */ 
    public function getUpDated()
    {
        return $this->upDated;
    }

    /**
     * Set the value of upDated
     *
     * @return  self
     */ 
    public function setUpDated($upDated)
    {
        $this->upDated = $upDated;

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
     * Get the value of ag_update
     */ 
    public function getAg_update()
    {
        return $this->ag_update;
    }

    /**
     * Set the value of ag_update
     *
     * @return  self
     */ 
    public function setAg_update($ag_update)
    {
        $this->ag_update = $ag_update;

        return $this;
    }

    /**
     * Get the value of sincronizado
     */ 
    public function getSincronizado()
    {
        return $this->sincronizado;
    }

    /**
     * Set the value of sincronizado
     *
     * @return  self
     */ 
    public function setSincronizado($sincronizado)
    {
        $this->sincronizado = $sincronizado;

        return $this;
    }
}

?>