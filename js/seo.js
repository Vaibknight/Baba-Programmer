let seoArray = [
  {
    name: "Basics for SEO",
    course: [
      "What is Domain",
      "Basic Knowledge of World Wide Web",
      "Difference between Portal and Search Engines",
      "What is SEO",
      "Types of SEO Techniques",
      "Black hat techniques",
      "White Hat techniques",
      "How Search Engine works",
      "Page Speed",
      "Basics of search engine that includes crawling, indexing and caching. ",
    ],
  },
  {
    name: "SEO Research & Analysis",
    course: [
      "Market Research",
      "Keyword Research and Analysis",
      "Keyword opportunity",
      "Competitors Website Analysis",
      "SWOT Analysis of Website",
      "How to Choose Best Keywords",
      "Tools available for Keyword Research",
      "Search engine commands",
      "Search engine algorithms",
      "Website Design SEO Guid",
    ],
  },
  {
    name: "SEO Research & Analysis",
    course: [
      "Market Research",
      "Keyword Research and Analysis",
      "Keyword opportunity",
      "Competitors Website Analysis",
      "SWOT Analysis of Website",
      "How to Choose Best Keywords",
      "Tools available for Keyword Research",
      "Search engine commands",
      "Search engine algorithms",
    ],
  },
  {
    name: "Website Design SEO Guidelines",
    course: [
      "Content Research",
      "Content Guidelines",
      "Content Optimization",
      "Design & Layout",
      "XML Sitemap / URL List Sitemap",
      "Search engine friendly content development",
    ],
  },
  {
    name: "On-page Optimization",
    course: [
      "The Page Title",
      "Meta Descriptions & Meta Keywords",
      "Headings",
      "Bold Text",
      "Domain Names & Suggestions",
      "Canonical Tag",
      "Meta Tags",
      "Images and Alt Text",
      "Internal Link Building",
      "The Sitemap",
      "Invisible Text",
      "Server and Hosting Check",
      "Robots Meta Tag",
      " Doorway Pages",
      "301 Redirects",
      "404 Error",
      "Duplicate content",
      "PDF, PPT, MS-Word & Video Optimization",
    ],
  },
  {
    name: "Off-page Optimization",
    course: [
      "Page Rank",
      "Link Popularity",
      "Link Building in Detail",
      "Directory Submission",
      "Social Bookmark Submission",
      "Blog Submission",
      "Articles",
      "Links Exchange",
      "Reciprocal Linking",
      "Posting to Forums",
      "Submission to Search Engine",
      "RSS Feeds Submissions",
      "Press Release Submissions",
      "Forum Link Building",
      "Competitor Link Analysis",
    ],
  },
  {
    name: "Analytics",
    course: [
      "Google Analytics",
      "Installing Google Analytics",
      "How to Study Google Analytics",
      "Interpreting Bars & Figures",
      "How Google Analytics can Help SEO",
      "Advanced Reporting",
      "Webmaster Central & Bing/Yahoo",
      "Open Site Explorer",
      "Website Analysis using various SEO Tools available",
    ],
  },
  {
    name: "SEO Tool",
    course: [
      "Google Analytics",
      "Installing Google Analytics",
      "How to Study Google Analytics",
      "Interpreting Bars & Figures",
      "How Google Analytics can Help SEO",
      "Advanced Reporting",
      "Webmaster Central & Bing/Yahoo",
      "Open Site Explorer",
      "Website Analysis using various SEO Tools available",
    ],
  },
  {
    name: "SEO Reporting",
    course: [
      "Google analysis",
      "Tracking and Reporting",
      "Reports Submission",
      " Securing Ranks",
    ],
  },
];

console.log(seoArray);

for (var i of seoArray) {
  console.log(i);

  seoCourse.innerHTML += `

      <li class="border-course list-none">

      <i class="fa fa-book" style="color:#022d5d;"></i>
      &nbsp;&nbsp;
          <a>${i.name}</a>
      </li>
    `;

  for (var j of i.course) {
    console.log(j);
    seoCourse.innerHTML += `
          <li class="">
              ${j}
          </li>
    `;
    // console.log(j);
  }
}
