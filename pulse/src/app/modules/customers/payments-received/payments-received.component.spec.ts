import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PaymentsReceivedComponent } from './payments-received.component';

describe('PaymentsReceivedComponent', () => {
  let component: PaymentsReceivedComponent;
  let fixture: ComponentFixture<PaymentsReceivedComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PaymentsReceivedComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PaymentsReceivedComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
