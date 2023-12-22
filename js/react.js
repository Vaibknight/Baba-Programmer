let reactArray = [
  "React Tutorial",
  "React Home",
  "React Intro",
  "React Get Started",
  "React Upgrade",
  "React ES6",
  "React Render HTML",
  "React JSX",
  "React Components",
  "React Class",
  "React Props",
  "React Events",
  "React Conditionals",
  "React Lists",
  "React Forms",
  "React Router",
  "React Memo",
  "React CSS Styling",
  "React Sass Styling",
  "React Hooks",
  "useState",
  "useEffect",
  "useContext",
  "useRef",
  "useReducer",
  "useCallback",
  "useMemo",
  "Custom Hooks",
];

console.log(reactArray);

var reactCourse = document.getElementById("reactCourse");
console.log(reactCourse);

for (var i in reactArray) {
  reactCourse.innerHTML += `
        <li class="border-course list-none">
        
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${reactArray[i]}</a>
        </li>
    `;
}
