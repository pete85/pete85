import { PulsePage } from './app.po';

describe('pulse App', () => {
  let page: PulsePage;

  beforeEach(() => {
    page = new PulsePage();
  });

  it('should display welcome message', done => {
    page.navigateTo();
    page.getParagraphText()
      .then(msg => expect(msg).toEqual('Welcome to app!!'))
      .then(done, done.fail);
  });
});
