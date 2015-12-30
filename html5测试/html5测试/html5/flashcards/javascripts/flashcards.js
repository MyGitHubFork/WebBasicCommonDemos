// TODO browser js registry
// TODO online editing of js and html


function matchingCards(origcards) {
  var cards = origcards.slice(0);
  var current;

  cards.sort(function() {return 0.5 - Math.random()});

  function get() {
    current = cards.pop();
    return current && current[1];
  } 

  function peek() {
    return current[0];
  }

  function test(answer) {
    if (answer == current[0]) {
      return true;
    }
    return false;
  }
  return {
    get: get,
    test: test,
    peek: peek
  };
}

var game = matchingCards(flashcards);

$(function () {
  var q = game.get();
  $("img").attr('src', 'db/' + q);
  $("body").delegate('form#flash', 'submit', function (ev) {
    ev.preventDefault();
    if (game.test($("#answer").val())) {
      q = game.get();
      if (undefined === q) {
        alert("And now for the next round...");
        game = matchingCards(flashcards);
        q = game.get();
      }
      $("img").attr('src', 'db/' + q);
      //$("img").hide();
      //$("img[src='" + 'db/' + q  + "']").show();
    } else {
      alert("Wrongo " + $("#answer").val() + ' ' + game.peek());
    }
    $("#answer").val('');
  });
});
