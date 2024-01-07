// console.log(frontArray.course);
// console.log();
// console.log(frontArray);
// console.log(backArray);
import { frontArray } from "./fullstackArray.js";
console.log(frontArray);

var frontCourse = document.querySelector("#frontCourse");
console.log(frontCourse);

for (var i of frontArray) {
  // console.log(i);

  frontCourse.innerHTML += `

    <li class="border-course list-none">

    <i class="fa fa-book" style="color:#022d5d;"></i>
    &nbsp;&nbsp;
        <a>${i.name}</a>
    </li>
  `;

  for (var j of i.course) {
    // console.log(j);
    frontCourse.innerHTML += `
        <li class="">
            ${j}
        </li>
  `;
    // console.log(j);
  }
}
