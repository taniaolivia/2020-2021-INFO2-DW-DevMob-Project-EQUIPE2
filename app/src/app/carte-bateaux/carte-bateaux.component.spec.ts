import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CarteBateauxComponent } from './carte-bateaux.component';

describe('CarteBateauxComponent', () => {
  let component: CarteBateauxComponent;
  let fixture: ComponentFixture<CarteBateauxComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CarteBateauxComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CarteBateauxComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
