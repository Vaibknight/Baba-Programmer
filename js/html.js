let htmlArray = [
  "Introduction",
  "HTML Elements",
  "HTML Attributes",
  "HTML Headings",
  "HTML Paragraphs",
  "HTML Formatting",
  "HTML Fonts",
  "HTML Links",
  "HTML Images",
  "HTML Tables",
  "HTML Lists",
  "HTML Forms",
  "HTML Frames",
  "HTML Iframes",
  "HTML Colors",
  "HTML Colornames",
  "HTML Colorvalues",
  "HTML Quick List",
  "HTML Layout",
  "HTML Doctypes",
  "HTML Head",
  "HTML Meta",
  "HTML Scripts",
  "HTML Entities",
  "HTML URLs",
  "HTML URL Encode",
  "HTML Media",
  "HTML Audio",
  "HTML Object",
  "HTML Video",
  "HTML YouTube",
  "HTML Media Tags",
  "HTML Summary",
  "HTML5 Introduction",
  "HTML5 New Elements",
  "HTML5 Form",
  "HTML5 Video",
  "HTML5 Video/DOM",
  "HTML5 Audio",
  "HTML5 Drag and Drop",
  "HTML5 Canvas",
  "HTML5 SVG",
  "HTML5 Canvas vs. SVG",
  "HTML5 Geolocation",
  "HTML5 Web Storage",
  "HTML5 App Cache",
  "HTML5 Web Workers",
  "HTML5 SSE",
];

console.log(htmlArray);

var htmlCourse = document.getElementById("htmlCourse");
console.log(htmlCourse);

for (var i in htmlArray) {
  htmlCourse.innerHTML += `
        <li class="border-course list-none">
        
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${htmlArray[i]}</a>
        </li>
    `;
}
