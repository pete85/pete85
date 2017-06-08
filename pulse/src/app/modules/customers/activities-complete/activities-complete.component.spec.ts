import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ActivitiesCompleteComponent } from './activities-complete.component';

describe('ActivitiesCompleteComponent', () => {
  let component: ActivitiesCompleteComponent;
  let fixture: ComponentFixture<ActivitiesCompleteComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ActivitiesCompleteComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ActivitiesCompleteComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
