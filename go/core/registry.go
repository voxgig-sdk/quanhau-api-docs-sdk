package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewApiEntityFunc func(client *QuanhauApiDocsSDK, entopts map[string]any) QuanhauApiDocsEntity

