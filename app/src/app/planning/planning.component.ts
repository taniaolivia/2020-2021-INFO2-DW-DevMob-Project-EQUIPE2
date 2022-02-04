import { Component,  OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ActivatedRoute, Router } from '@angular/router';
import { environment } from 'src/environments/environment';

@Component({
  selector: 'app-planning',
  templateUrl: './planning.component.html',
  styleUrls: ['./planning.component.css']
})

export class PlanningComponent implements OnInit {

  nomunique: string = '';
  date: string = '';
  data: any = [];
  nom: string = '';

  constructor(private http: HttpClient, private router: Router,
              private route: ActivatedRoute)
  {
    this.route.queryParams.subscribe(params => {

      this.nomunique = params['nomunique'];
      this.nom = params['nom'];
      this.date = params['date'];

    });
  }

  // Fonction pour la boucle for en HTML
  counter(j: number, startFrom: number): number[]
  {
    return [...Array(j).keys()].map(i => i + startFrom);
  }

  // Les styles du changement de couleur pour le nombre des places restantes
  getStyle()
  {
    for (let i = 0; i < 48; i++)
    {
      if (this.data.creneau[i].nbPlaceRestante === 0)
      {
        document.getElementsByTagName('td')[i].setAttribute('style',
          'color: red; pointer-events: none !important; cursor: not-allowed;');
      }
      else{
        document.getElementsByTagName('td')[i].setAttribute('style',
          'color: black; pointer-events: auto;');
      }
    }
  }

  ngOnInit(): void
  {
    // Récupération des paramètres de la route
    this.nomunique = this.route.snapshot.params.nomunique;
    this.date = this.route.snapshot.params.date;
    this.nom = this.route.snapshot.params.nom;

    // Récupération du .json du planning de chaque bateau à partir de l'API
    this.http.get(environment.ApiUrl.listeBateaux + this.nomunique + '/planning').subscribe((result) => {
      this.data = result;
    });
  }

}
