<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Users;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Users extends Params_Core implements ParamsInterface
{

    /**
     * @var string|array<string> $email
     */
    protected string|array $email;
    protected bool $email__empty;

    /**
     * @var string|array<string> $email__ic
     */
    protected string|array $email__ic;

    /**
     * @var string|array<string> $email__ie
     */
    protected string|array $email__ie;

    /**
     * @var string|array<string> $email__iew
     */
    protected string|array $email__iew;

    /**
     * @var string|array<string> $email__isw
     */
    protected string|array $email__isw;

    /**
     * @var string|array<string> $email__n
     */
    protected string|array $email__n;

    /**
     * @var string|array<string> $email__nic
     */
    protected string|array $email__nic;

    /**
     * @var string|array<string> $email__nie
     */
    protected string|array $email__nie;

    /**
     * @var string|array<string> $email__niew
     */
    protected string|array $email__niew;

    /**
     * @var string|array<string> $email__nisw
     */
    protected string|array $email__nisw;

    /**
     * @var string|array<string> $first_name
     */
    protected string|array $first_name;
    protected bool $first_name__empty;

    /**
     * @var string|array<string> $first_name__ic
     */
    protected string|array $first_name__ic;

    /**
     * @var string|array<string> $first_name__ie
     */
    protected string|array $first_name__ie;

    /**
     * @var string|array<string> $first_name__iew
     */
    protected string|array $first_name__iew;

    /**
     * @var string|array<string> $first_name__isw
     */
    protected string|array $first_name__isw;

    /**
     * @var string|array<string> $first_name__n
     */
    protected string|array $first_name__n;

    /**
     * @var string|array<string> $first_name__nic
     */
    protected string|array $first_name__nic;

    /**
     * @var string|array<string> $first_name__nie
     */
    protected string|array $first_name__nie;

    /**
     * @var string|array<string> $first_name__niew
     */
    protected string|array $first_name__niew;

    /**
     * @var string|array<string> $first_name__nisw
     */
    protected string|array $first_name__nisw;


    /**
     * @var int|array<int> $group
     */
    protected int|array $group;

    /**
     * @var int|array<int> $group__n
     */
    protected int|array $group__n;

    /**
     * @var int|array<int> $group_id
     */
    protected int|array $group_id;

    /**
     * @var int|array<int> $group_id__n
     */
    protected int|array $group_id__n;


    /**
     * @var int|array<int> $id
     */
    protected int|array $id;
    protected bool $id__empty;

    /**
     * @var int|array<int> $id__gt
     */
    protected int|array $id__gt;

    /**
     * @var int|array<int> $id__gte
     */
    protected int|array $id__gte;

    /**
     * @var int|array<int> $id__lt
     */
    protected int|array $id__lt;

    /**
     * @var int|array<int> $id__lte
     */
    protected int|array $id__lte;

    /**
     * @var int|array<int> $id__n
     */
    protected int|array $id__n;
    protected bool $is_active;
    protected bool $is_staff;
    protected bool $is_superuser;

    /**
     * @var string|array<string> $last_name
     */
    protected string|array $last_name;
    protected bool $last_name__empty;

    /**
     * @var string|array<string> $last_name__ic
     */
    protected string|array $last_name__ic;

    /**
     * @var string|array<string> $last_name__ie
     */
    protected string|array $last_name__ie;

    /**
     * @var string|array<string> $last_name__iew
     */
    protected string|array $last_name__iew;

    /**
     * @var string|array<string> $last_name__isw
     */
    protected string|array $last_name__isw;

    /**
     * @var string|array<string> $last_name__n
     */
    protected string|array $last_name__n;

    /**
     * @var string|array<string> $last_name__nic
     */
    protected string|array $last_name__nic;

    /**
     * @var string|array<string> $last_name__nie
     */
    protected string|array $last_name__nie;

    /**
     * @var string|array<string> $last_name__niew
     */
    protected string|array $last_name__niew;

    /**
     * @var string|array<string> $last_name__nisw
     */
    protected string|array $last_name__nisw;
    protected int $limit;
    protected int $offset;
    protected string $ordering;
    protected string $q;

    /**
     * @var string|array<string> $username
     */
    protected string|array $username;
    protected bool $username__empty;

    /**
     * @var string|array<string> $username__ic
     */
    protected string|array $username__ic;

    /**
     * @var string|array<string> $username__ie
     */
    protected string|array $username__ie;

    /**
     * @var string|array<string> $username__iew
     */
    protected string|array $username__iew;

    /**
     * @var string|array<string> $username__isw
     */
    protected string|array $username__isw;

    /**
     * @var string|array<string> $username__n
     */
    protected string|array $username__n;

    /**
     * @var string|array<string> $username__nic
     */
    protected string|array $username__nic;

    /**
     * @var string|array<string> $username__nie
     */
    protected string|array $username__nie;

    /**
     * @var string|array<string> $username__niew
     */
    protected string|array $username__niew;

    /**
     * @var string|array<string> $username__nisw
     */
    protected string|array $username__nisw;

}
/**
 * {
     * "count": 123,
     * "next": "http://api.example.org/accounts/?offset=400&limit=100",
     * "previous": "http://api.example.org/accounts/?offset=200&limit=100",
     * "results": [
         * {
             * "id": 0,
             * "url": "string",
             * "display": "string",
             * "username": "fwjcKatYZjW.IrF8Z_Yq9M8wrz7pHsAVqkzniXf0u0TR6RMs.IQgyZ04-5",
             * "first_name": "string",
             * "last_name": "string",
             * "email": "user@example.com",
             * "is_staff": true,
             * "is_active": true,
             * "date_joined": "2024-04-05T17:16:29.492Z",
             * "last_login": "2024-04-05T17:16:29.492Z",
             * "groups": [
                * 0
             * ]
         * }
     * ]
 * }
 */