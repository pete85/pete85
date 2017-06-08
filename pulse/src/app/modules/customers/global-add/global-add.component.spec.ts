import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GlobalAddComponent } from './global-add.component';

describe('GlobalAddComponent', () => {
  let component: GlobalAddComponent;
  let fixture: ComponentFixture<GlobalAddComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GlobalAddComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GlobalAddComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should be created', () => {
    expect(component).toBeTruthy();
  });
});
