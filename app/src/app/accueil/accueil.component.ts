import { Component, OnInit } from '@angular/core';
import {MuseeService} from "../services/musee.service";

@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.css']
})

export class AccueilComponent implements OnInit {
  ouvertOuFerme:any; // variables renvoyée pour etre utilisé dans le .html
  heureFermeture:any;
  heureOuverture:any;
  jour:any;

  constructor(private museeService: MuseeService) { } // appel du service musee

  async ngOnInit()
  {
    this.ouvertOuFerme = await this.museeService.getMusee(); // utilisation du service musee

    let heureActuelle = new Date();
    let heure = heureActuelle.getHours();
    let heureFermeture = this.ouvertOuFerme.musee.heureFermeture;
    let heureOuverture = this.ouvertOuFerme.musee.heureOuverture;
    this.heureOuverture = this.ouvertOuFerme.musee.heureOuverture;
    this.heureFermeture = this.ouvertOuFerme.musee.heureFermeture;

    if(heure >= parseInt(heureOuverture) && heure < parseInt(heureFermeture))
    {
      this.ouvertOuFerme = 'OUVERT';
    }
    else
    {
      this.ouvertOuFerme = 'FERMÉ';
    }
  }
}

