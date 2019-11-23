<?php 
class DietaHistorico{
    private $id;
    private $tb_dietas_id;
    private $motivo;
    private $created;

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
     * Get the value of motivo
     */ 
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set the value of motivo
     *
     * @return  self
     */ 
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

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
}
?>