let eu = new WebSocket('wss://stream.binance.com:9443/ws/btceur@trade');
let stockPriceEUR = document.getElementById('euro');
let lastEUR = null;

eu.onmessage = (event) => {
    let stockObject = JSON.parse(event.data)
   let euro = parseFloat(stockObject.p).toFixed(2);
    stockPriceEUR.innerText = euro;
    stockPriceEUR.style.color = !lastEUR || lastEUR === euro ? 'black' : euro > lastEUR ?  'green' : 'red';

    lastEUR = euro;
};
