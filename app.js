const express = require('express')
const app = express();
const port = 5000;

//static files
app.use(express.static('public'))


//Templating Engine
app.set('views','./src/views')
app.set('view engine','ejs')

//Routes 
const newsRouter = require('./src/routes/news')

app.use('/news', axios)

//Listen on port
app.listen (port,()=> console.log(`Listening on port ${port}`))