<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientCondition.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientCondition</code>
 */
class ClientCondition extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>repeated .proto.ClientCondition.Room rooms = 2;</code>
     */
    private $rooms;

    public function __construct() {
        \GPBMetadata\ClientCondition::initOnce();
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
     * Generated from protobuf field <code>repeated .proto.ClientCondition.Room rooms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.ClientCondition.Room rooms = 2;</code>
     * @param \Proto\ClientCondition_Room[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRooms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\ClientCondition_Room::class);
        $this->rooms = $arr;

        return $this;
    }

}
