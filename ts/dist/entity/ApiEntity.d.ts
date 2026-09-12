import { QuanhauApiDocsEntityBase } from '../QuanhauApiDocsEntityBase';
import type { QuanhauApiDocsSDK } from '../QuanhauApiDocsSDK';
import type { Control } from '../types';
import type { Api, ApiLoadMatch } from '../QuanhauApiDocsTypes';
declare class ApiEntity extends QuanhauApiDocsEntityBase<Api> {
    constructor(client: QuanhauApiDocsSDK, entopts: any);
    make(this: ApiEntity): ApiEntity;
    load(this: any, reqmatch?: ApiLoadMatch, ctrl?: Control): Promise<ApiEntity>;
}
export { ApiEntity };
