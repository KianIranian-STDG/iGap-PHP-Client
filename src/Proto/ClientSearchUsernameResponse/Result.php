<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientSearchUsername.proto

namespace Proto\ClientSearchUsernameResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientSearchUsernameResponse.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.ClientSearchUsernameResponse.Result.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>bool exact_match = 2;</code>
     */
    private $exact_match = false;
    /**
     * Generated from protobuf field <code>.proto.RegisteredUser user = 3;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.proto.Room room = 4;</code>
     */
    private $room = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type bool $exact_match
     *     @type \Proto\RegisteredUser $user
     *     @type \Proto\Room $room
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientSearchUsername::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.ClientSearchUsernameResponse.Result.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.proto.ClientSearchUsernameResponse.Result.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Proto\ClientSearchUsernameResponse_Result_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool exact_match = 2;</code>
     * @return bool
     */
    public function getExactMatch()
    {
        return $this->exact_match;
    }

    /**
     * Generated from protobuf field <code>bool exact_match = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setExactMatch($var)
    {
        GPBUtil::checkBool($var);
        $this->exact_match = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser user = 3;</code>
     * @return \Proto\RegisteredUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser user = 3;</code>
     * @param \Proto\RegisteredUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Proto\RegisteredUser::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Room room = 4;</code>
     * @return \Proto\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Generated from protobuf field <code>.proto.Room room = 4;</code>
     * @param \Proto\Room $var
     * @return $this
     */
    public function setRoom($var)
    {
        GPBUtil::checkMessage($var, \Proto\Room::class);
        $this->room = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \Proto\ClientSearchUsernameResponse_Result::class);

