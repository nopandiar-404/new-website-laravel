const app = document.getElementById("app");

const latestNewsOne = document.getElementById("latest-news-1").innerText;
const latestNewsTwo = document.getElementById("latest-news-2").innerText;
const latestNewsThree = document.getElementById("latest-news-3").innerText;
const latestNewsFour = document.getElementById("latest-news-4").innerText;
const latestNewsFive = document.getElementById("latest-news-5").innerText;

const latestNewsOneLink = document.getElementById("latest-news-1").href;
const latestNewsTwoLink = document.getElementById("latest-news-2").href;
const latestNewsThreeLink = document.getElementById("latest-news-3").href;
const latestNewsFourLink = document.getElementById("latest-news-4").href;
const latestNewsFiveLink = document.getElementById("latest-news-5").href;

const typewriter = new Typewriter(app, {
    loop: true,
    cursor: "",
    delay: "100",
});

typewriter
    .typeString(`<a href="${latestNewsOneLink}">${latestNewsOne}</a>`)
    .pauseFor(2000)
    .deleteAll()
    .typeString(`<a href="${latestNewsTwoLink}">${latestNewsTwo}</a>`)
    .pauseFor(2000)
    .deleteAll()
    .typeString(`<a href="${latestNewsThreeLink}">${latestNewsThree}</a>`)
    .pauseFor(2000)
    .deleteAll()
    .typeString(`<a href="${latestNewsFourLink}">${latestNewsFour}</a>`)
    .pauseFor(2000)
    .deleteAll()
    .typeString(`<a href="${latestNewsFiveLink}">${latestNewsFive}</a>`)
    .pauseFor(2000)
    .deleteAll()
    .start();
