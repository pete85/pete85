'use strict';

var articles = [];
var sliderImage = document.getElementById('imgSlider');
var previewSection = document.getElementById('preview');
var imgPreview = document.getElementById('imgPreview');
var artContent = document.getElementById('content');
var pageNo = document.getElementById('pageNo');
var artCurrent = document.getElementById('artCurrent');
var artTotal = document.getElementById('artTotal');
var prevPage = document.getElementById('previousPage');
var nextPage = document.getElementById('nextPage');
var x = 0;
var i = 0;

function createArticle(pageNo, image, content) {
    return {
        PageNo: pageNo,
        Image: image,
        Content: content
    };
}

var art1 = createArticle(
    'Page 1',
    'img/gallery-slide-1.jpg',
    [
        {paragraph: 'Nullam accumsan, elit vitae placerat tempor, ex dui fringilla leo, id pretium felis magna ut mauris. Nunc varius diam eget pretium commodo. Nulla ut facilisis ipsum. Ut id maximus velit. Praesent gravida ultricies sagittis. Proin eget nisi metus. Maecenas augue mauris, mollis non ligula non, consequat dignissim nisi. Quisque tellus ante, mattis eget faucibus vel, consectetur eget sem.'},
        {paragraph: 'Praesent iaculis, elit sed auctor fringilla, velit mauris mollis lacus, at eleifend justo erat sit amet neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas posuere consectetur imperdiet. Ut consectetur feugiat justo volutpat lobortis. Sed ut tincidunt diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer laoreet vel ipsum quis aliquam. In sodales metus felis. Nam eu dui porttitor, tincidunt urna sed, pharetra lorem.'},
        {paragraph: 'Donec luctus odio commodo tempor finibus. Morbi dictum est non vestibulum congue. Sed a varius ligula, id scelerisque ipsum. Suspendisse lobortis, dui eu consequat viverra, nulla libero blandit tortor, eu auctor ligula sem malesuada tortor. Nam quis posuere justo. Vivamus suscipit risus eget felis condimentum, sit amet elementum est porttitor.'}
    ]
);

var art2 = createArticle(
    'Page 2',
    'img/gallery-slide-2.jpg',
    [
        {paragraph: 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sodales eros et ultricies condimentum. Nunc lobortis, ipsum at posuere laoreet, turpis elit bibendum augue, eu facilisis urna lacus quis est. Etiam rutrum, diam ut tincidunt facilisis, lorem tortor ultrices ante, a iaculis ex nunc vel eros.'},
        {paragraph: 'Morbi lorem metus, fringilla vitae molestie hendrerit, semper sit amet dui. In id felis eu metus finibus pellentesque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In rutrum est quis sem fringilla, ac tempor est congue. Vestibulum dictum auctor massa. Praesent a facilisis nisi, vel faucibus leo. Sed tortor quam, pharetra porta euismod a, tempus vel tellus.'},
        {paragraph: 'Aliquam erat volutpat. Sed leo elit, volutpat et neque quis, lobortis facilisis nunc. Vivamus urna erat, imperdiet in vulputate vel, condimentum et ante.'}
    ]
);

var art3 = createArticle(
    'Page 3',
    'img/gallery-slide-3.jpg',
    [
        {paragraph: 'Suspendisse mauris metus, luctus id nunc sit amet, malesuada ultrices diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra sollicitudin nisl, vitae tincidunt neque luctus non. Donec tristique congue elit, id dictum ligula eleifend semper. Vivamus sed nibh ac velit euismod placerat facilisis nec magna.'},
        {paragraph: 'Praesent gravida posuere arcu, eget maximus ante. Duis elit ex, rutrum at metus quis, ultricies dignissim nulla. Nulla at sem eleifend eros convallis commodo et id urna. Donec consectetur luctus ultricies. Ut quis mi in nisl posuere ultricies. Ut et risus eros. Praesent sit amet iaculis massa. Sed tempus volutpat mi vitae pretium.'},
        {paragraph: ''}
    ]
);

function getArticles() {

    // Array of objects
    articles.push(art1, art2, art3);

    // First image
    sliderImage.src = articles[i].Image;

    // First article content
    pageNo.innerHTML = articles[i].PageNo;

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

// Previous page
function previous() {

    while(artContent.firstChild) {
        artContent.removeChild(artContent.firstChild);
    }

    if (i !== 0) {

        i = i - 1;
        sliderImage.src = articles[i].Image;
        pageNo.innerHTML = articles[i].PageNo;
        for (x in articles[i].Content) {

            var paragraph = document.createElement('p');
            paragraph.innerHTML = articles[i].Content[x].paragraph;
            artContent.appendChild(paragraph);
        }

        artCurrent.innerHTML = parseInt(artCurrent.innerHTML) - 1;
        if (nextPage.classList.contains('disabled')) {
            nextPage.classList.remove('disabled');
        } else {
        }
    } else {
        prevPage.classList.add('disabled');
    }

}

// Next page
function next() {

    while(artContent.firstChild) {
        artContent.removeChild(artContent.firstChild);
    }

    if (i < parseInt(artTotal.innerHTML) - 1) {
        i = i + 1;
        sliderImage.src = articles[i].Image;
        pageNo.innerHTML = articles[i].PageNo;
        for (x in articles[i].Content) {

            var paragraph = document.createElement('p');
            paragraph.innerHTML = articles[i].Content[x].paragraph;
            artContent.appendChild(paragraph);
        }

        artCurrent.innerHTML = parseInt(artCurrent.innerHTML) + 1;
        if (prevPage.classList.contains('disabled')) {
            prevPage.classList.remove('disabled');
        } else {
        }

    } else {
        nextPage.classList.add('disabled');
    }

}


// PREVIEW IMAGE

function openPreview() {
    previewSection.classList.remove('hidden');
    imgPreview.src = articles[i].Image;
    previewSection.classList.remove('fadeOut');
    previewSection.classList.add('fadeIn');
}

function closePreview() {
    previewSection.classList.remove('fadeIn');
    previewSection.classList.add('fadeOut');
    previewSection.classList.add('hidden');
}
