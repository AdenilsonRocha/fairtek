<?php 
class Escore{
    private $id;
    private $nome;
    private $peso;
    private $media;
    private $updated;
    private $created;
    private $excluido;
    private $tb_setor_tipo_id;

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
     * Get the value of media
     */ 
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set the value of media
     *
     * @return  self
     */ 
    public function setMedia($media)
    {
        $this->media = $media;

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
}
?>