<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupEditMessage.proto

namespace GPBMetadata;

class GroupEditMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        \GPBMetadata\Global::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a96030a1647726f7570456469744d6573736167652e70726f746f120570" .
            "726f746f1a0e526573706f6e73652e70726f746f1a0c476c6f62616c2e70" .
            "726f746f22690a1047726f7570456469744d657373616765121f0a077265" .
            "717565737418012001280b320e2e70726f746f2e52657175657374120f0a" .
            "07726f6f6d5f696418022001280412120a0a6d6573736167655f69641803" .
            "20012804120f0a076d65737361676518042001280922ba010a1847726f75" .
            "70456469744d657373616765526573706f6e736512210a08726573706f6e" .
            "736518012001280b320f2e70726f746f2e526573706f6e7365120f0a0772" .
            "6f6f6d5f696418022001280412120a0a6d6573736167655f696418032001" .
            "280412170a0f6d6573736167655f76657273696f6e180420012804120f0a" .
            "076d657373616765180520012809122c0a0c6d6573736167655f74797065" .
            "18062001280e32162e70726f746f2e526f6f6d4d65737361676554797065" .
            "42270a0e6e65742e694761702e70726f746f421550726f746f47726f7570" .
            "456469744d657373616765620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
