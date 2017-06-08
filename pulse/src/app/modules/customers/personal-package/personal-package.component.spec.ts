import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PersonalPackageComponent } from './personal-package.component';

describe('PersonalPackageComponent', () => {
  let component: PersonalPackageComponent;
  let fixture: ComponentFixture<PersonalPackageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PersonalPackageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PersonalPackageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
