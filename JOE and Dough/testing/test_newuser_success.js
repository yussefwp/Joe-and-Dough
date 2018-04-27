var Nightmare = require('nightmare');
var nightmare = Nightmare({
  show: true,
  waitTimeout: 30000
});
var fname = 'Bobby'
var lname = 'Cornflakes'
var email = 'zippyraiden@gmail.com'
var pass = 'hello'

nightmare

  .goto('http://proj-319-b1.cs.iastate.edu/create_user/new_user.html')
  .type('#fName', fname)
  .type('#lName', lname)
  .type('#user_email', email)
  .type('#user_pass', pass)
  .check('#isdeliverer')
  .click('#sub')

  //.wait(ms?)
  //looks at html code, goes to next available .then statement
  //send to

  .end()

  //checks if the email given is valid
  .then(function(result) {
    var count = 0;
    for(var i = 0; i < email.length; i++){
      if(email[i] == '@'){
        count++
        }
      }
      if(count == 1){
        console.log("User can successfully create a new account")
      }
    })

  .catch(function(error) {
    console.error('Search failed:', error);
  })
