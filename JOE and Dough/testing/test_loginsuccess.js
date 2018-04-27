//it works!
var Nightmare = require('nightmare')
var nightmare = Nightmare({ show: true, waitTimeout: 30000 })
var name = 'alvila@iastate.edu'
var pass = 'hello'
nightmare

  .goto('http://proj-319-b1.cs.iastate.edu/create_user/login.html')
  .type('#user_email', name)
  .type('#user_pass', pass)
  .click('#submit')
  .wait(3000)

  //.wait(ms?)
  //looks at html code, goes to next available .then statement
  //send to
  .evaluate(function () {
    return document.querySelector('#view_orders').innerHTML;
  })

  .end()

  //allows to print results
  .then(function (result) {
    console.log("User can successfully start a delivery!")
  })

  .catch(function (error) {

    console.error('Search failed:', error);

  })
