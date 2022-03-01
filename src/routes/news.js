const express = require('express')
const newsRouter = express.Router()
const axios = require('axios')

// newsRouter.get('',async(req, res) =>{
//     // res.render('news')
//     try {
//         const newsAPI = await axios.get(`https://crypto-news5.p.rapidapi.com/`)
//         console.log(newsAPI.data)
//     } catch (error) {
        
//     }
// })

var axios = require("axios").default;

var options = {
  method: 'GET',
  url: 'https://crypto-news5.p.rapidapi.com/',
  headers: {
    'x-rapidapi-host': 'crypto-news5.p.rapidapi.com',
    'x-rapidapi-key': '24736236demshefa578f021de88ep126b89jsn2e4a4fb05a68'
  }
};

axios.request(options).then(function (response) {
	console.log(response.data);
}).catch(function (error) {
	console.error(error);
});

module.exports = axios