let angularArray = [
  "AngularJS HOME",
  "AngularJS Intro",
  "AngularJS Expressions",
  "AngularJS Modules",
  "AngularJS Directives",
  "AngularJS Model",
  "AngularJS Data Binding",
  "AngularJS Controllers",
  "AngularJS Scopes",
  "AngularJS Filters",
  "AngularJS Services",
  "AngularJS Http",
  "AngularJS Tables",
  "AngularJS Select",
  "AngularJS SQL",
  "AngularJS DOM",
  "AngularJS Events",
  "AngularJS Forms",
  "AngularJS Validation",
  "AngularJS API",
  "AngularJS W3.CSS",
  "AngularJS Includes",
  "AngularJS Animations",
  "AngularJS Routing",
  "AngularJS Application",
];

console.log(angularArray);

var angularCourse = document.getElementById("angularCourse");
console.log(angularCourse);

for (var i in angularArray) {
  angularCourse.innerHTML += `
        <li class="border-course list-none">
        
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${angularArray[i]}</a>
        </li>
    `;
}
