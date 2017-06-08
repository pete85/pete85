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
import { PersonalDetailsComponent } from './personal-details/personal-details.component';
import { PersonalPackageComponent } from './personal-package/personal-package.component';
import { PersonalProductUnderstandingComponent } from './personal-product-understanding/personal-product-understanding.component';
import { PersonalProductUseComponent } from './personal-product-use/personal-product-use.component';
import { PersonalExtraInfoComponent } from './personal-extra-info/personal-extra-info.component';
import { CardProductComponent } from './card-product/card-product.component';
import { ProductDetailsComponent } from './product-details/product-details.component';
import { ProductsListComponent } from './products-list/products-list.component';
import { CardPaymentsComponent } from './card-payments/card-payments.component';
import { CardActivitiesComponent } from './card-activities/card-activities.component';
import { PaymentsTrackerComponent } from './payments-tracker/payments-tracker.component';
import { PaymentsPendingComponent } from './payments-pending/payments-pending.component';
import { PaymentsReceivedComponent } from './payments-received/payments-received.component';
import { ActivitiesTimelineComponent } from './activities-timeline/activities-timeline.component';
import { ActivitiesPendingComponent } from './activities-pending/activities-pending.component';
import { ActivitiesCompleteComponent } from './activities-complete/activities-complete.component';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [CustomersComponent, CustomersToolbarComponent, CustomersMenuComponent, CustomersTrackerComponent, CustomersOptionsComponent, CustomersListComponent, CustomersCardComponent, GlobalAddComponent, CardHeaderComponent, CardNavComponent, CardInfoComponent, PersonalDetailsComponent, PersonalPackageComponent, PersonalProductUnderstandingComponent, PersonalProductUseComponent, PersonalExtraInfoComponent, CardProductComponent, ProductDetailsComponent, ProductsListComponent, CardPaymentsComponent, CardActivitiesComponent, PaymentsTrackerComponent, PaymentsPendingComponent, PaymentsReceivedComponent, ActivitiesTimelineComponent, ActivitiesPendingComponent, ActivitiesCompleteComponent]
})
export class CustomersModule { }
