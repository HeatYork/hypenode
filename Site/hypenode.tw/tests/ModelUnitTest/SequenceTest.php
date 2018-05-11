<?php

namespace Tests\Unit;

use Tests\TestCase;

class SequenceTest extends TestCase
{
    const trueCategory  = 99999;
    const falseCategory = 999999;
    public $sequence;
    public $error_sequence;

    public function __construct()
    {
        parent::__construct();
        $this->sequence = \Core\Sequence::generate( self::trueCategory );
        $this->error_sequence = \Core\Sequence::generate( self::falseCategory );
    }

    public function testSequenceIsString()
    {
        $this->assertTrue( \is_string( $this->sequence ),'The squenece is not a string' );
    }

    public function testSequenceLength30()
    {
        $this->assertTrue( \strlen( $this->sequence ) === 30, 'The squenece\'s length is not 30str' );
    }

    public function testParseReturnIsArray()
    {
        $successArray = \Core\Sequence::parse( $this->error_sequence );
        $failArray = \Core\Sequence::parse( $this->sequence );
        $this->assertTrue( \is_array( $successArray ) && \is_array( $failArray ) ,'The function(Parse) return is not an array' );
    }

    public function testValidCategoryIsBool()
    {
        $successBool = \Core\Sequence::validCategory( $this->sequence , self::trueCategory);
        $failBool = \Core\Sequence::validCategory( $this->error_sequence , self::falseCategory);
        $this->assertTrue( \is_bool( $successBool ) && \is_bool( $failBool ), 'The function(ValidCategory) return is not a bool' );
    }
}
