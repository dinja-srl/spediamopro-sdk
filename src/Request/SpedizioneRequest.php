<?php

namespace Dinja\SpediamoProSDK\Request;

use Dinja\SpediamoProSDK\Response\SpedizioneResponse;

class SpedizioneRequest extends BaseRequest
{
    protected $method = 'POST';
    protected $apiPath = '/api/v1/spedizione';

    protected $mandatoryFields = [
        'nominativoMittente',
        'senderAddressLine1',
        'telefonoMittente',
        'emailMittente',
        'nominativoDestinatario',
        'consigneeAddressLine1',
        'telefonoDestinatario',
        'emailDestinatario',
        'colli'
    ];

    /** @var array */
    private $colli;

    /**
     * @var string
     */
    private $nominativoMittente;

    /**
     * @var string
     */
    private $pressoMittente;

    /**
     * @var string
     */
    private $senderAddressLine1;

    /**
     * @var string
     */
    private $senderAddressLine2;

    /**
     * @var string
     */
    private $senderAddressLine3;

    /**
     * @var string
     */
    private $telefonoMittente;

    /**
     * @var string
     */
    private $emailMittente;

    /**
     * @var string
     */
    private $nominativoDestinatario;

    /**
     * @var string
     */
    private $pressoDestinatario;

    /**
     * @var string
     */
    private $consigneeAddressLine1;

    /**
     * @var string
     */
    private $consigneeAddressLine2;

    /**
     * @var string
     */
    private $consigneeAddressLine3;

    /**
     * @var string
     */
    private $telefonoDestinatario;

    /**
     * @var string
     */
    private $emailDestinatario;

    /**
     * @var string
     */
    private $noteDestinatario;

    /**
     * @var float
     */
    private $importoContrassegno;

    /**
     * @var float
     */
    private $importoAssicurazione;

    /**
     * @var string
     */
    private $consigneePickupPointId;

    /**
     * @var int
     */
    private $labelFormat;

    public function call($debug = FALSE, $id = null)
    {
        return new SpedizioneResponse(parent::call($debug, $id));
    }

    public function toArray()
    {
        $declaredArr = null;
        if(!is_null($this->colli)) {
            $declaredArr = array();
            foreach($this->colli as $declaredObj) {
                array_push($declaredArr, $declaredObj->toArray());
            }
        }

        return array_filter([
            array_filter([
                'nominativoMittente' => $this->nominativoMittente,
                'pressoMittente' => $this->pressoMittente,
                'senderAddressLine1' => $this->senderAddressLine1,
                'senderAddressLine2' => $this->senderAddressLine2,
                'senderAddressLine3' => $this->senderAddressLine3,
                'telefonoMittente' => $this->telefonoMittente,
                'emailMittente' => $this->emailMittente,
                'nominativoDestinatario' => $this->nominativoDestinatario,
                'pressoDestinatario' => $this->pressoDestinatario,
                'consigneeAddressLine1' => $this->consigneeAddressLine1,
                'consigneeAddressLine2' => $this->consigneeAddressLine2,
                'consigneeAddressLine3' => $this->consigneeAddressLine3,
                'telefonoDestinatario' => $this->telefonoDestinatario,
                'emailDestinatario' => $this->emailDestinatario,
                'noteDestinatario' => $this->noteDestinatario,
                'importoContrassegno' => $this->importoContrassegno,
                'importoAssicurazione' => $this->importoAssicurazione,
                'consigneePickupPointId' => $this->consigneePickupPointId,
                'labelFormat' => $this->labelFormat,
                'colli' => $declaredArr], function ($v) { return !is_null($v); })
        ], function ($v) {
            return !is_null($v);
        });
    }

    /**
     * Get the value of colli
     */
    public function getColli()
    {
        return $this->colli;
    }

    /**
     * Set the value of colli
     *
     * @return  self
     */
    public function setColli($colli)
    {
        $this->colli = $colli;

        return $this;
    }


    /**
     * Get the value of nominativoMittente
     *
     * @return  string
     */ 
    public function getNominativoMittente()
    {
        return $this->nominativoMittente;
    }

    /**
     * Set the value of nominativoMittente
     *
     * @param  string  $nominativoMittente
     *
     * @return  self
     */ 
    public function setNominativoMittente(string $nominativoMittente)
    {
        $this->nominativoMittente = $nominativoMittente;

        return $this;
    }

    /**
     * Get the value of pressoMittente
     *
     * @return  string
     */ 
    public function getPressoMittente()
    {
        return $this->pressoMittente;
    }

    /**
     * Set the value of pressoMittente
     *
     * @param  string  $pressoMittente
     *
     * @return  self
     */ 
    public function setPressoMittente(string $pressoMittente)
    {
        $this->pressoMittente = $pressoMittente;

        return $this;
    }

    /**
     * Get the value of senderAddressLine1
     *
     * @return  string
     */ 
    public function getSenderAddressLine1()
    {
        return $this->senderAddressLine1;
    }

    /**
     * Set the value of senderAddressLine1
     *
     * @param  string  $senderAddressLine1
     *
     * @return  self
     */ 
    public function setSenderAddressLine1(string $senderAddressLine1)
    {
        $this->senderAddressLine1 = $senderAddressLine1;

        return $this;
    }

    /**
     * Get the value of senderAddressLine2
     *
     * @return  string
     */ 
    public function getSenderAddressLine2()
    {
        return $this->senderAddressLine2;
    }

    /**
     * Set the value of senderAddressLine2
     *
     * @param  string  $senderAddressLine2
     *
     * @return  self
     */ 
    public function setSenderAddressLine2(string $senderAddressLine2)
    {
        $this->senderAddressLine2 = $senderAddressLine2;

        return $this;
    }

    /**
     * Get the value of senderAddressLine3
     *
     * @return  string
     */ 
    public function getSenderAddressLine3()
    {
        return $this->senderAddressLine3;
    }

    /**
     * Set the value of senderAddressLine3
     *
     * @param  string  $senderAddressLine3
     *
     * @return  self
     */ 
    public function setSenderAddressLine3(string $senderAddressLine3)
    {
        $this->senderAddressLine3 = $senderAddressLine3;

        return $this;
    }

    /**
     * Get the value of telefonoMittente
     *
     * @return  string
     */ 
    public function getTelefonoMittente()
    {
        return $this->telefonoMittente;
    }

    /**
     * Set the value of telefonoMittente
     *
     * @param  string  $telefonoMittente
     *
     * @return  self
     */ 
    public function setTelefonoMittente(string $telefonoMittente)
    {
        $this->telefonoMittente = $telefonoMittente;

        return $this;
    }

    /**
     * Get the value of emailMittente
     *
     * @return  string
     */ 
    public function getEmailMittente()
    {
        return $this->emailMittente;
    }

    /**
     * Set the value of emailMittente
     *
     * @param  string  $emailMittente
     *
     * @return  self
     */ 
    public function setEmailMittente(string $emailMittente)
    {
        $this->emailMittente = $emailMittente;

        return $this;
    }

    /**
     * Get the value of nominativoDestinatario
     *
     * @return  string
     */ 
    public function getNominativoDestinatario()
    {
        return $this->nominativoDestinatario;
    }

    /**
     * Set the value of nominativoDestinatario
     *
     * @param  string  $nominativoDestinatario
     *
     * @return  self
     */ 
    public function setNominativoDestinatario(string $nominativoDestinatario)
    {
        $this->nominativoDestinatario = $nominativoDestinatario;

        return $this;
    }

    /**
     * Get the value of pressoDestinatario
     *
     * @return  string
     */ 
    public function getPressoDestinatario()
    {
        return $this->pressoDestinatario;
    }

    /**
     * Set the value of pressoDestinatario
     *
     * @param  string  $pressoDestinatario
     *
     * @return  self
     */ 
    public function setPressoDestinatario(string $pressoDestinatario)
    {
        $this->pressoDestinatario = $pressoDestinatario;

        return $this;
    }

    /**
     * Get the value of consigneeAddressLine1
     *
     * @return  string
     */ 
    public function getConsigneeAddressLine1()
    {
        return $this->consigneeAddressLine1;
    }

    /**
     * Set the value of consigneeAddressLine1
     *
     * @param  string  $consigneeAddressLine1
     *
     * @return  self
     */ 
    public function setConsigneeAddressLine1(string $consigneeAddressLine1)
    {
        $this->consigneeAddressLine1 = $consigneeAddressLine1;

        return $this;
    }

    /**
     * Get the value of consigneeAddressLine2
     *
     * @return  string
     */ 
    public function getConsigneeAddressLine2()
    {
        return $this->consigneeAddressLine2;
    }

    /**
     * Set the value of consigneeAddressLine2
     *
     * @param  string  $consigneeAddressLine2
     *
     * @return  self
     */ 
    public function setConsigneeAddressLine2(string $consigneeAddressLine2)
    {
        $this->consigneeAddressLine2 = $consigneeAddressLine2;

        return $this;
    }

    /**
     * Get the value of consigneeAddressLine3
     *
     * @return  string
     */ 
    public function getConsigneeAddressLine3()
    {
        return $this->consigneeAddressLine3;
    }

    /**
     * Set the value of consigneeAddressLine3
     *
     * @param  string  $consigneeAddressLine3
     *
     * @return  self
     */ 
    public function setConsigneeAddressLine3(string $consigneeAddressLine3)
    {
        $this->consigneeAddressLine3 = $consigneeAddressLine3;

        return $this;
    }

    /**
     * Get the value of telefonoDestinatario
     *
     * @return  string
     */ 
    public function getTelefonoDestinatario()
    {
        return $this->telefonoDestinatario;
    }

    /**
     * Set the value of telefonoDestinatario
     *
     * @param  string  $telefonoDestinatario
     *
     * @return  self
     */ 
    public function setTelefonoDestinatario(string $telefonoDestinatario)
    {
        $this->telefonoDestinatario = $telefonoDestinatario;

        return $this;
    }

    /**
     * Get the value of emailDestinatario
     *
     * @return  string
     */ 
    public function getEmailDestinatario()
    {
        return $this->emailDestinatario;
    }

    /**
     * Set the value of emailDestinatario
     *
     * @param  string  $emailDestinatario
     *
     * @return  self
     */ 
    public function setEmailDestinatario(string $emailDestinatario)
    {
        $this->emailDestinatario = $emailDestinatario;

        return $this;
    }

    /**
     * Get the value of noteDestinatario
     *
     * @return  string
     */ 
    public function getNoteDestinatario()
    {
        return $this->noteDestinatario;
    }

    /**
     * Set the value of noteDestinatario
     *
     * @param  string  $noteDestinatario
     *
     * @return  self
     */ 
    public function setNoteDestinatario(string $noteDestinatario)
    {
        $this->noteDestinatario = $noteDestinatario;

        return $this;
    }

    /**
     * Get the value of importoContrassegno
     *
     * @return  float
     */ 
    public function getImportoContrassegno()
    {
        return $this->importoContrassegno;
    }

    /**
     * Set the value of importoContrassegno
     *
     * @param  float  $importoContrassegno
     *
     * @return  self
     */ 
    public function setImportoContrassegno(float $importoContrassegno)
    {
        $this->importoContrassegno = $importoContrassegno;

        return $this;
    }

    /**
     * Get the value of importoAssicurazione
     *
     * @return  float
     */ 
    public function getImportoAssicurazione()
    {
        return $this->importoAssicurazione;
    }

    /**
     * Set the value of importoAssicurazione
     *
     * @param  float  $importoAssicurazione
     *
     * @return  self
     */ 
    public function setImportoAssicurazione(float $importoAssicurazione)
    {
        $this->importoAssicurazione = $importoAssicurazione;

        return $this;
    }

    /**
     * Get the value of consigneePickupPointId
     *
     * @return  string
     */ 
    public function getConsigneePickupPointId()
    {
        return $this->consigneePickupPointId;
    }

    /**
     * Set the value of consigneePickupPointId
     *
     * @param  string  $consigneePickupPointId
     *
     * @return  self
     */ 
    public function setConsigneePickupPointId(string $consigneePickupPointId)
    {
        $this->consigneePickupPointId = $consigneePickupPointId;

        return $this;
    }

    /**
     * Get the value of labelFormat
     *
     * @return  int
     */ 
    public function getLabelFormat()
    {
        return $this->labelFormat;
    }

    /**
     * Set the value of labelFormat
     *
     * @param  int  $labelFormat
     *
     * @return  self
     */ 
    public function setLabelFormat(int $labelFormat)
    {
        $this->labelFormat = $labelFormat;

        return $this;
    }
}
