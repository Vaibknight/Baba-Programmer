let mysqlArray = [
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

console.log(mysqlArray);

var sqlCourse = document.getElementById("sqlCourse");
console.log(sqlCourse);

for (var i in mysqlArray) {
  sqlCourse.innerHTML += `
        <li>
            <a>${mysqlArray[i]}</a>
        </li>
    `;
}
