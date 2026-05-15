# QuanhauApiDocs SDK utility: make_context
require_relative '../core/context'
module QuanhauApiDocsUtilities
  MakeContext = ->(ctxmap, basectx) {
    QuanhauApiDocsContext.new(ctxmap, basectx)
  }
end
