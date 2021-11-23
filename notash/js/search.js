const getAPISearch = (urlJson) => {
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

const coursesSearch = getAPISearch('js/courses.json');

const searchElement = {
    searchItem: ''
}

const liveSearchElement = (searchObject, search) => {
    const searchFindElement = searchObject.filter((item) => {
        return item.name.toLowerCase().includes(search.searchItem.toLowerCase());
    })
    let count = 0;
    const liveSearch = document.querySelector('#live-search');
    const searchInput = document.querySelector("#search-box");
    const searchButton = document.querySelector("#search-button");
    liveSearch.innerHTML = '';
    if (searchFindElement.length === 0) {
        liveSearch.innerHTML = "";
        liveSearch.style.borderTop = "2px solid #222222";
        searchInput.style.borderRadius = "0 25px 0 0";
        searchButton.style.borderRadius = "25px 0 0 0";

        const noResultElement = document.createElement('p');
        noResultElement.setAttribute('class', 'no-result');
        noResultElement.innerText = 'نتیجه ای برای نمایش پیدا نشد!!';

        liveSearch.appendChild(noResultElement);
    } else {
        for (let i = 0; i <= searchFindElement.length; i++) {
            const aElement = document.createElement('a');
            aElement.setAttribute('href', `./courses-single.php#${searchFindElement[i].id}`);
            aElement.setAttribute('target', '_blank');

            const divResult = document.createElement('div');
            divResult.setAttribute('class', 'div-result');

            const imgResult = document.createElement('img');
            imgResult.setAttribute('src', `./img/${searchFindElement[i].img}.jpg`);
            imgResult.setAttribute('alt', `${searchFindElement[i].img}`);

            const divResult1 = document.createElement('div');
            divResult1.setAttribute('class', 'div-result-1');

            const pElement = document.createElement('p');
            pElement.setAttribute('class', 'result');
            pElement.innerHTML = `${searchFindElement[i].name}`;

            const spanElement = document.createElement('span');
            spanElement.innerHTML = `${searchFindElement[i].price}`;

            liveSearch.style.borderTop = "2px solid #222222";
            searchInput.style.borderRadius = "0 25px 0 0";
            searchButton.style.borderRadius = "25px 0 0 0";

            liveSearch.appendChild(aElement);
            aElement.appendChild(divResult);
            divResult.appendChild(imgResult);
            divResult.appendChild(divResult1);
            divResult1.appendChild(pElement);
            divResult1.appendChild(spanElement);

            if (search.searchItem === '') {
                liveSearch.innerHTML = '';
                liveSearch.style.borderTop = "none";
                searchInput.style.borderRadius = "0 25px 25px 0";
                searchButton.style.borderRadius = "25px 0 0 25px";
            }

            count++;
            if (count >= 4) {
                break;
            }
        }
    }
}

const searchBox = document.querySelector('#search-box');
searchBox.addEventListener('input', (e) => {
    searchElement.searchItem = e.target.value;
    liveSearchElement(coursesSearch, searchElement);
})