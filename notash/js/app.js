const getAPI = (urlJson) => {
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

const courses = getAPI('js/courses.json');
const news = getAPI('js/news.json');
const userComment = getAPI('js/comment.json');
const article = getAPI('js/article.json');

const renderFavCourses = () => {
    const favCoursesDiv = document.querySelector('#cards-content');
    favCoursesDiv.innerHTML = '';
    courses.forEach((item) => {
        const cardItem = document.createElement('div');
        cardItem.setAttribute('class', 'card-item');

        const cardInner = document.createElement('div');
        cardInner.setAttribute('class', 'card-inner');

        const cardImg = document.createElement('img');
        cardImg.setAttribute('src', `./img/${item.img}.jpg`);
        cardImg.setAttribute('alt', `${item.img}`);

        const btnText = document.createElement('div');
        btnText.setAttribute('class', 'btn-text');

        const aBtn = document.createElement('a');
        aBtn.setAttribute('href', `./courses-single.php#${item.id}`);

        const btnTextFinal = document.createElement('button');
        btnTextFinal.innerHTML = `${item.nameCourses}`;

        if (item.type === "fav") {
            favCoursesDiv.appendChild(cardItem);
            cardItem.appendChild(cardInner);
            cardInner.appendChild(cardImg);
            cardInner.appendChild(btnText);
            btnText.appendChild(aBtn);
            aBtn.appendChild(btnTextFinal);
        }
    })
}

const renderNews = () => {
    const newsDiv = document.querySelector('#news-content');
    newsDiv.innerHTML = '';
    news.forEach((item) => {
        const newsItem = document.createElement('div');
        newsItem.setAttribute('class', 'news-item');

        const newsInner = document.createElement('div');
        newsInner.setAttribute('class', 'news-inner');

        const spanElement = document.createElement('span');
        spanElement.innerHTML = `${item.name}`;

        const brElement = document.createElement('br');
        const brElement1 = document.createElement('br');

        const aElement = document.createElement('a')
        aElement.setAttribute('href', `./news-single.php#${item.id}`);
        aElement.innerText = 'مشاهده جزئیات ';

        const iElement = document.createElement('i');
        iElement.setAttribute('class', 'fa fa-caret-left');

        if (item.type === "news") {
            newsDiv.appendChild(newsItem);
            newsItem.appendChild(newsInner);
            newsInner.appendChild(spanElement);
            newsInner.appendChild(brElement);
            newsInner.appendChild(brElement1);
            newsInner.appendChild(aElement);
            aElement.appendChild(iElement);
        }
    })
}

const renderOfferCourses = () => {
    const OfferCoursesDiv = document.querySelector('#discount-content');
    OfferCoursesDiv.innerHTML = '';
    courses.forEach((item) => {
        const discountItem = document.createElement('div');
        discountItem.setAttribute('class', 'discount-item');

        const discountInner = document.createElement('div');
        discountInner.setAttribute('class', 'discount-inner');

        const discountImg = document.createElement('img');
        discountImg.setAttribute('src', `./img/${item.img}.jpg`);
        discountImg.setAttribute('alt', `${item.img}`);

        const offerDIV = document.createElement('div');
        offerDIV.setAttribute('class', 'offer');
        offerDIV.innerHTML = `${item.offer} تخفیف`;

        const btnText = document.createElement('div');
        btnText.setAttribute('class', 'btn-text');

        const aBtn = document.createElement('a');
        aBtn.setAttribute('href', `./courses-single.php#${item.id}`);

        const btnTextFinal = document.createElement('button');
        btnTextFinal.innerHTML = `${item.nameCourses}`;

        if (item.type === "offer") {
            OfferCoursesDiv.appendChild(discountItem);
            discountItem.appendChild(discountInner);
            discountInner.appendChild(discountImg);
            discountInner.appendChild(offerDIV);
            discountInner.appendChild(btnText);
            btnText.appendChild(aBtn);
            aBtn.appendChild(btnTextFinal);
        }
    })
}

const renderCommentShow = () => {
    const commentsDiv = document.querySelector('#comments');
    commentsDiv.innerHTML = "";
    userComment.forEach((item) => {
        const commentDiv = document.createElement('div');
        commentDiv.setAttribute('class', 'comment');

        const boxesDiv = document.createElement('div');
        boxesDiv.setAttribute('class', 'boxes');

        const picsDiv = document.createElement('div');
        picsDiv.setAttribute('class', 'pics');

        const avrImg = document.createElement('img');
        avrImg.setAttribute('src', `./img/${item.img}.png`);
        avrImg.setAttribute('alt', `${item.img}`);

        const namesDiv = document.createElement('div');
        namesDiv.setAttribute('class', 'names');

        const nameP = document.createElement('p');
        nameP.setAttribute('class', 'name');
        nameP.innerHTML = `${item.name}`;

        const lessonsP = document.createElement('p');
        lessonsP.setAttribute('class', 'lessons');
        lessonsP.innerHTML = `${item.lessons}`;

        const comDiv = document.createElement('div');
        comDiv.setAttribute('class', 'com');
        comDiv.innerHTML = `${item.commentUser}`;

        if (item.type === "show") {
            commentsDiv.appendChild(commentDiv);
            commentDiv.appendChild(boxesDiv);
            commentDiv.appendChild(comDiv);
            boxesDiv.appendChild(picsDiv);
            boxesDiv.appendChild(namesDiv);
            picsDiv.appendChild(avrImg);
            namesDiv.appendChild(nameP);
            namesDiv.appendChild(lessonsP);
        }
    })
}

const renderArticle = () => {
    const articleContentDiv = document.querySelector('#articles-content');
    articleContentDiv.innerHTML = '';
    article.forEach((item) => {
        const articleItemDiv = document.createElement('div');
        articleItemDiv.setAttribute('class', 'articles-item');

        const articleInnerDiv = document.createElement('div');
        articleInnerDiv.setAttribute('class', 'articles-inner');

        const articleHeaderDiv = document.createElement('div');
        articleHeaderDiv.setAttribute('class', 'articles-header');
        articleHeaderDiv.innerHTML = `${item.articleTitle}`;

        const articleBodyDiv = document.createElement('div');
        articleBodyDiv.setAttribute('class', 'articles-body');

        const articleP = document.createElement('p');
        articleP.innerHTML = `${item.articleExcerpt}`;

        const articleA = document.createElement('a')
        articleA.setAttribute('href', `./article-single.php#${item.id}`);
        articleA.innerText = 'ادامه خواندن ';

        const articleI = document.createElement('i');
        articleI.setAttribute('class', 'fa fa-caret-left');

        if (item.type === "show") {
            articleContentDiv.appendChild(articleItemDiv);
            articleItemDiv.appendChild(articleInnerDiv);
            articleInnerDiv.appendChild(articleHeaderDiv);
            articleInnerDiv.appendChild(articleBodyDiv);
            articleBodyDiv.appendChild(articleP);
            articleInnerDiv.appendChild(articleA);
            articleA.appendChild(articleI);
        }
    })
}

renderFavCourses();
renderNews();
renderOfferCourses();
renderCommentShow();
renderArticle();