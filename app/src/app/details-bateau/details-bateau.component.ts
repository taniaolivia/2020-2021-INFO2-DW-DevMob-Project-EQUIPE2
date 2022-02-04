import { Component, OnInit } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { Router } from '@angular/router';
import {ActivatedRoute} from '@angular/router';
import { environment } from 'src/environments/environment';


@Component({
  selector: 'app-details-bateau',
  templateUrl: './details-bateau.component.html',
  styleUrls: ['./details-bateau.component.css']
})
export class DetailsBateauComponent implements OnInit 
{ 
    data:any = []; // variable contenant les données du .json de l'API renvoyée pour etre utilisé dans le .html
    nomunique: string = '';

    constructor(
      private router: Router,
      private http: HttpClient,
      private route: ActivatedRoute) {
        this.route.queryParams.subscribe(params => {

            this.nomunique = params['nomunique'];
        });
       }  

    ngOnInit(): void
    {
        
        this.nomunique = this.route.snapshot.params.nomunique;

        // appel à l'API
        this.http.get(environment.ApiUrl.listeBateaux + this.nomunique).subscribe((result) => {
            this.data = result;
        });
    
    }
  
  }
  
