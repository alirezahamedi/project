const title = document.querySelector('title');
const imgCourse = document.querySelector('#img-courses');
const offerH2 = document.querySelector('#offer');
const h3Class = document.querySelector('#h3-class');
const h3Adjective = document.querySelector('#h3-adjective');
const h2Learn = document.querySelector('#h2-learn');
const pDescription = document.querySelector('#p-description');
const bAcademy = document.querySelector('#b-academy');
const h4RegisterHead = document.querySelector('#h4-register-head');
const h4CoursesHead = document.querySelector('#h4-courses-head');
const spanDescriptionCourses1 = document.querySelector('#span-description-courses-1');
const spanDescriptionCourses2 = document.querySelector('#span-description-courses-2');
const spanDescriptionCourses3 = document.querySelector('#span-description-courses-3');
const spanDescriptionCourses4 = document.querySelector('#span-description-courses-4');
const spanDescriptionCourses5 = document.querySelector('#span-description-courses-5');
const h3TitleCourses = document.querySelector('#h3-titles-courses');
const pTitleCourses1 = document.querySelector('#p-titles-courses-1');
const pTitleCourses2 = document.querySelector('#p-titles-courses-2');
const pTitleCourses3 = document.querySelector('#p-titles-courses-3');
const pTitleCourses4 = document.querySelector('#p-titles-courses-4');
const pTitleCourses5 = document.querySelector('#p-titles-courses-5');
const pTitleCourses6 = document.querySelector('#p-titles-courses-6');
const pTitleCourses7 = document.querySelector('#p-titles-courses-7');

const coursesId = location.hash.substring(1);

const getAPICoursesSingle = (urlJson) => {
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

const coursesSingle = getAPICoursesSingle('js/courses.json');

const coursesFind = coursesSingle.find((item) => {
    return item.id === coursesId;
})

if (coursesFind === undefined) {
    location.assign('./index.php');
}

title.innerText = coursesFind.nameCourses;

imgCourse.setAttribute('src', `./img/${coursesFind.img}.jpg`);
imgCourse.setAttribute('alt', `${coursesFind.img}`);

if (coursesFind.offer === undefined) {
    offerH2.style.display = 'none';
} else {
    offerH2.innerHTML = `${coursesFind.offer} تخفیف`;
}

h3Class.innerHTML = `برگزاری کلاس ${coursesFind.name} در آموزشگاه نوتاش`;

h3Adjective.innerHTML = `${coursesFind.adjective}`;

h2Learn.innerHTML = `${coursesFind.learn}`;

pDescription.innerHTML = `${coursesFind.description}`;

bAcademy.innerHTML = `آموزشگاه نوتاش با ارائه بهترین کیفیت آموزشی در کلاس آموزش ${coursesFind.name}`;

h4RegisterHead.innerHTML += ` ثبت نام دوره آموزش ${coursesFind.name}`;

h4CoursesHead.innerHTML += ` توضیحات دوره آموزش ${coursesFind.name}`;

const renderUndefinedElement = (articlesFindElement, element) => {
    if (articlesFindElement !== undefined) {
        element.innerHTML = `${articlesFindElement}`;
    } else {
        element.style.display = "none";
    }
}

renderUndefinedElement(coursesFind.descriptionCourses1, spanDescriptionCourses1);
renderUndefinedElement(coursesFind.descriptionCourses2, spanDescriptionCourses2);
renderUndefinedElement(coursesFind.descriptionCourses3, spanDescriptionCourses3);
renderUndefinedElement(coursesFind.descriptionCourses4, spanDescriptionCourses4);
renderUndefinedElement(coursesFind.descriptionCourses5, spanDescriptionCourses5);

h3TitleCourses.innerHTML = `در دوره ${coursesFind.name} فنی حرفه ای چه چیزهایی می‌آموزید؟`;

renderUndefinedElement(coursesFind.pLearnCourses1, pTitleCourses1);
renderUndefinedElement(coursesFind.pLearnCourses2, pTitleCourses2);
renderUndefinedElement(coursesFind.pLearnCourses3, pTitleCourses3);
renderUndefinedElement(coursesFind.pLearnCourses4, pTitleCourses4);
renderUndefinedElement(coursesFind.pLearnCourses5, pTitleCourses5);
renderUndefinedElement(coursesFind.pLearnCourses6, pTitleCourses6);
renderUndefinedElement(coursesFind.pLearnCourses7, pTitleCourses7);