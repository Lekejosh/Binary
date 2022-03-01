// variables

const newsBtn = document.getElementById("financial-news");

const newsType = document.getElementById("newstype");
const newsDetails = document.getElementById("newsdetails");

var newsDataArr =[];

const API_KEY = "24736236demshefa578f021de88ep126b89jsn2e4a4fb05a68";
const cryptoNews ="https://crypto-news5.p.rapidapi.com/";



newsBtn.addEventListener("click",function(){
 fetchGeneralNews();
});

const fetchGeneralNews = async () => {
    // const response = await fetch(cryptoNews+API_KEY);

    // if(reponse.status >= 200 && reponse.status < 300) {
    //     const myjson = await response.json();
    //     newsDataArr =myjson

    // } else {
    //     console.log(response.status, response.statusText)
    // }
    fetch("https://twelve-data1.p.rapidapi.com/stocks?exchange=NASDAQ&format=json", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "twelve-data1.p.rapidapi.com",
		"x-rapidapi-key": "24736236demshefa578f021de88ep126b89jsn2e4a4fb05a68"
	}
})
.then(response => {
	console.log(response);
})
.catch(err => {
	console.error(err);
});
    displayNews();
}