# frozen_string_literal: true

# Typed models for the QuanhauApiDocs SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# Api entity data model.
#
# @!attribute [rw] data
#   @return [Hash, nil]
#
# @!attribute [rw] message
#   @return [String, nil]
#
# @!attribute [rw] status
#   @return [String, nil]
Api = Struct.new(
  :data,
  :message,
  :status,
  keyword_init: true
)

# Request payload for Api#load.
#
# @!attribute [rw] data
#   @return [Hash, nil]
#
# @!attribute [rw] message
#   @return [String, nil]
#
# @!attribute [rw] status
#   @return [String, nil]
ApiLoadMatch = Struct.new(
  :data,
  :message,
  :status,
  keyword_init: true
)

