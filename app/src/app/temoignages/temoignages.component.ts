import { Component, OnInit } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { ActivatedRoute } from '@angular/router';
import {Router} from '@angular/router';
import { Observable } from 'rxjs';
import { switchMap } from 'rxjs/operators';



@Component({
  selector: 'app-temoignages',
  templateUrl: './temoignages.component.html',
  styleUrls: ['./temoignages.component.css']
})
export class TemoignagesComponent implements OnInit {
  data: any =[];
  nomunique: string = '';
  constructor(private router: Router,
    private http: HttpClient,
    private route: ActivatedRoute) {
    this.route.queryParams.subscribe(params => {

      this.nomunique = params['nomunique'];
  });
   }

   ngOnInit(): void
    {

    this.nomunique = this.route.snapshot.params.nomunique;
    this.http.get('http://localhost:9999/api/bateaux/' + this.nomunique + '/temoignages').subscribe((result) => {
      this.data = result;
      });
  }

}
