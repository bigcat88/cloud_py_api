<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/core.proto

/**
 * Protobuf type <code>fsResultCode</code>
 */
class fsResultCode
{
    /**
     * Generated from protobuf enum <code>NO_ERROR = 0;</code>
     */
    const NO_ERROR = 0;
    /**
     * Generated from protobuf enum <code>NOT_PERMITTED = 1;</code>
     */
    const NOT_PERMITTED = 1;
    /**
     * Generated from protobuf enum <code>LOCKED = 2;</code>
     */
    const LOCKED = 2;
    /**
     * Generated from protobuf enum <code>NOT_FOUND = 3;</code>
     */
    const NOT_FOUND = 3;
    /**
     * Generated from protobuf enum <code>IO_ERROR = 4;</code>
     */
    const IO_ERROR = 4;

    private static $valueToName = [
        self::NO_ERROR => 'NO_ERROR',
        self::NOT_PERMITTED => 'NOT_PERMITTED',
        self::LOCKED => 'LOCKED',
        self::NOT_FOUND => 'NOT_FOUND',
        self::IO_ERROR => 'IO_ERROR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

