<?php
declare(strict_types=1);

// QuanhauApiDocs SDK utility: feature_add

class QuanhauApiDocsFeatureAdd
{
    public static function call(QuanhauApiDocsContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
