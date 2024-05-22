const progressBar = document.querySelector(".progress-bar");
const counter = document.querySelector("#counter");
const question = document.querySelector("#question");
const answers = document.querySelector("#answers");

const questions_json = JSON.parse(sessionStorage.getItem('questions'));
let current_num = parseInt(sessionStorage.getItem('current_num'));
const total_question = questions_json.length;

let interval;

const checkFinishQuiz = () => {
    if(current_num > total_question) {
        window.open(`/result/${parseInt(sessionStorage.getItem('test_id'))}`, "_self");
        sessionStorage.clear();
        return true;
    }
    return false;
}

const fireSwal = (answerState) => {
    return Swal.fire({
        title: answerState ? 'Hore, Benar!😆' : 'Yah, Salah😣',
        icon: answerState ? 'success' : 'error',
        timer: 1500,
        timerProgressBar: true,
        allowOutsideClick: false,
        allowEnterKey: false,
        allowEscapeKey: false,
        didOpen: () => {
            Swal.showLoading();
        },
    });
};

const fetchResult = async (answerObj) => {
    current_num++;
    sessionStorage.setItem('current_num', current_num);
    clearInterval(interval);

    const res = await fetch('/api/quiz', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(answerObj),
    })
        .then((response) => response.json());

    fireSwal(res.is_true)
        .then(() => {
            if(checkFinishQuiz()) return
            setQuizValue();
        });
}

const setTimer = () => {
    const timer = questions_json[current_num - 1]['duration'];
    let remaining = timer;
    let width = 100;

    counter.innerHTML = remaining;
    progressBar.style.width = `${width}%`;
    
    interval = setInterval(() => {
        remaining--;
        width = (remaining / timer) * 100;
        
        counter.innerHTML = remaining;
        progressBar.style.width = `${width}%`;
    
        if(remaining < 0) {
            clearInterval(interval);
            current_num++;
            sessionStorage.setItem('current_num', current_num);
            if(checkFinishQuiz()) return;
            setQuizValue();
        }
    }, 1000);
}

const setQuizValue = () => {
    question.innerHTML = questions_json[current_num - 1]['question'];
    
    answers.innerHTML = '';
    questions_json[current_num - 1].answers.forEach(answer => {
        const answerCol = document.createElement('div');
        const answerBtn = document.createElement('button');
        
        answerCol.classList.add('col-6', 'col-md-3', 'd-grid');
        answerBtn.classList.add('btn', 'btn-primary', 'btn-lg');
        
        answerBtn.innerHTML = answer.answer;
        answerBtn.onclick = () => {
            fetchResult({
                test_id: parseInt(sessionStorage.getItem('test_id')),
                question_id: questions_json[current_num - 1]['id'],
                answer_id: answer.id,
            });
        };
        answers.appendChild(answerCol).appendChild(answerBtn);
    });   
    setTimer();
}

setQuizValue();
