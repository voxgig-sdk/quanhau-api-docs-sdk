-- QuanhauApiDocs SDK exists test

local sdk = require("quanhau-api-docs_sdk")

describe("QuanhauApiDocsSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
