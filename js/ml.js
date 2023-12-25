let mlArray = [
  "Introduction, linear classification, perceptron update rule",
  "Perceptron convergence, generalization	",
  "Maximum margin classification",
  "Classification errors, regularization, logistic regression",
  "Linear regression, estimator bias and variance, active learning",
  "Active learning (cont.), non-linear predictions, kernals",
  "Kernal regression, kernels",
  "Support vector machine (SVM) and kernels, kernel optimization",
  "Model selection",
  "Model selection criteria",
  "Description length, feature selection",
  "Combining classifiers, boosting	",
  "Boosting, margin, and complexity	",
  "Margin and generalization, mixture models	",
  "Mixtures and the expectation maximization (EM) algorithm",
  "EM, regularization, clustering",
  "Clustering",
  "Spectral clustering, Markov models",
  "Hidden Markov models (HMMs)	",
  "HMMs (cont.)",
  "Bayesian networks",
  "Learning Bayesian networks",
  "Probabilistic inference",
];

console.log(mlArray);

var mlCourse = document.getElementById("mlCourse");
console.log(mlCourse);

for (var i in mlArray) {
  mlCourse.innerHTML += `
        <li class="border-course list-none">
        <i class="fa fa-book" style="color:#022d5d;"></i>
        &nbsp;&nbsp;
            <a>${mlArray[i]}</a>
        </li>
    `;
}
