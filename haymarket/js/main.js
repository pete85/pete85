'use strict';

var articles = [];
var sliderImage = document.getElementById('imgSlider');
var artContent = document.getElementById('content');
var artCurrent = document.getElementById('artCurrent');
var artTotal = document.getElementById('artTotal');
var prevPage = document.getElementById('previousPage');
var nextPage = document.getElementById('nextPage');
var x;
var i = 0;

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
    sliderImage.src = articles[i].Image;

    // First article content
    for (x in articles[i].Content) {

        var paragraph = document.createElement("p");
        paragraph.innerHTML = articles[i].Content[x].paragraph;
        artContent.appendChild(paragraph);
    }

    // Total number of articles
    artTotal.innerHTML = articles.length;

    // Initial article
    artCurrent.innerHTML = 1;

    return articles;
};

// Previous article
function previous() {

    var i;

    for (i = 0; i < articles.length; i++) {
        console.log('test');
    }

    // Current page
    if (parseInt(artCurrent.innerHTML) !== 1) {
        artCurrent.innerHTML = parseInt(artCurrent.innerHTML) - 1;
        if (nextPage.classList.contains('disabled')) {
            nextPage.classList.remove('disabled');
        } else {
        }
    } else {
        prevPage.classList.add('disabled');
    }

    console.log('current page: ', parseInt(artCurrent.innerHTML));
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

    // Current page
    if (parseInt(artCurrent.innerHTML) < parseInt(artTotal.innerHTML)) {
        artCurrent.innerHTML = parseInt(artCurrent.innerHTML) + 1;
        if (prevPage.classList.contains('disabled')) {
            prevPage.classList.remove('disabled');
        } else {
        }
    } else {
        nextPage.classList.add('disabled');
    }

}
