const express = require('express');
const epf = require('express-php-fpm').default;
const path = require('path');
const app = express();
const portNumber = 3000;
const sourceDir = 'dist';
const backendOptions = {
    documentRoot: path.resolve(__dirname, sourceDir, '/backend'),
    env: {},
    socketOption: { port: portNumber }
}

app.use(express.static(sourceDir));

app.get('*', (request, response) => {
	response.sendFile(path.resolve(__dirname, sourceDir, 'index.html'));
});

app.get('/login', epf(backendOptions));

app.listen(portNumber, () => {
	console.log(`Express web server started: http://localhost:${portNumber}`);
	console.log(`Serving content from /${sourceDir}/`);
});