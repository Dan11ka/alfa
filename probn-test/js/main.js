function check_answers() {
  var score = 0;
  var questions = document.querySelectorAll(".question");

  for (var i = 0; i < questions.length; i++) {
    var correctAnswers = 0;
    var selectedCorrectAnswers = 0;
    var selectedWrongAnswers = 0;
    var questionValue = 0;
    var inputs = questions[i].querySelectorAll("input[type='checkbox']");

    for (var j = 0; j < inputs.length; j++) {
      var input = inputs[j];
      var label = input.parentNode;

      if (input.classList.contains('green__input')) {
        correctAnswers += 1;
        questionValue = +input.value;
        label.style.color = 'green';
      }

      if (input.checked) {
        if (input.classList.contains('green__input')) {
          selectedCorrectAnswers += 1;
        } else if (input.classList.contains('red__input')) {
          label.style.color = 'red';
          selectedWrongAnswers += 1;
        }
      }
    }

    if (correctAnswers === 0 || (selectedCorrectAnswers === 0 && selectedWrongAnswers === 0) || (selectedCorrectAnswers > 0 && selectedWrongAnswers > 0)) {
      continue;
    }

    if (correctAnswers === 1 && selectedCorrectAnswers === 1 && selectedWrongAnswers === 0) {
      score += questionValue;
    } else {
      score += Math.min(1, selectedCorrectAnswers / correctAnswers) * questionValue;
    }
  }

  var scoreString = score.toString();
  if (scoreString.length > 3) {
    scoreString = scoreString.slice(0, 3);
  }
  score = Number(scoreString);

  document.getElementById('score').textContent =
    "Тест пройден! Правильных ответов " + score + " из " + questions.length + ".";
}