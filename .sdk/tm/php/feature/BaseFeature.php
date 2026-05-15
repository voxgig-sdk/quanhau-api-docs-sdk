<?php
declare(strict_types=1);

// QuanhauApiDocs SDK base feature

class QuanhauApiDocsBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(QuanhauApiDocsContext $ctx, array $options): void {}
    public function PostConstruct(QuanhauApiDocsContext $ctx): void {}
    public function PostConstructEntity(QuanhauApiDocsContext $ctx): void {}
    public function SetData(QuanhauApiDocsContext $ctx): void {}
    public function GetData(QuanhauApiDocsContext $ctx): void {}
    public function GetMatch(QuanhauApiDocsContext $ctx): void {}
    public function SetMatch(QuanhauApiDocsContext $ctx): void {}
    public function PrePoint(QuanhauApiDocsContext $ctx): void {}
    public function PreSpec(QuanhauApiDocsContext $ctx): void {}
    public function PreRequest(QuanhauApiDocsContext $ctx): void {}
    public function PreResponse(QuanhauApiDocsContext $ctx): void {}
    public function PreResult(QuanhauApiDocsContext $ctx): void {}
    public function PreDone(QuanhauApiDocsContext $ctx): void {}
    public function PreUnexpected(QuanhauApiDocsContext $ctx): void {}
}
