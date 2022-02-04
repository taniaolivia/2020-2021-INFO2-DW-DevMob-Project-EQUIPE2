import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable()
export class CarteBateauxService {
    items = [];

    constructor(
        private http: HttpClient) {}

    getBateaux() {
        return this.http.get(environment.ApiUrl.listeBateaux).toPromise();
      }
  }