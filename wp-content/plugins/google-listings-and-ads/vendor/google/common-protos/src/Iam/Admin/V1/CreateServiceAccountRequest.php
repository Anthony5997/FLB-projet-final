<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The service account create request.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.CreateServiceAccountRequest</code>
 */
class CreateServiceAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The account id that is used to generate the service account
     * email address and a stable unique id. It is unique within a project,
     * must be 6-30 characters long, and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     *
     * Generated from protobuf field <code>string account_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $account_id = '';
    /**
     * The [ServiceAccount][google.iam.admin.v1.ServiceAccount] resource to
     * create. Currently, only the following values are user assignable:
     * `display_name` and `description`.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccount service_account = 3;</code>
     */
    private $service_account = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the project associated with the service
     *           accounts, such as `projects/my-project-123`.
     *     @type string $account_id
     *           Required. The account id that is used to generate the service account
     *           email address and a stable unique id. It is unique within a project,
     *           must be 6-30 characters long, and match the regular expression
     *           `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     *     @type \Google\Iam\Admin\V1\ServiceAccount $service_account
     *           The [ServiceAccount][google.iam.admin.v1.ServiceAccount] resource to
     *           create. Currently, only the following values are user assignable:
     *           `display_name` and `description`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The account id that is used to generate the service account
     * email address and a stable unique id. It is unique within a project,
     * must be 6-30 characters long, and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     *
     * Generated from protobuf field <code>string account_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Required. The account id that is used to generate the service account
     * email address and a stable unique id. It is unique within a project,
     * must be 6-30 characters long, and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     *
     * Generated from protobuf field <code>string account_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     * The [ServiceAccount][google.iam.admin.v1.ServiceAccount] resource to
     * create. Currently, only the following values are user assignable:
     * `display_name` and `description`.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccount service_account = 3;</code>
     * @return \Google\Iam\Admin\V1\ServiceAccount
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * The [ServiceAccount][google.iam.admin.v1.ServiceAccount] resource to
     * create. Currently, only the following values are user assignable:
     * `display_name` and `description`.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.ServiceAccount service_account = 3;</code>
     * @param \Google\Iam\Admin\V1\ServiceAccount $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Iam\Admin\V1\ServiceAccount::class);
        $this->service_account = $var;

        return $this;
    }

}

