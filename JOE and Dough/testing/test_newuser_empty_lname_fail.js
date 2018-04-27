var Nightmare = require('nightmare');
var nightmare = Nightmare({
  show: true,
  waitTimeout: 30000
});
var fname = 'Bobby'
var lname = ' '
var email = 'alvila@iastate.edu'
var pass = 'hello'

nightmare

  .goto('http://proj-319-b1.cs.iastate.edu/create_user/new_user.html')
  .type('#fName', fname)
  .type('#lName', lname)
  .type('#user_email', email)
  .click('#sub')
  .wait(3000)

  //.wait(ms?)
  //looks at html code, goes to next available .then statement
  //send to
  .evaluate(function() {
    var elements = document.querySelectorAll("#form-signin input[type=text]")
    for (var i = 0, element; element = elements[i++];) {
      if (element.value != ""){
          return true;
        }
      }
  })

  .end()

  //allows to print results
  .then(function(result) {
    console.log("You left an empty field")
  })

  .catch(function(error) {
    console.error('Search failed:', error);
  });
