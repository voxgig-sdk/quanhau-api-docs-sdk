<?php
declare(strict_types=1);

// QuanhauApiDocs SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class QuanhauApiDocsMakeContext
{
    public static function call(array $ctxmap, ?QuanhauApiDocsContext $basectx): QuanhauApiDocsContext
    {
        return new QuanhauApiDocsContext($ctxmap, $basectx);
    }
}
