<?php

namespace Dinja\SpediamoProSDK\Request;

use Dinja\SpediamoProSDK\Exception\InvalidJsonException;
use Dinja\SpediamoProSDK\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class BaseRequest implements RequestInterface
{
    protected $accessToken;
    protected $method = 'POST';
    protected $endpointTest = 'https://core.spediamopro.it';
    protected $endpointProd = 'https://core.spediamopro.com';
    protected $apiPath = '';
    protected $apiProperties = [];
    protected $dataWrapper = 'data';
    protected $mandatoryFields = [];

    public function __construct($authCode, $debug = FALSE, $accessToken = null)
    {
        if(is_null($accessToken)) {
            $client = new Client([
                'timeout' => 30.0
            ]);

            $request = array();
            $request['authCode'] = $authCode;

            $response = $client->request($this->method,  ($debug ? $this->endpointTest : $this->endpointProd) . "/api/v1/auth/login", [
                'json' =>  $request
            ]);

            $body = $response->getBody();
            $body = json_decode($response->getBody());

            $this->accessToken = $body->token;
        } else {
            $this->accessToken = $accessToken;
        }
    }

    /**
     * Performs http call to SpediamoPro API
     *
     * @throws GuzzleException
     * @throws InvalidJsonException|RequestException
     */
    public function call($debug = FALSE, $id = null)
    {
        $client = new Client([
            'timeout' => 30.0
        ]);

        $response = $client->request($this->method, ($debug ? $this->endpointTest : $this->endpointProd) . $this->apiPath . ($id != null ? "/" . $id : ""), [
            'headers'        => ['Authorization' => 'Bearer ' . $this->accessToken],
            'json' => $this->createRequestBody()
        ]);

        $response = json_decode($response->getBody());

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidJsonException(json_last_error_msg(), json_last_error());
        }

        return $response;
    }

    public function toArray()
    {
        return [array_filter([
        ], function ($v) {
            return !is_null($v);
        })];
    }

    public function createRequestBody()
    {
//        PHP 5.6+ only
//        $emptyMandatory = array_filter($this->toArray(), function ($v, $k) {
//            return in_array($k, $this->mandatoryFields) && (is_null($v) || $v === "");
//        }, 1);
        $arr = $this->toArray();
        $emptyMandatory = [];
        foreach ($arr[0] as $k => $v) {
            if (in_array($k, $this->mandatoryFields) && (is_null($v) || $v === "")) {
                $emptyMandatory[$k] = $v;
            }
        }
        if (count($emptyMandatory) > 0) {
            throw new RequestException(sprintf('Fields %s are mandatory', implode(', ', array_keys($emptyMandatory))));
        }

        return $arr[0];
    }


    /**
     * Get the value of accessToken
     */ 
    public function getAccessToken()
    {
        return $this->accessToken;
    }


    /**
     * Set the value of method
     *
     * @return  self
     */ 
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Set the value of apiPath
     *
     * @return  self
     */ 
    public function setApiPath($apiPath)
    {
        $this->apiPath = $apiPath;

        return $this;
    }
}
