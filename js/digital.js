let digitalArray = [
  "Introduction to Digital Marketing",
  "Website Planning and Creation",
  "Search Engine Optimisation (SEO)",
  "Social Media Marketing",
  "Content Marketing & Strategy",
  "Web Analytics",
  "Digital Media Planning and Buying",
  "Web Remarketing",
  "Email Marketing",
  "Design Essentials",
  "Mobile Marketing",
  "E-Commerce Management",
  "Online Reputation Management",
  "Adsense, Blogging, and Affiliate Marketing",
  "Video Marketing",
  "Marketing Automation, Influencer & Podcast Marketing ",
];

console.log(digitalArray);

var phpSQlCourse = document.getElementById("digitalCourse");
console.log(digitalCourse);

for (var i in digitalArray) {
  digitalCourse.innerHTML += `
        <li class="border-course list-none">
        
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${digitalArray[i]}</a>
        </li>
    `;
}
