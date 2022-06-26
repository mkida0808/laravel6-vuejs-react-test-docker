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
}
