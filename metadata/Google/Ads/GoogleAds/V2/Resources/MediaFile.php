<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/media_file.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Resources;

class MediaFile
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9a040a2d676f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f6d696d655f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76322e656e756d7322dc010a0c4d696d6554797065456e756d22cb010a084d696d6554797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120e0a0a494d4147455f4a5045471002120d0a09494d4147455f4749461003120d0a09494d4147455f504e47100412090a05464c4153481005120d0a09544558545f48544d4c100612070a035044461007120a0a064d53574f52441008120b0a074d53455843454c100912070a03525446100a120d0a09415544494f5f574156100b120d0a09415544494f5f4d5033100c12100a0c48544d4c355f41445f5a4950100d42e2010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d73420d4d696d655479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56322e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56325c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a456e756d73620670726f746f330aca030a2e676f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f6d656469615f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76322e656e756d73228a010a0d4d6564696154797065456e756d22790a094d6564696154797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112090a05494d414745100212080a0449434f4e100312100a0c4d454449415f42554e444c45100412090a05415544494f100512090a05564944454f100612110a0d44594e414d49435f494d414745100742e3010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d73420e4d656469615479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56322e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56325c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a456e756d73620670726f746f330a840e0a32676f6f676c652f6164732f676f6f676c656164732f76322f7265736f75726365732f6d656469615f66696c652e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365731a2d676f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f6d696d655f747970652e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22b2060a094d6564696146696c6512410a0d7265736f757263655f6e616d65180120012809422ae04105fa41240a22676f6f676c656164732e676f6f676c65617069732e636f6d2f4d6564696146696c65122c0a02696418022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e0410312490a047479706518052001280e32362e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732e4d6564696154797065456e756d2e4d65646961547970654203e04105124c0a096d696d655f7479706518062001280e32342e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732e4d696d6554797065456e756d2e4d696d65547970654203e0410312350a0a736f757263655f75726c18072001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e04105122f0a046e616d6518082001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410512330a0966696c655f73697a6518092001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e0410312430a05696d61676518032001280b322d2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e4d65646961496d6167654203e041054800124b0a0c6d656469615f62756e646c6518042001280b322e2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e4d6564696142756e646c654203e04105480012430a05617564696f180a2001280b322d2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e4d65646961417564696f4203e04103480012430a05766964656f180b2001280b322d2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365732e4d65646961566964656f4203e0410548003a55ea41520a22676f6f676c656164732e676f6f676c65617069732e636f6d2f4d6564696146696c65122c637573746f6d6572732f7b637573746f6d65727d2f6d6564696146696c65732f7b6d656469615f66696c657d420b0a096d6564696174797065223c0a0a4d65646961496d616765122e0a046461746118012001280b321b2e676f6f676c652e70726f746f6275662e427974657356616c75654203e04105223d0a0b4d6564696142756e646c65122e0a046461746118012001280b321b2e676f6f676c652e70726f746f6275662e427974657356616c75654203e04105224a0a0a4d65646961417564696f123c0a1261645f6475726174696f6e5f6d696c6c697318012001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e0410322fd010a0a4d65646961566964656f123c0a1261645f6475726174696f6e5f6d696c6c697318012001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e04103123b0a10796f75747562655f766964656f5f696418022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e04105123e0a136164766572746973696e675f69645f636f646518032001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312340a09697363695f636f646518042001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410342fb010a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f7572636573420e4d6564696146696c6550726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56322e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56325c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

