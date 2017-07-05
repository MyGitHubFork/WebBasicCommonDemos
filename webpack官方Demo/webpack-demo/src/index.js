 import _ from 'lodash';
 import './style.less';
  import './style.css';

 function component() {
     var element = document.createElement('div');
     element.innerHTML = _.join(['Hello', 'webpack'], ' ');
     element.classList.add('hello');
     element.classList.add('lessFont');
     return element;
 }

 document.body.appendChild(component());
