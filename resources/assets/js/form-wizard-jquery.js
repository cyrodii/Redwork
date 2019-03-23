



var talk = 0;
var talkOutput = [
	/*[0]*/
    'So, you want to hire us?... All right then, let\'s start. ^1000',
    /*[1]*/
    'Testing 123'
];

var func = 0;
var functions = [];

  document.addEventListener("DOMContentLoaded", function(event) {
    var typed = new Typed('#quote--bot', {
        strings: talkOutput,
        typeSpeed: 60,
      });
  });