let sassArray = [
  "Sass Tutorial",
  "Sass HOME",
  "Sass Intro",
  "Sass Installation",
  "Sass Variables",
  "Sass Nesting",
  "Sass @import",
  "Sass @mixin",
  "Sass @extend",
  "Sass String",
  "Sass Numeric",
  "Sass List",
  "Sass Map",
  "Sass Selector",
  "Sass Introspection",
  "Sass Color",
];

console.log(sassArray);

var sassCourse = document.getElementById("sassCourse");
console.log(sassCourse);

for (var i in sassArray) {
  sassCourse.innerHTML += `
        <li class="border-course list-none">
        
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${sassArray[i]}</a>
        </li>
    `;
}
