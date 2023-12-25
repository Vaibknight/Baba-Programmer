let phpSqlArray = [
  "Introduction to PHP",
  "Decisions and loop",
  "Function",
  "Array",
  "Handling Html Form with Php",
  "Working with file and Directories",
  ". Session and Cookie",
  "Database Connectivity with MySql",
  "Exception Handling",
  "Manage Databases",
  "MySQL Table Types",
  "MySQL Data Types",
  "MySQL CREATE TABLE",
  "MySQL Primary Key",
  "MySQL Foreign Key",
  "MySQL Sequence",
  "MySQL INT Data Type",
  "MySQL DECIMAL Data Type",
  " MySQL DATE Data Type",
  " MySQL TIME Data Type",
  "MySQL DATETIME Data Type",
  "MySQL ALTER TABLE",
  "MySQL RENAME TABLE",
  "MySQL ADD COLUMN",
  "MySQL DROP TABLE",
  "MySQL Temporary Table",
];

console.log(phpSqlArray);

var phpSQlCourse = document.getElementById("phpSQlCourse");
console.log(phpSQlCourse);

for (var i in phpSqlArray) {
  phpSQlCourse.innerHTML += `
        <li class="border-course list-none">
        
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${phpSqlArray[i]}</a>
        </li>
    `;
}
