const getAPIArticleFooter = (urlJson) => {
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

const articleFooter = getAPIArticleFooter('js/article.json');

const renderFooterArticleTitle = () => {
    const sectionFooterArticle = document.querySelector('#section-footer-article');
    sectionFooterArticle.innerHTML = '';

    const sectionFooterArticleH3 = document.createElement('h3');
    sectionFooterArticleH3.innerHTML = 'نوشته های جدید';

    const sectionFooterArticleBr = document.createElement('br');

    const sectionFooterArticleHr = document.createElement('hr');
    sectionFooterArticleHr.setAttribute('class', 'hr');

    sectionFooterArticle.appendChild(sectionFooterArticleH3);
    sectionFooterArticle.appendChild(sectionFooterArticleBr);
    sectionFooterArticle.appendChild(sectionFooterArticleHr);

    articleFooter.forEach((item) => {
        const sectionFooterArticleA = document.createElement('a');
        sectionFooterArticleA.setAttribute('href', `./article-single.php#${item.id}`);
        sectionFooterArticleA.setAttribute('target', '_blank');
        sectionFooterArticleA.innerHTML = `${item.articleTitle}`;

        const sectionFooterArticleHr1 = document.createElement('hr');
        sectionFooterArticleHr1.setAttribute('class', 'hr-1');

        if (item.typeFooter === 'show') {
            sectionFooterArticle.appendChild(sectionFooterArticleA);
            sectionFooterArticle.appendChild(sectionFooterArticleHr1);
        }
    })
}

renderFooterArticleTitle();