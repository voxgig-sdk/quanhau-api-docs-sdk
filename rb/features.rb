# QuanhauApiDocs SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module QuanhauApiDocsFeatures
  def self.make_feature(name)
    case name
    when "base"
      QuanhauApiDocsBaseFeature.new
    when "test"
      QuanhauApiDocsTestFeature.new
    else
      QuanhauApiDocsBaseFeature.new
    end
  end
end
