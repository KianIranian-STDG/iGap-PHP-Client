<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupClearMessage.proto

namespace GPBMetadata;

class GroupClearMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9e020a1747726f7570436c6561724d6573736167652e70726f746f1205" .
            "70726f746f1a0e526573706f6e73652e70726f746f22570a1147726f7570" .
            "436c6561724d657373616765121f0a077265717565737418012001280b32" .
            "0e2e70726f746f2e52657175657374120f0a07726f6f6d5f696418022001" .
            "280412100a08636c6561725f696418032001280422610a1947726f757043" .
            "6c6561724d657373616765526573706f6e736512210a08726573706f6e73" .
            "6518012001280b320f2e70726f746f2e526573706f6e7365120f0a07726f" .
            "6f6d5f696418022001280412100a08636c6561725f696418032001280442" .
            "280a0e6e65742e694761702e70726f746f421650726f746f47726f757043" .
            "6c6561724d657373616765620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
