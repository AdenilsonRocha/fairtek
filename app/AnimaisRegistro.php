<?php 
class AnimaisRegistro{
    private $id;
    private $tb_animais_id;
    private $dia;
    private $qa;
    private $qt;
    private $dieta_codigo;
    private $created;
    private $updated;
    private $dosador_data;
    private $ult_dosador;
    private $ciclo_animal;
    

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
     * Get the value of tb_animais_id
     */ 
    public function getTb_animais_id()
    {
        return $this->tb_animais_id;
    }

    /**
     * Set the value of tb_animais_id
     *
     * @return  self
     */ 
    public function setTb_animais_id($tb_animais_id)
    {
        $this->tb_animais_id = $tb_animais_id;

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

    /**
     * Get the value of qa
     */ 
    public function getQa()
    {
        return $this->qa;
    }

    /**
     * Set the value of qa
     *
     * @return  self
     */ 
    public function setQa($qa)
    {
        $this->qa = $qa;

        return $this;
    }

    /**
     * Get the value of qt
     */ 
    public function getQt()
    {
        return $this->qt;
    }

    /**
     * Set the value of qt
     *
     * @return  self
     */ 
    public function setQt($qt)
    {
        $this->qt = $qt;

        return $this;
    }

    /**
     * Get the value of dieta_codigo
     */ 
    public function getDieta_codigo()
    {
        return $this->dieta_codigo;
    }

    /**
     * Set the value of dieta_codigo
     *
     * @return  self
     */ 
    public function setDieta_codigo($dieta_codigo)
    {
        $this->dieta_codigo = $dieta_codigo;

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
     * Get the value of dosador_data
     */ 
    public function getDosador_data()
    {
        return $this->dosador_data;
    }

    /**
     * Set the value of dosador_data
     *
     * @return  self
     */ 
    public function setDosador_data($dosador_data)
    {
        $this->dosador_data = $dosador_data;

        return $this;
    }

    /**
     * Get the value of ult_dosador
     */ 
    public function getUlt_dosador()
    {
        return $this->ult_dosador;
    }

    /**
     * Set the value of ult_dosador
     *
     * @return  self
     */ 
    public function setUlt_dosador($ult_dosador)
    {
        $this->ult_dosador = $ult_dosador;

        return $this;
    }

    /**
     * Get the value of ciclo_animal
     */ 
    public function getCiclo_animal()
    {
        return $this->ciclo_animal;
    }

    /**
     * Set the value of ciclo_animal
     *
     * @return  self
     */ 
    public function setCiclo_animal($ciclo_animal)
    {
        $this->ciclo_animal = $ciclo_animal;

        return $this;
    }
}
?>