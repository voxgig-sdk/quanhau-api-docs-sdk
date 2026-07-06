<?php
declare(strict_types=1);

// Typed models for the QuanhauApiDocs SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.
//
// These are documentation-grade value objects (PHP 8 typed properties),
// registered on the composer classmap autoload. The SDK boundary exchanges
// assoc-arrays; these classes name the shapes for tooling and typed callers.

/** Api entity data model. */
class Api
{
    public ?array $data = null;
    public ?string $message = null;
    public ?string $status = null;
}

/** Request payload for Api#load. */
class ApiLoadMatch
{
    public ?array $data = null;
    public ?string $message = null;
    public ?string $status = null;
}

