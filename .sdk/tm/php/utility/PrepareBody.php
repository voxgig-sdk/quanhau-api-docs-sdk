<?php
declare(strict_types=1);

// QuanhauApiDocs SDK utility: prepare_body

class QuanhauApiDocsPrepareBody
{
    public static function call(QuanhauApiDocsContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
