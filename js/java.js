let javaArray = [
  "Basic of Java",
  "Class, Objects, and Types of Classes",
  "Packages in Java",
  "Data Types in Java",
  "Variables, Constraints, and Literals",
  "Methods in Java",
  "Constructor in Java",
  "Modifiers in Java",
  "Static Keyword",
  "Final Keyword",
  "Inner Class in Java",
  "Super and this keyword",
  "Encapsulation",
  "Inheritance",
  "Polymorphism",
  "Abstraction",
];

console.log(javaArray);

var javaCourse = document.getElementById("javaCourse");
console.log(javaCourse);

for (var i in javaArray) {
  javaCourse.innerHTML += `
        <li>
            <a>${javaArray[i]}</a>
        </li>
    `;
}
