<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelGetMemberList.proto

namespace Proto\ChannelGetMemberList;

/**
 * Protobuf type <code>proto.ChannelGetMemberList.FilterRole</code>
 */
class FilterRole
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>MEMBER = 1;</code>
     */
    const MEMBER = 1;
    /**
     * Generated from protobuf enum <code>MODERATOR = 2;</code>
     */
    const MODERATOR = 2;
    /**
     * Generated from protobuf enum <code>ADMIN = 3;</code>
     */
    const ADMIN = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FilterRole::class, \Proto\ChannelGetMemberList_FilterRole::class);

