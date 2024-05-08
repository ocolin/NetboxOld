<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Params\Tenancy;

use Cruzio\lib\Netbox\Params\Params_Core;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class ContactAssignments extends Params_Core implements ParamsInterface
{

    /**
     * @var int|array<int> $contact_id
     */
    protected int|array $contact_id;

    /**
     * @var int|array<int> $contact__n
     */
    protected int|array $contact__n;

    /**
     * @var int|array<int> $contact_group
     */
    protected int|array $contact_group;

    /**
     * @var int|array<int> $contact_group__n
     */
    protected int|array $contact_group__n;

    /**
     * @var int|array<int> $contact_role
     */
    protected int|array $contact_role;

    /**
     * @var int|array<int> $contact_role__n
     */
    protected int|array $contact_role__n;

    /**
     * @var int|array<int> $created
     */
    protected int|array $created;

    /**
     * @var string|array<string> $created__empty
     */
    protected string|array $created__empty;

    /**
     * @var string|array<string> $created__gt
     */
    protected string|array $created__gt;

    /**
     * @var string|array<string> $created__gte
     */
    protected string|array $created__gte;

    /**
     * @var string|array<string> $created__lt
     */
    protected string|array $created__lt;

    /**
     * @var string|array<string> $created__lte
     */
    protected string|array $created__lte;

    /**
     * @var string|array<string> $created__n
     */
    protected string|array $created__n;
    protected string $created_by_request;

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

    /**
     * @var string|array<string> $last_updated
     */
    protected string|array $last_updated;

    /**
     * @var string|array<string> $last_updated__empty
     */
    protected string|array $last_updated__empty;

    /**
     * @var string|array<string> $last_updated__gt
     */
    protected string|array $last_updated__gt;

    /**
     * @var string|array<string> $last_updated__gte
     */
    protected string|array $last_updated__gte;

    /**
     * @var string|array<string> $last_updated__lt
     */
    protected string|array $last_updated__lt;

    /**
     * @var string|array<string> $last_updated__lte
     */
    protected string|array $last_updated__lte;

    /**
     * @var string|array<string> $last_updated__n
     */
    protected string|array $last_updated__n;
    protected int $limit;
    protected string $modified_by_request;


    /**
     * @var int|array<int> $object_id
     */
    protected int|array $object_id;
    protected bool $object_id__empty;

    /**
     * @var int|array<int> $object_id__gt
     */
    protected int|array $object_id__gt;

    /**
     * @var int|array<int> $object_id__gte
     */
    protected int|array $object_id__gte;

    /**
     * @var int|array<int> $object_id__lt
     */
    protected int|array $object_id__lt;

    /**
     * @var int|array<int> $object_id__lte
     */
    protected int|array $object_id__lte;

    /**
     * @var int|array<int> $object_id__n
     */
    protected int|array $object_id__n;
    protected int $offset;
    protected string $ordering;
    protected string $priority;
    protected string $priority__n;
    protected string $q;


    /**
     * @var string|array<string> $role
     */
    protected string|array $role;

    /**
     * @var string|array<string> $role__n
     */
    protected string|array $role__n;

    /**
     * @var int|array<int> $role_id
     */
    protected int|array $role_id;

    /**
     * @var int|array<int> $role_id__n
     */
    protected int|array $role_id__n;

    /**
     * @var string|array<string> $tag
     */
    protected string|array $tag;

    /**
     * @var string|array<string> $tag__n
     */
    protected string|array $tag__n;
    protected string $updated_by_request;
}