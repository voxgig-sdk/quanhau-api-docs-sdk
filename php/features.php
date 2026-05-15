<?php
declare(strict_types=1);

// QuanhauApiDocs SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class QuanhauApiDocsFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new QuanhauApiDocsBaseFeature();
            case "test":
                return new QuanhauApiDocsTestFeature();
            default:
                return new QuanhauApiDocsBaseFeature();
        }
    }
}
