package core

type QuanhauApiDocsError struct {
	IsQuanhauApiDocsError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewQuanhauApiDocsError(code string, msg string, ctx *Context) *QuanhauApiDocsError {
	return &QuanhauApiDocsError{
		IsQuanhauApiDocsError: true,
		Sdk:              "QuanhauApiDocs",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *QuanhauApiDocsError) Error() string {
	return e.Msg
}
