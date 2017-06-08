import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CardPaymentsComponent } from './card-payments.component';

describe('CardPaymentsComponent', () => {
  let component: CardPaymentsComponent;
  let fixture: ComponentFixture<CardPaymentsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CardPaymentsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CardPaymentsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
