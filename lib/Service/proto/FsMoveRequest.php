<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/core.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Reply for this is a FsReply message.
 *
 * Generated from protobuf message <code>FsMoveRequest</code>
 */
class FsMoveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.fsId fileId = 1;</code>
     */
    protected $fileId = null;
    /**
     *absolute path relative to MP.
     *
     * Generated from protobuf field <code>string targetPath = 2;</code>
     */
    protected $targetPath = '';
    /**
     * Generated from protobuf field <code>bool bCopy = 3;</code>
     */
    protected $bCopy = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \fsId $fileId
     *     @type string $targetPath
     *          absolute path relative to MP.
     *     @type bool $bCopy
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Core::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.fsId fileId = 1;</code>
     * @return \fsId|null
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    public function hasFileId()
    {
        return isset($this->fileId);
    }

    public function clearFileId()
    {
        unset($this->fileId);
    }

    /**
     * Generated from protobuf field <code>.fsId fileId = 1;</code>
     * @param \fsId $var
     * @return $this
     */
    public function setFileId($var)
    {
        GPBUtil::checkMessage($var, \fsId::class);
        $this->fileId = $var;

        return $this;
    }

    /**
     *absolute path relative to MP.
     *
     * Generated from protobuf field <code>string targetPath = 2;</code>
     * @return string
     */
    public function getTargetPath()
    {
        return $this->targetPath;
    }

    /**
     *absolute path relative to MP.
     *
     * Generated from protobuf field <code>string targetPath = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->targetPath = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bCopy = 3;</code>
     * @return bool
     */
    public function getBCopy()
    {
        return $this->bCopy;
    }

    /**
     * Generated from protobuf field <code>bool bCopy = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setBCopy($var)
    {
        GPBUtil::checkBool($var);
        $this->bCopy = $var;

        return $this;
    }

}

