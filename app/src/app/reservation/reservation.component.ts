import { Component, OnInit } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Router} from '@angular/router';
import {ActivatedRoute} from '@angular/router';
import { FormControl } from '@angular/forms';
import {FormBuilder, FormGroup, FormArray, Validators} from '@angular/forms';
import { environment } from 'src/environments/environment';

@Component({
  selector: 'app-reservation',
  templateUrl: './reservation.component.html',
  styleUrls: ['./reservation.component.css']
})
export class ReservationComponent implements OnInit {
nomunique: string = '';
date: string = '';
data: any = [];
nbPlaces: string = '';
inputValue: any = [];
formGroup = new FormGroup({
nbPlacesReservees: new FormControl('')

});

  constructor(private http: HttpClient,
              private router: Router, private route: ActivatedRoute, private fb: FormBuilder) {
    this.route.queryParams.subscribe(params => {

      this.nomunique = params['nomunique'];
      this.date = params['date'];
    });
  }

  ngOnInit(): void {
    // récupération des paramères de la route
    this.nomunique = this.route.snapshot.params.nomunique;
    this.date = this.route.snapshot.params.date;

    // récupération du .json planning à partir de l'API
    this.http.get(environment.ApiUrl.listeBateaux + this.nomunique + '/planning').subscribe((result) => {
      this.data = result;
    });

    this.formGroup = this.fb.group({
      nbPlacesReservees: ['', Validators.required],
    });


  }

// fonction utilisée pour afficher le nombre de places restantes
  afficherPlaces() {
    for (let i = 0; i < 48; i++) {
      if (this.data.creneau[i].date === this.date) {
        document.getElementById('nbPlacesDispo')?.setAttribute('placeholder', this.data.creneau[i].nbPlaceRestante);
        document.getElementById('nbPlacesDispo')?.setAttribute('value', this.data.creneau[i].nbPlaceRestante);
      }
    }
  }

  // fonction appelée dans le html au moment du click sur le bouton
  getInputValue() {
    this.inputValue = (this.formGroup.get('nbPlacesReservees') as FormArray);

    
    if(this.inputValue.value <= (document.getElementById('nbPlacesDispo') as HTMLInputElement).value )
    {
      for(let i=0; i <48; i++)
    {
      if (this.data.creneau[i].date === this.date) {
        this.http.patch(environment.ApiUrl.listeBateaux + this.nomunique + ' /planning/creneau/' + (i+1),
          {
            "nbPlaceRestante": this.data.creneau[i].nbPlaceRestante - this.inputValue.value
          }).subscribe(data => {
            console.log("PUT Request is successful ", data);
            (document.getElementById('confirmationReservation') as HTMLTextAreaElement).style.display = "flex";
          },
          error => {
            console.log("Error", error);
          });
      }
    }
      
    }
    else{
      alert("Il n'y a pas suffisamment de places restantes !");
    }
  }
}
