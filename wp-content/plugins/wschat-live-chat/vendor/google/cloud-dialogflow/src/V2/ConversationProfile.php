<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the services to connect to incoming Dialogflow conversations.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ConversationProfile</code>
 */
class ConversationProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of this conversation profile.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversationProfiles/<Conversation Profile ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. Human readable name for this profile. Max length 1024 bytes.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Output only. Create time of the conversation profile.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Update time of the conversation profile.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Configuration for an automated agent to use with this profile.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AutomatedAgentConfig automated_agent_config = 3;</code>
     */
    private $automated_agent_config = null;
    /**
     * Configuration for agent assistance to use with this profile.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig human_agent_assistant_config = 4;</code>
     */
    private $human_agent_assistant_config = null;
    /**
     * Configuration for connecting to a live agent.
     * Currently, this feature is not general available, please contact Google
     * to get access.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentHandoffConfig human_agent_handoff_config = 5;</code>
     */
    private $human_agent_handoff_config = null;
    /**
     * Configuration for publishing conversation lifecycle events.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig notification_config = 6;</code>
     */
    private $notification_config = null;
    /**
     * Configuration for logging conversation lifecycle events.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.LoggingConfig logging_config = 7;</code>
     */
    private $logging_config = null;
    /**
     * Configuration for publishing new message events. Event will be sent in
     * format of [ConversationEvent][google.cloud.dialogflow.v2.ConversationEvent]
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig new_message_event_notification_config = 8;</code>
     */
    private $new_message_event_notification_config = null;
    /**
     * Settings for speech transcription.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SpeechToTextConfig stt_config = 9;</code>
     */
    private $stt_config = null;
    /**
     * Language which represents the conversationProfile.
     * If unspecified, the default language code en-us applies. Users need to
     * create a ConversationProfile for each language they want to support.
     *
     * Generated from protobuf field <code>string language_code = 10;</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique identifier of this conversation profile.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversationProfiles/<Conversation Profile ID>`.
     *     @type string $display_name
     *           Required. Human readable name for this profile. Max length 1024 bytes.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Create time of the conversation profile.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Update time of the conversation profile.
     *     @type \Google\Cloud\Dialogflow\V2\AutomatedAgentConfig $automated_agent_config
     *           Configuration for an automated agent to use with this profile.
     *     @type \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig $human_agent_assistant_config
     *           Configuration for agent assistance to use with this profile.
     *     @type \Google\Cloud\Dialogflow\V2\HumanAgentHandoffConfig $human_agent_handoff_config
     *           Configuration for connecting to a live agent.
     *           Currently, this feature is not general available, please contact Google
     *           to get access.
     *     @type \Google\Cloud\Dialogflow\V2\NotificationConfig $notification_config
     *           Configuration for publishing conversation lifecycle events.
     *     @type \Google\Cloud\Dialogflow\V2\LoggingConfig $logging_config
     *           Configuration for logging conversation lifecycle events.
     *     @type \Google\Cloud\Dialogflow\V2\NotificationConfig $new_message_event_notification_config
     *           Configuration for publishing new message events. Event will be sent in
     *           format of [ConversationEvent][google.cloud.dialogflow.v2.ConversationEvent]
     *     @type \Google\Cloud\Dialogflow\V2\SpeechToTextConfig $stt_config
     *           Settings for speech transcription.
     *     @type string $language_code
     *           Language which represents the conversationProfile.
     *           If unspecified, the default language code en-us applies. Users need to
     *           create a ConversationProfile for each language they want to support.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of this conversation profile.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversationProfiles/<Conversation Profile ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique identifier of this conversation profile.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversationProfiles/<Conversation Profile ID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. Human readable name for this profile. Max length 1024 bytes.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Human readable name for this profile. Max length 1024 bytes.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Create time of the conversation profile.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Create time of the conversation profile.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Update time of the conversation profile.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Update time of the conversation profile.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Configuration for an automated agent to use with this profile.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AutomatedAgentConfig automated_agent_config = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2\AutomatedAgentConfig|null
     */
    public function getAutomatedAgentConfig()
    {
        return $this->automated_agent_config;
    }

    public function hasAutomatedAgentConfig()
    {
        return isset($this->automated_agent_config);
    }

    public function clearAutomatedAgentConfig()
    {
        unset($this->automated_agent_config);
    }

    /**
     * Configuration for an automated agent to use with this profile.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AutomatedAgentConfig automated_agent_config = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\AutomatedAgentConfig $var
     * @return $this
     */
    public function setAutomatedAgentConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\AutomatedAgentConfig::class);
        $this->automated_agent_config = $var;

        return $this;
    }

    /**
     * Configuration for agent assistance to use with this profile.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig human_agent_assistant_config = 4;</code>
     * @return \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig|null
     */
    public function getHumanAgentAssistantConfig()
    {
        return $this->human_agent_assistant_config;
    }

    public function hasHumanAgentAssistantConfig()
    {
        return isset($this->human_agent_assistant_config);
    }

    public function clearHumanAgentAssistantConfig()
    {
        unset($this->human_agent_assistant_config);
    }

    /**
     * Configuration for agent assistance to use with this profile.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentAssistantConfig human_agent_assistant_config = 4;</code>
     * @param \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig $var
     * @return $this
     */
    public function setHumanAgentAssistantConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\HumanAgentAssistantConfig::class);
        $this->human_agent_assistant_config = $var;

        return $this;
    }

    /**
     * Configuration for connecting to a live agent.
     * Currently, this feature is not general available, please contact Google
     * to get access.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentHandoffConfig human_agent_handoff_config = 5;</code>
     * @return \Google\Cloud\Dialogflow\V2\HumanAgentHandoffConfig|null
     */
    public function getHumanAgentHandoffConfig()
    {
        return $this->human_agent_handoff_config;
    }

    public function hasHumanAgentHandoffConfig()
    {
        return isset($this->human_agent_handoff_config);
    }

    public function clearHumanAgentHandoffConfig()
    {
        unset($this->human_agent_handoff_config);
    }

    /**
     * Configuration for connecting to a live agent.
     * Currently, this feature is not general available, please contact Google
     * to get access.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.HumanAgentHandoffConfig human_agent_handoff_config = 5;</code>
     * @param \Google\Cloud\Dialogflow\V2\HumanAgentHandoffConfig $var
     * @return $this
     */
    public function setHumanAgentHandoffConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\HumanAgentHandoffConfig::class);
        $this->human_agent_handoff_config = $var;

        return $this;
    }

    /**
     * Configuration for publishing conversation lifecycle events.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig notification_config = 6;</code>
     * @return \Google\Cloud\Dialogflow\V2\NotificationConfig|null
     */
    public function getNotificationConfig()
    {
        return $this->notification_config;
    }

    public function hasNotificationConfig()
    {
        return isset($this->notification_config);
    }

    public function clearNotificationConfig()
    {
        unset($this->notification_config);
    }

    /**
     * Configuration for publishing conversation lifecycle events.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig notification_config = 6;</code>
     * @param \Google\Cloud\Dialogflow\V2\NotificationConfig $var
     * @return $this
     */
    public function setNotificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\NotificationConfig::class);
        $this->notification_config = $var;

        return $this;
    }

    /**
     * Configuration for logging conversation lifecycle events.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.LoggingConfig logging_config = 7;</code>
     * @return \Google\Cloud\Dialogflow\V2\LoggingConfig|null
     */
    public function getLoggingConfig()
    {
        return $this->logging_config;
    }

    public function hasLoggingConfig()
    {
        return isset($this->logging_config);
    }

    public function clearLoggingConfig()
    {
        unset($this->logging_config);
    }

    /**
     * Configuration for logging conversation lifecycle events.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.LoggingConfig logging_config = 7;</code>
     * @param \Google\Cloud\Dialogflow\V2\LoggingConfig $var
     * @return $this
     */
    public function setLoggingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\LoggingConfig::class);
        $this->logging_config = $var;

        return $this;
    }

    /**
     * Configuration for publishing new message events. Event will be sent in
     * format of [ConversationEvent][google.cloud.dialogflow.v2.ConversationEvent]
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig new_message_event_notification_config = 8;</code>
     * @return \Google\Cloud\Dialogflow\V2\NotificationConfig|null
     */
    public function getNewMessageEventNotificationConfig()
    {
        return $this->new_message_event_notification_config;
    }

    public function hasNewMessageEventNotificationConfig()
    {
        return isset($this->new_message_event_notification_config);
    }

    public function clearNewMessageEventNotificationConfig()
    {
        unset($this->new_message_event_notification_config);
    }

    /**
     * Configuration for publishing new message events. Event will be sent in
     * format of [ConversationEvent][google.cloud.dialogflow.v2.ConversationEvent]
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.NotificationConfig new_message_event_notification_config = 8;</code>
     * @param \Google\Cloud\Dialogflow\V2\NotificationConfig $var
     * @return $this
     */
    public function setNewMessageEventNotificationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\NotificationConfig::class);
        $this->new_message_event_notification_config = $var;

        return $this;
    }

    /**
     * Settings for speech transcription.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SpeechToTextConfig stt_config = 9;</code>
     * @return \Google\Cloud\Dialogflow\V2\SpeechToTextConfig|null
     */
    public function getSttConfig()
    {
        return $this->stt_config;
    }

    public function hasSttConfig()
    {
        return isset($this->stt_config);
    }

    public function clearSttConfig()
    {
        unset($this->stt_config);
    }

    /**
     * Settings for speech transcription.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SpeechToTextConfig stt_config = 9;</code>
     * @param \Google\Cloud\Dialogflow\V2\SpeechToTextConfig $var
     * @return $this
     */
    public function setSttConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\SpeechToTextConfig::class);
        $this->stt_config = $var;

        return $this;
    }

    /**
     * Language which represents the conversationProfile.
     * If unspecified, the default language code en-us applies. Users need to
     * create a ConversationProfile for each language they want to support.
     *
     * Generated from protobuf field <code>string language_code = 10;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Language which represents the conversationProfile.
     * If unspecified, the default language code en-us applies. Users need to
     * create a ConversationProfile for each language they want to support.
     *
     * Generated from protobuf field <code>string language_code = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}
