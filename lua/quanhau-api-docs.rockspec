package = "voxgig-sdk-quanhau-api-docs"
version = "0.0-1"
source = {
  url = "git://github.com/voxgig-sdk/quanhau-api-docs-sdk.git"
}
description = {
  summary = "QuanhauApiDocs SDK for Lua",
  license = "MIT"
}
dependencies = {
  "lua >= 5.3",
  "dkjson >= 2.5",
  "dkjson >= 2.5",
}
build = {
  type = "builtin",
  modules = {
    ["quanhau-api-docs_sdk"] = "quanhau-api-docs_sdk.lua",
    ["config"] = "config.lua",
    ["features"] = "features.lua",
  }
}
