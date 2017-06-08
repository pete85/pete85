import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PaymentsPendingComponent } from './payments-pending.component';

describe('PaymentsPendingComponent', () => {
  let component: PaymentsPendingComponent;
  let fixture: ComponentFixture<PaymentsPendingComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PaymentsPendingComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PaymentsPendingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
