import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ActivitiesPendingComponent } from './activities-pending.component';

describe('ActivitiesPendingComponent', () => {
  let component: ActivitiesPendingComponent;
  let fixture: ComponentFixture<ActivitiesPendingComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ActivitiesPendingComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ActivitiesPendingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
