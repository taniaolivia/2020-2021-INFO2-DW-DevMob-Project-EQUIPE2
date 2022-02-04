import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AccueilComponent } from './accueil/accueil.component';
import { MenuComponent } from './menu/menu.component';
import { MeteoJourComponent } from './meteo-jour/meteo-jour.component';
import { CarteBateauxComponent } from './carte-bateaux/carte-bateaux.component';
import { MeteoTroisJoursComponent } from './meteo-trois-jours/meteo-trois-jours.component';
import { ListeBateauxComponent } from './liste-bateaux/liste-bateaux.component';
import { GalerieComponent } from './galerie/galerie.component';
import { DetailsBateauComponent } from './details-bateau/details-bateau.component';
import { TemoignagesComponent } from './temoignages/temoignages.component';
import { MeteoService } from './services/meteo.service';
import { MuseeService } from './services/musee.service';
import { CarteBateauxService } from './services/carteBateaux.service';
import { FormsModule } from '@angular/forms';
import { PlanningComponent } from './planning/planning.component';
import { ReservationComponent } from './reservation/reservation.component';
import { ReactiveFormsModule } from '@angular/forms';





@NgModule({
  declarations: [
      AppComponent,
      AccueilComponent,
      MenuComponent,
      MeteoJourComponent,
      CarteBateauxComponent,
      MeteoTroisJoursComponent,
      ListeBateauxComponent,
      GalerieComponent,
      DetailsBateauComponent,
      TemoignagesComponent,
      PlanningComponent,
      ReservationComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule
  ],

  providers: [MeteoService, MuseeService, CarteBateauxService],

  bootstrap: [AppComponent]
})
export class AppModule { }
