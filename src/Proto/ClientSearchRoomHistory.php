<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientSearchRoomHistory.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientSearchRoomHistory</code>
 */
class ClientSearchRoomHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     */
    private $room_id = 0;
    /**
     *Deprecated
     *
     * Generated from protobuf field <code>uint32 offset = 3;</code>
     */
    private $offset = 0;
    /**
     * Generated from protobuf field <code>.proto.ClientSearchRoomHistory.Filter filter = 4;</code>
     */
    private $filter = 0;
    /**
     * Generated from protobuf field <code>uint64 offset_message_id = 5;</code>
     */
    private $offset_message_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type int|string $room_id
     *     @type int $offset
     *          Deprecated
     *     @type int $filter
     *     @type int|string $offset_message_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientSearchRoomHistory::initOnce();
        parent::__construct($data);
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
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     * @return int|string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkUint64($var);
        $this->room_id = $var;

        return $this;
    }

    /**
     *Deprecated
     *
     * Generated from protobuf field <code>uint32 offset = 3;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     *Deprecated
     *
     * Generated from protobuf field <code>uint32 offset = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.ClientSearchRoomHistory.Filter filter = 4;</code>
     * @return int
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Generated from protobuf field <code>.proto.ClientSearchRoomHistory.Filter filter = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkEnum($var, \Proto\ClientSearchRoomHistory_Filter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 offset_message_id = 5;</code>
     * @return int|string
     */
    public function getOffsetMessageId()
    {
        return $this->offset_message_id;
    }

    /**
     * Generated from protobuf field <code>uint64 offset_message_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffsetMessageId($var)
    {
        GPBUtil::checkUint64($var);
        $this->offset_message_id = $var;

        return $this;
    }

}

