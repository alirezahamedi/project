const title = document.querySelector('title');
const newsName = document.querySelector('#news-name');
const newsDescription = document.querySelector('#news-description');
const newsNameParticipation = document.querySelector('#news-name-participation');
const newsQuestion1 = document.querySelector('#news-question-1');
const newsQuestion2 = document.querySelector('#news-question-2');
const newsQuestion3 = document.querySelector('#news-question-3');
const newsQuestion4 = document.querySelector('#news-question-4');
const newsAnswer1 = document.querySelector('#news-answer-1');
const newsAnswer2 = document.querySelector('#news-answer-2');
const newsAnswer3 = document.querySelector('#news-answer-3');
const newsAnswer4 = document.querySelector('#news-answer-4');
const newsAnswer5 = document.querySelector('#news-answer-5');
const newsAnswer6 = document.querySelector('#news-answer-6');
const newsAnswer7 = document.querySelector('#news-answer-7');
const newsAnswer8 = document.querySelector('#news-answer-8');
const newsAnswer9 = document.querySelector('#news-answer-9');

const newsId = location.hash.substring(1);

const getAPINews = (urlJson) => {
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

const newses = getAPINews('js/news.json');

const newsesFind = newses.find((item) => {
    return item.id === newsId;
})

if (newsesFind === undefined) {
    location.assign('./index.php');
}

title.innerText = newsesFind.name;

const renderUndefinedElement = (newsFindElement, element) => {
    if (newsFindElement !== undefined) {
        element.innerHTML = `${newsFindElement}`;
    } else {
        element.style.display = "none";
    }
}

renderUndefinedElement(newsesFind.name, newsName);
renderUndefinedElement(newsesFind.description, newsDescription);
renderUndefinedElement(newsesFind.nameParticipation, newsNameParticipation);
renderUndefinedElement(newsesFind.newsQuestion1, newsQuestion1);
renderUndefinedElement(newsesFind.newsQuestion2, newsQuestion2);
renderUndefinedElement(newsesFind.newsQuestion3, newsQuestion3);
renderUndefinedElement(newsesFind.newsQuestion4, newsQuestion4);
renderUndefinedElement(newsesFind.newsAnswer1, newsAnswer1);
renderUndefinedElement(newsesFind.newsAnswer2, newsAnswer2);
renderUndefinedElement(newsesFind.newsAnswer3, newsAnswer3);
renderUndefinedElement(newsesFind.newsAnswer4, newsAnswer4);
renderUndefinedElement(newsesFind.newsAnswer5, newsAnswer5);
renderUndefinedElement(newsesFind.newsAnswer6, newsAnswer6);
renderUndefinedElement(newsesFind.newsAnswer7, newsAnswer7);
renderUndefinedElement(newsesFind.newsAnswer8, newsAnswer8);
renderUndefinedElement(newsesFind.newsAnswer9, newsAnswer9);