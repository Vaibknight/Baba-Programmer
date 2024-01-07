function B() {
  let pytonArray = [
    "Installing Anaconda",
    "Python Variables And Constants",
    "Python Class And Objects",
    "Python Array Implementation",
    "Python File Methods",
    "Python Keywords And Identifiers",
    "Python Tuples",
    "Python Sets",
    "Python Different Modules",
    "Python Directory And File Management System",
    "python dictionary",
    " Python Strings",
    "Python Data Type Conversion",
    "Python Numbers",
    "Python Namespace And Scope",
    "Python Global,Local And Nonlocal variables",
    "Python Global Keyword",
    "Python Iterators",
    "Python Iterations Using for",
    "Python Inheritance",
    "Python Multiple Inheritance",
    "Python Function Arguments",
    "Python Functions",
    "Python break statement",
    "Python continue statement",
    "Python Errors And Exceptions",
    "python Exceptions Try.except and finally",
    "Python User Defined Exception",
    "Python OOP Approach",
    "Python Nested Dictionary Implementation",
    "Python Operator Overloading",
    "Python Statements And Comments",
    "Python Pass Statement.",
    "Python Generators",
    "Python Decorators",
    "Python While Loop",
    "Use of if .elif and else",
    "Python Matrix Implementation",
    "Python Regular Expressions",
    "Python List Comprehension",
    "Python Recursion",
    "Python Input, Outpt And Import",
    "Python Read and Write Operations",
    "Python Different Looping Techniques",
    "Python Shallow Copy And Deep Copy",
    "python lamda functions",
    "PYTHON ASSERT",
    "Python @Property",
  ];

  let flaskArray = [
    "Flask Framework Overview.",
    "Flask Framework Environment",
    "Flask Framework Hello World",
    "Flask Framework Routing",
    "Flask Framework Variable rules",
    "Flask Framework URL Building",
    "HTTP Method Flask Framework",
    "Flask Framework Templates",
    "Flask Framework Static Files",
    "Flask Framework Request Object",
    "Flask Framework Request.from Object",
    "Flask Framework Cookies",
    "Flask Framework Session Object",
    "Flask Framework Redirects & Errors",
    "Flask Framework Message Flashing",
    "Flask Framework File Uploading",
    "Flask Framework Extensions",
    "Flask Framework Mail",
    "Flask Framework WTF Extension",
    "Flask Framework SQLite",
    "Flask Framework SQL Alchemy",
    "Flask Framework Deployment",
  ];

  A(pytonArray, flaskArray);
}

function A(a, b) {
  console.log(a);
  for (var i of a) {
    console.log(i);
    pythonCourse.innerHTML += `
    <li class="border-course list-none">
        
    <i class="fa fa-book" style="color:#022d5d;"></i>
    &nbsp;&nbsp;
        <a>${i}</a>
    </li>
    `;
  }

  for (var i of b) {
    console.log(i);
    flaskCourse.innerHTML += `
    <li class="border-course list-none">
        
    <i class="fa fa-book" style="color:#022d5d;"></i>
    &nbsp;&nbsp;
        <a>${i}</a>
    </li>
    `;
  }
}

B();
