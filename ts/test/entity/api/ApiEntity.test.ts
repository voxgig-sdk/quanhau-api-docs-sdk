

import Path from 'node:path'
import * as Fs from 'node:fs'

import { test, describe, afterEach } from 'node:test'
import assert from 'node:assert'
import { createLiveTransport } from '../../live-runner'
import { runLiveEntity } from '../../live-entity'


import { QuanhauApiDocsSDK, BaseFeature, stdutil } from '../../..'

import {
  envOverride,
  liveClientOptions,
  liveDelay,
  loadEnvLocal,
  makeCtrl,
  makeMatch,
  makeReqdata,
  makeStepData,
  makeValid,
  maybeSkipControl,
} from '../../utility'


loadEnvLocal(__dirname + '/../../../.env.local')


describe('ApiEntity', async () => {

  // Per-test live pacing. Delay is read from sdk-test-control.json's
  // `test.live.delayMs`; only sleeps when QUANHAU_API_DOCS_TEST_LIVE=TRUE.
  afterEach(liveDelay('QUANHAU_API_DOCS_TEST_LIVE'))

  test('instance', async () => {
    const testsdk = QuanhauApiDocsSDK.test()
    const ent = testsdk.Api()
    assert(null != ent)
  })


  test('basic', async (t) => {

    const live = 'TRUE' === process.env.QUANHAU_API_DOCS_TEST_LIVE
    for (const op of ['load']) {
      if (!live && maybeSkipControl(t, 'entityOp', 'api.' + op, live)) return
    }

    
    const setup = basicSetup()
    if (setup.live) {
      return runLiveEntity(setup, {"active":true,"alias":{"field":{}},"fields":{"developer":{"a":true,"h":"Developer","n":"developer","r":false,"t":"`$STRING`","key$":"developer","index$":0},"version":{"a":true,"h":"Version","n":"version","r":false,"t":"`$STRING`","key$":"version","index$":1}},"name":"api","op":{"load":{"input":"data","name":"load","points":[{"a":true,"co":{"id":"GET /api","source":"openapi3","version":2},"g":{},"k":"http","m":"GET","o":"/api","q":{},"r":{},"s":[{"lit":"api"}],"t":{"req":"`reqdata`","res":"`body.data`"},"index$":0}],"key$":"load"}},"relations":{"ancestors":[]},"key$":"api","name__orig":"api","Name":"Api","name_":"api","name-":"api","NAME":"API","index$":0}, {"active":true,"entity":"api","key$":"BasicApiFlow","kind":"basic","name":"BasicApiFlow","param":{},"step":[{"a":true,"d":{},"i":{"ref":"api_ref01","srcdatavar":"api_ref01_data","suffix":"_dt0"},"m":{},"o":"load","s":[],"v":[{"apply":"TextFieldMark","def":{"mark":"Mark01-api_ref01"}}],"index$":0}]}, 'Api', {"GET /api":{"protocol":"http","operationId":"getApiInfo","responses":{"200":{"description":"Successful response","content":{"application/json":{"schema":{"type":"object","properties":{"status":{"example":"success","key$":"status","type":"string"},"message":{"example":"API is operational","key$":"message","type":"string"},"data":{"key$":"data","properties":{"developer":{"example":"QuanHau (Herlys)","type":"string","key$":"developer"},"version":{"example":"1.0.0","type":"string","key$":"version"}},"type":"object","index$":0}}}}}},"500":{"description":"Internal server error","content":{"application/json":{"schema":{"type":"object","properties":{"status":{"type":"string","example":"error"},"message":{"type":"string","example":"An error occurred"},"code":{"type":"integer","example":500}},"x-ref":"#/components/schemas/Error"}}}}},"parameters":[],"securitySource":"unspecified"}})
    }
    const client = setup.client
    const struct = setup.struct

    const isempty = struct.isempty
    const select = struct.select

    let api_ref01_data = Object.values(setup.data.existing.api)[0] as any

    // LOAD
    const api_ref01_ent = client.Api()
    const api_ref01_match_dt0: any = {}
    const api_ref01_data_dt0 = (await api_ref01_ent.load(api_ref01_match_dt0)).data()
    assert(null != api_ref01_data_dt0)


  })
})



function basicSetup(extra?: any) {
  // TODO: fix test def options
  const options: any = {} // null

  // TODO: needs test utility to resolve path
  const entityDataFile =
    Path.resolve(__dirname, 
      '../../../../.sdk/test/entity/api/ApiTestData.json')

  // TODO: file ready util needed?
  const entityDataSource = Fs.readFileSync(entityDataFile).toString('utf8')

  // TODO: need a xlang JSON parse utility in voxgig/struct with better error msgs
  const entityData = JSON.parse(entityDataSource)

  options.entity = entityData.existing

  let client = QuanhauApiDocsSDK.test(options, extra)
  const struct = client.utility().struct
  const merge = struct.merge
  const transform = struct.transform

  let idmap = transform(
    ['api01','api02','api03'],
    {
      '`$PACK`': ['', {
        '`$KEY`': '`$COPY`',
        '`$VAL`': ['`$FORMAT`', 'upper', '`$COPY`']
      }]
    })

  const env = envOverride({
    'QUANHAU_API_DOCS_TEST_API_ENTID': idmap,
    'QUANHAU_API_DOCS_TEST_LIVE': 'FALSE',
    'QUANHAU_API_DOCS_TEST_EXPLAIN': 'FALSE',
  })

  idmap = env['QUANHAU_API_DOCS_TEST_API_ENTID']

  const live = 'TRUE' === env.QUANHAU_API_DOCS_TEST_LIVE

  const transport = createLiveTransport()
  if (live) {
    const rawIds = process.env['QUANHAU_API_DOCS_TEST_API_ENTID']
    idmap = rawIds && rawIds.trim() ? JSON.parse(rawIds) : {}
    if (!idmap || Array.isArray(idmap) || typeof idmap !== 'object') {
      throw new Error('Live ENTID must be a JSON object')
    }
    client = new QuanhauApiDocsSDK(merge([
      // FIRST, so the generated fields below win: sdk-test-control.json's
      // test.client.options adds to the live client, it does not redirect it.
      liveClientOptions(),
      {
      },
      // 'extra || {}', not a bare 'extra': struct.merge returns UNDEFINED when the
      // last entry is undefined, and basicSetup is normally called with no
      // argument at all - so a bare 'extra' silently discarded the apikey
      // and server values above and handed the SDK undefined. Harmless
      // while there was nothing in that object; not harmless now.
      extra || {},
      { system: { fetch: transport.fetch } }
    ]))
  }

  const setup = {
    idmap,
    env,
    options,
    client,
    struct,
    data: entityData,
    explain: 'TRUE' === env.QUANHAU_API_DOCS_TEST_EXPLAIN,
    live,
    transport,
    now: Date.now(),
  }

  return setup
}
  
