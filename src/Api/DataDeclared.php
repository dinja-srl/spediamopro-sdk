<?php

namespace Dinja\SpediamoProSDK\Api;

class DataDeclared
{
    /** @var string */
    private $weight;

    /** @var string */
    private $height;

    /** @var string */
    private $length;

    /** @var string */
    private $width;

    /** @var string */
    private $packagingType;

    /** @var string */
    private $filenameEtichetta;

    /** @var string */
    private $tracking;

    /** @var string */
    private $segnacollo;

    public function __construct($weight, $height, $length, $width, $packagingType, $filenameEtichetta, $tracking, $segnacollo)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->length = $length;
        $this->width = $width;
        $this->packagingType = $packagingType;
        $this->filenameEtichetta = $filenameEtichetta;
        $this->tracking = $tracking;
        $this->segnacollo = $segnacollo;
    }

    public function toArray()
    {
        return [
            'pesoReale' => $this->weight,
            'altezza' => $this->height,
            'profondita' => $this->length,
            'larghezza' => $this->width,
        ];
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of length
     */ 
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @return  self
     */ 
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of packagingType
     */ 
    public function getPackagingType()
    {
        return $this->packagingType;
    }

    /**
     * Set the value of packagingType
     *
     * @return  self
     */ 
    public function setPackagingType($packagingType)
    {
        $this->packagingType = $packagingType;

        return $this;
    }

    /**
     * Get the value of filenameEtichetta
     */ 
    public function getFilenameEtichetta()
    {
        return $this->filenameEtichetta;
    }

    /**
     * Set the value of filenameEtichetta
     *
     * @return  self
     */ 
    public function setFilenameEtichetta($filenameEtichetta)
    {
        $this->filenameEtichetta = $filenameEtichetta;

        return $this;
    }

    /**
     * Get the value of tracking
     */ 
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * Set the value of tracking
     *
     * @return  self
     */ 
    public function setTracking($tracking)
    {
        $this->tracking = $tracking;

        return $this;
    }

    /**
     * Get the value of segnacollo
     */ 
    public function getSegnacollo()
    {
        return $this->segnacollo;
    }

    /**
     * Set the value of segnacollo
     *
     * @return  self
     */ 
    public function setSegnacollo($segnacollo)
    {
        $this->segnacollo = $segnacollo;

        return $this;
    }
}
