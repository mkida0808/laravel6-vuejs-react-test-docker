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
