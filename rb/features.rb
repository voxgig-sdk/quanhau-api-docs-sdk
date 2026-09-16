# QuanhauApiDocs SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module QuanhauApiDocsFeatures
  def self.make_feature(name)
    case name
    when "base"
      QuanhauApiDocsBaseFeature.new
    when "ratelimit"
      QuanhauApiDocsRatelimitFeature.new
    when "retry"
      QuanhauApiDocsRetryFeature.new
    when "test"
      QuanhauApiDocsTestFeature.new
    when "timeout"
      QuanhauApiDocsTimeoutFeature.new
    else
      QuanhauApiDocsBaseFeature.new
    end
  end
end
