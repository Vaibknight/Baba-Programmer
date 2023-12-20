let dataScienceArray = [
  "Introduction to Data Science",
  "Mathematical and Statistical Skills",
  "Machine Learning",
  "Artificial Intelligence",
  "Coding",
  "Applied Mathematics and Informatics",
  "Machine Learning Algorithms",
  "Data Warehousing",
  "Data Mining",
  "Data Visualization",
  "Cloud Computing",
  "Data Structures ",
  "Scientific Computing",
  "Scholastic Models",
  "Project Deployment Tools",
  "Predictive Analytics and Segmentation",
  "Exploratory Data Analysis",
];

console.log(dataScienceArray);

var dataScienceCourse = document.getElementById("dataScienceCourse");
console.log(dataScienceCourse);

for (var i in dataScienceArray) {
  dataScienceCourse.innerHTML += `
        <li>
            <a>${dataScienceArray[i]}</a>
        </li>
    `;
}
