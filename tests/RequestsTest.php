<?php

namespace Tests;

use Dinja\SpediamoProSDK\Api\DataDeclared;
use Dinja\SpediamoProSDK\Request\SimulazioneRequest;
use Dinja\SpediamoProSDK\Request\SpedizioneRequest;
use Dinja\SpediamoProSDK\Response\SimulazioneResponse;
use Dinja\SpediamoProSDK\Response\SpedizioneResponse;

use Dinja\SpediamoProSDK\Exception\RequestException;

use PHPUnit\Framework\TestCase;

class RequestsTest extends TestCase
{
    const spediamopro_api_authcode = "171750720530B8DB90912230E2DDB3BCB63DEC50B2";
    const debug = false;

    public function testHasCorrectStructure()
    {
        $request = $this->buildRequest();

        $body = $request->createRequestBody();

        $this->assertArrayHasKey('colli', $body);
    }

    private function buildRequest()
    {
        $declaredArr = array();
        $dataDeclared = new DataDeclared(1, 1, 1, 1, 0, null, null, null);
        array_push($declaredArr, $dataDeclared);

		$request = new SimulazioneRequest(self::spediamopro_api_authcode, self::debug);
		$request->setColli($declaredArr)
			->setNazioneMittente("IT")
			->setNazioneDestinatario("IT")
			->setCapMittente("70044")
			->setCapDestinatario("70044")
			->setCittaMittente("Polignano a Mare")
			->setCittaDestinatario("Polignano a Mare")
			->setProvinciaMittente("BA")
			->setProvinciaDestinatario("BA");

        return $request;
    }

    public function testSimulazioneResponseSuccessful()
    {
        $request = $this->buildRequest();

        $response = $request->call(self::debug);

        $this->assertInstanceOf('Dinja\SpediamoProSDK\Response\SimulazioneResponse', $response);
        $this->assertFalse($response->hasError());
        $this->assertTrue(count($response->getSpedizioni()) > 0);

        return $response;
    }

    /**
     * @depends testSimulazioneResponseSuccessful
     */
    public function testSpedizioneRequestPostSuccessful(SimulazioneResponse $response)
    {
        $request = new SpedizioneRequest(self::spediamopro_api_authcode, self::debug);
        $idSpedizione = -1;
        foreach ($response->getSpedizioni() as $spedizione) {
            if($spedizione->getTariffCode() == "BRTEXP") {
                $idSpedizione = $spedizione->getId();
            }
        }

        $response = $request->call(self::debug, $idSpedizione);

        $this->assertFalse($response->hasError());

        return $response;
    }

    /**
     * @depends testSpedizioneRequestPostSuccessful
     */
    public function testSpedizioneRequestPutSuccessful(SpedizioneResponse $response)
    {
        $request = new SpedizioneRequest(self::spediamopro_api_authcode, self::debug);
        $request->setMethod("PUT");

        $declaredArr = array();
        $dataDeclared = new DataDeclared(1, 1, 1, 1, 0, null, null, null);
        array_push($declaredArr, $dataDeclared);

        $request->setColli($declaredArr)
            ->setNominativoMittente("Dinja Srl")
            ->setSenderAddressLine1("Via Leonardo da Vinci 22/24")
            ->setTelefonoMittente("0803009954")
            ->setEmailMittente("info@sellengine.it")
            ->setNominativoDestinatario("Mario Rossi")
            ->setPressoDestinatario("Dinja Srl")
            ->setConsigneeAddressLine1("Via Roma 1")
            ->setTelefonoDestinatario("0803009954")
            ->setNoteDestinatario("TEST")
            ->setEmailDestinatario("info@sellengine.it");

        $response = $request->call(self::debug, $response->getSpedizione()->getId());

        $this->assertFalse($response->hasError());

        return $response;
    }

    /**
     * @depends testSpedizioneRequestPutSuccessful
     */
    public function testSpedizioneRequestCanPaySuccessful(SpedizioneResponse $response)
    {
        $idSpedizione = $response->getSpedizione()->getId();
        $request = new SpedizioneRequest(self::spediamopro_api_authcode, self::debug);
        $request->setApiPath("/api/v1/spedizione/" . $idSpedizione . "/can_pay");

        $response = $request->call(self::debug);

        $this->assertFalse($response->hasError());

        return $idSpedizione;
    }

    /**
     * @depends testSpedizioneRequestCanPaySuccessful
     */
    public function testSpedizioneRequestGetSuccessful($idSpedizione)
    {
        $request = new SpedizioneRequest(self::spediamopro_api_authcode, self::debug);
        $request->setMethod("GET");
        $request->setApiPath("/api/v1/spedizione/" . $idSpedizione);

        sleep(1);

        $response = $request->call(self::debug);

        $this->assertFalse($response->hasError());
        $this->assertTrue(count($response->getSpedizione()->getColli()) > 0);

        return $response;
    }

    /**
     * @depends testSpedizioneRequestGetSuccessful
     */
    public function testSpedizioneRequestGetLdvSuccessful(SpedizioneResponse $response)
    {
        $request = new SpedizioneRequest(self::spediamopro_api_authcode, self::debug);
        $request->setMethod("GET");
        $request->setApiPath("/api/v1/spedizione/" . $response->getSpedizione()->getId() . "/ldv");

        $response = $request->call(self::debug);

        $this->assertFalse($response->hasError());
    }
}
