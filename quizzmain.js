//
  // main.js
  //
  
  let questionsData = [
    {
      text: "A quel vitesse se dégrade une canette de soda dans la nature ?",
      answers: [
        {
          text: "Jusqu'à 6 semaines",
          isCorrect: false
        },
        {
          text: "Jusqu'à 100 ans",
          isCorrect: true
        },
        {
          text: "Jusqu'à 8 mois",
          isCorrect: false
        },
        {
          text: "Jusqu'à 10 ans",
          isCorrect: false
        }
      ]
    },
    {
      text: "Quelle est la consommation d'eau pour une chasse d'eau tirée",
      answers: [
        {
          text: "Environ 12 litres",
          isCorrect: true
        },
        {
          text: "Environ 2 litres",
          isCorrect: false
        },
        {
          text: "Environ 6 litres",
          isCorrect: false
        },
        {
          text: "Environ 20 litres",
          isCorrect: false
        }
      ]
    },
    {
      text: "Quel est le secteur le plus émetteur de gaz à effet de serre ?",
      answers: [
        {
          text: "L'agriculture",
          isCorrect: false
        },
        {
          text: "L'agroalimentaire",
          isCorrect: false
        },
        {
          text: "Les transports",
          isCorrect: true
        },
        {
          text: "L'industrie minière",
          isCorrect: false
        }
      ]
    },
    {
      text: "Quelle est la quantité moyenne de papier utilisé par un employé de bureau en un an ? ",
      answers: [
        {
          text: "75 Kilos",
          isCorrect: true
        },
        {
          text: "10 Kilos",
          isCorrect: false
        },
        {
          text: "23 Kilos",
          isCorrect: false
        },
        {
          text: "47 Kilos",
          isCorrect: false
        }
      ]
    },
    {
      text: "Depuis 2010, quel pays est le premier producteur d'énergie éolienne ?",
      answers: [
        {
          text: "Chine",
          isCorrect: true
        },
        {
          text: "Allemagne",
          isCorrect: false
        },
        {
          text: "France",
          isCorrect: false
        },
        {
          text: "Russie",
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
        alert(`Merci d'avoir participé à notre quizz! \nVotre score final es de: ${score}/${questions.length}`);

      }, 100);
    }
  });
  
  console.log(questions, questionsData);