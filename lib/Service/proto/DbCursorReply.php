<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/core.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DbCursorReply</code>
 */
class DbCursorReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string error = 1;</code>
     */
    protected $error = '';
    /**
     * Generated from protobuf field <code>repeated string columnsName = 2;</code>
     */
    private $columnsName;
    /**
     * Generated from protobuf field <code>repeated .DbCursorReply.columnData columnsData = 3;</code>
     */
    private $columnsData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $error
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $columnsName
     *     @type \DbCursorReply\columnData[]|\Google\Protobuf\Internal\RepeatedField $columnsData
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Core::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string error = 1;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string columnsName = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumnsName()
    {
        return $this->columnsName;
    }

    /**
     * Generated from protobuf field <code>repeated string columnsName = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumnsName($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->columnsName = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .DbCursorReply.columnData columnsData = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumnsData()
    {
        return $this->columnsData;
    }

    /**
     * Generated from protobuf field <code>repeated .DbCursorReply.columnData columnsData = 3;</code>
     * @param \DbCursorReply\columnData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumnsData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \DbCursorReply\columnData::class);
        $this->columnsData = $arr;

        return $this;
    }

}

