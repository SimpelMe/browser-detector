// JavaScript code to detect browser
var browser;
var agent = navigator.userAgent.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
console.log(agent);
if (navigator.userAgent.match(/Trident.*rv[ :]*11\./i)) {
    browser = "msie";
} else if (navigator.userAgent.match(/Edg/i)) {
    browser = "edge";
} else if (navigator.userAgent.match(/Opera/i) || navigator.userAgent.match(/OPR/i)) {
    browser = "opera";
} else {
    browser = agent[1].toLowerCase();
}
console.log("Browser: " + browser);
if (document.getElementsByClassName(browser).length > 0)
    document.getElementsByClassName(browser)[0].classList.add('active'
);
var browsertext = document.querySelector("#browsertext");
browsertext.innerText = browser;
var agenttext = document.querySelector("#agent");
agenttext.innerText = navigator.userAgent;
