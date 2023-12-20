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
        <li>
            <a>${phpArray[i]}</a>
        </li>
    `;
}
