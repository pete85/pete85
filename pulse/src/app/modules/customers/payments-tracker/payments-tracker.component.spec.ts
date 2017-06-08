import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PaymentsTrackerComponent } from './payments-tracker.component';

describe('PaymentsTrackerComponent', () => {
  let component: PaymentsTrackerComponent;
  let fixture: ComponentFixture<PaymentsTrackerComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PaymentsTrackerComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PaymentsTrackerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
