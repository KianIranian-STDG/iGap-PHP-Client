<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingAccept.proto

namespace GPBMetadata;

class SignalingAccept
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
            "0af8010a155369676e616c696e674163636570742e70726f746f12057072" .
            "6f746f1a0e526573706f6e73652e70726f746f22460a0f5369676e616c69" .
            "6e67416363657074121f0a077265717565737418012001280b320e2e7072" .
            "6f746f2e5265717565737412120a0a63616c6c65645f7364701802200128" .
            "0922500a175369676e616c696e67416363657074526573706f6e73651221" .
            "0a08726573706f6e736518012001280b320f2e70726f746f2e526573706f" .
            "6e736512120a0a63616c6c65645f73647018022001280942260a0e6e6574" .
            "2e694761702e70726f746f421450726f746f5369676e616c696e67416363" .
            "657074620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

