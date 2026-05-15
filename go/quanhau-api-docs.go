package voxgigquanhauapidocssdk

import (
	"github.com/voxgig-sdk/quanhau-api-docs-sdk/core"
	"github.com/voxgig-sdk/quanhau-api-docs-sdk/entity"
	"github.com/voxgig-sdk/quanhau-api-docs-sdk/feature"
	_ "github.com/voxgig-sdk/quanhau-api-docs-sdk/utility"
)

// Type aliases preserve external API.
type QuanhauApiDocsSDK = core.QuanhauApiDocsSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type QuanhauApiDocsEntity = core.QuanhauApiDocsEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type QuanhauApiDocsError = core.QuanhauApiDocsError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewApiEntityFunc = func(client *core.QuanhauApiDocsSDK, entopts map[string]any) core.QuanhauApiDocsEntity {
		return entity.NewApiEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewQuanhauApiDocsSDK = core.NewQuanhauApiDocsSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
