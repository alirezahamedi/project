const title = document.querySelector('title');
const articleTitle = document.querySelector('#article-title1');
const textBodyP1 = document.querySelector('#text-body-p-1');
const textBodyB1 = document.querySelector('#text-body-b-1');
const textBodyH31 = document.querySelector('#text-body-h3-1');
const textBodyP2 = document.querySelector('#text-body-p-2');
const textBodyH32 = document.querySelector('#text-body-h3-2');
const textBodyP3 = document.querySelector('#text-body-p-3');
const textBodyH33 = document.querySelector('#text-body-h3-3');
const textBodyP4 = document.querySelector('#text-body-p-4');
const articleTitle2 = document.querySelector('#article-title2');
const textBodyLi1 = document.querySelector('#text-body-li-1');
const textBodyLi2 = document.querySelector('#text-body-li-2');
const textBodyLi3 = document.querySelector('#text-body-li-3');
const textBodyLi4 = document.querySelector('#text-body-li-4');
const textBodyLi5 = document.querySelector('#text-body-li-5');
const textBodyLi6 = document.querySelector('#text-body-li-6');
const textBodyLi7 = document.querySelector('#text-body-li-7');
const textBodyLi8 = document.querySelector('#text-body-li-8');
const textBodyLi9 = document.querySelector('#text-body-li-9');
const textBodyLi10 = document.querySelector('#text-body-li-10');
const articleTitle3 = document.querySelector('#article-title3');
const textBodyP5 = document.querySelector('#text-body-p-5');
const textBodyH34 = document.querySelector('#text-body-h3-4');
const textBodyP6 = document.querySelector('#text-body-p-6');
const articleTitle4 = document.querySelector('#article-title4');
const textBodyLi11 = document.querySelector('#text-body-li-11');
const textBodyLi12 = document.querySelector('#text-body-li-12');
const textBodyLi13 = document.querySelector('#text-body-li-13');
const textBodyLi14 = document.querySelector('#text-body-li-14');
const textBodyLi15 = document.querySelector('#text-body-li-15');
const textBodyLi16 = document.querySelector('#text-body-li-16');
const textBodyLi17 = document.querySelector('#text-body-li-17');
const articleTitle5 = document.querySelector('#article-title5');
const textBodyLi18 = document.querySelector('#text-body-li-18');
const textBodyLi19 = document.querySelector('#text-body-li-19');
const textBodyLi20 = document.querySelector('#text-body-li-20');
const textBodyLi21 = document.querySelector('#text-body-li-21');
const textBodyLi22 = document.querySelector('#text-body-li-22');
const textBodyPAdded = document.querySelector('#text-body-p-added');
const textBodyH3Added = document.querySelector('#text-body-h3-added');
const textBodyPAdded1 = document.querySelector('#text-body-p-added-1');
const textBodyPAdded2 = document.querySelector('#text-body-p-added-2');

const articleId = location.hash.substring(1);

const getAPIArticleSingle = (urlJson) => {
    const xmlHttp = new XMLHttpRequest();
    xmlHttp.open('GET', urlJson, false);
    xmlHttp.send(null);

    const result = xmlHttp.responseText;
    if (xmlHttp.status === 200) {
        return JSON.parse(result);
    } else {
        console.log('not found.. !!')
    }
}

const articles = getAPIArticleSingle('js/article.json');

const articlesFind = articles.find((item) => {
    return item.id === articleId;
})

if (articlesFind === undefined) {
    location.assign('./index.php');
}

title.innerText = articlesFind.articleTitle;

const renderUndefinedElement = (articlesFindElement, element) => {
    if (articlesFindElement !== undefined) {
        element.innerHTML = `${articlesFindElement}`;
    } else {
        element.style.display = "none";
    }
}

renderUndefinedElement(articlesFind.articleTitle, articleTitle);
renderUndefinedElement(articlesFind.textBodyP1, textBodyP1);
renderUndefinedElement(articlesFind.textBodyB1, textBodyB1);
renderUndefinedElement(articlesFind.textBodyH31, textBodyH31);
renderUndefinedElement(articlesFind.textBodyP2, textBodyP2);
renderUndefinedElement(articlesFind.textBodyH32, textBodyH32);
renderUndefinedElement(articlesFind.textBodyP3, textBodyP3);
renderUndefinedElement(articlesFind.textBodyH33, textBodyH33);
renderUndefinedElement(articlesFind.textBodyP4, textBodyP4);
renderUndefinedElement(articlesFind.articleTitle2, articleTitle2);
renderUndefinedElement(articlesFind.textBodyLi1, textBodyLi1);
renderUndefinedElement(articlesFind.textBodyLi2, textBodyLi2);
renderUndefinedElement(articlesFind.textBodyLi3, textBodyLi3);
renderUndefinedElement(articlesFind.textBodyLi4, textBodyLi4);
renderUndefinedElement(articlesFind.textBodyLi5, textBodyLi5);
renderUndefinedElement(articlesFind.textBodyLi6, textBodyLi6);
renderUndefinedElement(articlesFind.textBodyLi7, textBodyLi7);
renderUndefinedElement(articlesFind.textBodyLi8, textBodyLi8);
renderUndefinedElement(articlesFind.textBodyLi9, textBodyLi9);
renderUndefinedElement(articlesFind.textBodyLi10, textBodyLi10);
renderUndefinedElement(articlesFind.articleTitle3, articleTitle3);
renderUndefinedElement(articlesFind.textBodyP5, textBodyP5);
renderUndefinedElement(articlesFind.textBodyH34, textBodyH34);
renderUndefinedElement(articlesFind.textBodyP6, textBodyP6);
renderUndefinedElement(articlesFind.articleTitle4, articleTitle4);
renderUndefinedElement(articlesFind.textBodyLi11, textBodyLi11);
renderUndefinedElement(articlesFind.textBodyLi12, textBodyLi12);
renderUndefinedElement(articlesFind.textBodyLi13, textBodyLi13);
renderUndefinedElement(articlesFind.textBodyLi14, textBodyLi14);
renderUndefinedElement(articlesFind.textBodyLi15, textBodyLi15);
renderUndefinedElement(articlesFind.textBodyLi16, textBodyLi16);
renderUndefinedElement(articlesFind.textBodyLi17, textBodyLi17);
renderUndefinedElement(articlesFind.articleTitle5, articleTitle5);
renderUndefinedElement(articlesFind.textBodyLi18, textBodyLi18);
renderUndefinedElement(articlesFind.textBodyLi19, textBodyLi19);
renderUndefinedElement(articlesFind.textBodyLi20, textBodyLi20);
renderUndefinedElement(articlesFind.textBodyLi21, textBodyLi21);
renderUndefinedElement(articlesFind.textBodyLi22, textBodyLi22);
renderUndefinedElement(articlesFind.textBodyPAdded, textBodyPAdded);
renderUndefinedElement(articlesFind.textBodyH3Added, textBodyH3Added);
renderUndefinedElement(articlesFind.textBodyPAdded1, textBodyPAdded1);
renderUndefinedElement(articlesFind.textBodyPAdded2, textBodyPAdded2);