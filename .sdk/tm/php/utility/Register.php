<?php
declare(strict_types=1);

// QuanhauApiDocs SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

QuanhauApiDocsUtility::setRegistrar(function (QuanhauApiDocsUtility $u): void {
    $u->clean = [QuanhauApiDocsClean::class, 'call'];
    $u->done = [QuanhauApiDocsDone::class, 'call'];
    $u->make_error = [QuanhauApiDocsMakeError::class, 'call'];
    $u->feature_add = [QuanhauApiDocsFeatureAdd::class, 'call'];
    $u->feature_hook = [QuanhauApiDocsFeatureHook::class, 'call'];
    $u->feature_init = [QuanhauApiDocsFeatureInit::class, 'call'];
    $u->fetcher = [QuanhauApiDocsFetcher::class, 'call'];
    $u->make_fetch_def = [QuanhauApiDocsMakeFetchDef::class, 'call'];
    $u->make_context = [QuanhauApiDocsMakeContext::class, 'call'];
    $u->make_options = [QuanhauApiDocsMakeOptions::class, 'call'];
    $u->make_request = [QuanhauApiDocsMakeRequest::class, 'call'];
    $u->make_response = [QuanhauApiDocsMakeResponse::class, 'call'];
    $u->make_result = [QuanhauApiDocsMakeResult::class, 'call'];
    $u->make_point = [QuanhauApiDocsMakePoint::class, 'call'];
    $u->make_spec = [QuanhauApiDocsMakeSpec::class, 'call'];
    $u->make_url = [QuanhauApiDocsMakeUrl::class, 'call'];
    $u->param = [QuanhauApiDocsParam::class, 'call'];
    $u->prepare_auth = [QuanhauApiDocsPrepareAuth::class, 'call'];
    $u->prepare_body = [QuanhauApiDocsPrepareBody::class, 'call'];
    $u->prepare_headers = [QuanhauApiDocsPrepareHeaders::class, 'call'];
    $u->prepare_method = [QuanhauApiDocsPrepareMethod::class, 'call'];
    $u->prepare_params = [QuanhauApiDocsPrepareParams::class, 'call'];
    $u->prepare_path = [QuanhauApiDocsPreparePath::class, 'call'];
    $u->prepare_query = [QuanhauApiDocsPrepareQuery::class, 'call'];
    $u->result_basic = [QuanhauApiDocsResultBasic::class, 'call'];
    $u->result_body = [QuanhauApiDocsResultBody::class, 'call'];
    $u->result_headers = [QuanhauApiDocsResultHeaders::class, 'call'];
    $u->transform_request = [QuanhauApiDocsTransformRequest::class, 'call'];
    $u->transform_response = [QuanhauApiDocsTransformResponse::class, 'call'];
});
