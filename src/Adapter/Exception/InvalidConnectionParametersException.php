<?php
namespace Sql\Adapter\Exception;
class InvalidConnectionParametersException extends RuntimeException implements ExceptionInterface {
    /**
     *
     * @var int
     */
    protected $parameters;
    
    /**
     *
     * @param string $message            
     * @param int $parameters            
     */
    public function __construct($message, $parameters) {
        parent::__construct($message);
        $this->parameters = $parameters;
    }
}
