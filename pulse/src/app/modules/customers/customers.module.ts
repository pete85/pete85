import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CustomersComponent } from './customers/customers.component';
import { CustomersToolbarComponent } from './customers-toolbar/customers-toolbar.component';
import { CustomersMenuComponent } from './customers-menu/customers-menu.component';
import { CustomersTrackerComponent } from './customers-tracker/customers-tracker.component';
import { CustomersOptionsComponent } from './customers-options/customers-options.component';
import { CustomersListComponent } from './customers-list/customers-list.component';
import { CustomersCardComponent } from './customers-card/customers-card.component';
import { GlobalAddComponent } from './global-add/global-add.component';
import { CardHeaderComponent } from './card-header/card-header.component';
import { CardNavComponent } from './card-nav/card-nav.component';
import { CardInfoComponent } from './card-info/card-info.component';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [CustomersComponent, CustomersToolbarComponent, CustomersMenuComponent, CustomersTrackerComponent, CustomersOptionsComponent, CustomersListComponent, CustomersCardComponent, GlobalAddComponent, CardHeaderComponent, CardNavComponent, CardInfoComponent]
})
export class CustomersModule { }
