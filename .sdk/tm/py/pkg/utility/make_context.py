# QuanhauApiDocs SDK utility: make_context

from projectname_sdk.core.context import QuanhauApiDocsContext


def make_context_util(ctxmap, basectx):
    return QuanhauApiDocsContext(ctxmap, basectx)
