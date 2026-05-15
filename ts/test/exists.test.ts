
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { QuanhauApiDocsSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await QuanhauApiDocsSDK.test()
    equal(null !== testsdk, true)
  })

})
