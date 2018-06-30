<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserPrivacySetRule.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserPrivacySetRuleResponse</code>
 */
class UserPrivacySetRuleResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>.proto.PrivacyType type = 2;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.proto.PrivacyLevel level = 3;</code>
     */
    private $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int $type
     *     @type int $level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserPrivacySetRule::initOnce();
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
     * Generated from protobuf field <code>.proto.PrivacyType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.proto.PrivacyType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Proto\PrivacyType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.PrivacyLevel level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Generated from protobuf field <code>.proto.PrivacyLevel level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Proto\PrivacyLevel::class);
        $this->level = $var;

        return $this;
    }

}

