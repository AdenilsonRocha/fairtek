<?php 
class SetorTipo{
    private $id;
    private $nome;
    private $update;
    private $created;
    private $exluido;

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
     * Get the value of update
     */ 
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Set the value of update
     *
     * @return  self
     */ 
    public function setUpdate($update)
    {
        $this->update = $update;

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
}

?>