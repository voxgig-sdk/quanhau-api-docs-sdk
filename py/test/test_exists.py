# ProjectName SDK exists test

import pytest
from quanhauapidocs_sdk import QuanhauApiDocsSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = QuanhauApiDocsSDK.test(None, None)
        assert testsdk is not None
