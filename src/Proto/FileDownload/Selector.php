<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: FileDownload.proto

namespace Proto\FileDownload;

/**
 * Protobuf type <code>proto.FileDownload.Selector</code>
 */
class Selector
{
    /**
     * Generated from protobuf enum <code>FILE = 0;</code>
     */
    const FILE = 0;
    /**
     * Generated from protobuf enum <code>SMALL_THUMBNAIL = 1;</code>
     */
    const SMALL_THUMBNAIL = 1;
    /**
     * Generated from protobuf enum <code>LARGE_THUMBNAIL = 2;</code>
     */
    const LARGE_THUMBNAIL = 2;
    /**
     * Generated from protobuf enum <code>WAVEFORM_THUMBNAIL = 3;</code>
     */
    const WAVEFORM_THUMBNAIL = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Selector::class, \Proto\FileDownload_Selector::class);
