# QuanhauApiDocs SDK feature factory

from quanhauapidocs_sdk.feature.base_feature import QuanhauApiDocsBaseFeature
from quanhauapidocs_sdk.feature.test_feature import QuanhauApiDocsTestFeature


def _make_feature(name):
    features = {
        "base": lambda: QuanhauApiDocsBaseFeature(),
        "test": lambda: QuanhauApiDocsTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
