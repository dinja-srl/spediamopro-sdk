<?php

namespace Dinja\SpediamoProSDK\Response;

use Dinja\SpediamoProSDK\Api\DataDeclared;

class SpedizioneResponse extends BaseResponse
{

    /**
     * @var Spedizione
     */
    protected $spedizione;

    /**
     * @var bool
     */
    protected $can_pay;

    /**
     *
     * @var string
     */
    private $b64;

    /**
     *
     * @var string
     */
    private $type;

    /**
     *
     * @var string
     */
    private $filename;


    public function __construct($response)
    {
        echo "RESPONSE: " . json_encode($response);
        foreach ($response as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
                    case 'spedizione':
                        $colli = array();
                        if(count($value->colli) > 0) {
                            foreach($value->colli as $collivalue) {
                                $colliObj = new DataDeclared(
                                    $collivalue->pesoReale,
                                    $collivalue->altezza,
                                    $collivalue->profondita,
                                    $collivalue->larghezza,
                                    $collivalue->packagingType,
                                    isset($collivalue->filenameEtichetta)?$collivalue->filenameEtichetta:null,
                                    isset($collivalue->tracking)?$collivalue->tracking:null,
                                    isset($collivalue->segnacollo)?$collivalue->segnacollo:null
                                );
                                array_push($colli, $colliObj);
                            }
                        }
                        $spedizione = new Spedizione(
                            $value->corriere,
                            $value->tariffCode,
                            $value->tariffLabel,
                            $value->tariffImage,
                            isset($value->ivaEsclusa)?$value->ivaEsclusa:null,
                            $value->dataRitiroIT,
                            $value->dataConsegnaPrevistaIT,
                            $value->id,
                            $value->nazioneMittente,
                            $value->nazioneDestinatario,
                            $value->codice,
                            $value->numeroColli,
                            $value->capMittente,
                            $value->capDestinatario,
                            $value->tariffa,
                            $value->tariffaBase,
                            $value->supplementoCarburante,
                            $value->serviziAccessori,
                            $value->iva,
                            $value->violations,
                            isset($value->dataRitiro)?$value->dataRitiro:null,
                            $value->dataConsegnaPrevista,
                            $value->comuneMittente,
                            $value->comuneDestinatario,
                            $value->provinciaMittente,
                            $value->provinciaDestinatario,
                            $colli,
                            $value->senderAddressLine1,
                            isset($value->senderAddressLine2)?$value->senderAddressLine2:null,
                            isset($value->senderAddressLine3)?$value->senderAddressLine3:null,
                            $value->consigneeAddressLine1,
                            isset($value->consigneeAddressLine2)?$value->consigneeAddressLine2:null,
                            isset($value->consigneeAddressLine3)?$value->consigneeAddressLine3:null,
                            isset($value->labelFormat)?$value->labelFormat:null
                        );
                        $value = $spedizione;
                        break;
                    case 'error':
                        $value = new Result(
                            $value->code,
                            $value->message
                        );
                        break;
                    case 'message':
                        $value = new Message(
                            $value->type,
                            $value->title,
                            $value->body
                        );
                        break;
                }
                $this->{$key} = $value;
            } else {
                $this->extraProperties[$key] = $value;
            }
        }
    }

    /**
     * Get the value of spedizione
     *
     * @return  Spedizione
     */ 
    public function getSpedizione()
    {
        return $this->spedizione;
    }

    /**
     * Set the value of spedizione
     *
     * @param  Spedizione  $spedizione
     *
     * @return  self
     */ 
    public function setSpedizione(Spedizione $spedizione)
    {
        $this->spedizione = $spedizione;

        return $this;
    }

    /**
     * Get the value of can_pay
     *
     * @return  bool
     */ 
    public function getCan_pay()
    {
        return $this->can_pay;
    }

    /**
     * Set the value of can_pay
     *
     * @param  bool  $can_pay
     *
     * @return  self
     */ 
    public function setCan_pay(bool $can_pay)
    {
        $this->can_pay = $can_pay;

        return $this;
    }

    /**
     * Get the value of b64
     *
     * @return  string
     */ 
    public function getB64()
    {
        return $this->b64;
    }

    /**
     * Set the value of b64
     *
     * @param  string  $b64
     *
     * @return  self
     */ 
    public function setB64(string $b64)
    {
        $this->b64 = $b64;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  string  $type
     *
     * @return  self
     */ 
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of filename
     *
     * @return  string
     */ 
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set the value of filename
     *
     * @param  string  $filename
     *
     * @return  self
     */ 
    public function setFilename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }
}
