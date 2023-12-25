let apiArray = [
  "Client-Server Architecture",
  "Presentation, Business and Database layers",
  "What is an API?",
  "What is API Testing?",
  "Difference between API testing and Unit testing",
  "Web services->an introduction",
  "HTTP Structure",
  "xml and JSON->an overview",
  "URI and URL",
  "Challenges of API Testing",
  "What to test for in API testing",
  "HTTP methods",
  "Status codes",
  "Example APIs",
  "Introduction to REST Web services.",
  "Difference between SOAP and REST Web services.",
  "Introduction to POSTMAN tool and installation.",
  "Creating requests in Postman.",
  "Creating collections in Postman.",
  "Understanding variables and environments in Postman.",
  "Authorization in POSTMAN",
  "Assertions/Test scripts in POSTMAN.",
  "Command line integration with Newman.",
  "Introduction to REST Web services.",
  "Difference between SOAP and REST Web services.",
  "Introduction to POSTMAN tool and installation.",
  "Creating requests in Postman.",
  "Creating collections in Postman.",
  "Understanding variables and environments in Postman.",
  "Authorization in POSTMAN",
  "Assertions/Test scripts in POSTMAN.",
  "Command line integration with Newman.",
  "Configure Eclipse with Rest-Assured",
  "REST API Test using Rest Assured",
  "Validate Response Status using Rest Assured",
  "Validate Response Header using Rest Assured",
  "Read JSON Response Body using Rest Assured",
];

console.log(apiArray);

var reactCourse = document.getElementById("apiCourse");
console.log(apiCourse);

for (var i in apiArray) {
  apiCourse.innerHTML += `
        <li class="border-course list-none">
        
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${apiArray[i]}</a>
        </li>
    `;
}
