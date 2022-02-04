import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable()
  export class MuseeService {
    ouvertOuFermer = '';

  constructor(private http: HttpClient) {}

  getMusee() {
    return this.http.get(environment.ApiUrl.musee).toPromise();
  }
}
