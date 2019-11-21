<?php
class baia{
    private $id;
    private $galpaoId;
    private $nome;
    private $capacidade;
    private $largura;
    private $comprimento;
    private $updated;
    private $created;
    private $excluido;
    private $ativo;
    private $setorTipoId;
    private $qtTotal;
    private $qtFemea;


    /**
     * Get the value of qtFemea
     */ 
    public function getQtFemea()
    {
        return $this->qtFemea;
    }

    /**
     * Set the value of qtFemea
     *
     * @return  self
     */ 
    public function setQtFemea($qtFemea)
    {
        $this->qtFemea = $qtFemea;

        return $this;
    }

    /**
     * Get the value of qtTotal
     */ 
    public function getQtTotal()
    {
        return $this->qtTotal;
    }

    /**
     * Set the value of qtTotal
     *
     * @return  self
     */ 
    public function setQtTotal($qtTotal)
    {
        $this->qtTotal = $qtTotal;

        return $this;
    }

    /**
     * Get the value of setorTipoId
     */ 
    public function getSetorTipoId()
    {
        return $this->setorTipoId;
    }

    /**
     * Set the value of setorTipoId
     *
     * @return  self
     */ 
    public function setSetorTipoId($setorTipoId)
    {
        $this->setorTipoId = $setorTipoId;

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
     * Get the value of updated
     */ 
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set the value of updated
     *
     * @return  self
     */ 
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get the value of comprimento
     */ 
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set the value of comprimento
     *
     * @return  self
     */ 
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get the value of largura
     */ 
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set the value of largura
     *
     * @return  self
     */ 
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get the value of capacidade
     */ 
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     *
     * @return  self
     */ 
    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of galpaoId
     */ 
    public function getGalpaoId()
    {
        return $this->galpaoId;
    }

    /**
     * Set the value of galpaoId
     *
     * @return  self
     */ 
    public function setGalpaoId($galpaoId)
    {
        $this->galpaoId = $galpaoId;

        return $this;
    }

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
}

?>