//Buggy
var Nightmare = require('nightmare');
var nightmare = Nightmare({ show: true, waitTimeout: 30000 });
var email = 'alvila@iastate.edu'
var password = 'hello123'
var name = 'Armando'
var shop = 'Starbucks'
var name = 'alvila@iastate.edu';
var pass = 'hello'


nightmare
  .goto('http://proj-319-b1.cs.iastate.edu/create_user/login.html')
  .type('#user_email', name)
  .type('#user_pass', pass)
  .click('#submit')
  .click('#start_delivery')
  .wait(3000)


  //.wait(ms?)
  //looks at html code, goes to next available .then statement
  //send to
  .evaluate(function () {
    return document.querySelector('#success')
})

  .end()

  //allows to print results
  .then(function (result) {
    console.log("It works!");
  })

  .catch(function (error) {
    console.error('Search failed:', error);
  });
