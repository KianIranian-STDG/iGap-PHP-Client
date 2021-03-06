<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingClearLog.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.SignalingClearLogResponse</code>
 */
class SignalingClearLogResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>uint64 clear_id = 2;</code>
     */
    private $clear_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int|string $clear_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SignalingClearLog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @return \Proto\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @param \Proto\Response $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Proto\Response::class);
        $this->response = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 clear_id = 2;</code>
     * @return int|string
     */
    public function getClearId()
    {
        return $this->clear_id;
    }

    /**
     * Generated from protobuf field <code>uint64 clear_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClearId($var)
    {
        GPBUtil::checkUint64($var);
        $this->clear_id = $var;

        return $this;
    }

}

