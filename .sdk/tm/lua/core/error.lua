-- QuanhauApiDocs SDK error

local QuanhauApiDocsError = {}
QuanhauApiDocsError.__index = QuanhauApiDocsError


function QuanhauApiDocsError.new(code, msg, ctx)
  local self = setmetatable({}, QuanhauApiDocsError)
  self.is_sdk_error = true
  self.sdk = "QuanhauApiDocs"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function QuanhauApiDocsError:error()
  return self.msg
end


function QuanhauApiDocsError:__tostring()
  return self.msg
end


return QuanhauApiDocsError
