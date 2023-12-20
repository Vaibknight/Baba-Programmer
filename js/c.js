let cArray = [
  "Overview of C++",
  "Basics of C++",
  "Variables and Constants in C++",
  "Data Types and Literals in C++",
  "Operators in C++",
  "Input/Output in C++",
  "Control Statements in C++",
  "Functions in C++",
  "Pointers and References in C++",
  "Arrays in C++",
  "Strings in C++",
  "Structures and Union in C++",
  "Dynamic Memory Management in C++",
  "Object-Oriented Programming in C++",
  "Encapsulation and Abstraction in C++",
  "Polymorphism in C++",
  "Function Overloading in C++",
  "Operator Overloading in C++",
  "Inheritance in C++",
  "Virtual Functions in C++",
  "Exception Handling in C++",
  "Files and Streams in C++",
  "Templates in C++",
  "STL in C++",
  "Iterators in C++",
  "Preprocessors in C++",
  "Namespace in C++",
  "Advanced C++",
  "C vs C++",
  "C++ vs Java",
  "Competitive Programming in C++",
  "Interview Questions in C++",
];

console.log(cArray);

var cCourse = document.getElementById("cCourse");
console.log(cCourse);

for (var i in cArray) {
  cCourse.innerHTML += `
        <li>
            <a>${cArray[i]}</a>
        </li>
    `;
}
