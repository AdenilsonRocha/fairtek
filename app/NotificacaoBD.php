<?php 
class NotificacaoBD{
    private $id;
    private $tb_notificacoes_tipo_id;
    private $valor;
    private $lida;
    private $st_toast;
    private $created;
    private $excluido;
    private $visualizada;

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
     * Get the value of tb_notificacoes_tipo_id
     */ 
    public function getTb_notificacoes_tipo_id()
    {
        return $this->tb_notificacoes_tipo_id;
    }

    /**
     * Set the value of tb_notificacoes_tipo_id
     *
     * @return  self
     */ 
    public function setTb_notificacoes_tipo_id($tb_notificacoes_tipo_id)
    {
        $this->tb_notificacoes_tipo_id = $tb_notificacoes_tipo_id;

        return $this;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of lida
     */ 
    public function getLida()
    {
        return $this->lida;
    }

    /**
     * Set the value of lida
     *
     * @return  self
     */ 
    public function setLida($lida)
    {
        $this->lida = $lida;

        return $this;
    }

    /**
     * Get the value of st_toast
     */ 
    public function getSt_toast()
    {
        return $this->st_toast;
    }

    /**
     * Set the value of st_toast
     *
     * @return  self
     */ 
    public function setSt_toast($st_toast)
    {
        $this->st_toast = $st_toast;

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
     * Get the value of visualizada
     */ 
    public function getVisualizada()
    {
        return $this->visualizada;
    }

    /**
     * Set the value of visualizada
     *
     * @return  self
     */ 
    public function setVisualizada($visualizada)
    {
        $this->visualizada = $visualizada;

        return $this;
    }
}

?>