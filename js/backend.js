import { frontArray, backArray } from "./fullstackArray.js";

console.log(backArray);

var backCourse = document.querySelector("#backCourse");
console.log(backCourse);

for (var i of backArray) {
  // console.log(i);

  backCourse.innerHTML += `

    <li class="border-course list-none">

    <i class="fa fa-book" style="color:#022d5d;"></i>
    &nbsp;&nbsp;
        <a>${i.name}</a>
    </li>
  `;

  for (var j of i.course) {
    // console.log(j);
    backCourse.innerHTML += `
        <li class="">
            ${j}
        </li>
  `;
    // console.log(j);
  }
}
