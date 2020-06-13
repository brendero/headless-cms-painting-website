const express = require('express');
const epf = require('express-php-fpm').default;
const path = require('path');
const app = express();
const portNumber = process.env.PORT || 3500;
const host = '127.0.0.1';
const sourceDir = 'dist';

app.use(express.static(sourceDir));

app.get('/', (request, response) => {
	response.sendFile(path.resolve(__dirname, sourceDir, 'index.html'));
});

// app.get('/login';

app.listen(portNumber, host, () => {
	console.log(`Express web server started: http://localhost:${portNumber}`);
	console.log(`Serving content from /${sourceDir}/`);
});