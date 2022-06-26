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
// false <- 0, null, undefined, '', false
// true <- それ以外
console.log('------')
console.log(Boolean(0)); // false
console.log(Boolean(null)); // false
console.log(Boolean(undefined)); // false
console.log(Boolean('')); // false
console.log(Boolean(false)); // false
console.log(Boolean('hello')); // true
