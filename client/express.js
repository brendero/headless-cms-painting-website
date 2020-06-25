const express = require('express');
const epf = require('express-php-fpm').default;
const path = require('path');
const app = express();
const portNumber = process.env.PORT || 3500;
const sourceDir = 'dist';

app.use(express.static(sourceDir));

app.use((req, res, next) => {
	res.header("Access-Control-Allow-Origin", process.env.VUE_APP_API_URL);
})

app.get('/', (request, response) => {
	response.sendFile(path.resolve(__dirname, sourceDir, 'index.html'));
});

// app.get('/login', (req, res) => {
// 	res.status(301).redirect("https://live-kdr.pantheonsite.io/login")
// })

// app.get('/login';

app.listen(portNumber, () => {
	console.log(`Express web server started: ${portNumber}`);
	console.log(`Serving content from /${sourceDir}/`);
});