let jqueryArray = [
  "jQuery Introduction",
  "jQuery Get Started",
  "jQuery Syntax",
  "jQuery Selectors",
  "jQuery Event Methods",
  "jQuery Effects",
  "jQuery Effects - Hide and Show",
  "jQuery Effects - Fading",
  "jQuery Effects - Sliding",
  "jQuery slideDown",
  "jQuery slideUp",
  "jQuery slideToggle",
  "jQuery Effects - Animation",
  "jQuery Stop Animations",
  "jQuery Callback Functions",
  "jQuery - Chaining",
  "jQuery HTML",
  "jQuery - Get Content and Attributes",
  "Get Content - text(), html(), and val()",
  "jQuery - Add Elements:",
  "jQuery append() Method",
  "jQuery prepend() Method",
  "jQuery after() and before() Methods",
  "jQuery remove() Method",
  "jQuery empty() Method",
  "Query addClass() Method",
  "jQuery removeClass() Method",
  "jQuery toggleClass() Method",
  "jQuery css() Method",
  "jQuery - css() Method",
  "jQuery width() and height() Methods",
  "jQuery innerWidth() and innerHeight() Methods",
  "jQuery outerWidth() and outerHeight() Methods",
  "jQuery Traversing:",
  "jQuery add() Method",
  "jQuery children() Method",
  "jQuery closest() Method",
  "jQuery contents() Method",
  "jQuery each() Method",
  "jQuery eq() Method",
  "jQuery filter() Method",
  "jQuery find() Method",
  "jQuery first() Method",
  "jQuery has() Method",
  "jQuery last() Method",
  "jQuery next() Method",
  "jQuery nextAll() Method",
  "jQuery nextUntil() Method",
  "jQuery not() Method",
  "jQuery offsetParent() Method",
  "jQuery parent() Method",
  "jQuery parents() Method",
  "jQuery parentsUntil() Method",
  "jQuery prev() Method",
  "jQuery prevAll() Method",
  "jQuery siblings() Method",
  "jQuery slice() Method",
];

console.log(jqueryArray);

var jqueryCourse = document.getElementById("jqueryCourse");
console.log(jqueryCourse);

for (var i in jqueryArray) {
  jqueryCourse.innerHTML += `
        <li>
            <a>${jqueryArray[i]}</a>
        </li>
    `;
}
