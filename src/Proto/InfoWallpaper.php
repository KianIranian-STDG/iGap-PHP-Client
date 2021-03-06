<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InfoWallpaper.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.InfoWallpaper</code>
 */
class InfoWallpaper extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    private $request = null;
    /**
     * Generated from protobuf field <code>.proto.InfoWallpaper.Fit fit = 2;</code>
     */
    private $fit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type int $fit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\InfoWallpaper::initOnce();
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
     * Generated from protobuf field <code>.proto.InfoWallpaper.Fit fit = 2;</code>
     * @return int
     */
    public function getFit()
    {
        return $this->fit;
    }

    /**
     * Generated from protobuf field <code>.proto.InfoWallpaper.Fit fit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFit($var)
    {
        GPBUtil::checkEnum($var, \Proto\InfoWallpaper_Fit::class);
        $this->fit = $var;

        return $this;
    }

}

