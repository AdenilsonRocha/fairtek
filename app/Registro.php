<?php
class Registro{
    private $id;
    private $tb_baias_id;
    private $tb_dosadores_id;
    private $tb_animais_id;
    private $qa;
    private $qa_data;
    private $qr_dieta;
    private $codigo_dieta;
    private $dia_animial;
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
     * Get the value of tb_baias_id
     */ 
    public function getTb_baias_id()
    {
        return $this->tb_baias_id;
    }

    /**
     * Set the value of tb_baias_id
     *
     * @return  self
     */ 
    public function setTb_baias_id($tb_baias_id)
    {
        $this->tb_baias_id = $tb_baias_id;

        return $this;
    }

    /**
     * Get the value of tb_dosadores_id
     */ 
    public function getTb_dosadores_id()
    {
        return $this->tb_dosadores_id;
    }

    /**
     * Set the value of tb_dosadores_id
     *
     * @return  self
     */ 
    public function setTb_dosadores_id($tb_dosadores_id)
    {
        $this->tb_dosadores_id = $tb_dosadores_id;

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
     * Get the value of qa_data
     */ 
    public function getQa_data()
    {
        return $this->qa_data;
    }

    /**
     * Set the value of qa_data
     *
     * @return  self
     */ 
    public function setQa_data($qa_data)
    {
        $this->qa_data = $qa_data;

        return $this;
    }

    /**
     * Get the value of qr_dieta
     */ 
    public function getQr_dieta()
    {
        return $this->qr_dieta;
    }

    /**
     * Set the value of qr_dieta
     *
     * @return  self
     */ 
    public function setQr_dieta($qr_dieta)
    {
        $this->qr_dieta = $qr_dieta;

        return $this;
    }

    /**
     * Get the value of codigo_dieta
     */ 
    public function getCodigo_dieta()
    {
        return $this->codigo_dieta;
    }

    /**
     * Set the value of codigo_dieta
     *
     * @return  self
     */ 
    public function setCodigo_dieta($codigo_dieta)
    {
        $this->codigo_dieta = $codigo_dieta;

        return $this;
    }

    /**
     * Get the value of dia_animial
     */ 
    public function getDia_animial()
    {
        return $this->dia_animial;
    }

    /**
     * Set the value of dia_animial
     *
     * @return  self
     */ 
    public function setDia_animial($dia_animial)
    {
        $this->dia_animial = $dia_animial;

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