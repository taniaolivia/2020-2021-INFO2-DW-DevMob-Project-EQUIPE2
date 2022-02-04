import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Component({
  selector: 'app-galerie',
  templateUrl: './galerie.component.html',
  styleUrls: ['./galerie.component.css']
})
export class GalerieComponent implements OnInit {

  data: any = [];

  constructor(private http: HttpClient) {}

  ngOnInit(): void
  {
    // Récupération du fichier .json de la liste des bateaux à partir de l'API
    this.http.get(environment.ApiUrl.listeBateaux).subscribe((result) => {
      this.data = result;
    });
  }

}
