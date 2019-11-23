<?php 
class Dieta{
    private $id;
    private $id_rede;
    private $nome;
    private $updated;
    private $created;
    private $excluido;
    private $ag_updage;
    private $qtd_dias;
    private $ativo;
    private $tipo_dieta;
    private $dieta_calibracao;


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
     * Get the value of ag_updage
     */ 
    public function getAg_updage()
    {
        return $this->ag_updage;
    }

    /**
     * Set the value of ag_updage
     *
     * @return  self
     */ 
    public function setAg_updage($ag_updage)
    {
        $this->ag_updage = $ag_updage;

        return $this;
    }

    /**
     * Get the value of qtd_dias
     */ 
    public function getQtd_dias()
    {
        return $this->qtd_dias;
    }

    /**
     * Set the value of qtd_dias
     *
     * @return  self
     */ 
    public function setQtd_dias($qtd_dias)
    {
        $this->qtd_dias = $qtd_dias;

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
     * Get the value of tipo_dieta
     */ 
    public function getTipo_dieta()
    {
        return $this->tipo_dieta;
    }

    /**
     * Set the value of tipo_dieta
     *
     * @return  self
     */ 
    public function setTipo_dieta($tipo_dieta)
    {
        $this->tipo_dieta = $tipo_dieta;

        return $this;
    }

    /**
     * Get the value of dieta_calibracao
     */ 
    public function getDieta_calibracao()
    {
        return $this->dieta_calibracao;
    }

    /**
     * Set the value of dieta_calibracao
     *
     * @return  self
     */ 
    public function setDieta_calibracao($dieta_calibracao)
    {
        $this->dieta_calibracao = $dieta_calibracao;

        return $this;
    }
}
?>