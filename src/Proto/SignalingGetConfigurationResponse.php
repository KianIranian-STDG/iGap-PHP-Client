<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingGetConfiguration.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.SignalingGetConfigurationResponse</code>
 */
class SignalingGetConfigurationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    private $response = null;
    /**
     * Generated from protobuf field <code>repeated .proto.SignalingGetConfigurationResponse.IceServer ice_server = 2;</code>
     */
    private $ice_server;
    /**
     * Generated from protobuf field <code>bool voice_calling = 3;</code>
     */
    private $voice_calling = false;
    /**
     * Generated from protobuf field <code>bool video_calling = 4;</code>
     */
    private $video_calling = false;
    /**
     * Generated from protobuf field <code>bool screen_sharing = 5;</code>
     */
    private $screen_sharing = false;
    /**
     * Generated from protobuf field <code>bool secret_chat = 6;</code>
     */
    private $secret_chat = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type \Proto\SignalingGetConfigurationResponse\IceServer[]|\Google\Protobuf\Internal\RepeatedField $ice_server
     *     @type bool $voice_calling
     *     @type bool $video_calling
     *     @type bool $screen_sharing
     *     @type bool $secret_chat
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SignalingGetConfiguration::initOnce();
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
     * Generated from protobuf field <code>repeated .proto.SignalingGetConfigurationResponse.IceServer ice_server = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIceServer()
    {
        return $this->ice_server;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.SignalingGetConfigurationResponse.IceServer ice_server = 2;</code>
     * @param \Proto\SignalingGetConfigurationResponse\IceServer[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIceServer($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\SignalingGetConfigurationResponse\IceServer::class);
        $this->ice_server = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool voice_calling = 3;</code>
     * @return bool
     */
    public function getVoiceCalling()
    {
        return $this->voice_calling;
    }

    /**
     * Generated from protobuf field <code>bool voice_calling = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setVoiceCalling($var)
    {
        GPBUtil::checkBool($var);
        $this->voice_calling = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool video_calling = 4;</code>
     * @return bool
     */
    public function getVideoCalling()
    {
        return $this->video_calling;
    }

    /**
     * Generated from protobuf field <code>bool video_calling = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setVideoCalling($var)
    {
        GPBUtil::checkBool($var);
        $this->video_calling = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool screen_sharing = 5;</code>
     * @return bool
     */
    public function getScreenSharing()
    {
        return $this->screen_sharing;
    }

    /**
     * Generated from protobuf field <code>bool screen_sharing = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setScreenSharing($var)
    {
        GPBUtil::checkBool($var);
        $this->screen_sharing = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool secret_chat = 6;</code>
     * @return bool
     */
    public function getSecretChat()
    {
        return $this->secret_chat;
    }

    /**
     * Generated from protobuf field <code>bool secret_chat = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setSecretChat($var)
    {
        GPBUtil::checkBool($var);
        $this->secret_chat = $var;

        return $this;
    }

}

