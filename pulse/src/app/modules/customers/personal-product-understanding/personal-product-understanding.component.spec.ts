import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PersonalProductUnderstandingComponent } from './personal-product-understanding.component';

describe('PersonalProductUnderstandingComponent', () => {
  let component: PersonalProductUnderstandingComponent;
  let fixture: ComponentFixture<PersonalProductUnderstandingComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PersonalProductUnderstandingComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PersonalProductUnderstandingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
