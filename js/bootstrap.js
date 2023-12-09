var bootstrapArray = [
  "What is Bootstrap?",
  "Bootstrap Grids",
  "Bootstrap Text/Typography",
  "Bootstrap Tables",
  "Bootstrap Images",
  "Styling Fonts",
  "Styling Links",
  "Styling Lists",
  "Styling Tables",
  "CSS Box Model",
  "CSS Border",
  "CSS Outline",
  "CSS Margin",
  "CSS Padding",
  "CSS Advanced",
  "CSS Grouping/Nesting",
  "CSS Dimension",
  "CSS Display",
  "CSS Positioning",
  "CSS Floating",
  "CSS Align",
  "CSS Navigation Bar",
  "CSS Image Gallery",
  "CSS Image Opacity",
  "CSS Image Sprites",
  "CSS Media Types",
  "CSS hacking",
  "CSS Summary",
  "Border-radius",
  "Border-top-left-radius",
  "Border-top-right-radius",
  "Border-bottom-right-radius",
  "Border-bottom-left-radius",
  "Border-image",
  "Border-image-source",
  "Border-image-slice",
  "Border-image-width",
  "Border-image-outset",
  "Border-image-repeat",
  "Background-size",
  "Background-origin",
  "Background-clip",
  "Background-color",
  "Background-image",
  "Background-position",
  "Background-repeat",
  "Background-attachment",
  "Name Color",
  "RGBA color",
  "RGB color",
  "Hex Color",
  "HSL Color",
  "HSLA Color",
  "Opacity Color",
  "Linear Gradient-Top to Bottom",
  "Linear Gradient-Left to Right",
  "Linear Gradient-Diagonal",
  "Linear Gradient-Anglel",
  "Repeating a radial-gradient",
  "Text-shadow",
  "Box-shadow",
  "Text-overflow",
  "Word-wrap",
  "Word-break",
  "Writing-mode",
  "Text-align-last",
  "Text-justify",
  "Text_overflow",
  "@font-face",
  "Font-family",
  "Src",
  "Font-stretch",
  "Font-style",
  "Font-weight",
  "CSS 2D Transform:",
  "Translate()",
  "Rotate()",
  "Scale()",
  "SkewX()",
  "SkewY()",
  "Matrix()",
  "CSS 3D Transform:",
  "Transform",
  "Transform-origin",
  "Transform-style",
  "Perspective",
  "Perspective-Origin",
  "Backface-visibility",
  "RotateX()",
  "RotateY()",
  "RotateZ()",
  "Rotate3d(X,Y,Z,Angle)",
  "Translate3d(X,Y,Z,Angle)",
  "CSS Transitions:",
  "Transition",
  "Transition-delay",
  "Transition-duration",
  "Transition-property",
  "Transition-timing-function",
  "CSS Animation:",
  "@keyframes Rule",
  "Animation-duration",
  "Animation-Name",
  "Animation-Delay",
  "Animation-Direction",
  "Animation-Timing-Function",
  "Animation-Fill-Mode",
  "Animation-Play-State",
  "Animation-Iteration-Count",
  "Object-fit",
  "Column-Count",
  "Column-Gap",
  "Column-Rule",
  "Column-Rule-Color",
  "Column-Rule-Style",
  "Column-Rule-Width",
  "Column-Span",
  "Column-Width",
  "Columns",
  "CSS User Interface:",
  "Resize",
  "Outline-Offset",
  "CSS User Interface:",
  "Var() Function",
  "Var(Custom-name, value) Function",
  "Box-Sizing",
];

console.log(bootstrapArray);

var bootstrapCourse = document.getElementById("bootstrapCourse");
console.log(bootstrapCourse);

for (var i in bootstrapArray) {
  bootstrapCourse.innerHTML += `
    
        <li>
            <a>${bootstrapArray[i]}</a>
        </li>
    `;
}
