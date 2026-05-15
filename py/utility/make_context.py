# QuanhauApiDocs SDK utility: make_context

from core.context import QuanhauApiDocsContext


def make_context_util(ctxmap, basectx):
    return QuanhauApiDocsContext(ctxmap, basectx)
