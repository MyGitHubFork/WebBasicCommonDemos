/*
 * @Author: huangchengdu
 * @Date:   2016-11-15 15:45:36
 * @Last Modified by:   huangchengdu
 * @Last Modified time: 2016-11-15 15:47:33
 */

function generateText() {
    var element = document.createElement('h2');
    element.innerHTML = "Hello h2 world";
    return element; 
}
module.exports = generateText;
