<?php 
class Calendario{
    private $id;
    private $dt_inicio;
    private $dt_fim;
    private $created_at;
    

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
     * Get the value of dt_inicio
     */ 
    public function getDt_inicio()
    {
        return $this->dt_inicio;
    }

    /**
     * Set the value of dt_inicio
     *
     * @return  self
     */ 
    public function setDt_inicio($dt_inicio)
    {
        $this->dt_inicio = $dt_inicio;

        return $this;
    }

    /**
     * Get the value of dt_fim
     */ 
    public function getDt_fim()
    {
        return $this->dt_fim;
    }

    /**
     * Set the value of dt_fim
     *
     * @return  self
     */ 
    public function setDt_fim($dt_fim)
    {
        $this->dt_fim = $dt_fim;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}
?>