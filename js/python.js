let pythonArray = [
  "Introduction to Python	Control Statements",
  "List, Ranges & Tuples in Python	Python Dictionaries and Sets",
  "Input and Output in Python	Python built in function",
  "Python Object Oriented	Exceptions",
  "Python Regular Expressions	Python Multithreaded Programming",
  "Using Databases in Python	Regular Expression",
  "Thread Essentials	Web Scraping in Python",
  "Data Science Using Python	Graphical User Interface",
  "Django Web Framework in Python	-",
];

console.log(pythonArray);

var pythonCourse = document.getElementById("pythonCourse");
console.log(pythonCourse);

for (var i in pythonArray) {
  pythonCourse.innerHTML += `
        <li class="border-course list-none">
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${pythonArray[i]}</a>
        </li>
    `;
}
