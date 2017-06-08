import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PersonalExtraInfoComponent } from './personal-extra-info.component';

describe('PersonalExtraInfoComponent', () => {
  let component: PersonalExtraInfoComponent;
  let fixture: ComponentFixture<PersonalExtraInfoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PersonalExtraInfoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PersonalExtraInfoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
