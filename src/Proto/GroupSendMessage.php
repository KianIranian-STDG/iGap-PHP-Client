<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupSendMessage.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.GroupSendMessage</code>
 */
class GroupSendMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>.proto.RoomMessageType message_type = 2;</code>
     */
    private $message_type = 0;
    /**
     * Generated from protobuf field <code>uint64 room_id = 3;</code>
     */
    private $room_id = 0;
    /**
     * Generated from protobuf field <code>string message = 4;</code>
     */
    private $message = '';
    /**
     * Generated from protobuf field <code>string attachment = 5;</code>
     */
    private $attachment = '';
    /**
     * Generated from protobuf field <code>.proto.RoomMessageLocation location = 6;</code>
     */
    private $location = null;
    /**
     * Generated from protobuf field <code>.proto.RoomMessageContact contact = 7;</code>
     */
    private $contact = null;
    /**
     * Generated from protobuf field <code>uint64 reply_to = 8;</code>
     */
    private $reply_to = 0;
    /**
     * Generated from protobuf field <code>.proto.RoomMessageForwardFrom forward_from = 9;</code>
     */
    private $forward_from = null;
    /**
     * Generated from protobuf field <code>uint64 random_id = 10;</code>
     */
    private $random_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type int $message_type
     *     @type int|string $room_id
     *     @type string $message
     *     @type string $attachment
     *     @type \Proto\RoomMessageLocation $location
     *     @type \Proto\RoomMessageContact $contact
     *     @type int|string $reply_to
     *     @type \Proto\RoomMessageForwardFrom $forward_from
     *     @type int|string $random_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GroupSendMessage::initOnce();
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
     * Generated from protobuf field <code>.proto.RoomMessageType message_type = 2;</code>
     * @return int
     */
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageType message_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageType($var)
    {
        GPBUtil::checkEnum($var, \Proto\RoomMessageType::class);
        $this->message_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 3;</code>
     * @return int|string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 3;</code>
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
     * Generated from protobuf field <code>string message = 4;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string attachment = 5;</code>
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Generated from protobuf field <code>string attachment = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachment($var)
    {
        GPBUtil::checkString($var, True);
        $this->attachment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageLocation location = 6;</code>
     * @return \Proto\RoomMessageLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageLocation location = 6;</code>
     * @param \Proto\RoomMessageLocation $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Proto\RoomMessageLocation::class);
        $this->location = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageContact contact = 7;</code>
     * @return \Proto\RoomMessageContact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageContact contact = 7;</code>
     * @param \Proto\RoomMessageContact $var
     * @return $this
     */
    public function setContact($var)
    {
        GPBUtil::checkMessage($var, \Proto\RoomMessageContact::class);
        $this->contact = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 reply_to = 8;</code>
     * @return int|string
     */
    public function getReplyTo()
    {
        return $this->reply_to;
    }

    /**
     * Generated from protobuf field <code>uint64 reply_to = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReplyTo($var)
    {
        GPBUtil::checkUint64($var);
        $this->reply_to = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageForwardFrom forward_from = 9;</code>
     * @return \Proto\RoomMessageForwardFrom
     */
    public function getForwardFrom()
    {
        return $this->forward_from;
    }

    /**
     * Generated from protobuf field <code>.proto.RoomMessageForwardFrom forward_from = 9;</code>
     * @param \Proto\RoomMessageForwardFrom $var
     * @return $this
     */
    public function setForwardFrom($var)
    {
        GPBUtil::checkMessage($var, \Proto\RoomMessageForwardFrom::class);
        $this->forward_from = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 random_id = 10;</code>
     * @return int|string
     */
    public function getRandomId()
    {
        return $this->random_id;
    }

    /**
     * Generated from protobuf field <code>uint64 random_id = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRandomId($var)
    {
        GPBUtil::checkUint64($var);
        $this->random_id = $var;

        return $this;
    }

}

