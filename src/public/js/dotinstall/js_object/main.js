'use strict';

{
    console.log('js_object');

    // 配列
    const scores = [80, 20, 34, 28, 30, 95, 10];
    console.log(scores);
    console.log(scores[1]);

    // scores[2] = 100;
    // console.log(scores);

    // 配列の要素数
    console.log(scores.length);

    // 配列の操作
    scores.push(55, 22, 40); // 配列の末尾に要素を複数入れる → 80, 20, 34, 28, 30, 95, 10, 55, 22, 40

    scores.pop(); // 配列の末尾の要素1つを削除
    scores.pop(); // 配列の末尾の要素1つを削除
    scores.pop(); // 配列の末尾の要素1つを削除
    scores.pop(); // 配列の末尾の要素1つを削除
    scores.pop(); // 配列の末尾の要素1つを削除
    scores.pop(); // 配列の末尾の要素1つを削除
    scores.pop(); // 配列の末尾の要素1つを削除
    scores.pop(); // 配列の末尾の要素1つを削除
    scores.pop(); // 配列の末尾の要素1つを削除 → 80

    scores.unshift(10, 20, 30, 40); // 配列の先頭に要素を複数入れる → 10, 20, 30, 40, 80
    scores.shift(); // 配列の先頭の要素1つを削除 → 20, 30, 40, 80

    scores.splice(2, 1, 50, 60, 70); // 先頭から3つ目の要素（インデックス2）を見つけ、インデックス2（1を指定しているところ）を削除、50, 60, 70を追加要素として入れる → 20, 30, 50, 60 ,70, 80

    // 配列のループ
    for (let i = 0; i < scores.length; i++) {
        console.log(`Score ${i}: ${scores[i]}`);
    }

    // スプレッド構文
    console.log('----------');
    const firstScores = [10, 46, 23];
    const endScores = [90, 65];
    const allScores = [...firstScores, ...endScores]; // スプレッド構文
    console.log(allScores);

    // function firstScoresSum(a, b, c) {
    //     return a + b + c;
    // }
    const firstScoresSum = (a, b, c) => a + b + c;
    console.log(`firstScoresSum: ${firstScoresSum(...firstScores)}`);

    // function endScoresSum(d, e) {
    //     return d + e;
    // }
    const endScoresSum = (d, e) => d + e;
    console.log(`endScoresSum: ${endScoresSum(...endScores)}`);

    // 分割代入
    console.log('----------');
    const test1Scores = [10, 20, 30, 40];
    const [a, b, c, d] = test1Scores;
    console.log(a);
    console.log(b);
    console.log(c);
    console.log(d);

    console.log('----------');
    const test2Scores = [50, 60, 70, 80, 90];
    const [e, f, ...others] = test2Scores;
    console.log(e);
    console.log(f);
    console.log(others);

    // 分割代入による値の交換
    let x = 150;
    let y = 300;

    [x, y] = [y, x];
    console.log(x);
    console.log(y);

    // forEachによるループ
    const test3Scores = [67, 30, 50, 19];
    // const test3ScoresDisplay = (score, index) => {
    //     console.log(`test3Score ${index}: ${score}`);
    // }
    // test3Scores.forEach(test3ScoresDisplay);
    test3Scores.forEach((score, index) => {
        console.log(`test3Score ${index}: ${score}`);
    });

    // map
    const prices = [140, 290, 610];
    // const updatePrices = prices.map((price) => {
    //     return price + 20;
    // });
    const updatePrices = prices.map(price => price + 20);
    console.log(updatePrices);

    // filter
    const numbers = [1, 4, 7, 8, 10];
    // const evenNumbers = numbers.filter((number) => {
    //     return number % 2 === 0 ? true : false;
    // });
    const evenNumbers = numbers.filter(number => number % 2 === 0);
    console.log(evenNumbers);
}
