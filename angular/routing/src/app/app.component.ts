import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';

  mouseOver() {
    document.getElementById("faceIcon").style.color = "#A92222";
  }

  mouseOut() {
    document.getElementById("faceIcon").style.color = "#E3E2E1";
  }
}
