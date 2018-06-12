<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserSessionTerminate.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserSessionTerminate</code>
 */
class UserSessionTerminate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>uint64 session_id = 2;</code>
     */
    private $session_id = 0;

    public function __construct() {
        \GPBMetadata\UserSessionTerminate::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     * @return \Proto\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     * @param \Proto\Request $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Proto\Request::class);
        $this->request = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 session_id = 2;</code>
     * @return int|string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Generated from protobuf field <code>uint64 session_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkUint64($var);
        $this->session_id = $var;

        return $this;
    }

}
