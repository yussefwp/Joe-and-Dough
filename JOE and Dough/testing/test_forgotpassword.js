//It works
var Nightmare = require('nightmare');
var nightmare = Nightmare({ show: true, waitTimeout: 30000 });
var email = 'anngould@iastate.edu'
var password = 'testing123'

nightmare
  .goto('http://proj-319-b1.cs.iastate.edu/create_user/login.html')
  .click('#fpass')
  .type('#user_email', email)
  .type('#user_pass', password)
  .type('#password2', password)
  .click('#submit')

  //.wait(ms?)
  //looks at html code, goes to next available .then statement
  //send to
  .evaluate(function () {
    return document.querySelector('#pass').innerHTML;
})

  .end()

  //allows to print results
  .then(function (result) {
    console.log("It works!");
  })

  .catch(function (error) {
    console.error('Search failed:', error);
  })
