# QuanhauApiDocs SDK exists test

require "minitest/autorun"
require_relative "../QuanhauApiDocs_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = QuanhauApiDocsSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
