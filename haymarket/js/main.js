'use strict';

// class Article {
//     constructor(art_id, image, content) {
//         this.art_id = art_id
//         this.image = image
//         this.content = content
//     }
//
//     getArticle() {
//         console.log(this.art_id);
//         return this.art_id;
//     };
//
// }

var articlesNew = [];

function createArticle(title, image, content) {
    return {
        Title: title,
        Image: image,
        Content: content
    };
}

var art1 = createArticle(
    'Title 1',
    'url',
    [
        {p1: 'text1'},
        {p2: 'text2'},
        {p3: 'text3'}
        ]
);

var art2 = createArticle(
    'Title 2',
    'url',
    [
        {p1: 'text1'},
        {p2: 'text2'},
        {p3: 'text3'}
    ]
);

var art3 = createArticle(
    'Title 3',
    'url',
    [
        {p1: 'text1'},
        {p2: 'text2'},
        {p3: 'text3'}
    ]
);

console.log('Article 1: ', art1);

function buildArray() {
    articlesNew.push(art1, art2, art3);

    console.log(articlesNew);
    return articlesNew;
};
