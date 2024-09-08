function getAverage(scores) {
    let sum = 0;
  
    for (const score of scores) {
      sum = sum + score;
    }
    let average = sum / scores.length;
    return average;
  }
  function getGrade(score) {
    if (score >=100) {
        return "A++";
    } else if (score >= 90) {
        return "A";
    } else if (score >= 80) {
        return "B";
    } else if (score >= 70) {
        return "C";
    } else if (score >= 60) {
        return "D";
    } else {
        return "F";
    }
  }
  
  let getAverage2 = getAverage([100, 60, 90]);
  console.log(getAverage2)
  console.log(getGrade(getAverage2))