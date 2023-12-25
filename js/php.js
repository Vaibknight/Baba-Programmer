let phpArray = [
  "Introduction to PHP",
  "Decisions and loop",
  "Function",
  "Array",
  "Handling Html Form with Php",
  "Working with file and Directories",
  ". Session and Cookie",
  "Database Connectivity with MySql",
  "Exception Handling",
];

console.log(phpArray);

var phpCourse = document.getElementById("phpCourse");
console.log(phpCourse);

for (var i in phpArray) {
  phpCourse.innerHTML += `
        <li class="border-course list-none">
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${phpArray[i]}</a>
        </li>
    `;
}
