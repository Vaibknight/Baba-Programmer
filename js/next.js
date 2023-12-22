let nextArray = [
  "Next.js Overview",
  "Next.js Environment Setup",
  "Next.js Features",
  "Next.js Pages",
  "Next.js Static File Serving",
  "Next.js Meta Data",
  "Next.js CSS Support",
  "Next.js Global CSS Support",
  "Next.js Pre-Rendering",
  "Next.js Routing",
  "Next.js Dynanic API Routes",
  "Next.js Imperitive Routing",
  "Next.js Shallow Routing",
  "Next.js API Routes",
  "Next.js API Routes",
  "Next.js API MiddleWares",
  "Next.js Response Helpers",
  "Next.js Miscellaneous",
  "Next.js Typescript",
  "Next.js Environment Variables",
  "Next.js Deployment",
  "Next.js CLI",
  "Next.js Useful Resources",
  "Next.js Quick Guide",
  "Next.js Useful Resources",
  "Next.js Discussion",
];

console.log(nextArray);

var nextjsCourse = document.getElementById("nextjsCourse");
console.log(nextjsCourse);

for (var i in nextArray) {
  nextjsCourse.innerHTML += `
        <li class="border-course list-none">
        
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${nextArray[i]}</a>
        </li>
    `;
}
