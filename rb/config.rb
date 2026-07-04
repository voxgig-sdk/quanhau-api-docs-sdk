# QuanhauApiDocs SDK configuration

module QuanhauApiDocsConfig
  def self.make_config
    {
      "main" => {
        "name" => "QuanhauApiDocs",
      },
      "feature" => {
        "test" => {
          "options" => {
            "active" => false,
          },
        },
      },
      "options" => {
        "base" => "https://keyherlyswar.x10.mx",
        "headers" => {
          "content-type" => "application/json",
        },
        "entity" => {
          "api" => {},
        },
      },
      "entity" => {
        "api" => {
          "fields" => [
            {
              "active" => true,
              "name" => "data",
              "req" => false,
              "type" => "`$OBJECT`",
              "index$" => 0,
            },
            {
              "active" => true,
              "name" => "message",
              "req" => false,
              "type" => "`$STRING`",
              "index$" => 1,
            },
            {
              "active" => true,
              "name" => "status",
              "req" => false,
              "type" => "`$STRING`",
              "index$" => 2,
            },
          ],
          "name" => "api",
          "op" => {
            "load" => {
              "input" => "data",
              "name" => "load",
              "points" => [
                {
                  "active" => true,
                  "args" => {},
                  "method" => "GET",
                  "orig" => "/api",
                  "parts" => [
                    "api",
                  ],
                  "select" => {},
                  "transform" => {
                    "req" => "`reqdata`",
                    "res" => "`body`",
                  },
                  "index$" => 0,
                },
              ],
              "key$" => "load",
            },
          },
          "relations" => {
            "ancestors" => [],
          },
        },
      },
    }
  end


  def self.make_feature(name)
    require_relative 'features'
    QuanhauApiDocsFeatures.make_feature(name)
  end
end
