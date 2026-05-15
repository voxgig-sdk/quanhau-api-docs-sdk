<?php
declare(strict_types=1);

// QuanhauApiDocs SDK utility: result_headers

class QuanhauApiDocsResultHeaders
{
    public static function call(QuanhauApiDocsContext $ctx): ?QuanhauApiDocsResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
