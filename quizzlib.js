//
// lib/lib.js
//
var Question = function (questionObj) {
    this.value = {
      text: "Question",
      answers: []
    };
  
    this.selectedAnswer = null;
    this.html = null;
    this.questionText = null;
    this.questionAnswers = null;
    this.questionFeedback = null;
  
    this.value = Object.assign(this.value, questionObj);
  
    this.onQuestionAnswered = ({ detail }) => {
      this.selectedAnswer = {
        value: detail.answer,
        html: detail.answerHtml
      };
      this.update();
  
      document.dispatchEvent(
        new CustomEvent("question-answered", {
          detail: {
            question: this,
            answer: detail.answer
          }
        })
      );
    };
  
    this.create = function () {
      this.html = document.createElement("div");
      this.html.classList.add("question");
  
      this.questionText = document.createElement("h2");
      this.questionText.textContent = this.value.text;
  
      this.questionAnswers = document.createElement("div");
      this.questionAnswers.classList.add("answers");
  
      for (let i = 0; i < this.value.answers.length; i++) {
        const ansObj = this.value.answers[i];
        let answer = createAnswer(ansObj);
  
        answer.onclick = (ev) => {
          if (this.selectedAnswer !== null) {
            this.selectedAnswer.html.classList.remove("selected");
          }
  
          answer.classList.add("selected");
  
          this.html.dispatchEvent(
            new CustomEvent("question-answered", {
              detail: {
                answer: ansObj,
                answerHtml: answer
              }
            })
          );
        };
  
        this.questionAnswers.appendChild(answer);
      }
  
      this.questionFeedback = document.createElement("div");
      this.questionFeedback.classList.add("question-feedback");
  
      this.html.appendChild(this.questionText);
      this.html.appendChild(this.questionAnswers);
      this.html.appendChild(this.questionFeedback);
  
      this.html.addEventListener("question-answered", this.onQuestionAnswered);
  
      return this.html;
    };
  
    this.disable = function () {
      this.html.classList.add("disabled");
      this.html.onclick = (ev) => {
        ev.stopPropagation();
      };
  
      this.html.removeEventListener("question-answered", this.onQuestionAnswered);
  
      let answers = this.html.querySelectorAll(".answer");
      for (let i = 0; i < answers.length; i++) {
        let answer = answers[i];
        answer.onclick = null;
      }
    };
  
    this.remove = function () {
      let children = this.html.querySelectorAll("*");
      for (let i = 0; i < children.length; i++) {
        const child = children[i];
        this.html.removeChild(child);
      }
  
      this.html.removeEventListener("question-answered", this.onQuestionAnswered);
  
      this.html.parentNode.removeChild(this.html);
      this.html = null;
    };
  
    this.update = function () {
      let correctFeedback, incorrectFeedback;
      this.html = this.html || document.createElement("div");
  
      correctFeedback = "Nice! You got it right.";
      incorrectFeedback = "Oh! Not the correct answer.";
  
      if (this.selectedAnswer !== null) {
        if (this.selectedAnswer.value.isCorrect) {
          this.html.classList.add("correct");
          this.html.classList.remove("incorrect");
          this.questionFeedback.innerHTML = correctFeedback;
        } else {
          this.html.classList.add("incorrect");
          this.html.classList.remove("correct");
          this.questionFeedback.innerHTML = incorrectFeedback;
        }
      }
    };
  
    function createAnswer(obj) {
      this.value = {
        text: "Answer",
        isCorrect: false
      };
  
      this.value = Object.assign(this.value, obj);
  
      this.html = document.createElement("button");
      this.html.classList.add("answer");
  
      this.html.textContent = this.value.text;
  
      return this.html;
    }
};
  
