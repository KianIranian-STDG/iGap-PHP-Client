<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserAvatarGetList.proto

namespace GPBMetadata;

class UserAvatarGetList
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
            "0a96020a17557365724176617461724765744c6973742e70726f746f1205" .
            "70726f746f1a0e526573706f6e73652e70726f746f1a0c476c6f62616c2e" .
            "70726f746f22450a11557365724176617461724765744c697374121f0a07" .
            "7265717565737418012001280b320e2e70726f746f2e5265717565737412" .
            "0f0a07757365725f6964180220012804225d0a1955736572417661746172" .
            "4765744c697374526573706f6e736512210a08726573706f6e7365180120" .
            "01280b320f2e70726f746f2e526573706f6e7365121d0a06617661746172" .
            "18022003280b320d2e70726f746f2e41766174617242280a0e6e65742e69" .
            "4761702e70726f746f421650726f746f557365724176617461724765744c" .
            "697374620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
