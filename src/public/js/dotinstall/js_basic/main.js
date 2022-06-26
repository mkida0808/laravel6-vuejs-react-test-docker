'use strict';

// 改行、タブ
console.log('Hello\n world from\t main.js!');

// 特殊記号は
console.log('it\'s me');

console.log(10 + 3); // 13
console.log(10 - 3); // 7
console.log(10 * 3); // 30
console.log(10 / 3); // 3.333...
console.log(10 % 3); // 1（割り算の余り）
console.log(10 ** 3); // 1000（累乗）
console.log(2 + 10 * 3); // 32
console.log((2 + 10) * 3); // 36

const price = 100;
console.log(price * 140);
console.log(price * 160);

console.log('------')
let price2 = 200;
console.log(price2 * 100);
console.log(price2 * 200);

price2 = 300;
console.log(price2 * 100);
console.log(price2 * 200);

console.log('------')
let price3 = 500;
price3 += 100; // 600
price3 *= 2; // 1200
price3++; // 1201
price3--; // 1200
console.log(price3);

console.log('------')
console.log(typeof 'hello'); // string
console.log(typeof 5); // number
console.log(typeof true); // boolean
console.log(typeof undefined); // undefined
console.log(typeof null); // null ※コンソール上ではobjectとなる

console.log('------')
console.log('5' * 3); // 15
console.log('5' - '3'); // 2
console.log('5' + 3); // 53（文字列連結になる）
console.log(parseInt('5', 10) + 3); // 8（数値文字列5を10進数の5に変換して3を加算する）
console.log(parseInt('hello', 10)); // Not a Number（数値文字列以外の文字列は数値に変換できない）

console.log('------')
const price4 = 1200;
console.log(price4 > 1000); // true
console.log(price4 < 1000); // false
console.log(price4 >= 1000); // true
console.log(price4 <= 1000); // false
console.log(price4 === 1000); // false
console.log(price4 !== 1000); // true

// 真偽の判定注意点
// false <- 0, null, undefined, '', false, NaN(Not a Number)
// true <- それ以外
console.log('------')
console.log(Boolean(0)); // false
console.log(Boolean(null)); // false
console.log(Boolean(undefined)); // false
console.log(Boolean('')); // false
console.log(Boolean(false)); // false
console.log(Boolean('hello')); // true

// 条件分岐
console.log('------');
const score = 70;

if (score >= 80) {
    console.log('Great!');
} else if (score >= 60) {
    console.log('Good.');
} else {
    console.log('OK...');
}

// 条件演算子
const score2 = 50;
score2 >= 60 ? console.log('Great!') : console.log('OK...');

// 条件演算子の中に比較演算子
console.log('------');
const score3 = 60;
const name = 'kida';
score3 >= 80 && name === 'kida' ? console.log('Great.') : console.log('Bad.');
score3 >= 80 || name === 'kida' ? console.log('Great.') : console.log('Bad.');
!(score3 >= 80 && name === 'kida') ? console.log('Great.') : console.log('Bad.');

// switch条件演算子
console.log('------');
const signal = 'pink';

switch (signal) {
    case 'red':
        console.log('stop!');
        break;
    case 'yellow':
        console.log('caution!');
        break;
    case 'blue':
    case 'green':
        console.log('Go!');
        break;
    default:
        console.log('Wrong signal!');
        break;
}

// ループ
console.log('------');
for (let i = 1; i <= 10; i++) {
    console.log(`${i}.hello`);
}

console.log('------');
let hp = 100;
while(hp > 0) {
    console.log(`${hp} HP left!`);
    hp -= 15;
}

let hp2 = -50;
do {
    console.log(`${hp2} HP left!`);
} while (hp2 > 0);

// ループの中で処理を止める、一部処理をスキップする
console.log('------');
for (let k = 0; k <= 10; k++) {
    if (k % 3 !== 0) continue; // 条件の処理だけ止める
    console.log(k);
}

console.log('------');
for (let kk = 0; kk <= 10; kk++) {
    if (kk === 5) break; // 条件で処理を止める
    console.log(kk);
}

// 関数
console.log('------');
function showAd(message = 'Ad Normal') {
    console.log(`${message}`);
}
showAd('Ad No.1');
showAd();
showAd('Ad No.3');

function calc(a, b) {
    return a + b;
}

const total = calc(1, 2) + calc(3, 4); // 10
console.log(total);

// 関数式（無名関数）
console.log('------');
const multi = function (c, d, e) {
    return c * d * e;
}

const total2 = multi (1, 2, 3) + multi (2, 2, 2); // 6 + 8 = 14
console.log(total2);

// アロー関数
console.log('------');
const sum2 = (f, g, h) => f + g + h;

const total3 = sum2 (1, 2, 3) + sum2 (2, 2, 2); // 6 + 8 = 14
console.log(total3);

console.log('------');
const sum3 = j => j * 2;
// const j = 10;
console.log(sum3(10));

