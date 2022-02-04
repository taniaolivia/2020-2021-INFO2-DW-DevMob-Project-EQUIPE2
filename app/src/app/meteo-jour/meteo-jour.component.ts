import { Component, OnInit } from '@angular/core';
import { MeteoService } from '../services/meteo.service';

@Component({
  selector: 'app-meteo-jour',
  templateUrl: './meteo-jour.component.html',
  styleUrls: ['./meteo-jour.component.css']
})
export class MeteoJourComponent implements OnInit {
  items:any; // variables renvoyée pour etre utilisé dans le .html
  
  constructor(private meteoService: MeteoService) { } // appel du service meteo

  async ngOnInit()
   {
    this.items = await this.meteoService.getMeteo(); // utilisation du service meteo

    // changment de l'image SVG en fonction de la variable cloudcover tiré de l'API météo
    if(this.items.current.cloudcover > 3 && this.items.current.cloudcover < 6 )
    {
      document.getElementById('imageMeteo')?.setAttribute('src', '../assets/imagesMeteo/sunVeryCloud.svg')
    }
    if(this.items.current.cloudcover >= 6)
    {
      document.getElementById('imageMeteo')?.setAttribute('src', '../assets/imagesMeteo/rain.svg')
    }
  }

}
