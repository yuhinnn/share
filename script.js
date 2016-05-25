var type = {
  king: 0, officer: 0, scholar: 0, craftsman: 0
};

function result() {
  var answer = checkAnswer();

  countType(answer);

  var max = getMax(answer);

  var result = getResult(max);

  showResult(result);
}

// 各回答をreturnAnswer配列に格納
function checkAnswer() {
  var total = document.shindan.length;
  var returnAnswer = [];
  for (var i = 0; i < total; i++) {
    if (document.shindan.elements[i].checked) {
      returnAnswer.push(document.shindan.elements[i].value);
    }
  }

  return returnAnswer;
}
// それぞれ数える
function countType(answer) {
  for (var i = 0; i < answer.length; i++) {
    if (answer[i] == 'king') {
      type.king++;
    } else if (answer[i] == 'officer') {
      type.officer++;
    } else if (answer[i] == 'scholar') {
      type.scholar++;
    } else if (answer[i] == 'craftsman') {
      type.craftsman++;
    } else {
      alert('error!!');
      break;
    }
  }
}


/*
 * 回答数が多いプロパティのキーを取りたい
 * 最大回答数の5から降ろしていく
 */
function getMax(answer) {
  for (var i = answer.length; i > 0; i--) {
    var returnMax = getKey(i);
    if (returnMax.length > 0) break;
  }

  return returnMax;
}
// 一致するバリューがあればキーを配列で返す
function getKey(value) {
  var returnKey = [];
  for (var key in type) {
    if (type.hasOwnProperty(key) && type[key] == value) returnKey.push(key);
  }

  return returnKey;
}

function getResult(max) {
  if (max.length == 1) {
    var returnResult = max[0];
  } else {
    returnResult = max[Math.floor(Math.random() * max.length)];
  }

  return returnResult;
}

// タイプごとにページを移動させる
function showResult(result) {
  if (result == 'king') {
    location.href = './king.html';
  } else if (result == 'officer') {
    location.href = './officer.html';
  } else if (result == 'scholar') {
    location.href = './scholar.html';
  } else if (result == 'craftsman') {
    location.href = './craftsman.html';
  } else {
    alert('error');
  }
}
