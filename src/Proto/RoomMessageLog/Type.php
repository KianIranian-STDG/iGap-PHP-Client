<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto\RoomMessageLog;

/**
 * Protobuf type <code>proto.RoomMessageLog.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>USER_JOINED = 0;</code>
     */
    const USER_JOINED = 0;
    /**
     * Generated from protobuf enum <code>USER_DELETED = 1;</code>
     */
    const USER_DELETED = 1;
    /**
     * Generated from protobuf enum <code>ROOM_CREATED = 2;</code>
     */
    const ROOM_CREATED = 2;
    /**
     * Generated from protobuf enum <code>MEMBER_ADDED = 3;</code>
     */
    const MEMBER_ADDED = 3;
    /**
     * Generated from protobuf enum <code>MEMBER_KICKED = 4;</code>
     */
    const MEMBER_KICKED = 4;
    /**
     * Generated from protobuf enum <code>MEMBER_LEFT = 5;</code>
     */
    const MEMBER_LEFT = 5;
    /**
     * Generated from protobuf enum <code>ROOM_CONVERTED_TO_PUBLIC = 6;</code>
     */
    const ROOM_CONVERTED_TO_PUBLIC = 6;
    /**
     * Generated from protobuf enum <code>ROOM_CONVERTED_TO_PRIVATE = 7;</code>
     */
    const ROOM_CONVERTED_TO_PRIVATE = 7;
    /**
     * Generated from protobuf enum <code>MEMBER_JOINED_BY_INVITE_LINK = 8;</code>
     */
    const MEMBER_JOINED_BY_INVITE_LINK = 8;
    /**
     * Generated from protobuf enum <code>ROOM_DELETED = 9;</code>
     */
    const ROOM_DELETED = 9;
    /**
     * Generated from protobuf enum <code>MISSED_VOICE_CALL = 10;</code>
     */
    const MISSED_VOICE_CALL = 10;
    /**
     * Generated from protobuf enum <code>MISSED_VIDEO_CALL = 11;</code>
     */
    const MISSED_VIDEO_CALL = 11;
    /**
     * Generated from protobuf enum <code>MISSED_SCREEN_SHARE = 12;</code>
     */
    const MISSED_SCREEN_SHARE = 12;
    /**
     * Generated from protobuf enum <code>MISSED_SECRET_CHAT = 13;</code>
     */
    const MISSED_SECRET_CHAT = 13;
    /**
     * Generated from protobuf enum <code>PINNED_MESSAGE = 14;</code>
     */
    const PINNED_MESSAGE = 14;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Proto\RoomMessageLog_Type::class);

