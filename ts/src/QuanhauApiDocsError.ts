
import { Context } from './Context'


class QuanhauApiDocsError extends Error {

  isQuanhauApiDocsError = true

  sdk = 'QuanhauApiDocs'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  QuanhauApiDocsError
}

