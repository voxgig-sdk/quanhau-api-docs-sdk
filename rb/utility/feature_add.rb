# QuanhauApiDocs SDK utility: feature_add
module QuanhauApiDocsUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
