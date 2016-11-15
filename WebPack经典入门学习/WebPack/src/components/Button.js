import $ from 'jquery';
import template from './Button.html';
import Mustache from 'mustache';
import './Button.scss';

export default class Button {
    constructor(link) {
        this.link = link;
    }

    onClick(event) {
        event.preventDefault();
        alert(this.link);
    }

    render(node) {
        const text = $(node).text();

        // Render our button
        $(node).html(
            Mustache.render(template, {
                text
            })
        );

        // Attach our listeners
        $('.button').click(this.onClick.bind(this));
    }
}
