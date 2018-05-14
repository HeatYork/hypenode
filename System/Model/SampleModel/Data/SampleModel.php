<?php
namespace Model\SampleModel\Data;


class SampleModel extends \Model\Base\Singleton
{
    private static $runtimeData;
    private static $redis;
    private static $redisKey;
    private static $id;

    protected function _init( $id ) : self
    {
        static::$id = $id;

        // form runtime
        if( isset( static::$runtimeData[ static::$id ] ) )
        {
            return $this;
        }

        // form redis
        static::$redis ='redis';
        static::$redisKey = '取得redisKey';
        if( $this->_checkRedisData() )
        {
            static::$runtimeData[ static::$id ] = static::_getRedisData();
            return $this;
        }

        // form db
        $dbData = static::_getDbData();
        if( ! empty( $dbData ) )
        {
            $this->_setRedis( $dbData );
            static::$runtimeData[ static::$id ] = $dbData;
            return $this;
        }

        return $this;
    }

    protected function _getRedis()
    {
        return static::$redis;
    }

    protected function _getRedisKey() : string
    {
        return static::$redisKey;
    }

    protected function _checkRedisData() : bool
    {
        // static::$redis->exists( static::_getRedisKey() );
        return true;
    }

    protected function _setRedis( array $array ) : void
    {
       \array_push($array, "set資料到reids");
    }

    protected function _getRedisData() : array
    {
       return array('data' => '取得redisy資料');
    }

    protected function _getDbData() : array
    {
        try
        {
           return array('data' => '取得db資料');

        }
        catch( \Exception $e )
        {
            return array();
        }
    }

    protected function _exist() : bool
    {
        return ! empty( static::$runtimeData[ static::$id ] );
    }

    public function getData() : array
    {
        return $this->_exist() ? static::$runtimeData[ static::$id ] : array();
    }

}