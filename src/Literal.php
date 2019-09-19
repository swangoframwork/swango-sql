<?php
namespace Sql;
class Literal implements ExpressionInterface {
    /**
     *
     * @var string
     */
    protected $literal = '';
    
    /**
     *
     * @param
     *            $literal
     */
    public function __construct($literal = '') {
        $this->literal = $literal;
    }
    
    /**
     *
     * @param string $literal            
     * @return self Provides a fluent interface
     */
    public function setLiteral($literal) {
        $this->literal = $literal;
        return $this;
    }
    
    /**
     *
     * @return string
     */
    public function getLiteral() {
        return $this->literal;
    }
    
    /**
     *
     * @return array
     */
    public function getExpressionData(): array {
        return [
            [
                str_replace('%', '%%', $this->literal),
                [],
                []
            ]
        ];
    }
}
