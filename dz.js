var a;
a = 12;
var b;
b = 8;
var c;
c = a + b;
var d;
d = a * b;
console.log(c, d);

var a;
a = 9;
var b;
b = 8;
var c;
c = a * a + b * b;
console.log(c);

var a;
a = 5;
var b;
b = 7;
var c;
c = 9;
var d;
d = a + b + c / 3;
console.log(d);

var x;
x = 4;
var y;
y = 12;
var z;
z = 21;
var a;
a = x + 1 - 2 * (z - 2 * x + y);
console.log(a);

var a;
a = 50;
a /= 3;
console.log("</br>" + a);
a /= 5;
console.log("</br>" + a);

var a;
a = 50;
a = a / 100 * 30 + a;
console.log("</br>" + a);
a = 50;
a = a / 100 * 120 + a;
console.log("</br>" + a);

var a;
a = 284;
var b;
b = 160;
a = a / 100 * 40;
b = b / 100 * 84;
console.log("</br>" + a, "</br>" + b);
a = "358";
a = a[0] + a[1] + a[2];
console.log("</br>" + a);

var a;
a = "375";
var b;
b = 0;
console.log("</br>" + a[0], b, a[1]);
a = "456";
console.log("</br>" + a[2], a[1], a[0]);

var num;
num = 1;
if (num % 2 === 0) {
    console.log("Четное");
} else {
    console.log("Нечетное");
}