'use strict';

var articles = [];
var sliderImage = document.getElementById('imgSlider');
var artContent = document.getElementById('content');
var x;

function createArticle(image, content) {
    return {
        Image: image,
        Content: content
    };
}

var art1 = createArticle(
    'img/gallery-slide-1.jpg',
    [
        {paragraph: 'text1'},
        {paragraph: 'text2'},
        {paragraph: 'text3'}
    ]
);

var art2 = createArticle(
    'img/gallery-slide-2.jpg',
    [
        {paragraph: 'text4'},
        {paragraph: 'text5'},
        {paragraph: 'text6'}
    ]
);

var art3 = createArticle(
    'img/gallery-slide-3.jpg',
    [
        {paragraph: 'text7'},
        {paragraph: 'text8'},
        {paragraph: ''}
    ]
);

function getArticles() {

    // Array of objects
    articles.push(art1, art2, art3);

    // First image
    sliderImage.src = articles[0].Image;

    // First article content
    for (x in articles[0].Content) {

        var paragraph = document.createElement("p");
        paragraph.innerHTML = articles[0].Content[x].paragraph;
        artContent.appendChild(paragraph);
    }

    return articles;
};

// Previous article
function previous() {

    var i;

    for (i = 0; i < articles.length; i++) {
        console.log('test');
    }
}

// Next article
function next() {

    // First image
    sliderImage.src = articles[1].Image;

    // First article content
    for (x in articles[1].Content) {

        var paragraph = document.createElement('p');
        paragraph.innerHTML = '';
        paragraph.innerHTML = articles[1].Content[x].paragraph;
        artContent.appendChild(paragraph);
    }

}
