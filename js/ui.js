let uiArray = [
  {
    name: "UI/UX Overview",
    course: [
      "Intro to UI/UX",

      "EX1: Good/Bad UX",

      "X-hour: Notion & Figma Setup",

      "Design Thinking",

      "HW1: Team Design Sprint",

      "Reading: Empathy Fieldguide",
    ],
  },
  {
    name: "User Research",
    course: [
      "How to identify stakeholders",

      "EX2: Defining Stakeholders",

      "X-hour: Figma Basics",

      "How to identify user needs",

      "User Research",

      "Reading: Interaction Design",
    ],
  },
  {
    name: "User Journeys",
    course: [
      "Mapping the user journey",

      "EX3: User Journey Maps + HMW ",

      "X-hour: Figma Grayscales",

      "Finding solutions & constraint cards",

      "HW3: Sketch + Revise",

      "Reading: Don’t Make Me Think",
    ],
  },
  {
    name: "Grayscales & User Testing ",
    course: [
      "UX Principles",

      "EX4: Blocking Grayscales + User Flow",

      "X-hour: Figma Prototype",

      "Understanding user testing",

      "HW4: Grayscales + Usability Testing",

      "Reading: Design of Everyday Things",
    ],
  },
  {
    name: "UI Principles",
    course: [
      "UI Principles",

      "EX5: UI Analysis",

      "X-hour: Figma UI Part 1",

      "Color and Font",

      "HW5: UI Design in 3 Sprints",

      "Reading: Refactoring UI",
    ],
  },
  {
    name: "Topics in UI",
    course: [
      "Non-Traditional UI",

      "EX6: Find UI in other Technologies",

      "X-hour: Figma UI Part 2",

      "UI Special Topics",

      "HW6: Create UI for other Technologies",

      "Reading: Creating UI Design",
    ],
  },
  {
    name: "Style Guide",
    course: [
      "UI Components",

      "EX7: Style Guide Analysis",

      "X-hour: Figma Advanced",

      "Responsive Design",

      "HW7: Style Guide for Responsive UI",

      "Reading: Visual Display of Information",
    ],
  },
];

console.log(uiArray);

var uiCourse = document.querySelector("#uiCourse");
console.log(uiCourse);

for (var i of uiArray) {
  // console.log(i);

  uiCourse.innerHTML += `

    <li class="border-course list-none">

    <i class="fa fa-book" style="color:#022d5d;"></i>
    &nbsp;&nbsp;
        <a>${i.name}</a>
    </li>
  `;

  for (var j of i.course) {
    // console.log(j);
    uiCourse.innerHTML += `
        <li class="">
            ${j}
        </li>
  `;
    // console.log(j);
  }
}
