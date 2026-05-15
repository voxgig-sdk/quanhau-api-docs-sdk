# QuanhauApiDocs SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

QuanhauApiDocsUtility.registrar = ->(u) {
  u.clean = QuanhauApiDocsUtilities::Clean
  u.done = QuanhauApiDocsUtilities::Done
  u.make_error = QuanhauApiDocsUtilities::MakeError
  u.feature_add = QuanhauApiDocsUtilities::FeatureAdd
  u.feature_hook = QuanhauApiDocsUtilities::FeatureHook
  u.feature_init = QuanhauApiDocsUtilities::FeatureInit
  u.fetcher = QuanhauApiDocsUtilities::Fetcher
  u.make_fetch_def = QuanhauApiDocsUtilities::MakeFetchDef
  u.make_context = QuanhauApiDocsUtilities::MakeContext
  u.make_options = QuanhauApiDocsUtilities::MakeOptions
  u.make_request = QuanhauApiDocsUtilities::MakeRequest
  u.make_response = QuanhauApiDocsUtilities::MakeResponse
  u.make_result = QuanhauApiDocsUtilities::MakeResult
  u.make_point = QuanhauApiDocsUtilities::MakePoint
  u.make_spec = QuanhauApiDocsUtilities::MakeSpec
  u.make_url = QuanhauApiDocsUtilities::MakeUrl
  u.param = QuanhauApiDocsUtilities::Param
  u.prepare_auth = QuanhauApiDocsUtilities::PrepareAuth
  u.prepare_body = QuanhauApiDocsUtilities::PrepareBody
  u.prepare_headers = QuanhauApiDocsUtilities::PrepareHeaders
  u.prepare_method = QuanhauApiDocsUtilities::PrepareMethod
  u.prepare_params = QuanhauApiDocsUtilities::PrepareParams
  u.prepare_path = QuanhauApiDocsUtilities::PreparePath
  u.prepare_query = QuanhauApiDocsUtilities::PrepareQuery
  u.result_basic = QuanhauApiDocsUtilities::ResultBasic
  u.result_body = QuanhauApiDocsUtilities::ResultBody
  u.result_headers = QuanhauApiDocsUtilities::ResultHeaders
  u.transform_request = QuanhauApiDocsUtilities::TransformRequest
  u.transform_response = QuanhauApiDocsUtilities::TransformResponse
}
