<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/ad_group_simulation.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Resources;

class AdGroupSimulation
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
            "0af0140a2f676f6f676c652f6164732f676f6f676c656164732f76322f636f6d6d6f6e2f73696d756c6174696f6e2e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f226c0a1e4269644d6f64696669657253696d756c6174696f6e506f696e744c697374124a0a06706f696e747318012003280b323a2e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e4269644d6f64696669657253696d756c6174696f6e506f696e7422620a1943706342696453696d756c6174696f6e506f696e744c69737412450a06706f696e747318012003280b32352e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e43706342696453696d756c6174696f6e506f696e7422620a1943707642696453696d756c6174696f6e506f696e744c69737412450a06706f696e747318012003280b32352e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e43707642696453696d756c6174696f6e506f696e7422680a1c54617267657443706153696d756c6174696f6e506f696e744c69737412480a06706f696e747318012003280b32382e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e54617267657443706153696d756c6174696f6e506f696e7422d2060a1a4269644d6f64696669657253696d756c6174696f6e506f696e7412320a0c6269645f6d6f64696669657218012001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565123a0a146269646461626c655f636f6e76657273696f6e7318022001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512400a1a6269646461626c655f636f6e76657273696f6e735f76616c756518032001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565122b0a06636c69636b7318042001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512300a0b636f73745f6d6963726f7318052001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512300a0b696d7072657373696f6e7318062001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512390a14746f705f736c6f745f696d7072657373696f6e7318072001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512410a1b706172656e745f6269646461626c655f636f6e76657273696f6e7318082001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512470a21706172656e745f6269646461626c655f636f6e76657273696f6e735f76616c756518092001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512320a0d706172656e745f636c69636b73180a2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512370a12706172656e745f636f73745f6d6963726f73180b2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512370a12706172656e745f696d7072657373696f6e73180c2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512400a1b706172656e745f746f705f736c6f745f696d7072657373696f6e73180d2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512420a1d706172656e745f72657175697265645f6275646765745f6d6963726f73180e2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75652296030a1543706342696453696d756c6174696f6e506f696e7412330a0e6370635f6269645f6d6963726f7318012001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565123a0a146269646461626c655f636f6e76657273696f6e7318022001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512400a1a6269646461626c655f636f6e76657273696f6e735f76616c756518032001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565122b0a06636c69636b7318042001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512300a0b636f73745f6d6963726f7318052001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512300a0b696d7072657373696f6e7318062001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512390a14746f705f736c6f745f696d7072657373696f6e7318072001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756522dc010a1543707642696453696d756c6174696f6e506f696e7412330a0e6370765f6269645f6d6963726f7318012001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512300a0b636f73745f6d6963726f7318022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512300a0b696d7072657373696f6e7318032001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565122a0a05766965777318042001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565229c030a1854617267657443706153696d756c6174696f6e506f696e7412360a117461726765745f6370615f6d6963726f7318012001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565123a0a146269646461626c655f636f6e76657273696f6e7318022001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512400a1a6269646461626c655f636f6e76657273696f6e735f76616c756518032001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565122b0a06636c69636b7318042001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512300a0b636f73745f6d6963726f7318052001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512300a0b696d7072657373696f6e7318062001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512390a14746f705f736c6f745f696d7072657373696f6e7318072001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c756542ea010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e420f53696d756c6174696f6e50726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56322e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56325c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a436f6d6d6f6e620670726f746f330ae0030a42676f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f73696d756c6174696f6e5f6d6f64696669636174696f6e5f6d6574686f642e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76322e656e756d73227a0a2053696d756c6174696f6e4d6f64696669636174696f6e4d6574686f64456e756d22560a1c53696d756c6174696f6e4d6f64696669636174696f6e4d6574686f64120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07554e49464f524d1002120b0a0744454641554c54100342f6010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d73422153696d756c6174696f6e4d6f64696669636174696f6e4d6574686f6450726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56322e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56325c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a456e756d73620670726f746f330aca030a33676f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f73696d756c6174696f6e5f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732280010a1253696d756c6174696f6e54797065456e756d226a0a0e53696d756c6174696f6e54797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a074350435f4249441002120b0a074350565f4249441003120e0a0a5441524745545f435041100412100a0c4249445f4d4f444946494552100542e8010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d73421353696d756c6174696f6e5479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56322e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56325c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a456e756d73620670726f746f330ad80b0a3b676f6f676c652f6164732f676f6f676c656164732f76322f7265736f75726365732f61645f67726f75705f73696d756c6174696f6e2e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365731a42676f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f73696d756c6174696f6e5f6d6f64696669636174696f6e5f6d6574686f642e70726f746f1a33676f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f73696d756c6174696f6e5f747970652e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22f4060a11416447726f757053696d756c6174696f6e12490a0d7265736f757263655f6e616d651801200128094232e04103fa412c0a2a676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f757053696d756c6174696f6e12350a0b61645f67726f75705f696418022001280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75654203e0410312530a047479706518032001280e32402e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732e53696d756c6174696f6e54797065456e756d2e53696d756c6174696f6e547970654203e04103127e0a136d6f64696669636174696f6e5f6d6574686f6418042001280e325c2e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732e53696d756c6174696f6e4d6f64696669636174696f6e4d6574686f64456e756d2e53696d756c6174696f6e4d6f64696669636174696f6e4d6574686f644203e0410312350a0a73746172745f6461746518052001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312330a08656e645f6461746518062001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e04103125c0a126370635f6269645f706f696e745f6c69737418082001280b32392e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e43706342696453696d756c6174696f6e506f696e744c6973744203e041034800125c0a126370765f6269645f706f696e745f6c697374180a2001280b32392e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e43707642696453696d756c6174696f6e506f696e744c6973744203e04103480012620a157461726765745f6370615f706f696e745f6c69737418092001280b323c2e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e54617267657443706153696d756c6174696f6e506f696e744c6973744203e0410348003a6eea416b0a2a676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f757053696d756c6174696f6e123d637573746f6d6572732f7b637573746f6d65727d2f616447726f757053696d756c6174696f6e732f7b61645f67726f75705f73696d756c6174696f6e7d420c0a0a706f696e745f6c6973744283020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365734216416447726f757053696d756c6174696f6e50726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76322f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56322e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56325c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

