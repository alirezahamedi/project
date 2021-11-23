const getAPICoursesPage = (urlJson) => {
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

const coursesPage = getAPICoursesPage('js/courses.json');

const renderCourses = () => {
    const CoursesDiv = document.querySelector('#courses-content');
    CoursesDiv.innerHTML = '';
    coursesPage.forEach((item) => {
        const coursesItem = document.createElement('div');
        coursesItem.setAttribute('class', 'courses-item');

        const coursesInner = document.createElement('div');
        coursesInner.setAttribute('class', 'courses-inner');

        const coursesImg = document.createElement('img');
        coursesImg.setAttribute('src', `./img/${item.img}.jpg`);
        coursesImg.setAttribute('alt', `${item.img}`);

        const btnText = document.createElement('div');
        btnText.setAttribute('class', 'btn-text');

        const aBtn = document.createElement('a');
        aBtn.setAttribute('href', `./courses-single.php#${item.id}`);

        const btnTextFinal = document.createElement('button');
        btnTextFinal.innerHTML = `${item.nameCourses}`;

        const offerDIV = document.createElement('div');
        offerDIV.setAttribute('class', 'offer');
        offerDIV.innerHTML = `${item.offer} تخفیف`;

        coursesItem.appendChild(coursesInner);
        coursesInner.appendChild(coursesImg);
        coursesInner.appendChild(btnText);
        btnText.appendChild(aBtn);
        aBtn.appendChild(btnTextFinal);

        if (item.type === "fav") {
            CoursesDiv.appendChild(coursesItem);
        } else if (item.type === "offer") {
            coursesInner.setAttribute('class', 'discount-inner');

            CoursesDiv.appendChild(coursesItem);
            coursesInner.appendChild(coursesImg);
            coursesInner.appendChild(offerDIV);
            coursesInner.appendChild(btnText);
            btnText.appendChild(aBtn);
            aBtn.appendChild(btnTextFinal);
        }
    })
}

renderCourses();