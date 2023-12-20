// Open Navbar

var navicon = document.querySelector(".navicon");
console.log(navbar);

navicon.onclick = function () {
  if (navbar.style.display == "block") {
    navbar.style.display = "none";
    navbar.style.transition = "all 0.3s";
  } else {
    navbar.style.display = "block";
  }
};

// Footer

// console.log(courseArr);

function footer(coursList, questionList, corporateList, courseLinkList) {
  // console.log(coursList);
  // console.log(courseLinkList);
  for (var i in coursList) {
    // console.log(courseArr[i]);

    courses.innerHTML += `
		  <li>
	  		<a href="${courseLinkList[i]}" class="text-none white">${coursList[i]}</a>
		  </li>
		`;
  }

  for (var i in questionList) {
    questions.innerHTML += `
		<li>
			<a>${questionList[i]}</a>
		</li>
	`;
  }

  for (var i in corporateList) {
    corporate.innerHTML += `
	<li>
		<a>${corporateList[i]}</a>
	</li>
`;
  }
}

function footerArray() {
  let courseArr = [
    "HTML AND HTML5",
    "CSS AND CSS3",
    "BOOTSTRAP4",
    "JAVASCRIPT",
    "JQUERY",
    "AJAX",
    "ANGULARJS",
    "REACTJS",
    "JSON",
    "C AND C++",
    "JAVA",
    "PHP AND MYSQL",
    "PYTHON",
    "SEO",
    "DIGITAL MARKETING",
    "DJANGO",
    "LARAVEL",
  ];

  let courseLink = [
    "HTML-course-in-bilaspur-chhattisgarh.php",
    "CSS-course-in-bilaspur-chhattisgarh.php",
    "bootstrap-course-in-bilaspur-chhattisgarh.php",
    "javascript-course-in-bilaspur-chhattisgarh.php",
    "jquery-course-in-bilaspur-chhattisgarh.php",
    "ajax-course-in-bilaspur-chhattisgarh.php",
    "angularjs-course-in-bilaspur-chhattisgarh.php",
    "reactjs-course-in-bilaspur-chhattisgarh.php",
    "json-course-in-bilaspur-chhattisgarh.php",
    "c++-course-in-bilaspur-chhattisgarh.php",
    "java-course-in-bilaspur-chhattisgarh.php",
    "php-and-mysql-course-in-bilaspur-chhattisgarh.php",
    "python-course-in-bilaspur-chhattisgarh.php",
    "seo-course-in-bilaspur-chhattisgarh.php",
    "digital-marketing-course-in-bilaspur-chhattisgarh.php",
    "django-course-in-bilaspur-chhattisgarh.php",
    "laravel-course-in-bilaspur-chhattisgarh.php",
  ];

  let QuestionsArray = [
    "HTML5 AND CSS3",
    "JAVASCRIPT",
    "JQUERY AND AJAX",
    "ANGULARJS",
    "REACT",
    "JSON",
    "C && C++",
    "JAVA",
    "PHP && MYSQL",
    "PYTHON",
    "SEO",
    "DIGITAL MARKETING",
    "DJANGO",
    "LARAVEL",
  ];

  let corporateArray = [
    "WEBSITE DEVELOPMENT",
    "E-COMMERCE WEBSITE DEVELOPMENT",
    "ANGULARJS DEVELOPMENT SERVICES",
    "OUR LIVE PROJECTS",
    "OUR PLACED STUDENTS",
  ];

  footer(courseArr, QuestionsArray, corporateArray, courseLink);
}

footerArray();

// Courses List
var proCourse = document.querySelector(".proCourse");
let arr = [
  {
    title: "Php and Mysql Course",
    img: "image/php.jpg",
    desc: "Learn to use PHP professionally, learning both Core PHP and Advance PHP.",
  },
  {
    title: "Python Course",
    img: "image/python.jpg",
    desc: "Learn to use Python professionally, learning both Python 2 and Python 3!",
  },
  {
    title: "Java Course",
    img: "image/java.jpg",
    desc: "Learn Java In This Course And Become a Computer Programmer.",
  },
  {
    title: "C and C++ Course",
    img: "image/C.jpg",
    desc: "Learn C and C++ In This Course And Become a Computer Programmer.",
  },
  {
    title: "HTML and HTML5 Course",
    img: "image/Html5.jpg",
    desc: "Learn to use Html professionally, learning both HTML and HTML5.",
  },
  {
    title: "Css and Css3",
    img: "image/css.jpg",
    desc: "Learn to use Css professionally, learning both Css and Css 3!",
  },
  {
    title: "Bootstrap",
    img: "image/bootstrap.jpg",
    desc: "Learn to use Bootstrap professionally, learning both Bootstrap3 and Bootstrap4",
  },
  {
    title: "JavaScript",
    img: "image/javascript.jpg",
    desc: "Learn to use Javascript professionally, learning both Javascript and Javascript6",
  },
  {
    title: "Jquery Course",
    img: "image/jquery.jpg",
    desc: "Learn to use Jquery professionally, learning both Jquery3.0.0 and Jquery3.3.1.",
  },
  {
    title: "AngularJs",
    img: "image/angularjs.jpg",
    desc: "Learn to use AngularJs professionally, learning AngularJs.Learn to use ReactJs professionally, learning ReactJs.",
  },
  {
    title: "ReactJs",
    img: "image/reactjs.jpg",
    desc: "Learn to use ReactJs professionally, learning ReactJs.",
  },
  {
    title: "Json",
    img: "image/json.jpg",
    desc: "Learn to use Json professionally, learning Json .",
  },
  {
    title: "Digital Marketing",
    img: "image/digital-marketing.jpg",
    desc: "Learn to use Digital Marketing professionally, learning SEO,SMM,PPC,Email Marketing",
  },
  {
    title: "Django",
    img: "image/django.jpg",
    desc: "Learn to use Django(Python framework) professionally.",
  },
  {
    title: "Laravel framework",
    img: "image/laravel.jpg",
    desc: "Learn to use Laravel Framework professionally.Laravel is a powerful MVC PHP framework.",
  },
  {
    title: "SEO",
    img: "image/seo.jpg",
    desc: "Learn to use SEO professionally, Start your SEO Business.",
  },
];

for (var i in arr) {
  //   console.log(arr[i]);
  proCourse.innerHTML += `
			<div class="margin-tb">
				<div  class="container-90">
						<div class="">
							<p class="text-center bg-white padding-tb">${arr[i].title}</p>
						</div>
						<div>
							<img src="${arr[i].img}" class="img">
						</div>
						<div class="padding-tb bg-white border-bottom">
							<p>${arr[i].desc}</p>
							<p class="text-blue">See Course Content</p>
						</div>
					</div>
			</div>
			
		`;
}
