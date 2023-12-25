let jsonArray = [
  "JSON Intro",
  "JSON Syntax",
  "JSON vs XML",
  "JSON Data Types",
  "JSON Parse",
  "JSON Stringify",
  "JSON Objects",
  "JSON Arrays",
  "JSON Server",
  "JSON PHP",
  "JSON HTML",
  "JSON JSONP",
];

console.log(jsonArray);

var jsonCourse = document.getElementById("jsonCourse");
console.log(jsonCourse);

for (var i in jsonArray) {
  jsonCourse.innerHTML += `
        <li class="border-course list-none">
        
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${jsonArray[i]}</a>
        </li>
    `;
}
