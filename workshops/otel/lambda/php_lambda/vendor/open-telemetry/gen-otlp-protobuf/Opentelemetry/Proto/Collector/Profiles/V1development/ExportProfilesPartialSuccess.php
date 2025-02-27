<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/collector/profiles/v1development/profiles_service.proto

namespace Opentelemetry\Proto\Collector\Profiles\V1development;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>opentelemetry.proto.collector.profiles.v1development.ExportProfilesPartialSuccess</code>
 */
class ExportProfilesPartialSuccess extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of rejected profiles.
     * A `rejected_<signal>` field holding a `0` value indicates that the
     * request was fully accepted.
     *
     * Generated from protobuf field <code>int64 rejected_profiles = 1;</code>
     */
    protected $rejected_profiles = 0;
    /**
     * A developer-facing human-readable message in English. It should be used
     * either to explain why the server rejected parts of the data during a partial
     * success or to convey warnings/suggestions during a full success. The message
     * should offer guidance on how users can address such issues.
     * error_message is an optional field. An error_message with an empty value
     * is equivalent to it not being set.
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     */
    protected $error_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $rejected_profiles
     *           The number of rejected profiles.
     *           A `rejected_<signal>` field holding a `0` value indicates that the
     *           request was fully accepted.
     *     @type string $error_message
     *           A developer-facing human-readable message in English. It should be used
     *           either to explain why the server rejected parts of the data during a partial
     *           success or to convey warnings/suggestions during a full success. The message
     *           should offer guidance on how users can address such issues.
     *           error_message is an optional field. An error_message with an empty value
     *           is equivalent to it not being set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Collector\Profiles\V1Development\ProfilesService::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of rejected profiles.
     * A `rejected_<signal>` field holding a `0` value indicates that the
     * request was fully accepted.
     *
     * Generated from protobuf field <code>int64 rejected_profiles = 1;</code>
     * @return int|string
     */
    public function getRejectedProfiles()
    {
        return $this->rejected_profiles;
    }

    /**
     * The number of rejected profiles.
     * A `rejected_<signal>` field holding a `0` value indicates that the
     * request was fully accepted.
     *
     * Generated from protobuf field <code>int64 rejected_profiles = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRejectedProfiles($var)
    {
        GPBUtil::checkInt64($var);
        $this->rejected_profiles = $var;

        return $this;
    }

    /**
     * A developer-facing human-readable message in English. It should be used
     * either to explain why the server rejected parts of the data during a partial
     * success or to convey warnings/suggestions during a full success. The message
     * should offer guidance on how users can address such issues.
     * error_message is an optional field. An error_message with an empty value
     * is equivalent to it not being set.
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * A developer-facing human-readable message in English. It should be used
     * either to explain why the server rejected parts of the data during a partial
     * success or to convey warnings/suggestions during a full success. The message
     * should offer guidance on how users can address such issues.
     * error_message is an optional field. An error_message with an empty value
     * is equivalent to it not being set.
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

}

