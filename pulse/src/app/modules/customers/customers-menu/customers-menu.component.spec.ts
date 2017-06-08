import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CustomersMenuComponent } from './customers-menu.component';

describe('CustomersMenuComponent', () => {
  let component: CustomersMenuComponent;
  let fixture: ComponentFixture<CustomersMenuComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CustomersMenuComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CustomersMenuComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
