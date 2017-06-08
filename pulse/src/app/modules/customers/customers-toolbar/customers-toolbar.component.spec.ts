import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CustomersToolbarComponent } from './customers-toolbar.component';

describe('CustomersToolbarComponent', () => {
  let component: CustomersToolbarComponent;
  let fixture: ComponentFixture<CustomersToolbarComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CustomersToolbarComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CustomersToolbarComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
