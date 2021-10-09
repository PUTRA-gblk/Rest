__path = process.cwd()

var express = require('express');
var router = express.Router();

router.get('/', (req, res) => {
    res.sendFile(__path + '/docs/home.html')
})

router.get('/docs', (req, res) => {
	res.sendFile(__path + '/docs/dashboard.html')
})

router.get('/docs/photooxy', (req, res) => {
	res.sendFile(__path + '/api/photooxy.html')
})

router.get('/docs/media', (req, res) => {
	res.sendFile(__path + '/api/media.html')
})

router.get('/docs/anime', (req, res) => {
	res.sendFile(__path + '/api/anime.html')
})

router.get('/docs/game', (req, res) => {
	res.sendFile(__path + '/api/game.html')
})

router.get('/docs/other', (req, res) => {
	res.sendFile(__path + '/api/other.html')
})

router.get('/docs/downloader', (req, res) => {
	res.sendFile(__path + '/api/downloader.html')
})

router.get('/docs/info', (req, res) => {
	res.sendFile(__path + '/api/info.html')
})

router.get('/docs/islami', (req, res) => {
 	res.sendFile(__path + '/api/islami.html')
})

router.get('/docs/fun', (req, res) => {
	res.sendFile(__path + '/api/fun.html')
})

router.get('/users/login', (req, res) => {
	res.sendFile(__path + '/docs/login.php')
})

router.get('/users/register', (req, res) => {
	res.sendFile(__path + '/docs/Register.php')
})

router.get('/config', (req, res) => {
    config = {
        status: true,
        result: {
            prefix : 'Multi Prefix',
            namabot: 'TOBI-BOT',
            namaowner: 'ekadanuarta',
            instagram: 'ekagans_02',
            github : 'https:\/\/github.com\/ekadanuarta',
        }
    }
    res.json(config)
})

module.exports = router
