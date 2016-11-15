import './styles.scss';

if (document.querySelectorAll('a').length) {
    require.ensure([], () => {
        const Button = require('./Components/Button');
        const button = new Button('google.com');

        button.render('a');
    }, 'button');
}

if (document.querySelectorAll('h1').length) {
    require.ensure([], () => {
        const Header = require('./Components/Header');

        new Header().render('h1');
    }, 'header');
}


