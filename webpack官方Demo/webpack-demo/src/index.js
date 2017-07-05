 import _ from 'lodash';
 import './style.less';
 import './style.css';
 import Icon from './icon.png';
 import Data from './data.xml';

 function component() {
     var element = document.createElement('div');

     // Lodash，现在由此脚本导入
     element.innerHTML = _.join(['Hello', 'webpack'], ' ');
     //添加样式表
     element.classList.add('hello');
     element.classList.add('lessFont');


     console.log(Data);
     alert(Data);

     // 将图像添加到我们现有的 div。
     // var myIcon = new Image();
     // myIcon.src = Icon;
     // element.appendChild(myIcon);

     return element;
 }

 document.body.appendChild(component());
