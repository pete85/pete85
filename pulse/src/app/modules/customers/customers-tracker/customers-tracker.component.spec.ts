import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CustomersTrackerComponent } from './customers-tracker.component';

describe('CustomersTrackerComponent', () => {
  let component: CustomersTrackerComponent;
  let fixture: ComponentFixture<CustomersTrackerComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CustomersTrackerComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CustomersTrackerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
