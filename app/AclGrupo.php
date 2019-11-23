<?php 
class AclGrupo{
    private $id;
    private $nome;
    private $descricao;
    private $stauts;
    private $crated;
    private $updated;
    private $excluido;

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
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

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
}

?>