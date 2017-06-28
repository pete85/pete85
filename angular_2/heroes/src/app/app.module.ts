import { NgModule }                 from '@angular/core';
import { BrowserModule }            from '@angular/platform-browser';
import { FormsModule }              from '@angular/forms';
import { HttpModule }               from '@angular/http';
import { AppComponent }             from './app.component';
import { HeroDetailComponent }      from './hero-detail.component';
import { HeroesComponent }          from './heroes.component';
import { DashboardComponent }       from './dashboard.component';
import { PageNotFoundComponent }    from './404.component';
import { HeroService }              from './hero.service';
import { RouterModule }             from '@angular/router';

@NgModule({
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot([
      {path: '', redirectTo: '/dashboard', pathMatch: 'full'},
      {path: 'heroes', component: HeroesComponent},
      {path: 'dashboard', component: DashboardComponent},
      {path: 'detail/:id', component: HeroDetailComponent},
      {path: '**', component: PageNotFoundComponent}
    ])
  ],
  declarations: [
    AppComponent,
    HeroDetailComponent,
    HeroesComponent,
    DashboardComponent,
    PageNotFoundComponent
  ],
  providers: [
    HeroService
  ],
  bootstrap: [ AppComponent ]
})
export class AppModule {
}
