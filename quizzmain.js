//
  // main.js
  //
  
  let questionsData = [
    {
      text: "Channel name",
      answers: [
        {
          text: "Pewdipie",
          isCorrect: false
        },
        {
          text: "SmfCoder",
          isCorrect: true
        },
        {
          text: "Jack",
          isCorrect: false
        }
      ]
    },
    {
      text: "Channel goal",
      answers: [
        {
          text: "Help you become a better developer",
          isCorrect: true
        },
        {
          text: "Help you cook amazing cookies",
          isCorrect: false
        },
        {
          text: "Becoming an artist",
          isCorrect: false
        },
        {
          text: "Don't know",
          isCorrect: false
        }
      ]
    },
    {
      text: "Subscribe and ...",
      answers: [
        {
          text: "Watch all my videos",
          isCorrect: false
        },
        {
          text: 'Comment "I subscribed"',
          isCorrect: false
        },
        {
          text: "Active the notifications",
          isCorrect: true
        }
      ]
    },
    {
      text: "In witch year was the first version of c++ released",
      answers: [
        {
          text: "1982",
          isCorrect: true
        },
        {
          text: "1995",
          isCorrect: false
        },
        {
          text: "1983",
          isCorrect: false
        },
        {
          text: "1985",
          isCorrect: false
        }
      ]
    },
    {
      text: "What is France capital",
      answers: [
        {
          text: "Lyon",
          isCorrect: true
        },
        {
          text: "Marseille",
          isCorrect: false
        },
        {
          text: "Paris",
          isCorrect: true
        },
        {
          text: "Lille",
          isCorrect: false
        }
      ]
    }
  ];
  
  // variables initialization
  let questions = [];
  let score = 0,
    answeredQuestions = 0;
  let appContainer = document.getElementById("questions-container");
  let scoreContainer = document.getElementById("score-container");
  scoreContainer.innerHTML = `Score: ${score}/${questionsData.length}`;
  
  /**
   * Shuffles array in place. ES6 version
   * @param {Array} arr items An array containing the items.
   */
  function shuffle(arr) {
    for (let i = arr.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [arr[i], arr[j]] = [arr[j], arr[i]];
    }
  }
  
  shuffle(questionsData);
  
  // creating questions
  for (var i = 0; i < questionsData.length; i++) {
    let question = new Question({
      text: questionsData[i].text,
      answers: questionsData[i].answers
    });
  
    appContainer.appendChild(question.create());
    questions.push(question);
  }
  
  document.addEventListener("question-answered", ({ detail }) => {
    if (detail.answer.isCorrect) {
      score++;
    }
  
    answeredQuestions++;
    scoreContainer.innerHTML = `Score: ${score}/${questions.length}`;
    detail.question.disable();
  
    if (answeredQuestions == questions.length) {
      setTimeout(function () {
        alert(`Quiz completed! \nFinal score: ${score}/${questions.length}`);
      }, 100);
    }
  });
  
  console.log(questions, questionsData);