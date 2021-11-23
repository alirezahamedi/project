const getAPIArticlePage = (urlJson) => {
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

const articlePage = getAPIArticlePage('js/article.json');

const renderArticlePage = () => {
    const articleContentDiv = document.querySelector('#articles-content');
    articleContentDiv.innerHTML = '';
    articlePage.forEach((item) => {
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

        articleContentDiv.appendChild(articleItemDiv);
        articleItemDiv.appendChild(articleInnerDiv);
        articleInnerDiv.appendChild(articleHeaderDiv);
        articleInnerDiv.appendChild(articleBodyDiv);
        articleBodyDiv.appendChild(articleP);
        articleInnerDiv.appendChild(articleA);
        articleA.appendChild(articleI);

    })
}

renderArticlePage();