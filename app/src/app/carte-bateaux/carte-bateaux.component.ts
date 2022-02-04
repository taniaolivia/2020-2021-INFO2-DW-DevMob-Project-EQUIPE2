import { Component, OnInit } from '@angular/core';
import { CarteBateauxService } from '../services/carteBateaux.service';
import * as L from 'leaflet';

@Component({
  selector: 'app-carte-bateaux',
  templateUrl: './carte-bateaux.component.html',
  styleUrls: ['./carte-bateaux.component.css']
})
export class CarteBateauxComponent implements OnInit {
  items:any;
  constructor(private carteBateauxService: CarteBateauxService) { }

  async ngOnInit()
  {

    this.items = await this.carteBateauxService.getBateaux(); // utilisation du service carteBateaux
    // style des icones
    let goldIcon = new L.Icon({
    iconUrl: '../assets/imagesCarte/marker-icon-2x-gold.png',
    shadowUrl: '../assets/imagesCarte/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
    });

    // Création de la map dans le conteneur "map", coordonnées de centrage et niveau de zoom par défaut.
    let map = L.map('map').setView([46.158051, -1.153400], 12);
    // Création du fond de carte
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    this.items.forEach(function(item:any){
      let icone = "";
      // en fonction de la visitabilté du bateau, on associe le pictogramme approprié
      if(item.visitable === true)
      {
        icone = "<i title=\"Possibilité de monter à bord\" style=\"color : green; font-size : 20px\" class=\"fas fa-check\">";

      }
      else{
        icone = "<i title=\"Impossible de monter à bord\" style=\"color : red; font-size : 20px\" class=\"fas fa-times\"></i>"
      }

      L.marker([item.lat, item.lon],{icon:goldIcon}).addTo(map)
      .bindPopup(`<a href="/detailsbateau/${item.nomunique}"> ${item.nom} </a> <br> ${icone}`)
      .openPopup();
    });

  }

}
