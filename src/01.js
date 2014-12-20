/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var foo = (function () {
    var privateVar = 10;
    return {
        publicFunc: function () {/*...*/},
        debug: function () {
            debugger;
        }
    };
}());

// ziemlich tricky
var a = 1;
function b() {
   // var a = 10  // local scope
    a = 10;
    return;
//    function c() {}  // macht irgendwas mit der variable a
}
b();
//alert(a);




