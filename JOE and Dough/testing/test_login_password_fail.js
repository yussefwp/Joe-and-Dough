//needs work
var Nightmare = require('nightmare');
var nightmare = Nightmare({ show: true, waitTimeout: 30000 });
var name = 'anngould@iastate.edu';
var pass = 'invalidpass';
nightmare

  .goto('file:///Users/armandovila/Dropbox/spring2018/SE319_PROJECT/B1/create_user/login.html')
  .type('#user_email', name)
  .type('#user_pass', pass)
  .click('#submit')

  //.wait(ms?)
  //looks at html code, goes to next available .then statement
  //send to
  .evaluate(function () {
    return document.querySelector('#incorrect_login')
  })
  .end()

  //allows to print results
  .then(function (result) {
    console.log('It works!')
})

  .catch(function (error) {
    console.error('Invalid cred:', error) //this is what we want
})
