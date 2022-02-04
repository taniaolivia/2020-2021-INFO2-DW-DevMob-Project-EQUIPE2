import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MeteoTroisJoursComponent } from './meteo-trois-jours.component';

describe('MeteoTroisJoursComponent', () => {
  let component: MeteoTroisJoursComponent;
  let fixture: ComponentFixture<MeteoTroisJoursComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MeteoTroisJoursComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MeteoTroisJoursComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
