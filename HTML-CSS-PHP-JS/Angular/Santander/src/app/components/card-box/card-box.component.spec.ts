import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CardBoxComponent } from './card-box.component';

describe('CardBoxComponent', () => {
  let component: CardBoxComponent;
  let fixture: ComponentFixture<CardBoxComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [CardBoxComponent]
    });
    fixture = TestBed.createComponent(CardBoxComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
