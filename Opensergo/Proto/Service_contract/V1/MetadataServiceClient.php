<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2022, OpenSergo Authors
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
namespace Opensergo\Proto\Service_contract\V1;

/**
 * MetadataService report metadata
 */
class MetadataServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * ReportMetadata report Metadata to server
     * @param \Opensergo\Proto\Service_contract\V1\ReportMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReportMetadata(\Opensergo\Proto\Service_contract\V1\ReportMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/opensergo.proto.service_contract.v1.MetadataService/ReportMetadata',
        $argument,
        ['\Opensergo\Proto\Service_contract\V1\ReportMetadataReply', 'decode'],
        $metadata, $options);
    }

}
