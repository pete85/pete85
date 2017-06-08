import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ActivitiesTimelineComponent } from './activities-timeline.component';

describe('ActivitiesTimelineComponent', () => {
  let component: ActivitiesTimelineComponent;
  let fixture: ComponentFixture<ActivitiesTimelineComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ActivitiesTimelineComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ActivitiesTimelineComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
