<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opensergo/proto/service_contract/v1/service_contract.proto

namespace Opensergo\Proto\Service_contract\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes an enum type.
 *
 * Generated from protobuf message <code>opensergo.proto.service_contract.v1.EnumDescriptorProto</code>
 */
class EnumDescriptorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     */
    protected $name = null;
    /**
     * Generated from protobuf field <code>repeated .opensergo.proto.service_contract.v1.EnumValueDescriptorProto value = 2;</code>
     */
    private $value;
    /**
     * Generated from protobuf field <code>optional .opensergo.proto.service_contract.v1.MessageOptions options = 3;</code>
     */
    protected $options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type \Opensergo\Proto\Service_contract\V1\EnumValueDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $value
     *     @type \Opensergo\Proto\Service_contract\V1\MessageOptions $options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opensergo\Proto\ServiceContract\V1\ServiceContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .opensergo.proto.service_contract.v1.EnumValueDescriptorProto value = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>repeated .opensergo.proto.service_contract.v1.EnumValueDescriptorProto value = 2;</code>
     * @param \Opensergo\Proto\Service_contract\V1\EnumValueDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opensergo\Proto\Service_contract\V1\EnumValueDescriptorProto::class);
        $this->value = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .opensergo.proto.service_contract.v1.MessageOptions options = 3;</code>
     * @return \Opensergo\Proto\Service_contract\V1\MessageOptions|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Generated from protobuf field <code>optional .opensergo.proto.service_contract.v1.MessageOptions options = 3;</code>
     * @param \Opensergo\Proto\Service_contract\V1\MessageOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Opensergo\Proto\Service_contract\V1\MessageOptions::class);
        $this->options = $var;

        return $this;
    }

}
