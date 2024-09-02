<?php

namespace Dinja\SpediamoProSDK\Response;

class BaseResponse
{

    /**
     * @var Result
     */
    protected $error;

    /**
     * @var Message
     */
    protected $message;

    /**
     * @var array
     */
    protected $extraProperties;

    public function __construct($response)
    {
        echo json_encode($response);
        foreach ($response as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
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

    public function hasError()
    {
        $result = false;
        if(!is_null($this->error))
            $result = $this->error->getErrorCode() >= 1;
        return $result;
    }

    /**
     * @return array
     */
    public function getExtraProperties()
    {
        return $this->extraProperties;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return BaseResponse
     */
    public function addExtraProperties($name, $value)
    {
        $this->extraProperties[$name] = $value;
        return $this;
    }

    /**
     * Get the value of error
     *
     * @return  Result
     */ 
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set the value of error
     *
     * @param  Result  $error
     *
     * @return  self
     */ 
    public function setError(Result $error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get the value of message
     *
     * @return  Message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @param  Message  $message
     *
     * @return  self
     */ 
    public function setMessage(Message $message)
    {
        $this->message = $message;

        return $this;
    }
}
