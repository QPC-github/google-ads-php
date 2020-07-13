<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2020 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Ads\GoogleAds\V2\Services;

/**
 * Proto file describing the ad group ad asset view service.
 *
 * Service to fetch ad group ad asset views.
 */
class AdGroupAdAssetViewServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the requested ad group ad asset view in full detail.
     * @param \Google\Ads\GoogleAds\V2\Services\GetAdGroupAdAssetViewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetView
     */
    public function GetAdGroupAdAssetView(\Google\Ads\GoogleAds\V2\Services\GetAdGroupAdAssetViewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v2.services.AdGroupAdAssetViewService/GetAdGroupAdAssetView',
        $argument,
        ['\Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetView', 'decode'],
        $metadata, $options);
    }

}
