<?php
class Animal{
    private $id;
    private $rfid;
    private $id_primary;
    private $dia;
    private $id_baia;
    private $qa;
    private $qr;
    private $dete;
    private $receipe;
    private $ultimoDosador;
    private $score;
    private $t_feed;
    private $excluido;
    private $setor;
    private $tipo;


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
     * Get the value of rfid
     */ 
    public function getRfid()
    {
        return $this->rfid;
    }

    /**
     * Set the value of rfid
     *
     * @return  self
     */ 
    public function setRfid($rfid)
    {
        $this->rfid = $rfid;

        return $this;
    }

    /**
     * Get the value of id_primary
     */ 
    public function getId_primary()
    {
        return $this->id_primary;
    }

    /**
     * Set the value of id_primary
     *
     * @return  self
     */ 
    public function setId_primary($id_primary)
    {
        $this->id_primary = $id_primary;

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
     * Get the value of id_baia
     */ 
    public function getId_baia()
    {
        return $this->id_baia;
    }

    /**
     * Set the value of id_baia
     *
     * @return  self
     */ 
    public function setId_baia($id_baia)
    {
        $this->id_baia = $id_baia;

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
     * Get the value of qr
     */ 
    public function getQr()
    {
        return $this->qr;
    }

    /**
     * Set the value of qr
     *
     * @return  self
     */ 
    public function setQr($qr)
    {
        $this->qr = $qr;

        return $this;
    }

    /**
     * Get the value of dete
     */ 
    public function getDete()
    {
        return $this->dete;
    }

    /**
     * Set the value of dete
     *
     * @return  self
     */ 
    public function setDete($dete)
    {
        $this->dete = $dete;

        return $this;
    }

    /**
     * Get the value of receipe
     */ 
    public function getReceipe()
    {
        return $this->receipe;
    }

    /**
     * Set the value of receipe
     *
     * @return  self
     */ 
    public function setReceipe($receipe)
    {
        $this->receipe = $receipe;

        return $this;
    }

    /**
     * Get the value of ultimoDosador
     */ 
    public function getUltimoDosador()
    {
        return $this->ultimoDosador;
    }

    /**
     * Set the value of ultimoDosador
     *
     * @return  self
     */ 
    public function setUltimoDosador($ultimoDosador)
    {
        $this->ultimoDosador = $ultimoDosador;

        return $this;
    }

    /**
     * Get the value of score
     */ 
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @return  self
     */ 
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get the value of t_feed
     */ 
    public function getT_feed()
    {
        return $this->t_feed;
    }

    /**
     * Set the value of t_feed
     *
     * @return  self
     */ 
    public function setT_feed($t_feed)
    {
        $this->t_feed = $t_feed;

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
     * Get the value of setor
     */ 
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     *
     * @return  self
     */ 
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}
?>