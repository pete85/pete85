import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CustomersOptionsComponent } from './customers-options.component';

describe('CustomersOptionsComponent', () => {
  let component: CustomersOptionsComponent;
  let fixture: ComponentFixture<CustomersOptionsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CustomersOptionsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CustomersOptionsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
