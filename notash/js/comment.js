const fName = document.querySelector('#f-name');
const email = document.querySelector('#email');
const comment = document.querySelector('#comment');

const spanSurveyFName = document.querySelector('#span-survey-f-name');
const spanSurveyEmail = document.querySelector('#span-survey-email');
const spanSurveyComment = document.querySelector('#span-survey-comment');

const validComment = () => {
    if (fName.value === null || fName.value === "") {
        spanSurveyFName.innerHTML = 'نام را وارد کنید *';
        spanSurveyEmail.innerHTML = '';
        spanSurveyComment.innerHTML = '';
        return false;
    } else if (email.value === null || email.value === "") {
        spanSurveyFName.innerHTML = '';
        spanSurveyEmail.innerHTML = 'ایمیل را وارد کنید *';
        spanSurveyComment.innerHTML = '';
        return false;
    } else if (comment.value === null || comment.value === "") {
        spanSurveyFName.innerHTML = '';
        spanSurveyEmail.innerHTML = '';
        spanSurveyComment.innerHTML = 'دیدگاه خود را وارد کنید *';
        return false;
    }
    // else {
    //     userComment.push({
    //         id: uuidv4(),
    //         name: fName.value,
    //         lessons: "",
    //         email: email.value,
    //         img: "",
    //         commentUser: comment.value,
    //         type: "hidden"
    //     })
    //     saveComment(userComment);
    // }
}