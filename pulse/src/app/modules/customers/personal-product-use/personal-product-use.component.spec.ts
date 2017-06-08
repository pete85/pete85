import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PersonalProductUseComponent } from './personal-product-use.component';

describe('PersonalProductUseComponent', () => {
  let component: PersonalProductUseComponent;
  let fixture: ComponentFixture<PersonalProductUseComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PersonalProductUseComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PersonalProductUseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
