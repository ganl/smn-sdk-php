<?php

/**
 * Copyright (C) 2018. Huawei Technologies Co., LTD. All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of Apache License, Version 2.0.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * Apache License, Version 2.0 for more details.
 */

namespace SMN\Common;

/**
 * Class Constants
 * @package SMN\Common
 * @author zhangyx
 * @version 1.0.1
 */
class Constants
{
    const AUTH_URL = 'https://iam.{regionName}.myhwclouds.com/v3/auth/tokens';
    const AUTH_JSON = '{"auth":{"identity":{"methods":["password"],"password":{"user":{"name":"{userName}","domain":{"name":"{domainName}"},"password":"{password}"}}},"scope":{"project":{"name":"{regionName}"}}}}';
    const SMN_BASE_URL = 'https://smn.{regionName}.myhwclouds.com';
    const SMS_PUBLISH_API_URI = '/v2/{projectId}/notifications/sms';
    const SMS_MSG_REPORT_API_URI = '/v2/{projectId}/notifications/sms/report';
    const SMS_EVENT_API_URI = '/v2/{projectId}/notifications/sms/callback';
    const LIST_SMS_SINGS_API_URI = '/v2/{projectId}/notifications/sms_sign';
    const DELETE_SMS_SING_API_URI = '/v2/{projectId}/notifications/sms_sign/{signId}';
    const GET_SMS_MESSAGE_API_URI = '/v2/{projectId}/notifications/sms/message/{messageId}';
    const TOPIC_COMMON_API_URI = '/v2/{projectId}/notifications/topics';
    const TOPIC_WITH_URN_API_URI = '/v2/{projectId}/notifications/topics/{topicUrn}';
    const TOPIC_ATTRIBUTES_COMMON_API_URI = '/v2/{projectId}/notifications/topics/{topicUrn}/attributes';
    const TOPIC_ATTRIBUTES_WITH_NAME_API_URI = '/v2/{projectId}/notifications/topics/{topicUrn}/attributes/{name}';
    const PUBLISH_API_URI = '/v2/{projectId}/notifications/topics/{topicUrn}/publish';

    const DEFAULT_LIMIT = 100;
    const DEFAULT_OFFSET = 0;
}
