import { MaterialTablePage } from './app.po';

describe('material-table App', () => {
  let page: MaterialTablePage;

  beforeEach(() => {
    page = new MaterialTablePage();
  });

  it('should display welcome message', done => {
    page.navigateTo();
    page.getParagraphText()
      .then(msg => expect(msg).toEqual('Welcome to app!!'))
      .then(done, done.fail);
  });
});
