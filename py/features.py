# QuanhauApiDocs SDK feature factory

from feature.base_feature import QuanhauApiDocsBaseFeature
from feature.test_feature import QuanhauApiDocsTestFeature


def _make_feature(name):
    features = {
        "base": lambda: QuanhauApiDocsBaseFeature(),
        "test": lambda: QuanhauApiDocsTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
