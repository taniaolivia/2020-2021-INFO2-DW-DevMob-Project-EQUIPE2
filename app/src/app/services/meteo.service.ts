import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable()
export class MeteoService {
    items = [];

    constructor(
        private http: HttpClient) {}

    getMeteo() {
        return this.http.get(environment.ApiUrl.meteo).toPromise();
      }
  }