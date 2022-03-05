let ws = new WebSocket('wss://stream.binance.com:9443/ws/btcusdt@trade');
let stockPriceElement = document.getElementById('dollar');
let lastPrice = null;

ws.onmessage = (event) => {
    let stockObject = JSON.parse(event.data)
   let price = parseFloat(stockObject.p).toFixed(2);
    stockPriceElement.innerText = price;
    stockPriceElement.style.color = !lastPrice || lastPrice === price ? 'black' : price > lastPrice ?  'green' : 'red';

    lastPrice = price;
};


// var btcdollar = document.getElementById("dollar");
// var btceuro = document.getElementById("euro");
// var btcpounds = document.getElementById("pounds");

// var liveprice ={
//     "async" : true,
//     "scroosDomain" : true,
//     "url" : "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd%2Ceur%2Cgbp",
//     "method": "GET",
//     "headers" : {}
// }

// $.ajax(liveprice).done(function (response){
//     btcdollar.innerHTML = response.bitcoin.usd;
//     btceuro.innerHTML = response.bitcoin.eur;
//     btcpounds.innerHTML = response.bitcoin.gbp;
// });