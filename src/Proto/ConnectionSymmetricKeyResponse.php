<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ConnectionSecuring.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ConnectionSymmetricKeyResponse</code>
 */
class ConnectionSymmetricKeyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>.proto.ConnectionSymmetricKeyResponse.Status status = 2;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>string symmetric_method = 3;</code>
     */
    private $symmetric_method = '';
    /**
     * Generated from protobuf field <code>uint32 symmetric_iv_size = 4;</code>
     */
    private $symmetric_iv_size = 0;
    /**
     * Generated from protobuf field <code>bool security_issue = 5;</code>
     */
    private $security_issue = false;

    public function __construct() {
        \GPBMetadata\ConnectionSecuring::initOnce();
        parent::__construct();
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
     * Generated from protobuf field <code>.proto.ConnectionSymmetricKeyResponse.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.proto.ConnectionSymmetricKeyResponse.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Proto\ConnectionSymmetricKeyResponse_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string symmetric_method = 3;</code>
     * @return string
     */
    public function getSymmetricMethod()
    {
        return $this->symmetric_method;
    }

    /**
     * Generated from protobuf field <code>string symmetric_method = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSymmetricMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->symmetric_method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 symmetric_iv_size = 4;</code>
     * @return int
     */
    public function getSymmetricIvSize()
    {
        return $this->symmetric_iv_size;
    }

    /**
     * Generated from protobuf field <code>uint32 symmetric_iv_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSymmetricIvSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->symmetric_iv_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool security_issue = 5;</code>
     * @return bool
     */
    public function getSecurityIssue()
    {
        return $this->security_issue;
    }

    /**
     * Generated from protobuf field <code>bool security_issue = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSecurityIssue($var)
    {
        GPBUtil::checkBool($var);
        $this->security_issue = $var;

        return $this;
    }

}
