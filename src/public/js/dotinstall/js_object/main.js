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

    // オブジェクト
    console.log('----------');
    const point = {
        x: 100,
        y: 180,
    };
    point.x = 120;
    point['y'] = 130;
    point.z = 250;
    delete point.y;

    const otherProps = {
        r: 4,
        color: 'red',
        ...point,
    };
    console.log(otherProps);

    console.log('----------');

    const {r, color, ...otherPoint} = otherProps;
    console.log(r);
    console.log(color);
    console.log(otherPoint);

    // Object.keys（オブジェクトのキーを取り出して、オブジェクトの値を取り出す）
    const testPoint = {
        a: 100,
        b: 180,
    };
    const keys = Object.keys(testPoint); // testPointsのキーが配列で出力
    keys.forEach(key => {
        console.log(`Key: ${key} Value: ${testPoint[key]}`); // オブジェクトのキー、値を表示
    })
    const testPoints = [
        {x: 30, y: 20},
        {x: 10, y: 50},
        {x: 40, y: 40},
    ];
    console.log(testPoints[1].y);

    // js変数の挙動（特に配列やオブジェクトなど）
    console.log('----------');
    let xx = 1;  let yy = xx; xx = 5;
    console.log(xx);
    console.log(yy);

    let xxx = [0, 0];
    let yyy = [...xxx]; // スプレッド演算子で配列の要素を展開
    xxx[0] = 5;

    console.log(xxx);
    console.log(yyy);

    // 文字列の操作（文字列の長さ、部分文字列取得（複数）、部分文字列取得（単数））
    console.log('----------');
    const str = 'hello';
    console.log(str.length); // 5
    console.log(str.substring(2, 5)); // llo
    console.log(str[1]); // e

    // 文字列の操作（配列の要素を1つの文字列に結合、1つの文字列を配列の要素（文字列＆数値）に分離）
    console.log('----------');

    const day = [2022, 6, 28];
    console.log(day.join('/')); // '/'で配列の要素を1つの文字列に結合
    console.log(day.join(''));

    const time = '2:15:20';
    console.log(time.split(':')); // ':'で文字列を分割して文字列要素の配列を作る
    const [hour, minute, second] = time.split(':'); // 文字列分割して文字列要素を持つ配列から分割代入でそれぞれの単体変数に値を入れる
    console.log(hour);
    console.log(minute);
    console.log(second);

    // 数値計算の操作
    console.log('----------');
    const baseballScores = [1, 2, 3, 2, 1, 2, 3, 2, 1];
    let baseballScoresSum = 0;

    baseballScores.forEach(baseballScore => {
        baseballScoresSum += baseballScore;
    })
    const baseballScoresAvg = baseballScoresSum / baseballScores.length;

    console.log(`baseballScoresSum: ${baseballScoresSum}`); // 17
    console.log(`baseballScoresAvg: ${baseballScoresAvg}`); // 1.8888888888888888

    console.log(Math.floor(baseballScoresAvg)); // 小数点切り捨て 1
    console.log(Math.ceil(baseballScoresAvg)); // 小数点切り上げ 2
    console.log(Math.round(baseballScoresAvg)); // 四捨五入 2
    console.log(baseballScoresAvg.toFixed(3)); // 四捨五入して小数点を3桁まで表示する

    console.log(Math.random()); // Mathランダム（0〜1のランダム数値を表示する）

    console.log(Math.floor(Math.random() * 6) + 1); // 0〜6までのランダム整数値を表示する

    // 現在の日時の扱い
    console.log('----------');
    const dateTime = new Date();
    console.log(dateTime);

    // 2022/06/28 3:22 現在
    console.log(dateTime.getFullYear()); // 2022
    console.log(dateTime.getMonth() + 1); // 6
    console.log(dateTime.getDate()); // 28
    console.log(dateTime.getDay()); // 2: Tuesday
    console.log(dateTime.getHours()); // 3
    console.log(dateTime.getMinutes()); // 22
    console.log(dateTime.getSeconds()); // 59
    console.log(dateTime.getMilliseconds()); // 926

    console.log(`${dateTime.getFullYear()}年${dateTime.getMonth() + 1}月${dateTime.getDate()}日`)

    console.log(dateTime.getTime()); // UTC 協定世界時

    // 特定の日時の扱い
    console.log('----------');
    const dateTime2 = new Date(2020, 10, 23, 20, 10, 30); // 2020/10/23 20:10:30
    dateTime2.setHours(23, 59, 59); // 2020/10/23 23:59:59
    dateTime2.setDate(dateTime2.getDate() + 3); // 取得日時から3日後を指定する
    console.log(dateTime2);

    // alert(), confirm()
    // alert('hello');

    // const answer = confirm('テスト：ダイアログが表示されましたか？');
    // answer ? console.log('確認ありがとうございます') : console.log('あれれ？表示されません？');

    // setInterval()
    console.log('----------');
    // let i = 1;
    // function showTime() {
    //     console.log(new Date());
    //     i > 2 ? clearInterval(intervalId) : i++;
    // }

    // const showTime = function () {
    //     console.log(new Date());
    //     i > 2 ? clearInterval(intervalId) : i++;
    // }

    // const showTime = () => {
    //     console.log(new Date());
    //     i > 2 ? clearInterval(intervalId) : i++;
    // }

    // const intervalId = setInterval(() => {
    //     console.log(new Date());
    //     i > 2 ? clearInterval(intervalId) : i++;
    // }, 1000);

    // setTimeout()
    // const ii = 1;
    // function showTime2() {
    //     console.log(new Date());
    //     const timeoutId = setTimeout(showTime2, 1000);
    //     ii++;
    //     if (ii > 2) clearTimeout(timeoutId);
    // }
    // showTime2();
}
