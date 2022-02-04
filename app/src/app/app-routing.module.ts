import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import {AccueilComponent} from './accueil/accueil.component';
import {ListeBateauxComponent} from './liste-bateaux/liste-bateaux.component';
import {MeteoTroisJoursComponent} from './meteo-trois-jours/meteo-trois-jours.component';
import {GalerieComponent} from './galerie/galerie.component';
import {DetailsBateauComponent} from './details-bateau/details-bateau.component';
import {TemoignagesComponent} from './temoignages/temoignages.component';
import { PlanningComponent } from './planning/planning.component';
import { ReservationComponent } from './reservation/reservation.component';


export const routes: Routes = [
  {path: '', component: AccueilComponent},
  {path: 'meteo', component: MeteoTroisJoursComponent},
  {path: 'listeBateaux', component: ListeBateauxComponent},
  {path: 'galerie', component: GalerieComponent},
  {path: 'detailsbateau/:nomunique', component: DetailsBateauComponent},
  {path: 'planning/:nomunique', component: PlanningComponent},
  {path: 'reservation/:nomunique/:date', component: ReservationComponent},
  {path: ':nomunique/temoignages', component: TemoignagesComponent}
];

@NgModule({

  imports: [RouterModule,
            RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
