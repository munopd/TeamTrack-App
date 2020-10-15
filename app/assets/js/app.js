var app = new Framework7();

var theme = 'ios';
if (location.href.indexOf('theme=md') >= 0) theme = 'md';
if (location.href.indexOf('theme=aurora') >= 0) theme = 'aurora';
var plugin = {
  params: {
    theme: theme,
    root: '#app',
  }
};
if (Framework7.use) Framework7.use(plugin);
else if (Framework7.Class && Framework7.Class.use) Framework7.Class.use(plugin);