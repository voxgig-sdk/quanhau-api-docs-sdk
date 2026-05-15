<?php
declare(strict_types=1);

// QuanhauApiDocs SDK utility: result_body

class QuanhauApiDocsResultBody
{
    public static function call(QuanhauApiDocsContext $ctx): ?QuanhauApiDocsResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
