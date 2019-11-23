<?php 
class AlimentacaoDia{
    private $id;
    private $hora_parcial;
    private $hora_completa;
    private $dia;


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
     * Get the value of hora_parcial
     */ 
    public function getHora_parcial()
    {
        return $this->hora_parcial;
    }

    /**
     * Set the value of hora_parcial
     *
     * @return  self
     */ 
    public function setHora_parcial($hora_parcial)
    {
        $this->hora_parcial = $hora_parcial;

        return $this;
    }

    /**
     * Get the value of hora_completa
     */ 
    public function getHora_completa()
    {
        return $this->hora_completa;
    }

    /**
     * Set the value of hora_completa
     *
     * @return  self
     */ 
    public function setHora_completa($hora_completa)
    {
        $this->hora_completa = $hora_completa;

        return $this;
    }

    /**
     * Get the value of dia
     */ 
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set the value of dia
     *
     * @return  self
     */ 
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }
}
?>