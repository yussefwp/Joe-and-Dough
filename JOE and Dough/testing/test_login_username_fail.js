//This works
var Nightmare = require('nightmare')
var nightmare = Nightmare({ show: true, waitTimeout: 30000 })
var name = 'obama@whitehouse.gov'
var pass = 'invalidpass'

nightmare

  .goto('http://proj-319-b1.cs.iastate.edu/create_user/login.html')
  .type('#user_email', name)
  .type('#user_pass', pass)
  .click('#submit')
  .wait(3000)

  //.wait(ms?)
  //looks at html code, goes to next available .then statement
  //send to
  .evaluate(function () { //you can put the logic here
    return document.querySelector('#incorrect_login');
  })
  .end()
  //allows to print results
  .then(function (result) {
    console.log('This works!')
})

  .catch(function (error) {
    console.error('Invalid cred:', error)
})
