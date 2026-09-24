
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { QuanhauApiDocsSDK } from '..'


describe('exists', async () => {

  test('test-mode', () => {
    const testsdk = QuanhauApiDocsSDK.test()
    equal(testsdk instanceof QuanhauApiDocsSDK, true,
      'QuanhauApiDocsSDK.test() must return a client synchronously')
  })

})
