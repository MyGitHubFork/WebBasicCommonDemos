/*
 * @Author: huangchengdu
 * @Date:   2016-11-15 15:45:36
 * @Last Modified by:   huangchengdu
 * @Last Modified time: 2016-11-15 16:48:19
 */

// function generateText() {
//     var element = document.createElement('h2');
//     element.innerHTML = "Hello h2 world";
//     return element; 
// }
// module.exports = generateText;

//==========es6语法=================

export default function() {
    var element = document.createElement('h2');
    element.innerHTML = "Hello h2 world hahaha";
    return element;
}
